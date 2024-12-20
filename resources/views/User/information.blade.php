@extends('User.Layouts.master')

@section('content')
    


<div class="page-content-wrapper">
    <div class="container">
      <!-- Profile Wrapper-->
      <div class="profile-wrapper-area py-3">
        <!-- User Information-->
        <div class="card user-info-card">
          
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
          <div class="card-body">
            <form action="{{route('order')}}" id="info-form" method="Post">
            @csrf
       <div class="mb-3">
                <div class="title mb-2"><i class="fa-solid fa-user"></i><span>نام کامل</span></div>
                <input class="form-control" name="name" type="text"  >
               
              </div>
             
            

              <div class="mb-3">
                <div class="title mb-2"><i class="fa-solid fa-phone"></i><span>تلفن</span></div>
                <input class="form-control" name="mobile" type="number">
               
              </div>


             
              <div class="mb-3">
                <div class="title mb-2"><i class="fa-solid fa-location-arrow"></i><span>آدرس حمل و نقل </span></div>
                <textarea  name="address" class="form-control" rows="5" ></textarea>
                
              </div>


              <div class="mb-4">
                <div class="title mb-2"><i class="fa-solid fa-location-arrow"></i><span>کد پستی</span></div>
                <input class="form-control" name="national_code" type="number" >
                
              </div>
              
              <button class="btn btn-success w-100" type="submit"> ثبت اطلاعات</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection


@section('js')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\User\InfoRequest', '#info-form') !!}

@endsection