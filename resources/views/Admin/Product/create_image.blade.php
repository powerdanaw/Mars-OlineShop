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
    <form action="{{route('Admin.Product.saveimage' , $id)}} " method="post" enctype="multipart/form-data">
        @csrf
       
           
                <div class="card">
                    <div class="card-header py-3 bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold"> بارگذاری تصویر</h6>
                    </div>
                    <div class="card-body">
                        <input type="file" id="dropify-event" name="image">
                    </div>
                </div>
             
         
       
       
        <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task  w-100 w-sm-100">ذخیره</button>
    </form>
</div><!-- Row end  --> 

</div>
</div>    

@endsection