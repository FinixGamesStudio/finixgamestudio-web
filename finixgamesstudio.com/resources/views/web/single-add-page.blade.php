<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamesn</title>
    <!-- <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/single-page-css.css') }}" rel="stylesheet">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5918737477932362"
     crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header id="header" class="header d-flex align-items-center sticky-top">
          <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('home')}}" class="logo d-flex align-items-center me-auto me-xl-0">
              <img src="{{asset('assets/img/favicon.png')}}" alt="">
              <h1 class="sitename">FGS.</h1>
            </a>
          </div>
        </header>   
        <div>
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
        <div class="game-section">
          <div class="row play-game-section">
            <div class="col-lg-5 alert alert-info">
                <img src="{{ asset('assets/img/games/01.png') }}" width="100px" height="100px" alt="">
                <h6 class="text-info game-icon-name">Blitz21</h6>
                <a href="{{ asset('assets/webgl-21-blitz/index.html') }}"><button class="btn btn-info text-white mr-2">Play Game</button></a>
              </div>
            <div class="col-lg-5 alert alert-info">
              <img src="{{ asset('assets/img/games/02.png') }}" width="100px" height="100px" alt="">
              <h6 class="text-info game-icon-name">Blackjack21</h6>
              <a href="{{ asset('assets/webgl-21-black-jack/index.html') }}"><button class="btn btn-info text-white mr-2">Play Game</button></a>
              </div>
            <div class="col-lg-5 alert alert-info mr-2">
              <img src="{{ asset('assets/img/games/03.png') }}" width="100px" height="100px" alt="">
              <h6 class="text-info game-icon-name">Call Break</h6>
              <a href="{{ asset('assets/webgl-call-break/index.html') }}"><button class="btn btn-info text-white mr-2">Play Game</button></a>
            </div>
            <div class="col-lg-5 alert alert-info mr-2">
              <img src="{{ asset('assets/img/games/04.png') }}" width="100px" height="100px" alt="">
              <h6 class="text-info game-icon-name">Spades</h6>
              <a href="{{ asset('assets/webgl-spades/index.html') }}"><button class="btn btn-info text-white mr-2">Play Game</button></a>
            </div>
            <div class="col-lg-5 alert alert-info mr-2">
              <img src="{{ asset('assets/img/games/05.png') }}" width="100px" height="100px" alt="">
              <h6 class="text-info game-icon-name">Tabla Classics</h6>
              <a href="#"><button class="btn btn-info text-white mr-2">Play Game</button></a>
            </div>
            <div class="col-lg-5 alert alert-info mr-2">
              <img src="{{ asset('assets/img/games/06.png') }}" width="100px" height="100px" alt="">
              <h6 class="text-info game-icon-name">Learn Fram Animal</h6>
              <a href="{{ asset('assets/webgl-learning-animal/index.html') }}"></a><button class="btn btn-info text-white mr-2">Play Game</button>
            </div>
          </div>
        </div>
        <div>
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
        <div class="game-section">
          <div class="row play-game-section">
            <div class="col-lg-5 alert alert-info">
                <img src="{{ asset('assets/img/games/07.png') }}" width="100px" height="100px" alt="">
                <h5 class="text-info game-icon-name">Snakes</h5>
               <a href="{{ asset('assets/webgl-snake-offline/index.html') }}"><button class="btn btn-info text-white mr-2">Play Game</button></a> 
              </div>
            <div class="col-lg-5 alert alert-info">
              <img src="{{ asset('assets/img/games/08.png') }}" width="100px" height="100px" alt="">
              <h5 class="text-info game-icon-name">Fill The Line</h5>
              <a href="#"><button class="btn btn-info text-white mr-2">Play Game</button></a>
            </div>
            <div class="col-lg-5 alert alert-info mr-2">
              <img src="{{ asset('assets/img/games/09.png') }}" width="100px" height="100px" alt="">
              <h5 class="text-info game-icon-name">Bouncing Ball</h5>
              <a href="#"><button class="btn btn-info text-white mr-2">Play Game</button></a>
            </div>
            <div class="col-lg-5 alert alert-info mr-2">
              <img src="{{ asset('assets/img/games/10.png') }}" width="100px" height="100px" alt="">
              <h5 class="text-info game-icon-name">Word Connect</h5>
              <a href="{{ asset('assets/webgl-word-connect/index.html') }}"><button class="btn btn-info text-white mr-2">Play Game</button></a>
            </div>
            <div class="col-lg-5 alert alert-info mr-2">
              <img src="{{ asset('assets/img/games/11.png') }}" width="100px" height="100px" alt="">
              <h5 class="text-info game-icon-name">Roulette Casino</h5>
              <a href="{{ asset('assets/webgl-roulette/index.html') }}"><button class="btn btn-info text-white mr-2">Play Game</button></a>
            </div>
          </div>
        </div><br><br>
        <div class="privacy-policy">
            <a href="{{ route('privacy.policy') }}" class="text-decoration">Privacy Policy</a>
        </div>
        <footer id="footer" class="footer">
          <div class="container">
            <div class="copyright text-center ">
              <p>© <span>Copyright All Rights Reserved</span></p>
            </div>
          </div>
        </footer>
      </div>
</body>
</html>