<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>عضویت</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="#">
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="152x152" href="#">
    <link rel="apple-touch-icon" sizes="167x167" href="#">
    <link rel="apple-touch-icon" sizes="180x180" href="#">

 @include('User.Layouts.head-tag')
   
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="background-shape"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 col-lg-8"><img class="big-logo" src="{{asset('AdminAssets/assets/images/register-form.png')}}" alt="">
            <!-- Register Form-->
            <div class="register-form mt-5">
              <form action="register" method="Post">
                @csrf
                <div class="form-group text-start mb-4"><span>نام کامل</span>
                  <label for="full_name"><i class="fa-solid fa-user"></i></label>
                  <input class="form-control" id="full_name" name="name" type="text" placeholder="نام و نام خانوادگی">

                @error('name')
                <span class="alert_required text-danger  rounded" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
                @enderror
                </div>




                <div class="form-group text-start mb-4"><span>ایمیل</span>
                  <label for="email"><i class=" fa fa-envelope"></i></label>
                  <input class="form-control" id="mobile" name="email" type="email" placeholder="name@mail.com">

                @error('email')
                <span class="alert_required text-danger  rounded" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
                @enderror
            </div>



                <div class="form-group text-start mb-4"><span>کلمه عبور</span>
                  <label for="password"><i class="fa-solid fa-key"></i></label>
                  <input class="input-psswd form-control" name="password" type="password" placeholder="کلمه عبور">

                @error('password')
                <span class="alert_required text-danger  rounded" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
                @enderror
            </div>



                <button class="btn btn-warning btn-lg w-100" type="submit">ثبت نام</button>
              </form>
            </div>

            @if (session('error'))
            <span class="alert_required text-danger rounded p-2" role="alert">
            <strong>
                {{ session('error') }}
            </strong>
            </span>     
            @endif

            <!-- Login Meta-->
            <div class="login-meta-data">
              <p class="mt-3 mb-0">در حال حاضر یک حساب کاربری دارید؟<a class="mx-1" href="{{route('loginForm')}}">ورود</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('User.Layouts.js')
  
  </body>

</html>