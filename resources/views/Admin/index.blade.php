@extends('Admin.Layouts.master')

@section('content')
    
<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
                <div class="alert-success alert mb-0">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded no-thumbnail bg-success text-light"><i class="fa fa-dollar fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="h6 mb-0">درآمد</div>
                            <span class="small">{{number_format($price)}} تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="alert-danger alert mb-0">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="fa fa-credit-card fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="h6 mb-0">جمع محصولات</div>
                            <span class="small">{{$products->count()}} عدد </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="alert-warning alert mb-0">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="fa fa-user"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="h6 mb-0">مشتریان خوشحال</div>
                            <span class="small">{{$users->count()}} نفر</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="alert-info alert mb-0">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded no-thumbnail bg-info text-light"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="h6 mb-0">جمع سفارشات</div>
                            <span class="small">{{$all_orders}} عدد</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row end  -->

        {{-- <div class="row g-3">
            <div class="col-lg-12 col-md-12">
                
                <div class="tab-content mt-1">
                    <div class="tab-pane fade show active" id="summery-today">
                        <div class="row g-1 g-sm-3 mb-3 row-deck">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">مشتریان</span>
                                            <div><span class="fs-6 fw-bold me-2">14,208</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">سفارش</span>
                                            <div><span class="fs-6 fw-bold me-2">2314</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">میانگین فروش</span>
                                            <div><span class="fs-6 fw-bold me-2">12 تومان</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">میانگین فروش اقلام</span>
                                            <div><span class="fs-6 fw-bold me-2">185</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">فروش کل</span>
                                            <div><span class="fs-6 fw-bold me-2">12 تومان</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">بازدید کنندگان</span>
                                            <div><span class="fs-6 fw-bold me-2">11452</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-users-social fs-3 color-light-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">مجموع محصولات</span>
                                            <div><span class="fs-6 fw-bold me-2">184511</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-bag fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">پرفروش ترین مورد</span>
                                            <div><span class="fs-6 fw-bold me-2">122</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-star fs-3 color-lightyellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">نمایندگی</span>
                                            <div><span class="fs-6 fw-bold me-2">32</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row end -->
                    </div>
                    <div class="tab-pane fade" id="summery-week">
                        <div class="row g-3 mb-4 row-deck">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">مشتریان</span>
                                            <div><span class="fs-6 fw-bold me-2">54,208</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">سفارش</span>
                                            <div><span class="fs-6 fw-bold me-2">12314</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">میانگین فروش</span>
                                            <div><span class="fs-6 fw-bold me-2">12 تومان</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">میانگین فروش اقلام</span>
                                            <div><span class="fs-6 fw-bold me-2">1185</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">فروش کل</span>
                                            <div><span class="fs-6 fw-bold me-2">12 تومان</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">بازدید کنندگان</span>
                                            <div><span class="fs-6 fw-bold me-2">111452</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-users-social fs-3 color-light-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">مجموع محصولات</span>
                                            <div><span class="fs-6 fw-bold me-2">194511</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-bag fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">پرفروش ترین مورد</span>
                                            <div><span class="fs-6 fw-bold me-2">1122</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-star fs-3 color-lightyellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">نمایندگی</span>
                                            <div><span class="fs-6 fw-bold me-2">132</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row end -->
                    </div>
                    <div class="tab-pane fade" id="summery-month">
                        <div class="row g-3 mb-4 row-deck">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">مشتریان</span>
                                            <div><span class="fs-6 fw-bold me-2">74,208</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">سفارش</span>
                                            <div><span class="fs-6 fw-bold me-2">22314</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">میانگین فروش</span>
                                            <div><span class="fs-6 fw-bold me-2">12 تومان</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">میانگین فروش اقلام</span>
                                            <div><span class="fs-6 fw-bold me-2">2185</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">فروش کل</span>
                                            <div><span class="fs-6 fw-bold me-2">12 تومان</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">بازدید کنندگان</span>
                                            <div><span class="fs-6 fw-bold me-2">211452</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-users-social fs-3 color-light-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">مجموع محصولات</span>
                                            <div><span class="fs-6 fw-bold me-2">284511</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-bag fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">پرفروش ترین مورد</span>
                                            <div><span class="fs-6 fw-bold me-2">222</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-star fs-3 color-lightyellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">نمایندگی</span>
                                            <div><span class="fs-6 fw-bold me-2">232</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row end -->
                    </div>
                    <div class="tab-pane fade" id="summery-year">
                        <div class="row g-3 mb-4 row-deck">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">مشتریان</span>
                                            <div><span class="fs-6 fw-bold me-2">104,208</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">سفارش</span>
                                            <div><span class="fs-6 fw-bold me-2">252314</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">میانگین فروش</span>
                                            <div><span class="fs-6 fw-bold me-2">12 تومان</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">میانگین فروش اقلام</span>
                                            <div><span class="fs-6 fw-bold me-2">75885</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">فروش کل</span>
                                            <div><span class="fs-6 fw-bold me-2">12 تومان</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">بازدید کنندگان</span>
                                            <div><span class="fs-6 fw-bold me-2">114521452</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-users-social fs-3 color-light-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">مجموع محصولات</span>
                                            <div><span class="fs-6 fw-bold me-2">884511</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-bag fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">پرفروش ترین مورد</span>
                                            <div><span class="fs-6 fw-bold me-2">7522</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-star fs-3 color-lightyellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">نمایندگی</span>
                                            <div><span class="fs-6 fw-bold me-2">1832</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row end -->
                    </div>
                </div>
            </div>
        </div><!-- Row end  --> --}}

        
    </div>
</div>



@endsection