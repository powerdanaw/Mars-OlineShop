<div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between d-flex rtl-flex-d-row-r">
      <!-- Logo Wrapper -->
      <div class="logo-wrapper"><a href="{{route('home')}}"><img src="{{asset('UserAssets/img/icons/icon-35x35.png')}}" alt=""></a></div>
      <div class="navbar-logo-container d-flex align-items-center">
        <!-- Cart Icon -->
        <div class="cart-icon-wrap"><a href="{{route('CartItems')}}"><i class="fa-solid fa-bag-shopping"></i><span>
          @auth
          {{auth()->user()->carts->count()}}
          @endauth
        </span></a></div>


        <!-- User Profile Icon -->
        {{-- <div class="user-profile-icon ms-2"><a href="profile.html"><img src="img/bg-img/9.jpg" alt=""></a></div> --}}
        <!-- Navbar Toggler -->
        {{-- <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"> --}}
          <div><span></span><span></span><span></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
    <!-- Close button-->
    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <!-- Offcanvas body-->
    {{-- <div class="offcanvas-body"> --}}
      {{-- <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
        <div class="user-info">
           <h5 class="user-name mb-1 text-white">سوها سارا</h5>
          <p class="available-balance text-white"> موجودی <span class="counter">5000</span> <span>تومان</span> </p>
        </div>
      </div> --}}
      {{-- <!-- Sidenav Nav-->
      <ul class="sidenav-nav ps-0">
        <li><a href="profile.html"><i class="fa-solid fa-user"></i>پروفایل من</a></li></li>
        <li><a href="notifications.html"><i class="fa-solid fa-bell lni-tada-effect"></i>اعلانات<span class="ms-1 badge badge-warning">3</span></a></li>
        <li class="suha-dropdown-menu"><a href="#"><i class="fa-solid fa-store"></i>صفحات فروشگاه</a>
          <ul>
            <li><a href="shop-grid.html">شبکه فروشگاه</a></li>
            <li><a href="shop-list.html">لیست فروشگاه</a></li>
            <li><a href="single-product.html">مشخصات محصول</a></li>
            <li><a href="featured-products.html">محصولات برجسته</a></li>
            <li><a href="flash-sale.html">فروش ویژه</a></li>
          </ul>
        </li>
        <li><a href="pages.html"><i class="fa-solid fa-file-code"></i>تمام صفحات</a></li>
        <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="fa-solid fa-heart"></i>لیست علاقه مندی ها</a>
          <ul>
             <li><a href="wishlist-grid.html">شبکه دلخواه</a></li>
            <li><a href="wishlist-list.html">لیست دلخواه</a></li>
          </ul>
        </li>
        <li><a href="settings.html"><i class="fa-solid fa-sliders"></i>تنظیمات</a></li>
        <li><a href="intro.html"><i class="fa-solid fa-toggle-off"></i>خروج از سیستم</a></li>
      </ul> --}}
    </div>
  </div>
 