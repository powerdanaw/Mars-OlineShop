@extends('Admin.Layouts.master')


@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0"> رنگ بندی های محصول"{{Str::limit($product->name, 45,  '...')}}"</h3>
                <a href="{{route('Admin.Product.Addcolor' , $product->id)}}" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> افزودن رنگ بندی </a>

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
                                <th>اسم رنگ</th>
                                <th>رنگ</th>
                                <th>حذف</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($product->colors as $color )
                            <tr>
                                <td>{{$color->name}}</td>
                                <td>
                                    <div style="width: 20px; height:20px; background-color:{{$color->color}} ; border:1px solid black"></div>
                                </td>
                          
                                <td>
                                    <div class="btn-group" role="group" aria-label="مثال اصلی طرح شده">

                                        <a href="{{route('Admin.Product.DeleteColor' , [$product->id , $color->id])}}" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>
                                
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