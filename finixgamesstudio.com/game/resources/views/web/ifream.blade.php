@extends('web.layout.main')
@section('content')
    <section>
        <div class="container game-ifream">
            <iframe src="{{!empty($gameUrl) ? $gameUrl : '#' }}" scrolling="no" allowfullscreen="" width="1000" height="800" frameborder="0"></iframe>
        </div>
    </section>
@endsection