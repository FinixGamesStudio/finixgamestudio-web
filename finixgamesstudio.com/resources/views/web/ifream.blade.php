@extends('web.layout.main')
@section('content')
    <section>
        <div class="container game-ifream">
            <iframe src="{{!empty($gameUrl) ? $gameUrl : '#' }}" alt="" scrolling="no" allowfullscreen="" width="100%" height="100%" frameborder="0">
            </iframe>
        </div>
    </section>
@endsection