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
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags -->
    <!-- Title -->
    <title>سفارشات من</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->


 @include('User.Layouts.head-tag')
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
        <!-- Back Button-->
        <div class="back-button me-2"><a href="{{route('home')}}"><i class="fa-solid fa-arrow-right-long"></i></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">وضعیت سفارش</h6>
        </div>
        <!-- Navbar Toggler-->
       
      </div>
    </div>

@if($lastorder)






@if($lastorder->order_status  == 1)

    <div class="my-order-wrapper" style="background-image: url({{asset('UserAssets/img/bg-img/21.jpg')}})">
      <div class="container">
        <div class="card">
          <div class="card-body p-4">
            <!-- Single Order Status-->
            <div class="single-order-status active">
              <div class="order-icon"><i class="fa-solid fa-bag-shopping"></i></div>
              <div class="order-text">
                <h6>سفارش ثبت شد</h6>
              </div>
              <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
            </div>
            <!-- Single Order Status-->
            <div class="single-order-status ">
              <div class="order-icon"><i class="fa-solid fa-box-open"></i></div>
              <div class="order-text">
                <h6>بسته بندی محصول</h6>
              </div>
              <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
            </div>
            <!-- Single Order Status-->
            <div class="single-order-status ">
              <div class="order-icon"><i class="fa-solid fa-truck"></i></div>
              <div class="order-text">
                <h6>آماده برای حمل</h6>
              </div>
              <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
            </div>
            <!-- Single Order Status-->
            <div class="single-order-status">
              <div class="order-icon"><i class="fa-solid fa-truck-fast"></i></div>
              <div class="order-text">
                <h6>در راه</h6>
              </div>
              <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
            </div>
            <!-- Single Order Status-->
            <div class="single-order-status">
              <div class="order-icon"><i class="fa-solid fa-heart-circle-check"></i></div>
              <div class="order-text">
                <h6>تحویل داده شده</h6>
              </div>
              <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>


@elseif($lastorder->order_status  == 2)

<div class="my-order-wrapper" style="background-image: url({{asset('UserAssets/img/bg-img/21.jpg')}})">
  <div class="container">
    <div class="card">
      <div class="card-body p-4">
        <!-- Single Order Status-->
        <div class="single-order-status active">
          <div class="order-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <div class="order-text">
            <h6>سفارش ثبت شد</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status active">
          <div class="order-icon"><i class="fa-solid fa-box-open"></i></div>
          <div class="order-text">
            <h6>بسته بندی محصول</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status active ">
          <div class="order-icon"><i class="fa-solid fa-truck"></i></div>
          <div class="order-text">
            <h6>آماده برای حمل</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status">
          <div class="order-icon"><i class="fa-solid fa-truck-fast"></i></div>
          <div class="order-text">
            <h6>در راه</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status">
          <div class="order-icon"><i class="fa-solid fa-heart-circle-check"></i></div>
          <div class="order-text">
            <h6>تحویل داده شده</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>


@elseif($lastorder->order_status  == 3)

<div class="my-order-wrapper" style="background-image: url({{asset('UserAssets/img/bg-img/21.jpg')}})">
  <div class="container">
    <div class="card">
      <div class="card-body p-4">
        <!-- Single Order Status-->
        <div class="single-order-status active">
          <div class="order-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <div class="order-text">
            <h6>سفارش ثبت شد</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status active">
          <div class="order-icon"><i class="fa-solid fa-box-open"></i></div>
          <div class="order-text">
            <h6>بسته بندی محصول</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status active ">
          <div class="order-icon"><i class="fa-solid fa-truck"></i></div>
          <div class="order-text">
            <h6>آماده برای حمل</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status active">
          <div class="order-icon"><i class="fa-solid fa-truck-fast"></i></div>
          <div class="order-text">
            <h6>در راه</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status">
          <div class="order-icon"><i class="fa-solid fa-heart-circle-check"></i></div>
          <div class="order-text">
            <h6>تحویل داده شده</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>


@elseif($lastorder->order_status  == 4)

<div class="my-order-wrapper" style="background-image: url({{asset('UserAssets/img/bg-img/21.jpg')}})">
  <div class="container">
    <div class="card">
      <div class="card-body p-4">
        <!-- Single Order Status-->
        <div class="single-order-status active">
          <div class="order-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <div class="order-text">
            <h6>سفارش ثبت شد</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status active">
          <div class="order-icon"><i class="fa-solid fa-box-open"></i></div>
          <div class="order-text">
            <h6>بسته بندی محصول</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status active ">
          <div class="order-icon"><i class="fa-solid fa-truck"></i></div>
          <div class="order-text">
            <h6>آماده برای حمل</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status active">
          <div class="order-icon"><i class="fa-solid fa-truck-fast"></i></div>
          <div class="order-text">
            <h6>در راه</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
        <!-- Single Order Status-->
        <div class="single-order-status  active">
          <div class="order-icon"><i class="fa-solid fa-heart-circle-check"></i></div>
          <div class="order-text">
            <h6>تحویل داده شده</h6>
          </div>
          <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>


@elseif($lastorder->order_status  == 0)

    <div class="my-order-wrapper">
      <div class="container">
        <div class="card">
          <div class="card-body p-4">
    <section class="order-item">
      <section >
          <p>سفارشی یافت نشد</p>
      </section>
  </section>
</div>
</div>
</div>
</div>


@endif

@endif

    
    @include('User.Layouts.footer')
    @include('User.Layouts.js')
    
  </body>

</html>