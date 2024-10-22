@extends('web.layout.main')
@section('page-title')
  {{__('Service') }}
@endsection
@section('content')
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Services</h1>
            <p class="mb-0">"Expertly Crafting Engaging Games with Comprehensive Unity Development and Optimization Skills."</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li class="current">Services</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
    <!-- Services Section -->
    <section id="services" class="services section section-pading">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <h4>Unity Games Development</h4>
              <p>At Finix Game Studio, we specialize in creating immersive 2D and 3D gaming experiences using Unity. Our expert team harnesses the power of this versatile engine to develop engaging gameplay mechanics, stunning visuals, and intuitive user interfaces that captivate players and keep them coming back for more.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Unity WebGL for Websites</a></h4>
              <p>We bring your games to the web with Unity WebGL, allowing seamless integration of interactive experiences directly into your website. This technology enables players to enjoy high-quality games without the need for downloads, enhancing accessibility and increasing player engagement.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Native Plugin Implementation</a></h4>
              <p>To expand the capabilities of your games, we offer native plugin implementation. This allows us to integrate custom features and functionalities tailored to your specific requirements, ensuring that your game stands out with unique offerings that enhance user experience.</p>
            </div>
          </div><!-- End Service Item -->
       
          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Proficient in C, C++, and C#</a></h4>
              <p>Our development team possesses strong programming skills in C, C++, and C#. This deep knowledge enables us to write efficient, high-performance code, ensuring that your game runs smoothly across various platforms while maximizing performance and stability.</p>
            </div>
          </div><!-- End Service Item -->

                 
          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Node.js Expertise</a></h4><p>Finix Game Studio leverages Node.js for building scalable and high-performance backend solutions. This allows us to create robust multiplayer environments and real-time applications that can handle a large number of concurrent players, delivering a seamless gaming experience.
              </p>
            </div>
          </div><!-- End Service Item -->

                        
          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Socket.io Proficiency</a></h4>
              <p>With expertise in Socket.io, we enable real-time communication in your games. This technology is crucial for multiplayer interactions, allowing players to connect and communicate instantly, creating a more engaging and interactive gaming environment.
              </p>
            </div>
          </div><!-- End Service Item -->


                        
          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">API Integration</a></h4>
              <p>Our team is well-versed in API integration, allowing us to enhance your game’s functionality by connecting to external services. Whether it’s integrating payment gateways, social media sharing, or third-party analytics, we ensure smooth and efficient connections that add value to your game.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Asset Bundle Management              </a></h4>
              <p>Our team is well-versed in API integration, allowing us to enhance your game’s functionality by connecting to external services. Whether it’s integrating payment gateways, social media sharing, or third-party analytics, we ensure smooth and efficient connections that add value to your game.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Game Optimization and APK Size Reduction</a></h4>
              <p>We understand the importance of performance in gaming. Our optimization strategies focus on enhancing gameplay performance while significantly reducing APK size. This ensures your game is not only visually stunning but also lightweight and fast-loading, providing a better user experience across all devices.
              </p>
            </div>
          </div><!-- End Service Item -->


        </div>

      </div>

    </section><!-- /Services Section -->
@endsection
