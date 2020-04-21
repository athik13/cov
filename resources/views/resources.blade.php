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
                        <h2>Resources</h2>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($resources as $resource)
                        <div class="col-sm-4 col-6">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/01.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#">Business Ueporting Rouncil Them Could Plan...</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2020</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>Rajib Ahmed</a>
                                        </div>
                                        <p>Pluoresntly customize pranci an plcentered  customer service anding strategic amerials Interacvely cordinate performe</p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn">Read More<i class="icofont-double-right"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
