@extends('Admin.Layouts.master')

@section('content')

<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">لیست اسلایدر ها</h3>
                    <a href="{{route('Admin.Slider.create')}}" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> افزودن اسلاید</a>
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
                                    <th>عنوان</th>
                                    <th>عکس</th>
                                    <th>بدنه</th>
                                    <th>لینگ دکمه</th>
                                    <th>اقدامات</th>
                                </tr>
                            </thead>
                            <tbody>

                                    
                            @foreach ($sliders as $slider)
                                  
                                <tr>
                                    <td>{{$slider->title}}</td>
                                    <td>
                                        <img src="{{asset('AdminAssets/Slider-Images/' . $slider->image)}}" width="125" alt="">
                                    </td>
                                    <td>{{Str::limit($slider->body, 25,  '...')}}</td>
                                    <td>{{$slider->url}}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="مثال اصلی طرح شده">
                                            {{-- <a href="" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a> --}}
                                            <a href="{{route('Admin.Slider.Delete' , $slider->id)}}" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>

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
