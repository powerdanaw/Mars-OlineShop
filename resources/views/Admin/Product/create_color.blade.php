@extends('Admin.Layouts.master')



@section('content')

<div class="body d-flex py-3">

 
    <div class="container-xxl">
    
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">رنگ برای محصول << {{$product->name}} >> </h3>

                </div>
            </div>
        </div> <!-- Row end  -->  
    <form action="{{route('Admin.Product.savecolor' , $id)}} " method="post" enctype="multipart/form-data">
        @csrf
       
           <div class="d-flex justify-content-between mb-3">
        <div class="col-md-5">
            
            <label  class="form-label" for="name">نام رنگ محصول </label>
            <input type="text" name="name" placeholder="مثلا قرمز" class="form-control mb-1">

         

        </div>
        <div class="col-md-5 ">
   
        <label  class="form-label" for="color"> رنگ محصول </label>
        <input type="color" name="color"  class="form-control">

    </div>
</div>
       
        <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task  w-100 w-sm-100">ذخیره</button>
    </form>
</div><!-- Row end  --> 

</div>
</div>    

@endsection