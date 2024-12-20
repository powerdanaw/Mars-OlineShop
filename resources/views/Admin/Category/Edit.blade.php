@extends('Admin.Layouts.master')

@section('content')


<div class="body d-flex py-3">

 
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">ویرایش دسته بندی ها</h3>
            </div>
        </div>
    </div> <!-- Row end  -->  
    <form action="{{route('Admin.Category.update' , $category->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row g-3 mb-3">

        <div class="col-lg-4 " >
            <div class="card pb-3" >
              
                <div class="card-body">
                    
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12 mb-12" >
                                <label  class="form-label">نام دسته بندی</label>
                                <input type="text" name="name" value="{{$category->name}}" class="form-control">
                            </div>
                           
                        </div>
                      
                </div>
            </div>
      
        </div>

        <div class="col-lg-4">
            <div class="sticky-lg-top">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom-0 d-flex justify-content-between">
                        <h6 class="m-0 fw-bold">بارگذاری تصویر</h6>
                            <img src="{{asset('AdminAssets/Category-Images/' . $category->image)}}" width="50" alt="">
                    </div>
                    <div class="card-body">
                        <small class="d-block text-muted mb-2">فقط تصویر مربع و ترجیها به صورت png .</small>
                        <input type="file" id="dropify-event" name="image">
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-lg-4  mb-3 ">
            <div class="sticky-lg-top">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom-0 d-flex justify-content-between">
                        <h6 class="m-0 fw-bold"> بارگذاری بنر مربوطه</h6>
                            <img src="{{asset('AdminAssets/Category-Baners/' . $category->baner)}}" width="50" alt="">

                    </div>
                    <div class="card-body">
                        <small class="d-block text-muted mb-2">فقط تصویر مستطیل  .</small>
                        <input type="file" id="dropify-event" name="baner">
                    </div>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task  w-100 w-sm-100">ذخیره</button>
    </form>
    </div><!-- Row end  --> 

</div
>
</div>    

@endsection