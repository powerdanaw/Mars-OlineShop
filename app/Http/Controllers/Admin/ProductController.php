<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    
    public function create(){

        SEOMeta::setTitle('افزودن محصول');
        $categories = Category::all();
        return view('Admin/Product/AddProduct' , compact('categories'));
    }


    public function store(Request $request){

        $inputs = $request->all();

        //image
        if($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time(). '.' . $image->extension();
            $path = public_path('AdminAssets/Product-Images');
            $imgFile =  Image::make($image->getRealPath());
            $imgFile->resize(500 , 500 ,function($constraint){
                $constraint->aspectRatio();
            })->save($path. '/' . $imagename);
        }

        $inputs['image'] = $imagename;
        Product::create($inputs);
        Alert::success('موفقیت', ' محصول با موفقیت ثبت شد');
        return redirect()->route('Admin.Product.Products');
    }


    public function Products(){
    
        SEOMeta::setTitle('لیست محصولات');
        $products = Product::all();
        return view('Admin/Product/Products' , compact('products') );
     }


     public function Edit($id){

        SEOMeta::setTitle('ویرایش محصول');
        $categories = Category::all();
        $product = Product::find($id);
        return view('Admin.product.Edit' , compact('product' , 'categories'));
    }


    public function update(Request $request , $id){
    
        $product = Product::find($id);

        //delete old image
        $imagePath = 'AdminAssets/Product-Images/' . $product->image;
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }

        //request
        $inputs = $request->all();

        //save new image
        if($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time(). '.' . $image->extension();
            $path = public_path('AdminAssets/Product-Images');
            $imgFile =  Image::make($image->getRealPath());
            $imgFile->resize(200 , 200 ,function($constraint){
                $constraint->aspectRatio();
            })->save($path. '/' . $imagename);
        }

        $inputs['image'] = $imagename;
        $product->update($inputs);
        Alert::success('موفقیت', 'محصول با موفقیت ویرایش شد');
        return redirect()->route('Admin.Product.Products');
    }


    public function Delete($id){

        $product = Product::find($id);

        //delete image
        $imagePath = 'AdminAssets/Product-Images/' . $product->image;
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }

        $product->delete();
        Alert::success('موفقیت', 'محصول با موفقیت حذف شد');
        return redirect()->route('Admin.Product.Products');
    }


    public function Status($id){

        $product = Product::Find($id);
        if( $product->status  ==  0){
            $product->update(
                [  
                    $product['status'] = 1 ,
                ]
            );
            $product->save();
            Alert::success('موفقیت', 'محصول با موفقیت ویژه شد');
        }
        else{
            $product->update(
                [  
                    $product['status'] = 0 ,
                ]
            );
            $product->save();
            Alert::success('موفقیت', 'محصول با موفقیت از حالت ویژه خارج شد');
        }
        return redirect()->route('Admin.Product.Products');
    }


    public function images(Product $product){

        SEOMeta::setTitle('گالری تصاویر');
        return view('Admin/Product/images' , compact('product') );
    }


    public function Addimage($id){

        SEOMeta::setTitle('افزودن عکس جدید');
        return view('Admin/Product/create_image' , compact('id') );
    }


    public function saveimage($id , Request $request){

        $product = Product::find($id);
        //image
        if($request->hasFile('image')){
       
           $image = $request->file('image');
           $imagename = time(). '.' . $image->extension();
           $path = public_path('AdminAssets/Product-Images');
           $imgFile =  Image::make($image->getRealPath());
           $imgFile->resize(500 , 500 ,function($constraint){
               $constraint->aspectRatio();
           })->save($path. '/' . $imagename);
       }
       $inputs['image'] = $imagename ;
       $inputs['product_id'] = $id ;
       ProductImage::create($inputs);
       Alert::success('موفقیت', 'تصویر با موفقیت اضافه شد');
       return redirect()->route('Admin.Product.images' , compact('product') );
    }


    public function DeleteImg(Product $product , $id){

        $image = ProductImage::find($id);
        $imagePath = 'AdminAssets/Product-Images/' . $image->image;
        if(File::exists($imagePath)){
            File::Delete($imagePath);
        }
        $image->delete();
        Alert::success('موفقیت', 'تصویر با موفقیت حذف شد');
        return redirect()->route('Admin.Product.images' , compact('product') );
      }


      public function sizes(Product $product){

        SEOMeta::setTitle('سایزهای محصول');
        return view('Admin/Product/sizes' , compact('product') );
    }


    public function Addsize($id){

        SEOMeta::setTitle('افزودن سایز');
        $product = Product::find($id);
        return view('Admin/Product/create_size' , compact('id' , 'product') );
    }


    public function savesize( Request $request , $id){

        $inputs = $request->all();
        $inputs['product_id'] = $id ; 
        ProductSize::create($inputs);
        $product = Product::find($id);
        Alert::success('موفقیت', 'سایز با موفقیت اضافه شد');
        return redirect()->route('Admin.Product.sizes' , compact('product') );
    }


    public function DeleteSize(Product $product , $id){

        $size = ProductSize::find($id);
        $size->delete();
        Alert::success('موفقیت', 'سایز با موفقیت حذف شد');
        return redirect()->route('Admin.Product.sizes' , compact('product') );
      }


      public function colors(Product $product){

        SEOMeta::setTitle(' رنگ بندی های محصول');
        return view('Admin/Product/colors' , compact('product') );
    }
      
  

    public function Addcolor($id){

        SEOMeta::setTitle('افزودن رنگ بندی');
        $product = Product::find($id);
        return view('Admin/Product/create_color' , compact('id' , 'product') );
    }


    public function savecolor( Request $request , $id){

        $inputs = $request->all();
        $inputs['product_id'] = $id ; 
        ProductColor::create($inputs);
        $product = Product::find($id);
        Alert::success('موفقیت', 'رنگ بندی با موفقیت اضافه شد');
        return redirect()->route('Admin.Product.colors' , compact('product') );
    }
   

    public function DeleteColor(Product $product , $id){

        $color = ProductColor::find($id);
        $color->delete();
        Alert::success('موفقیت', 'رنگ بندی با موفقیت حذف شد');
        return redirect()->route('Admin.Product.colors' , compact('product') );
    }
  
}
