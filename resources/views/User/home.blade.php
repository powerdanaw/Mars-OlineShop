@extends('User.Layouts.master')

@section('content')
    

 <!-- PWA Install Alert -->
 {{-- <div class="toast pwa-install-alert shadow bg-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000" data-bs-autohide="true">
  <div class="toast-body">
    <div class="content d-flex align-items-center mb-2"><img src="img/icons/icon-72x72.png" alt="">
      <h6 class="mb-0"> افزودن به صفحه اصلی  </h6>
      <button class="btn-close ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
    </div><span class="mb-0 d-block">سوها را در صفحه اصلی تلفن همراه خود اضافه کنید. کلیک کنید بر روی<strong class="mx-1">  افزودن به صفحه اصلی </strong>دکمه &amp; مانند یک برنامه معمولی از آن لذت ببرید.</span>
  </div>
</div> --}}


<div class="page-content-wrapper">
    <!-- Search Form-->
    <!-- Search Form-->
    <div class="container">
      <div class="search-form pt-3">
        <form action="{{route('search')}}" method="post" >
          @csrf
          <input class="form-control " type="search" name="search" placeholder="جستجو کردن">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <!-- Alternative Search Options -->
        {{-- <div class="alternative-search-options">
          <div class="dropdown"><a class="btn btn-danger dropdown-toggle" id="altSearchOption" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-sliders"></i></a>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="altSearchOption">
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-microphone"> </i>جستجوی صوتی</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-image"> </i>جستجوی تصویر</a></li>
            </ul>
          </div>
        </div> --}}
      </div>
    </div>
    <!-- Hero Wrapper -->
    <div class="hero-wrapper">
      <div class="container">
        <div class="pt-3">
          <!-- Hero Slides-->
          <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide-->

            @foreach ($sliders as $slide)
                
            <div class="single-hero-slide" style="background-image: url({{asset('AdminAssets/Slider-Images/' . $slide->image)}})">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class=" mb-0" style="color:{{$slide->color}}" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">{{$slide->title}}</h4>
                  <p class="" style="color:{{$slide->color}}" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">{{Str::limit($slide->body, 25,  '...')}}</p>
                  <a class="btn btn-primary" href="{{$slide->url}}" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">هم اکنون خریداری کنید</a>
                </div>
              </div>
            </div>
            
            @endforeach


          </div>
        </div>
      </div>
    </div>
    <!-- Product Catagories -->
    <div class="product-catagories-wrapper py-3">
      <div class="container">
        <div class="row g-2 rtl-flex-d-row-r">
          <!-- Catagory Card -->

          @foreach ($first_categories as $first_category)
              
          <div class="col-3">
            <div class="card catagory-card">
              <div class="card-body px-2"><a href="{{route('category' , $first_category->id)}}"><img src="{{asset('AdminAssets/Category-Images/' . $first_category->image)}}" alt=""><span>{{$first_category->name}}</span></a></div>
            </div>
          </div>

          @endforeach
          
        </div>
      </div>
    </div>
    <!-- Flash Sale Slide -->
    <div class="flash-sale-wrapper">
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
          <h6 class="d-flex align-items-center rtl-flex-d-row-r"><i class="fa-solid fa-bolt-lightning me-1 text-danger lni-flashing-effect"></i>تازه ترین ها</h6>
          
        </div>
        <!-- Flash Sale Slide-->
        <div class="flash-sale-slide owl-carousel">

          <!-- Flash Sale Card -->
          @foreach ($last_products as $last_product)
              
          <div class="card flash-sale-card">
            <div class="card-body"><a href="{{route('product' , $last_product->id)}}"><img src="{{asset('AdminAssets/Product-Images/' . $last_product->image)}}" alt=""><span class="product-title">{{Str::limit($last_product->name, 25,  '...')}}</span>
              <p class="sale-price">{{number_format($last_product->price)}} تومان</p>
                <!-- Progress Bar-->
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                </div></a></div>
          </div>

          @endforeach
          
        </div>
      </div>
    </div>
    <!-- Dark Mode -->
    <div class="container">
      <div class="dark-mode-wrapper mt-3 bg-img p-4 p-lg-5">
        <p class="text-white">با استفاده از حالت تاریک می توانید صفحه نمایش خود را به یک پس زمینه تاریک تغییر دهید.</p>
        <div class="form-check form-switch mb-0">
          <label class="form-check-label text-white h6 mb-0" for="darkSwitch">به حالت تاریک بروید</label>
          <input class="form-check-input" id="darkSwitch" type="checkbox" role="switch">
        </div>
      </div>
    </div>
    <!-- Top Products -->
    <div class="top-products-area py-3">
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
          <h6>محصولات برتر</h6><a class="btn p-0" href="shop-grid.html">مشاهده همه<i class="ms-1 fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="row g-2">
          <!-- Product Card -->

          @foreach ($best_products as $best_product)
              
          <div class="col-6 col-md-4">
            <div class="card product-card">
              <div class="card-body">
                <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart">                       </i></a>
                <!-- Thumbnail --><a class="product-thumbnail d-block" href="{{route('product' , $best_product->id)}}"><img class="mb-2" src="{{asset('AdminAssets/Product-Images/' . $best_product->image)}}" alt=""></a>
                <!-- Product Title --><a class="product-title" href="{{route('product' , $best_product->id)}}">{{Str::limit($best_product->name, 40,  '...')}}</a>
                <!-- Product Price -->
                <p class="sale-price">{{number_format($best_product->price)}} تومان</p>
                <!-- Rating -->
                <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                
                <!-- Add to Cart -->
                
                <form action="{{route('addtocart' , $best_product->id )}}" method="post">
                  @csrf

                  @if ( $best_product->inventory == 0)
                    <button class="btn btn-danger p-2 " disabled >اتمام</button>
                  @else
                    <button class="btn btn-success btn-sm" type="submit"><i class="fa-solid fa-plus"></i></button>
                  @endif
                  
                </form>
              </div>
            </div>
          </div>
          
          @endforeach


        </div>
      </div>
    </div>
    <!-- CTA Area -->
    <div class="container">
      <div class="cta-text dir-rtl p-4 p-lg-5" style="background: url({{asset('AdminAssets/Baner-Images/' . $baner->image)}}) no-repeat center" >
        <div class="row">
          <div class="col-9">
            <h4 class="mb-1" style="color:{{$baner->color}};" >{{$baner->title}}</h4>
            <p class="mb-2 opacity-75" style="color:{{$baner->color}}" >{{$baner->body}} </p>
            <a href="{{$baner->url}}" class="btn btn-warning" style="background-color: {{$baner->btn_color}}">{{$baner->btn_name}}</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Weekly Best Sellers-->
    <div class="weekly-best-seller-area py-3">
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
          <h6>پیشنهاد سایت</h6><a class="btn p-0" href="shop-list.html">
             مشاهده همه<i class="ms-1 fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="row g-2">
          <!-- Weekly Product Card -->

          @foreach ($products as $product)
              
          <div class="col-12">
            <div class="horizontal-product-card">
              <div class="d-flex align-items-center">
                <div class="product-thumbnail-side">
                  <!-- Thumbnail --><a class="product-thumbnail shadow-sm d-block" href="{{route('product' , $product->id)}}"><img src="{{asset('AdminAssets/Product-Images/' . $product->image)}}" alt=""></a>
                </div>
                <div class="product-description">
                  <!-- Wishlist  --><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart"></i></a>
                  <!-- Product Title --><a class="product-title d-block" href="{{route('product' , $product->id)}}">{{$product->name}}</a>
                  <!-- Price -->
                  <p class="sale-price"><i class="fa-solid fa-dollar-sign"></i>{{number_format($product->price)}} تومان</p>
                  <!-- Rating -->
                </div>
              </div>
            </div>
          </div>
          
          @endforeach



        </div>
      </div>
    </div>
    <!-- Discount Coupon Card-->
    <div class="container">
      <div class="discount-coupon-card p-4 p-lg-5 dir-rtl">
        <div class="d-flex align-items-center">
          <div class="discountIcon"><img class="w-100" src="{{asset('UserAssets/img/core-img/discount.png')}}" alt=""></div>
          <div class="text-content">
            <h4 class="text-white mb-1">{{$Textbaner->title}}</h4>
            <p class="text-white mb-0">{{$Textbaner->banner}}<span class="px-1 fw-bold"></span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Featured Products Wrapper-->
    <div class="featured-products-wrapper py-3">
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
          <h6>محصولات فروشگاه</h6><a class="btn p-0" href="featured-products.html">مشاهده همه<i class="ms-1 fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="row g-2">
          <!-- Featured Product Card-->


          @foreach($rand_products as $rand_product)



          <div class="col-4">
            <div class="card featured-product-card">
              <div class="card-body">
                <!-- Badge--><span class="badge badge-warning custom-badge"><i class="fa-solid fa-star"></i></span>
                <div class="product-thumbnail-side">
                  <!-- Thumbnail --><a class="product-thumbnail d-block" href="{{route('product' , $rand_product->id)}}"><img src="{{asset('AdminAssets/Product-Images/' . $rand_product->image)}}" alt=""></a>
                </div>
                <div class="product-description">
                  <!-- Product Title --><a class="product-title d-block" href="{{route('product' , $rand_product->id)}}">{{$rand_product->name}}</a>
                  <!-- Price -->
                  <p class="sale-price">{{number_format($rand_product->price)}} تومان</p>
                </div>
              </div>
            </div>
          </div>
          
          @endforeach




        </div>
      </div>
    </div>
    <div class="pb-3">
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
          <h6>دسته بندی ها</h6><a class="btn p-0" href="#">
             مشاهده همه<i class="ms-1 fa-solid fa-arrow-left-long"></i></a>
        </div>
        <!-- Collection Slide-->
        <div class="collection-slide owl-carousel">
          <!-- Collection Card-->

          @foreach ($categories as $category)

          <div class="card collection-card"><a href="{{route('category' , $category->id)}}"><img src="{{asset('AdminAssets/Category-Images/' . $category->image)}}" alt=""></a>
            <div class="collection-title"><span>{{$category->name}}</span><span class="badge bg-danger">{{$category->products->count()}}</span></div>
          </div>
          
          @endforeach



        </div>
      </div>
    </div>
  </div>
@endsection