<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home')}}" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="{{asset('assets/img/favicon.png')}}" alt="">
        <h1 class="sitename">FGS.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home')}}" class="{{request()->is('/') ? 'active' : ''}}">Home<br></a></li>
          <li><a href="{{ route('about.us') }}" class="{{request()->is('about-us') ? 'active' : ''}}">About Us</a></li>
          
          <li><a href="{{route('services')}}" class="{{request()->is('services') ? 'active' : ''}}">Services</a></li>
          <li><a href="{{route('contact.us')}}" class="{{request()->is('contact-us') ? 'active' : ''}}">Contact</a></li>
          <li><a href="{{route('privacy.policy')}}" class="{{request()->is('privacy-policy') ? 'active' : ''}}">Privacy Policy</a></li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
      </div>

    </div>
  </header>