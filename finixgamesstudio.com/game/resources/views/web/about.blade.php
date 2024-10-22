@extends('web.layout.main')
@section('page-title')
  {{ __('About Us') }}
@endsection
@section('content')
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>About Us</h1>
              <p class="mb-0">With a passion for creating engaging games and a dedication to quality, Chintan is focused on driving innovation and excellence in every project he undertakes.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li class="current">About Us</li>

          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section section-pading">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center align-items-center">
          <div class="col-lg-6">
            <img src="{{ asset('assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content">
            <p class="py-3">
              Finix Game Studio is a leading game development company driven by innovation and creativity. Founded by industry professionals, including experienced Unity 3D Developer Chintan Variya, we specialize in creating engaging gaming experiences across multiple platforms, including Android and iOS.            </p>
            <p class="m-0">
              At Finix, our team is dedicated to delivering high-quality games that captivate players. Chintan, as a Team Leader, brings extensive expertise in game optimization, integration of React with Unity, and the development of real-money gaming solutions. His leadership fosters a collaborative environment where creativity thrives.
            </p><br>
            <p class="m-0">
              With a strong focus on performance and user experience, we have successfully developed a variety of projects, including multiplayer card games, 3D racing games, and educational titles. Our commitment to using cutting-edge technology and best practices in game development ensures that we stay at the forefront of the industry.
            </p>
            <p class="mb-0">
              At Finix Game Studio, we believe in continuous learning and improvement. We regularly engage in knowledge sharing and training, empowering our team to push the boundaries of what’s possible in gaming.
            </p>
            <p class="mb-0">Join us on our journey as we create immersive and exciting games that inspire and entertain players around the world.</p>
          </div>
        </div>
      </div>
    </section>
@endsection
