@extends('Admin.Layouts.master')

@section('content')

<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">لیست محصولات </h3>
                    <a href="{{route('Admin.Product.create')}}" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> افزودن محصول</a>
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
                                    <th> محصول</th>
                                    <th>عکس</th>
                                    <th>قیمت</th>
                                    <th>موجودی</th>
                                    <th>اقدامات</th>
                                </tr>
                            </thead>
                            <tbody>

                             
                                    
                              @foreach ($products as $product)
                                  
                                <tr>
                                    <td>{{Str::limit($product->name, 25,  '...')}}</td>
                                    <td>
                                        <img src="{{asset('AdminAssets/Product-Images/' . $product->image)}}" width="50" alt="">
                                    </td>
                                    <td>{{  number_format($product->price )}}</td>
                                    
                                    <td> 
                                        @if($product->inventory < 5 && $product->inventory > 0)
                                        {{ $product->inventory}} عدد <p style="display: inline; color:rgb(238, 139, 9)">(در حال اتمام)</p>
                                        @elseif($product->inventory == 0)
                                        <strong style="display: inline; color:red">(((تمام شده)))</strong>
                                        @else
                                        {{ $product->inventory}} عدد
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <div class="btn-group" role="group" aria-label="مثال اصلی طرح شده">
                                            <a href="{{ route('Admin.Product.Edit' , $product->id )}}" class="btn btn-outline-secondary" style="border:1px solid green"><i class="icofont-edit text-success"></i > ویراش </a>
                                            <a href="{{route('Admin.Product.Delete'  , $product->id )}}" class="btn btn-outline-secondary deleterow"  style="border:1px solid red"><i class="icofont-ui-delete text-danger"></i> حذف </a>

                                            
                                            @if($product->status  == 0)
                                            <a href="{{route('Admin.Product.Status'  , $product->id )}}" class="btn btn-outline-secondary deleterow bg-info">ویژه</a>
                                            @else
                                            <a href="{{route('Admin.Product.Status'  , $product->id )}}" class="btn btn-outline-secondary deleterow bg-info">عادی</a>
                                            @endif
                                            <a href="{{route('Admin.Product.images' , $product->id  )}}" class="btn btn-outline-secondary deleterow bg-success">تصاویر</a>

                                            <a href="{{route('Admin.Product.sizes' , $product->id  )}}" class="btn btn-outline-secondary deleterow bg-warning">سایز بندی</a>


                                            <a href="{{route('Admin.Product.colors' , $product->id  )}}" class="btn btn-outline-secondary deleterow bg-info">رنگ بندی</a>

                                        </div>
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
</div>

@endsection
