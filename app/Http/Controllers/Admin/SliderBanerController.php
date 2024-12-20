<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Baner;
use App\Models\Slider;
use App\Models\TextBaner;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class SliderBanerController extends Controller
{
    public function Sliders(){

        SEOMeta::setTitle('لیست اسلایدرها');
        $sliders = Slider::all();
        return view("Admin.Slider-Baner.Sliders" , compact("sliders"));
    }


    public function create(){

        SEOMeta::setTitle('افزودن اسلاید');
        return view("Admin.Slider-Baner.AddSlider");
    }


    public function store(Request $request){
    
        //image
        if($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time(). '.' . $image->extension();
            $path = public_path('AdminAssets/Slider-Images');
            $imgFile =  Image::make($image->getRealPath());
            $imgFile->resize(900 , 400 ,function($constraint){
                $constraint->aspectRatio();
            })->save($path. '/' . $imagename);
        }

        $inputs = $request->all();
        $inputs['image'] = $imagename;
        Slider::create($inputs);
        Alert::success('موفقیت', 'اسلایدر با موفقیت ثبت شد');
        return redirect()->route('Admin.Slider.Sliders');
    }


    public function Delete($id){

        $slider = Slider::Find($id);

        //delete image
        $imagePath = 'AdminAssets/Slider-Images/' . $slider->image;
        if(File::exists($imagePath)){
            
            File::Delete($imagePath);
        }
        $slider->delete();
        Alert::success('موفقیت', 'اسلایدر با موفقیت حذف شد');
        return redirect()->route('Admin.Slider.Sliders');
    }


    //--------------------------Baners----------------------------

    public function Baners(){

        SEOMeta::setTitle('لیست بنرها');
        $baners = Baner::all();
        return view("Admin.Slider-Baner.Baners" , compact('baners') );
    }


    public function createBaner(){

        SEOMeta::setTitle('افزودن بنر');
        return view("Admin.Slider-Baner.AddBaner" );
    }


    public function storeBaner(Request $request){

        //image
        if($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time(). '.' . $image->extension();
            $path = public_path('AdminAssets/Baner-Images');
            $imgFile =  Image::make($image->getRealPath());
            $imgFile->resize(600 , 300 ,function($constraint){
                $constraint->aspectRatio();
            })->save($path. '/' . $imagename);
        }

        $inputs = $request->all();
        $inputs['image'] = $imagename;
        Baner::create($inputs);
        Alert::success('موفقیت', 'بنر با موفقیت ساخته شد');
        return redirect()->route('Admin.Baner.Baners');
    }


    public function DeleteBaner($id){

        $baner = Baner::Find($id);

        //delete image
        $imagePath = 'AdminAssets/Slider-Images/' . $baner->image;
        if(File::exists($imagePath)){
            File::Delete($imagePath);
        }
        $baner->delete();
        Alert::success('موفقیت', 'بنر با موفقیت حذف شد');
        return redirect()->route('Admin.Baner.Baners');
    }



     //------------------------- text baners --------------------///

    public function TextBaners(){

        SEOMeta::setTitle('لیست بنرهای متنی');
        $textbaners = TextBaner::all();
        return view("Admin.Slider-Baner.TextBaners" , compact('textbaners') );
    }


    public function createTextBaner(){

        SEOMeta::setTitle('افزودن بنر متنی');
        return view("Admin.Slider-Baner.AddTextBaner" );
    }


    public function storeTextBaner(Request $request){

        $inputs = $request->all();
        TextBaner::create( $inputs );
        Alert::success('موفقیت', 'بنر با موفقیت ساخته شد');
        return redirect()->route('Admin.TextBaner.TextBaners');
    }


    public function DeleteTextBaner($id){

        $baner =  TextBaner::Find($id);
        $baner->delete();
        Alert::success('موفقیت', 'بنر با موفقیت حذف شد');
        return redirect()->route('Admin.TextBaner.TextBaners');
    }
}
