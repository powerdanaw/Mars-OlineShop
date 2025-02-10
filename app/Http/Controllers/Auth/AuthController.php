<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;
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
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

         //------------------------- Register --------------------///

    public function registerForm(){

        SEOMeta::setTitle('صفحه ثبت نام');
        return view("Auth.register");
    }

    public function register(Request $request){

        //Validate
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

         // ایجاد کاربر جدید
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // هش کردن رمز عبور
        ]);

        // ورود خودکار کاربر
        Auth::login($user);

        return redirect()->route("home");

        // $emailuser = User::where('email', $request->email)->first();

        // if($emailuser == Null ){

        //     $inputs = $request->all();
        //     $user = User::create($inputs);
        //     Auth::login($user);
        //     return redirect()->route("home");
        // }
        // else{
        //     return redirect()->route('registerForm')->with('error','کاربری با این ایمیل از قبل وجود دارد');
        // }
    }

    //------------------------- Login --------------------///

    public function loginForm(){

        SEOMeta::setTitle('صفحه ورود');
        return view("Auth.login");
    }

    public function login(Request $request){

        //Validate
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
       
        $user = User::where('email' , $request->email)->where('password' , $request->password)->first();
       
        if($user){
            Auth::login($user);
            return redirect()->route("home");
        }
        else{
            return redirect()->route('loginForm')->with('error','اطلاعات وارد شده صحیح نمیباشد');
        }
    }


    //------------------------- LogOut --------------------///
    public function logout(){

        Auth::logout();
        return back();
    }
}
