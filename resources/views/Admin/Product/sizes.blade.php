@extends('Admin.Layouts.master')


@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">سایزهای محصول"{{Str::limit($product->name, 45,  '...')}}"</h3>
                <a href="{{route('Admin.Product.Addsize' , $product->id)}}" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> افزودن سایز </a>

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
                                <th>سایز</th>
                                <th>تاریخ ساخت</th>
                                <th>حذف</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($product->sizes as $size )
                            <tr>
                                <td>{{$size->size}}</td>
                                <td>{{$size->created_at}}</td>
                          
                                <td>
                                    <div class="btn-group" role="group" aria-label="مثال اصلی طرح شده">

                                        <a href="{{route('Admin.Product.DeleteSize' , [$product->id , $size->id])}}" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>
                                
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