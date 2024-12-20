@extends('Admin.Layouts.master')

@section('content')


<div class="body d-flex py-3">

 
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">افزودن اسلاید</h3>
            </div>
        </div>
    </div> <!-- Row end  -->  
    <form action="{{route('Admin.Slider.store')}}" method="post" enctype="multipart/form-data" id="my-form">
     @csrf
    <div class="row g-3 mb-3">

        <div class="col-lg-4 " >
            <div class="card pb-3" >
              
                <div class="card-body">
                    
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12 mb-12" >
                                <label  class="form-label">عنوان</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                           
                        </div>




                        <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12 mb-12" >
                                <label  class="form-label">متن روی اسلایدر</label>
                                <input type="text" name="body" class="form-control">
                            </div>
                           
                        </div>
                    </div>



                    <div class="card-body">

                        <div class="row g-3 align-items-center">
                            <div class="col-md-12 mb-12" >
                                <label  class="form-label">رنگ متن روی اسلایدر</label>
                                <input type="color" name="color" class="form-control">
                            </div>
                           
                        </div>
                    </div>



                    <div class="card pb-3" >

                    <div class="card-body">

                        <div class="row g-3 align-items-center">
                            <div class="col-md-12 mb-12" >
                                <label  class="form-label"> لینک دکمه</label>
                                <input type="text" name="url" class="form-control">
                            </div>
                           
                        </div>
                    </div>


                </div>
                      
                </div>
            </div>
      
        </div>

      
       
        <div class="col-lg-4  mb-3 ">
            <div class="sticky-lg-top">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold"> بارگذاری اسلاید مربوطه</h6>
                    </div>
                    <div class="card-body">
                        <small class="d-block text-muted mb-2">فقط تصویر مستطیل  .</small>
                        <input type="file" id="dropify-event" name="image">
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


@section('js')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\Admin\SliderRequest', '#my-form') !!}

@endsection