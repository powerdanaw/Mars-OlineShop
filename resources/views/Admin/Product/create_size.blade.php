@extends('Admin.Layouts.master')



@section('content')

<div class="body d-flex py-3">

 
    <div class="container-xxl">
    
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                </div>
            </div>
        </div> <!-- Row end  -->  
    <form action="{{route('Admin.Product.savesize' , $id)}} " method="post" enctype="multipart/form-data">
        @csrf
       
           
        <div class="col-md-6">
            <label  class="form-label">سایز برای محصول << {{$product->name}} >>
            </label>
            <input type="text" name="size"  class="form-control">
        </div>

       
       
        <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task  w-100 w-sm-100">ذخیره</button>
    </form>
</div><!-- Row end  --> 

</div>
</div>    

@endsection