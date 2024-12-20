@extends('User.Layouts.master')

@section('content')
    

<div class="page-content-wrapper">
    <div class="container">
      <!-- Cart Wrapper-->
      <div class="cart-wrapper-area py-3">
        <div class="cart-table card mb-3">
          <div class="table-responsive card-body">
            <table class="table mb-0">
              <tbody>
                    @forelse ($cartItems as $cartItem)
                    <tr>
                      <th scope="row"><a class="remove-product" href="{{route('DeleteCart' , $cartItem->product->id)}}"><i class="fa-solid fa-xmark"></i></a></th>
                      <td><img src=" {{asset('AdminAssets/Product-Images/' . $cartItem->product->image)}}" alt=""></td>
                      <td><a href=" {{route('product' , $cartItem->product_id)}} ">{{$cartItem->product->title}}<span> @if($cartItem->color) رنگ : {{$cartItem->color}}@endif   @if($cartItem->size)/ سایز :{{$cartItem->size}}@endif </span> <span>{{ Number_Format($cartItem->product->price)}} تومان ×  {{$cartItem->number}}</span></a> </td>
                      <td>
                        <div class="quantity">
                          <input class="qty-text" type="text" value="{{$cartItem->number}}">
                        </div>
                      </td>
                    </tr>
                    @empty
                        
                    <section class="order-item">
                      <section class="d-flex justify-content-between">
                        <p>محصولی یافت نشد</p>
                      </section>
                    </section>
                    @endforelse
             


              </tbody>
            </table>
          </div>
        </div>
       
      



        <!-- Coupon Area-->
        <div class="card coupon-card mb-3">
          <div class="card-body">
            <div class="apply-coupon">
              <h6 class="mb-2">کد تخفیف دارید؟</h6>
              <div class="coupon-form">
                <form action="" method="post" >
                  <input class="form-control" type="text" name="code">
                  <button class="btn btn-primary" type="submit">درخواست دادن</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        @php

           $Finalprice = 0;

           foreach ($cartItems as $cartItem) {
            $Finalprice += ($cartItem->product->price * $cartItem->number);
           }
           
        @endphp

      
        <!-- Cart Amount Area-->
        <div class="card cart-amount-area">

           {{-- <p class="text-success mx-3 mt-3"><span>50000</span> تخفیف</p> --}}

          <div class="card-body d-flex align-items-center justify-content-between">
           
            <h5 class="total-price mb-0"><span class="counter">{{Number_Format($Finalprice)}}</span> تومان</h5>
            
                
            <a class="btn btn-warning" href="{{ROUTE('information')}}">ثبت سفارش</a>
                
          </div>


        </div>
      </div>

      

      @foreach(Auth::user()->orders  as $order)

      @if($order->order_status == 5 )

      <div class="coupon-form mb-3">
        <form action="{{route('payAgain' , $order->id )}}" method="post"  >
          @csrf
         <input class="form-control" value=" سفارش به مبلغ  {{number_format($order->price)}} تومان " type="text" disabled>
         <button class="btn btn-success" type="submit">در انتظار پرداخت</button>
        </form>
      </div>

      @endif

      @endforeach


    </div>
    
  </div>


  @endsection