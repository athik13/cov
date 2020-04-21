@extends('layouts.app')

@section('content')

<section class="page-header">
    <div class="page-header-shape">
        <img src="/assets/images/banner/01.png" alt="banner-shape">
    </div>
    <div class="container">

    </div>
</section>

<section class="about-section style-2 bg-f9 padding-tb">
    <div class="about-shape">
        <img src="/assets/images/about/shape/01.png" alt="about-shape">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center flex-row-reverse">
            <div class="col-lg-12 col-12">
                <div class="widget widget-post">
                    <div class="widget-header">
                        <h2>Recent Posts</h2>
                    </div>
                    <ul class="widget-wrapper lab-ul">
                        @foreach ($newsAll as $news)
                        <li class="d-flex flex-wrap justify-content-between" style="font-size: 20px">
                            <div class="post-thumb">
                                <a href="{{ $news->url }}"><img src="{{ $news->image_url }}" alt="product"></a>
                            </div>
                            <div class="post-content">
                                <a href="{{ $news->url }}"><h5>{{ $news->title }}</h5></a>
                                <p>{{ $news->date }} - {{ $news->auth }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
