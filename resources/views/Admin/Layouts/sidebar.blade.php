<div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="index.html" class="mb-0 brand-icon">
            <span class="logo-icon">
                <i class="bi bi-bag-check-fill fs-4"></i>
            </span>
            <span class="logo-text">ای بازار</span>
        </a>
        <!-- Menu: main ul -->
        <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link active" href="{{route('Admin.index')}}"><i class="icofont-home fs-5"></i> <span>داشبورد</span></a></li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                    <i class="icofont-truck-loaded fs-5"></i> <span>محصولات</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-product">
                        <li><a class="ms-link" href="{{route('Admin.Product.Products')}}">لیست محصولات</a></li>
                        <li><a class="ms-link" href="{{route('Admin.Product.create')}}">افزودن محصول</a></li>
                    </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                    <i class="icofont-chart-flow fs-5"></i> <span>دسته بندی ها</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="categories">
                        <li><a class="ms-link" href="{{route('Admin.Category.Categories')}}">لیست دسته بندی ها</a></li>
                        <li><a class="ms-link" href="{{route('Admin.Category.create')}}">اضاف دسته بندی ها</a></li>
                    </ul>
            </li>

            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#page" href="#">
                <i class="icofont-page fs-5"></i> <span>اسلایدر و بنر ها</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="page">
                    <li><a class="ms-link" href=" {{route('Admin.Slider.Sliders')}}">اسلایدر اصلی</a></li>
                    <li><a class="ms-link" href="{{route('Admin.Baner.Baners')}}">بنر میانی</a></li>
                    <li><a class="ms-link" href="{{route('Admin.TextBaner.TextBaners')}}">بنر نوشتاری</a></li>
                </ul>
               
            </li>
           

          
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#customers-info" href="#">
                <i class="icofont-funky-man fs-5"></i> <span>مشتریان</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="customers-info">
                    <li><a class="ms-link" href="{{route('Admin.users')}}">لیست مشتریان</a></li>
                    <li><a class="ms-link" href="customer-detail.html">جزئیات مشتریان</a></li>
                </ul>
            </li>
           


            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                <i class="icofont-notepad fs-5"></i> <span>سفارشات</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-order">
                    <li><a class="ms-link" href="{{route('Admin.Order.orders')}}">لیست سفارشات</a></li>
                    <li><a class="ms-link" href="order-details.html">جزئیات سفارش</a></li>
                    <li><a class="ms-link" href="order-invoices.html">فاکتورهای سفارش</a></li>
                </ul>
            </li>
            
            
        </ul>
        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>
