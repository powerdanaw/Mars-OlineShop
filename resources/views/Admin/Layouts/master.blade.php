<!doctype html>
<html class="no-js" lang="en" dir="ltr">

    @include('Admin.Layouts.head-tag')

    <body class="rtl_mode" style>

        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

        <div id="ebazar-layout" class="theme-blue">

        
            @include('Admin.Layouts.sidebar')

            <div class="main px-lg-4 px-md-4">

                @include('Admin.Layouts.header')

                @yield('content')

                @include('Admin.Layouts.setting')
              
            </div>
    
        </div>

        @include('Admin.Layouts.js')

    </body>

</html>