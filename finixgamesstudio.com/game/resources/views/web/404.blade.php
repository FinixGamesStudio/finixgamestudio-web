@extends('web.layout.main')
@section('page-title')
{{__('Not Found')}}
@endsection

@section('content')
<section id="hero" class="hero section section-pading">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100">
                <h1 style="font-size: 8rem; color: var(--accent-color);"><span>404</span></h1>
                <h2 style="font-size: 3rem; color: #fff;">Not Found 😢</h2>
                <p style="font-size: 1.5rem; color: #666;">Oops! The page you're looking for doesn't exist.</p>
                <p style="font-size: 1.2rem; color: #999;">You might want to check the URL or return to the <a href="{{ route('home') }}" style="color: #ff4d4d; text-decoration: underline;">homepage</a>.</p>
            </div>
        </div>
    </div>
</section>
<section class="section-pading"></section>
@endsection
