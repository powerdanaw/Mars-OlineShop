<!DOCTYPE html>
<html lang="en">

  @include('User.Layouts.head-tag')

  <body>

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>


  @include('User.Layouts.header')


  @yield('content')


  @include('User.Layouts.footer')

  @include('User.Layouts.js')

</body>

</html>
