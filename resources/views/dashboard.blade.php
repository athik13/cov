@extends('layouts.app')

@section('content')

<!-- Page Header Section Start Here -->
<section class="page-header">
    <div class="page-header-shape">
        <img src="/assets/images/banner/home-2/01.jpg" alt="banner-shape">
    </div>
    <div class="container">
        <div class="page-title">
            <h2>Mapping the Coronavirus Outbreak</h2>
            <ul class="breadcrumb lab-ul">
                <li><a href="index.html">Home</a></li>
                <li>Coronavirus Outbreak</li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- corona count section start here -->
<section class="corona-count-section pt-0 padding-tb">
    <div class="container">
        <div class="corona-wrap">
            <iframe src="https://dashboard.covidmv.live" width="100%" height="1000vh" id="dashboard-iframe" ></iframe>
        </div>
    </div>
</section>
<!-- corona count section ending here -->

@endsection
