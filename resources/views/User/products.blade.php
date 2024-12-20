@extends('User.Layouts.master')

@section('content')
    <br>
    <br>
<div class="page-content-wrapper">

  </div>
      <!-- Top Products-->
      <div class="top-products-area pb-3">
        <div class="container">
          <div class="section-heading rtl-text-right">
            {{-- <h6>محصولات یافت شده</h6> --}}
          </div>
          <div class="row g-2 rtl-flex-d-row-r">
            <!-- Product Card -->
       
           
            <!-- Product Card -->



            @forelse($products as $product)
            <div class="col-6 col-md-4">
              <div class="card product-card">
                <div class="card-body">
                  <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart"></i></a>
                  <!-- Thumbnail --><a class="product-thumbnail d-block" href="{{route('product' , $product->id )}}"><img class="mb-2" src="{{asset('AdminAssets/Product-Images/' . $product->image)}}" alt=""></a>
                  <!-- Product Title --><a class="product-title" href="">{{$product->title}} </a>
                  <span></span>
                  <!-- Product Price -->
                  <p class="sale-price my-2">  {{number_format($product->price)}} تومان</p>
                 
                  <form action="{{route('addtocart' , $product->id )}}" method="Post">
                    @csrf
                    @if ( $product->inventory == 0)
                    <button class="btn btn-danger p-2 " disabled >اتمام</button>
    
                    @else
                    <button class="btn btn-success btn-sm" type="submit"><i class="fa-solid fa-plus"></i></button>
                        
                    @endif  
                  </form>      
                </div>
              </div>
            </div>

            @empty

            <p>محصولی یافت نشد</p>
                
          
            @endforelse



          </div>
        </div>
      </div>
    </div>

    @endsection