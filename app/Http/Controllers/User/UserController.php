<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Baner;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use App\Models\Slider;
use App\Models\TextBaner;
use DB;
use Exception;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Evryn\LaravelToman\Facades\Toman;
use Evryn\LaravelToman\CallbackRequest;

class UserController extends Controller
{
    //Home Page
    public function home(){

        SEOMeta::setTitle('فروشگاه مریخ');

        $first_categories = Category::all()->first()->take(8)->get();
        $last_products = Product::orderBy('id', 'desc')->take(8)->get();
        $best_category = Category::where('status', 1)->first();
        $best_products = Product::where('cat_id', $best_category->id)->limit(6)->get();
        $products = Product::where('status', 1 )->first()->take(4)->get();
        $rand_products = Product::all()->random(6);
        $categories = Category::all();
        $sliders = Slider::all();
        $baner = Baner::all()->last();
        $Textbaner = TextBaner::all()->last();
        return view("User/home" , compact('first_categories' , 'last_products' , 'best_products' , 'products' , 'rand_products' , 'categories' , 'sliders' , 'baner' , 'Textbaner'));
      }

      //Product Page
      public function product($id){

        $product = Product::Find( $id );
        SEOMeta::setTitle($product->title);
        SEOMeta::setDescription($product->description);
        return view("User/singleproduct" , compact("product"));
    }

      //Category Page
    public function category($id){

        $category = Category::Find( $id );
        SEOMeta::setTitle($category->name);
        return view("User/singlecategory" , compact("category"));
    }

    //AddToCart Procces
    public function addtocart($id , Request $request){

        if(Auth::check()){

            $product = Product::find($id);
            if($request->number <= $product->inventory ){

                $inputs = $request->all();
                $inputs['user_id'] = Auth()->user()->id ;
                $inputs['product_id'] = $id ;
                CartItem::create($inputs);
                Alert::success('موفقیت', 'به سبد خرید اضافه شد');
                return back();
            }
            else{

                Alert::error('خطا', 'تعداد موجودی کالا کمتر از تعداد سفارش شماست' );
                return back();              
            }
        }
        else{
            return redirect()->route('loginForm')->with('error' , 'لطفا ابتدا وارد شوید');
        }
    }

    //CartItem Page
    public function CartItems(){

        SEOMeta::setTitle('سبد خرید');

        if(Auth::check()){

            $cartItems = Auth()->user()->carts;
            return view('User.cart-item' , compact('cartItems'));
        }
        else{
            return redirect()->route('loginForm')->with('error' , 'لطفا ابتدا وارد شوید');
        }
    }

    //DeleteCart Procces
    public function DeleteCart($id){

        if(Auth::check()){

            $cart = CartItem::Where('user_id' , Auth::user()->id)->where('product_id' , $id)->first();
                        
            if($cart){

                $cart->delete();
                Alert::success('محصول با موفقیت از سبد خرید حذف شد');
                return back();
            }
            return back();
        }
        else{
            return redirect()->route('loginForm')->with('error' , 'لطفا ابتدا وارد شوید');
        }
    }

    //Information Page
    public function information(){

        SEOMeta::setTitle('تکمیل اطلاعات');

        if(Auth::check()){

            return view('User.information');
        }
        else{

            return redirect()->route('loginForm')->with('error' , 'لطفا ابتدا وارد شوید');
        }
    }


    public function order(Request $request){

        if(Auth::check()){

            $inputs = $request->all();
            $inputs['user_id'] = Auth::user()->id ;
            $Finalprice = 0;
            $cartItems = Auth()->user()->carts;

            foreach ($cartItems as $cartItem) {
             $Finalprice += ($cartItem->product->price * $cartItem->number);
            }

            $inputs['price'] = $Finalprice ;
            $inputs['order_status'] = 0 ;  //به معنای ثبت شدن سفارش
            $order = Order::create($inputs);
            
            // $orderItems 
            foreach ($cartItems as $cartItem) {

                $orderItem['user_id'] = Auth::user()->id ; 
                $orderItem['product_id'] = $cartItem->product_id ; 

                if($cartItem->color !== Null){
                    $orderItem['color'] = $cartItem->color ; 
                }

                if($cartItem->size !== Null){
                    $orderItem['size'] = $cartItem->size ; 
                }

                $orderItem['number'] = $cartItem->number ; 
                $orderItem['order_id'] = $order->id ; 
                OrderItems::create($orderItem);
                $cartItem->delete();

                //کم کردن تعداد موجودی محصول
                $product = Product::find($cartItem->product_id);
                $New_inventory = $product->inventory - $cartItem->number ;
                $product->update([

                    'inventory' => $New_inventory ,
                ]);
                $product->save();
            }

            //Toman Package
            $request = Toman::amount($order->price)
            ->description('پرداخت برای انلاین شاپ مریخ')
            ->callback(route('callback'))
            ->mobile($order->mobile)
            ->request();

            if ($request->successful()) {
                
                return $request->pay(); 
            }

        }

            else{

                return redirect()->route('loginForm')->with('error' , 'لطفا ابتدا وارد شوید');
            }
    }

    //Callback
    public function callback(CallbackRequest $request)
    {

        $order = Order::where('user_id' , Auth::user()->id)->where('order_status' , 0)->orderBy('created_at', 'desc')->first();

        $payment = $request->amount($order->price)->verify();

        if ($payment->successful()) {
            $order->update([
                'order_status' => 1 ,
            ]);
            $order->save();
            $lastorder = Order::where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->first();
            Alert::success('موفقیت', 'سفارش شما با موفقیت ثبت شد');
            return view('User.my-order' , compact('lastorder'));

        }
        
        if ($payment->alreadyVerified()) {
            $order->update([
                'order_status' => 1 ,
            ]);
            $order->save();
            $lastorder = Order::where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->first();
            Alert::success('موفقیت', 'سفارش شما با موفقیت ثبت شد');
            return view('User.my-order' , compact('lastorder'));
        }
        
        if ($payment->failed()) {
            
            $order->update([
                'order_status' => 5 ,  //0=notPay  1=payed  2=readyForSend  3=post   4=send  5=noPay
            ]);
            $order->save();
            
            return view('User.error');

        }
    }


    public function myOrder(){

        if(Auth::check()){

        $lastorder = Order::where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->first();
        return view('User.my-order' , compact('lastorder'));
        }

        else{

            return redirect()->route('loginForm')->with('error' , 'لطفا ابتدا وارد شوید');
        }
    }


    public function payAgain($id){

        $order = Order::Find($id);

        $request = Toman::amount($order->price)
        ->description('پرداخت برای انلاین شاپ مریخ')
        ->callback(route('callbackAgain' , $id))
        ->mobile($order->mobile)
        ->request();
    
        if ($request->successful()) {
            return $request->pay(); 
        }

    }


    public function callbackAgain(CallbackRequest $request , $id)   {

        $order = Order::Find($id);
        $payment = $request->amount($order->price)->verify();

       if ($payment->successful()) {
           $order->update([
               'order_status' => 1 ,  //0=notPay  1=payed  2=readyForSend  3=pake   4=send  5=noPay
           ]);
           $order->save();
           $lastorder = Order::where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->first();

           Alert::success('موفقیت', 'سفارش شما با موفقیت ثبت شد');
           return view('User.my-order' , compact('lastorder'));
        }
       
       if ($payment->alreadyVerified()) {
           $order->update([
               'order_status' => 1 ,  //0=notPay  1=payed  2=readyForSend  3=pake   4=send  5=noPay
           ]);
           $order->save();
           $lastorder = Order::where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->first();

           Alert::success('موفقیت', 'سفارش شما با موفقیت ثبت شد');
           return view('User.my-order' , compact('lastorder'));
        }
       
       if ($payment->failed()) {
           
           $order->update([
               'order_status' => 5 ,  //0=notPay  1=payed  2=readyForSend  3=pake   4=send  5=noPay
           ]);
           $order->save();
           
           return view('User.error');
        }
    }



    public function search(Request $request){

        $products = Product::where('name' , 'like' , '%'.$request['search'].'%')->get();
        return view('User.products' , compact('products'));
    }
    
}
