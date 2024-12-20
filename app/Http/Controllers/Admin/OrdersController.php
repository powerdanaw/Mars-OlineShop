<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Product;
use App\Models\User;
use App\Models\Baner;
use App\Models\Slider;
use App\Models\TextBaner;
use App\Models\Category;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class OrdersController extends Controller
{
    public function orders(){

        SEOMeta::setTitle('لیست سفارشات');
        $orders = Order::all();
        return view('Admin.orders.orders' , compact('orders'));
    }


    public function status($id){

        $order = Order::find($id);

        if($order->order_status == 1){
            $order->update([
                'order_status' => 2 ,
            ]);
            $order->save();
            Alert::success('موفقیت', 'وضعیت با موفقیت تغییر کرد');

        }
        elseif($order->order_status == 2){
            $order->update([
                'order_status' => 3 ,
            ]);
            $order->save();
            Alert::success('موفقیت', 'وضعیت با موفقیت تغییر کرد');

        }
        elseif($order->order_status == 3){
            $order->update([
                'order_status' => 4 ,
            ]);
            $order->save();
            Alert::success('موفقیت', 'وضعیت با موفقیت تغییر کرد');

        }
        elseif($order->order_status == 4){
            Alert::warning('هشدار', 'محصول با موفقیت تحویل داده شده است');

        }
        else{

            return back();
        }
        return redirect()->route('Admin.Order.orders');
    }


    public function details($id){

        SEOMeta::setTitle('جزئیات سفارش');
        $order = Order::find($id);
        return view('Admin.orders.order-details' , compact('order'));
    }
}
