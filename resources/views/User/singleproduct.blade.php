@extends('User.Layouts.master')

@section('content')
    
<div class="page-content-wrapper">
  <div class="product-slide-wrapper">
    <!-- Product Slides-->
    <div class="product-slides owl-carousel">
      <!-- Single Hero Slide-->

      @if($product->images->count() > 0 )

      @foreach($product->images as $image)

      <div class="single-product-slide" style="background-image: url({{asset('AdminAssets/Product-Images/' . $image->image )}})"></div>
       
      @endforeach
      @else
      
      <div class="single-product-slide" style="background-image: url({{asset('AdminAssets/Product-Images/' . $product->image)}})"></div>

      @endif

    </div>
  </div>
  <div class="product-description pb-3">
    <!-- Product Title & Meta Data-->
    <div class="product-title-meta-data bg-white mb-3 py-3">
      <div class="container d-flex justify-content-between rtl-flex-d-row-r">
        <div class="p-title-price">
          <h5 class="mb-3">{{$product->name}}</h5>



      @if($product->sizes->count() > 0 )

          <div class="product-rating d-flex">
            <p>سایز بندی : </p>

           @foreach($product->sizes as $size)

            <p class="sale-price mb-0 lh-1 size-style text-dark"  >  {{$size->size}} -</p> 

            @endforeach
          </div>
              
      @endif
    </div>

    @if($product->colors->count() > 0 )


          <div class="product-rating d-flex">
           @foreach($product->colors as $color)

            <div style="width: 1rem; height:1rem; border-radius: 50%; margin-left:2px ; background-color:{{$color->color}} ;border:solid gray 0.5px ;"></div>

            @endforeach

          </div>
    @endif
         
          
          
          
        </div>
        
   
      </div>


                </form>
      <form action="{{route('addtocart' , $product->id )}}" method="Post">
        @csrf
      
    <div class="cart-form-wrapper bg-white mb-2 py-3">
        <div class="container">
          <div class="cart-form d-flex justify-content-between">


            
            <div class="order-plus-minus d-flex ">
              @if($product->inventory == 0 )
              <input class="form-control cart-quantity-input" type="text" step="1" disabled  name="number" id="number" value="0">
              @else
              <a class="quantity-button-handler cart-number">-</a>
              <input class="form-control cart-quantity-input" type="text" step="1"  name="number" id="number" value="1">
              <a class="quantity-button-handler cart-number">+</a>

               @endif
            </div>



    @if($product->colors->count() > 0 )


            <div class="">
              <select name="color" id="" class="border-0">
                <option value="">انتخاب رنگ</option>

                @foreach($product->colors as $color)

                  <option value="{{$color->name}}">{{$color->name}}</option>

                 @endforeach
              </select>
             </div>

     @endif



      @if($product->sizes->count() > 0 )

            <div class="">
              <select name="size" id="" class="border-0" >
                <option value="">انتخاب سایز </option>
                @foreach($product->sizes as $size)

                  <option value="{{$size->size}}">{{$size->size}}</option>

                @endforeach
              </select>
             </div>

      @endif
          </div>

        </div>

      </div>
      <div class="cart-form-wrapper bg-white mb-3 px-3 py-3 d-flex justify-content-between">
        <p class="price mt-1 mb-0 text-dark fs-18 fw-bold" id="product_price" data-product-original-price={{$product->price}}> قابل پرداخت :
            <span  id="final-price"  ></span> تومان
            <span class=" ms-2 text-color7 fs-14">
              
              </p>

              @if($product->inventory == 0 )
                <button class="btn btn-danger  mb-3 " disabled>اتمام موجودی</button>
              @else
                <button class="btn btn-danger  mb-3 " type="submit">به سبد خرید اضافه کنید</button>
              @endif
    </div>


      </form>

      

    <!-- Product Specification-->
    <div class="p-specification bg-white mb-3 py-3">
      <div class="container">
        <h6>مشخصات و توضیحات</h6>
        {{$product->description}}
    </div>







@endsection


@section('js')

<script>
    $(document).ready(function(){
      bill();
  
     //number
     $('.cart-number').click(function(){
        bill();
    })
    })

    function bill() {
      

        //price computing
        var number = 1;
        var product_original_price = parseFloat($('#product_price').attr('data-product-original-price'));


        if($('#number').val() > 0)
        {
            number = parseFloat($('#number').val());
        }

        //final price
        var final_price = number * product_original_price;
     //    $('#product-price').html(product_price);
     $('#final-price').html(toFarsiNumber(final_price));


    }
    
    function toFarsiNumber(number)
  {
    const farsiDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    // add comma
    number = new Intl.NumberFormat().format(number);
   //convert to persian
   return number.toString().replace(/\d/g, x => farsiDigits[x]);
  }
</script>
       @endsection
