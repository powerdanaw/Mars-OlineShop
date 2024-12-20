@extends('Admin.Layouts.master')

@section('content')

<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">لیست دسته بندی ها</h3>
                    <a href="{{route('Admin.Category.create')}}" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> افزودن دسته بندی</a>
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
                                    <th>دسته بندی</th>
                                    <th>تاریخ</th>
                                    <th>عکس</th>
                                    <th>بنر</th>
                                    <th>اقدامات</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>
                                        <img src="{{asset('AdminAssets/Category-Images/' . $category->image)}}" width="50" alt="">
                                    </td>
                                    <td>                   
                                    <img src="{{asset('AdminAssets/Category-Baners/' . $category->baner)}}" width="50" alt="">
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="مثال اصلی طرح شده">
                                            <a href="{{route('Admin.Category.Edit' , $category->id )}}" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                            <a href="{{route('Admin.Category.Delete' , $category->id )}}" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>
                                            @if($category->status  == 0)
                                            <a href="{{route('Admin.Category.Status'  , $category->id )}}" class="btn btn-outline-secondary"><i class="icofont-close-circled"><span>عادی</span></i></a>
                                            @else
                                            <a href="{{route('Admin.Category.Status'  , $category->id )}}" class="btn btn-outline-secondary"><i class="icofont-check-circled"><span>ویژه</span></i></a>
                                            @endif
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