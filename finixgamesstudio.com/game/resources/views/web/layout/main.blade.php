<!DOCTYPE html>
<html lang="en">

@include('web.layout.head')
<body class="index-page">

@include('web.layout.header')
  <main class="main">
    @yield('content')
  </main>
  @include('web.layout.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="line"></div>
  </div>

  @include('web.layout.scripts')


</body>

</html>