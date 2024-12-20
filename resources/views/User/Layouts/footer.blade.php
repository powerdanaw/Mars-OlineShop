<div class="internet-connection-status" id="internetStatus"></div>
<!-- Footer Nav-->
<div class="footer-nav-area" id="footerNav">
  <div class="suha-footer-nav">
    <ul class="h-100 d-flex align-items-center justify-content-between ps-0 d-flex rtl-flex-d-row-r">
       <li><a href="{{route('home')}}"><i class="fa-solid fa-house"></i>خانه</a></li>
       <li><a href="{{route('myOrder')}}"><i class="fa-solid fa-bag-shopping"></i>سفارشات</a></li>
       <li><a href="{{route('CartItems')}}"><i class="fa-solid fa-bag-shopping"></i>سبد خرید</a></li>
       @auth

          <li><a href="{{route('logout')}}"><i class=" fa fa-sign-out"></i>خروج </a></li>
            
        @endauth

        @guest
          <li><a href="{{route('loginForm')}}"><i class="fa fa-sign-in"></i>ورود</a></li>
            
        @endguest

        @auth

        @if(Auth::user()->user_type ==  1 )
        
      <li><a href="{{route('Admin.index')}}"><i class="fa-solid fa-gear"></i>پنل مدیریت</a></li>

      @endif
      @endauth

    </ul>
  </div>
</div>