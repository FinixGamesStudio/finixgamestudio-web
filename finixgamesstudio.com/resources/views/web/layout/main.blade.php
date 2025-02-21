<!DOCTYPE html>
<html lang="en">

@include('web.layout.head')
<body class="index-page">

@include('web.layout.header')
  <main class="main">
    <div class="row">
      <!-- Left Side Add -->
      <div class="col-lg-2">
        <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-5918737477932362"
          data-ad-slot="8739555900"
          data-ad-format="auto"
          data-full-width-responsive="true"></ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
      </div>
      <!-- Center Content -->
      <div class="col-lg-8">
         @yield('content')
      </div>
      <!-- Right Side Add -->
      <div class="col-lg-2">
        <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-5918737477932362"
          data-ad-slot="8739555900"
          data-ad-format="auto"
          data-full-width-responsive="true"></ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
      </div>
    </div>
  </main>

  <!-- bottom_ad -->
   <div style="text-align:center; width: 100%;">

<!-- Footer Add -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5918737477932362"
     data-ad-slot="8739555900"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

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