<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
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
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function users()
    {

        SEOMeta::setTitle('لیست مشتریان');
        $users = User::all();
        return view('Admin.users.users' , compact('users'));
    }


    public function index()
    {

        SEOMeta::setTitle('داشبورد');

        $price = 0 ;
        $all_orders = 0 ;
        $orders = Order::all();
        foreach($orders as $order){

            if($order->order_status == 4){

                $price += $order->price ;
            }
        }
        foreach($orders as $order){

            if($order->order_status !== 0 && $order->order_status !== 5 ){

                $all_orders += 1 ;
            }
        }
        $products = Product::all();
        $users = User::all();
        return view('Admin.index' , compact('price' , 'products' , 'users' , 'all_orders') );
    }
}
