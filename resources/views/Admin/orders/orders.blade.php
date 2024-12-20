@extends('Admin.Layouts.master')

@section('content')

<div class="body d-flex py-3">


<div class="container-xxl"> 
    <div class="row align-items-center"> 
        <div class="border-0 mb-4"> 
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">لیست سفارشات</h3>
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3"> 
        <div class="col-md-12">
            <div class="card"> 
                <div class="card-body"> 
                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">  
                        <thead>
                            <tr>
                                <th>نام مشتری</th>
                                <th class="px-2">جزعیات سفارش</th>
                                <th class="px-1">وضعیت</th>
                                <th>قیمت</th>
                                <th>تاریخ</th>

                            </tr>
                        </thead>
                        <tbody>

                               @foreach ($orders as $order)
                                   
                            <tr>
                                
                                <td>{{$order->name}}</td>
                                
                                <td><a href="{{route('Admin.Order.details' , $order->id )}}" >
                                    <span class="badge bg-dark" style="font-size: 11px">جزئیات</span></a>
                                </td>

                                <td>
                                    @if($order->order_status == 1)
                                        <a href="{{route('Admin.Order.status' , $order->id )}}">
                                            <span class="badge bg-warning">پردازش شد</span>
                                        </a>


                                    @elseif($order->order_status == 2)
                                        <a href="{{route('Admin.Order.status' , $order->id )}}">
                                            <span class="badge bg-warning">تحویل به پست</span>
                                        </a>
                                    
                                       
                                    @elseif($order->order_status == 3)

                                        <a href="{{route('Admin.Order.status' , $order->id )}}">
                                            <span class="badge bg-warning">تحویل داده شد</span>
                                        </a>
                                    
                                          
                                    @elseif($order->order_status == 4)

                                        <a href="{{route('Admin.Order.status' , $order->id )}}">
                                            <span class="badge bg-success">تکمیل</span>
                                        </a>

                                    @endif
    
                                </td>
                               
                                <td>
                                    {{number_format($order->price)}}
                                </td>

                                <td>
                                    {{$order->created_at}}</td>
                                </td>

                            </tr>

                            @endforeach


                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- Row end  -->
</div>
</div>

@endsection