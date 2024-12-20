@extends('Admin.Layouts.master')


@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">گالری تصاویر "{{Str::limit($product->name, 45,  '...')}}"</h3>
                <a href="{{route('Admin.Product.Addimage' , $product->id)}}" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> افزودن عکس جدید</a>

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
                                <th>عکس</th>
                                <th>تاریخ ساخت</th>
                                <th>حذف</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($product->images as $image )
                            <tr>
                                <td><img src="{{asset('AdminAssets/Product-Images/' . $image->image )}}" width="50" height="50" style="border-radius: 7px"></td>
                                <td>{{$image->created_at}}</td>
                          
                                <td>
                                    <div class="btn-group" role="group" aria-label="مثال اصلی طرح شده">
                                        <a href="{{route('Admin.Product.DeleteImg' , [$product->id , $image->id])}}" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>
                                
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

@endsection