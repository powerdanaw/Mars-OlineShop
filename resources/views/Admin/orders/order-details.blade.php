@extends('Admin.Layouts.master')

@section('content')

<div class="body d-flex py-3">


<div class="container-xxl"> 
    <div class="row align-items-center"> 
        <div class="border-0 mb-4"> 
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">جزئیات سفارش</h3>
                
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">

        <div class="col">
            <div class="alert-danger alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="fa fa-user fa-lg" aria-hidden="true"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small mb-0">نام کامل</div>
                        <span class="">{{$order->name}}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="alert-info alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-info text-light"><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small mb-0">شماره تماس</div>
                        <span class="h6">{{$order->mobile}}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="alert-warning alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small mb-0">کد پستی</div>
                        <span class="h6">{{$order->national_code}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="alert-success alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-success text-light"><i class="fa fa-envelope fa-lg" ></i></div>
                    <div class="flex-fill ms-3 ">
                        <div class="small mb-0">ادرس</div>
                        <span class="h6">{{$order->address}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Row end  -->

    <div class="row g-3 mb-3">
        <div class="col-xl-12 col-xxl-8">
            <div class="card">
               
                <div class="card-body">
                    <div class="product-cart">
                        <div class="checkout-table table-responsive">
                            <table id="myCartTable" class="table display dataTable table-hover align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th >تصویر محصول</th>
                                        <th>نام محصول</th>
                                        <th >تعداد</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($order->orderItems as $orderItem)
                                            
                                    <tr>
                                        <td>
                                            <a href="{{route('product' , $orderItem->product->id)}}">
                                            <img src="{{asset('AdminAssets/Product-Images/' . $orderItem->product->image)}}" class="avatar rounded lg" alt="Product">
                                             </a>
                                        </td>
                                        <td>
                                            <h6 class="title" style="font-size: 15px">{{$orderItem->product->name}}</h6>

                                                @if ($orderItem->size)
                                                <span class=" text-primary p-2" style="font-size: 12px">{{$orderItem->size}}</span>
                                                @endif
                                                    
                                                @if ($orderItem->color)
                                                <span class="text-primary p-2" style="font-size: 12px">{{$orderItem->color}}</span>
                                                @endif
                                                    
                                        </td>
                                        <td>
                                            {{$orderItem->number}}
                                        </td>
                                       
                                    </tr>
                                    @endforeach
    
                                </tbody>
                            </table>
                        </div>
                  
                    </div>     
                </div>
            </div>
        </div>

    </div> <!-- Row end  -->
</div>
</div>

@endsection