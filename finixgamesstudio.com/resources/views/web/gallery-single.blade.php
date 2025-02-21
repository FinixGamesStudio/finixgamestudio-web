@extends('web.layout.main')
@section('page-title')
  {{ $name }}
@endsection
@section('content')

<!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>{{ !empty($name) ? ucwords($name) : 'Game' }}</h1>
              <p class="mb-0">{!! $headerShortContent !!}</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="current">{{ !empty($name) ? ucwords($name) : 'Game' }}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Gallery Details Section -->
    <section id="gallery-details" class="gallery-details section">
      <div class="container" data-aos="fade-up">
    
        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-12 position-relative ifreme-img">
            <img src="{{ !empty($bannerImage) ? $bannerImage : '#' }}" alt="Game Image" class="img-fluid">
            <div class="overlay"></div>
            <a href="{{route('play.game.ifream' , $gameSlug)}}"><button class="play-now-btn">Play Now</button></a>
          </div>
          <div class="col-lg-8" data-aos="fade-up">
              {!! $content !!}        
          </div>
          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Game information</h3>
              <ul>
                <li><strong>Category</strong> {{ !empty($category) ? $category : 'Game' }}</li>
                <li><strong>Client</strong> Finix Game Studio</li>
                <li><strong>Project date</strong> 01 March, 2019</li>
                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                <li><a href="{{route('play.game.ifream' , $gameSlug)}}" class="btn-visit align-self-start">Play Game</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Gallery Details Section -->

      
@endsection
