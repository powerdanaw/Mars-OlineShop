@extends('Admin.Layouts.master')

@section('content')

<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">لیست بنر های متنی</h3>
                    <a href="{{route('Admin.TextBaner.create')}}" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> افزودن بنر متنی</a>
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
                                    <th>بدنه</th>
                                    <th>اقدامات</th>
                                </tr>
                            </thead>
                            <tbody>

                                    
                                          

                                @foreach ($textbaners as $textbaner)
                                    

                                <tr>
                                    <td>{{$textbaner->title}}</td>
                                    <td>{{$textbaner->banner}}</td>
                              
                                   
                                    <td>
                                        <div class="btn-group" role="group" aria-label="مثال اصلی طرح شده">
                                            <a href="{{route('Admin.TextBaner.Delete' , $textbaner->id)}}" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>

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
