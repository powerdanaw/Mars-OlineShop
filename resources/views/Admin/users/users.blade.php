@extends('Admin.Layouts.master')

@section('content')

<div class="body d-flex py-3">


<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">اطلاعات مشتریان</h3>
                  
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>نام </th>
                                    <th>ایمیل</th>
                                    {{-- <th>رمز</th> --}}
                                    <th>مجموع سفارش</th>
                                    <th>وضعیت</th>
                                    <th>تاریخ غضویت</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($users as $user)
                                        
                                <tr>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->email}}</td>
    
                                    {{-- <td>{{ $user->password}}</td> --}}
                                    <td>{{ $user->orders->count()}} عدد</td>
                                       <td>
                                        @if($user->user_type == 0) مشتری @else ادمین @endif
                                         
                                       </td>
                                
                                    <td> {{ $user->created_at}}</td>
                                   
                                </tr>
                                @endforeach
    
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>
</div>

@endsection