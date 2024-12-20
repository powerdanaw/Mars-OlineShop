@extends('Admin.Layouts.master')

@section('content')


<div class="body d-flex py-3">

 
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">افزودن بنر متنی</h3>
            </div>
        </div>
    </div> <!-- Row end  -->  
    <form action="{{route('Admin.TextBaner.store')}}" method="post">
     @csrf
    <div class="row g-3 mb-3">

        <div class="col-lg-4 " >
            <div class="card pb-3" >
              
                <div class="card-body">
                    
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12 mb-12" >
                                <label  class="form-label">عنوان بنر</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                           
                        </div>




                        <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12 mb-12" >
                                <label  class="form-label">متن روی بنر</label>
                                <input type="text" name="banner" class="form-control">
                            </div>
                           
                        </div>
                    </div>







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