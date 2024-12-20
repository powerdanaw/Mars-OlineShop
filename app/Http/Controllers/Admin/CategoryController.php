<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function create(){

        SEOMeta::setTitle('افزودن دسته بندی');
        
        return view('Admin.Category.AddCategories');

    }


    public function store(Request $request){
    
        //Validate
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'baner' => 'required',
        ]);

        //image
        if($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time(). '.' . $image->extension();
            $path = public_path('AdminAssets/Category-Images');
            $imgFile =  Image::make($image->getRealPath());
            $imgFile->resize(200 , 200 ,function($constraint){
                $constraint->aspectRatio();
            })->save($path. '/' . $imagename);
    
        }

          //baner
          if($request->hasFile('baner')){

            $baner = $request->file('baner');
            $banername = time(). '.' . $baner->extension();
            $path = public_path('AdminAssets/Category-Baners');
            $imgFile =  Image::make($baner->getRealPath());
            $imgFile->resize(500 , 200 ,function($constraint){
                $constraint->aspectRatio();
            })->save($path. '/' . $banername);
    
        }

        $inputs['name'] =  $request->name ;
        $inputs['image'] =  $imagename;
        $inputs['baner'] =  $banername ;
        Category::create($inputs);

        Alert::success('موفقیت', 'دسته بندی با موفقیت ثبت شد');

        return redirect()->route('Admin.Category.Categories');
    }


    public function Categories(){

        SEOMeta::setTitle('دسته بندی ها');
        
        $categories = Category::all();
        return view('Admin.Category.Categories' , compact('categories'));
    }


    public function Edit($id){

        SEOMeta::setTitle('ویرایش دسته بندی');

        $category = Category::find($id);
        return view('Admin.Category.Edit' , compact('category'));
    }


    public function update(Request $request , $id){
    
        $category = Category::find($id);

        //Validate
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'baner' => 'required',
        ]);

        //image
        if($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time(). '.' . $image->extension();
            $path = public_path('AdminAssets/Category-Images');
            $imgFile =  Image::make($image->getRealPath());
            $imgFile->resize(200 , 200 ,function($constraint){
                $constraint->aspectRatio();
            })->save($path. '/' . $imagename);
    
        }

          //baner
          if($request->hasFile('baner')){

            $baner = $request->file('baner');
            $banername = time(). '.' . $baner->extension();
            $path = public_path('AdminAssets/Category-Baners');
            $imgFile =  Image::make($baner->getRealPath());
            $imgFile->resize(500 , 200 ,function($constraint){
                $constraint->aspectRatio();
            })->save($path. '/' . $banername);
    
        }

        $inputs['name'] =  $request->name ;
        $inputs['image'] =  $imagename;
        $inputs['baner'] =  $banername ;

        //delete image
        $imagePath = 'AdminAssets/Category-Images/' . $category->image;
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }

        //delete baner
        $banerPath = 'AdminAssets/Category-Baners/' . $category->baner;
        if(File::exists($banerPath)){
            File::delete($banerPath);
        }

        $category->update($inputs);

        Alert::success('موفقیت', 'دسته بندی با موفقیت ویرایش شد');

        return redirect()->route('Admin.Category.Categories');
    }


    public function Delete($id){

        $category = Category::find($id);


        //delete image
        $imagePath = 'AdminAssets/Category-Images/' . $category->image;
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }


        //delete baner
        $banerPath = 'AdminAssets/Category-Baners/' . $category->baner;
        if(File::exists($banerPath)){
            File::delete($banerPath);
        }


        $category->delete();

        Alert::success('موفقیت', 'دسته بندی با موفقیت حذف شد');

        return redirect()->route('Admin.Category.Categories');
    }


    public function Status($id){

        $category = Category::Find($id);

        if( $category->status  ==  0){

            $category->update(
                [  
                    $category['status'] = 1 ,
                ]
                );

                $category->save();

                Alert::success('موفقیت', 'دسته بندی با موفقیت ویژه شد');

             
        }
        else{


            $category->update(
                [  
                    $category['status'] = 0 ,
                ]
                );

                $category->save();

                Alert::success('موفقیت', 'دسته بندی با موفقیت از حالت ویژه خارج شد');

        }

        return redirect()->route('Admin.Category.Categories');
    }
}
