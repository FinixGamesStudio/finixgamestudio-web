@extends('web.layout.main')
@section('page-title')
{{ __('Home') }}
@endsection
@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100">
                <h2><span>Finix Games Studio</span></h2>
                <p>We are a team of talented game developers dedicated to creating engaging and entertaining experiences
                    for everyone! 🎮 Our passion for game design drives us to craft unique gameplay mechanics,
                    captivating visuals, and unforgettable moments.</p>
                <p>Explore our diverse range of games, including classic card games like Blackjack and Spades, as well
                    as educational adventures for kids such as Learn Farm Animals. Whether you're navigating the
                    challenges of Snake or breaking through walls in Wall Breaker, there's something for everyone. Dive
                    into rhythmic fun with Tabla or sharpen your mind with Fill the Line – our games are designed to
                    entertain and inspire!</p>
                <p>Join us on this exciting gaming journey and discover the thrill of creativity and fun with Finix
                    Games Studio!</p>
            </div>
        </div>
    </div>
</section><!-- /Hero Section -->

<!-- Gallery Section -->
<section id="gallery" class="gallery section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-2 col-lg-3 col-md-6 ">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'blitz21')}}">
                        <img src="{{asset('assets/img/games/01.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'blackjack21')}}">
                        <img src="{{asset('assets/img/games/02.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'callbreak')}}">
                        <img src="{{asset('assets/img/games/03.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'spades')}}">
                        <img src="{{asset('assets/img/games/04.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->


            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'learnframanimal')}}">
                        <img src="{{asset('assets/img/games/06.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'snakes')}}">
                        <img src="{{asset('assets/img/games/07.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'wordconnect')}}">

                        <img src="{{asset('assets/img/games/10.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'roulettecasino')}}">

                        <img src="{{asset('assets/img/games/11.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->
            
            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'filltheline')}}">
                        <img src="{{asset('assets/img/games/08.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'bouncingball')}}">

                        <img src="{{asset('assets/img/games/09.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->



            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="gallery-item h-100">
                    <a href="{{route('play.game' , 'tablaclassics')}}">
                        <img src="{{asset('assets/img/games/05.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

        </div>

    </div>

</section><!-- /Gallery Section -->

<section class="section-pading"></section>
@endsection