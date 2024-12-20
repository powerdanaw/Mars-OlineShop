@extends('Admin.Layouts.master')

@section('content')

<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">افزودن محصولات</h3>
            </div>
        </div>
    </div> <!-- Row end  -->  
    <form action="{{route('Admin.Product.store')}}" method="post" enctype="multipart/form-data" id="my-form">
        @csrf
    <div class="row g-3 mb-3">
        <div class="col-xl-4 col-lg-4">
            <div class="sticky-lg-top">

              
              
               
                <div class="card mb-1">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">دسته بندی ها</h6>
                    </div>
                    <div class="card-body">
                        <label for="">انتخاب دسته</label>
                        <select name="cat_id" id="" class="form-control form-control-sm">
                            <option value="">دسته را انتخاب کنید</option>
                            @foreach ($categories as $category)

                            <option value="{{$category->id}}" >{{$category->name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                </div>
               
             
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card mb-3">
               
                <div class="card-body">
                    <form>
                        <div class="row g-3 align-items-center">

                        <div class="col-md-6">
                            <label  class="form-label">نام محصول </label>
                            <input type="text" name="name"  class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label  class="form-label">عنوان محصول </label>
                            <input type="text" name="title"  class="form-control">
                        </div>

                          
                        <div class="col-md-6">
                            <label  class="form-label">قیمت به تومان </label>
                            <input type="number"  name="price" class="form-control">
                        </div>
                       


                        

                          
                        <div class="col-md-6">
                            <label  class="form-label">تعداد موجودی  </label>
                            <input type="number"  name="inventory" class="form-control">
                        </div>
                       

                            <div class="col-md-12">
                                <label  class="form-label">توضیحات کوتاه درباره محصول</label>
                               <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         
            <div class="card mb-3">
                <div class="card-body">
                    
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">بارگذاری تصویر محصول</label>
                                <small class="d-block text-muted mb-2">فقط تصویر مربع</small>
                                <input type="file" id="input-file-to-destroy" name="image" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                            </div>
                        </div>
                        
                </div>
             
            </div>

       
            
            <button type="submit" class="btn btn-primary btn-set-task w-sm-100 w-100 py-2 px-5 text-uppercase">ذخیره</button>
          </form>
        </div>
    </div><!-- Row end  --> 
    
</div>  

@endsection


@section('js')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\Admin\ProductRequest', '#my-form') !!}

@endsection
