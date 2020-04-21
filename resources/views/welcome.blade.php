@extends('layouts.app')

@section('content')

<!-- Banner Section start here -->
<section class="banner-section pb-0">
    <div class="banner-area">
        <div class="container">
            <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-12">
                    <div class="content-part text-center">
                        <div class="section-header">
                            <h2>ކޮވިޑް 19 ގެ އެންމެ ފަހުގެ މަޢުލޫމާތު</h2>
                            <h3>{{ $hpa->local->surveillance[0]->dhivehi_label }}</h3>
                            <h2 class="count-people">{{ $hpa->local->surveillance[0]->statistic }}</h2>
                            <div class="header-btn" style="">
                                <a href="https://dashboard.covidmv.live" class="lab-btn"><i class="icofont-chart"></i> <span style="font-size: 20px">ސްޓްޓިސްޓިކްސް</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-wrapper">
                        <div class="banner-thumb">
                            <img src="/assets/images/banner/01.png" alt="lab-banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section ending here -->

<!-- corona count section start here -->
<section class="corona-count-section bg-corona padding-tb pt-0">
    <div class="container">
        <div class="corona-wrap">
            <div class="corona-count-top wow fadeInUp" data-wow-delay="0.3s">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/03.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[0]->statistic }}</h3>
                                    <p>{{ $hpa->local->surveillance[0]->dhivehi_label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/03.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[1]->statistic }}</h3>
                                    <p>{{ $hpa->local->surveillance[1]->dhivehi_label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/03.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[2]->statistic }}</h3>
                                    <p>{{ $hpa->local->surveillance[2]->dhivehi_label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/06.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[3]->statistic }}</h3>
                                    <p>{{ $hpa->local->surveillance[3]->dhivehi_label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/01.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[4]->statistic }}</h3>
                                    <p>{{ $hpa->local->surveillance[4]->dhivehi_label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/05.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[5]->statistic }}</h3>
                                    <p>ރާއްޖޭގައި ފަރުވާ ލިބޭ މީހުން</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/05.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[6]->statistic }}</h3>
                                    <p>ބޭރުގައި ފަރުވާ ލިބޭ މީހުން </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/02.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[7]->statistic }}</h3>
                                    <p>އައިސޮލޭޝަން ގައި</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/02.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[8]->statistic }}</h3>
                                    <p>{{ $hpa->local->surveillance[8]->dhivehi_label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="/assets/images/corona/03.png" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 class="count-number">{{ $hpa->local->surveillance[9]->statistic }}</h3>
                                    <p> {{ $hpa->local->surveillance[9]->dhivehi_label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="corona-count-bottom">
                <div class="row justify-content-center align-items-center     flex-row-reverse">
                    <div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="ccb-thumb">
                            <a href="https://www.youtube.com/embed/Z9fQTS_kEqw" data-rel="lightcase" class="ccb-video"><i class="icofont-ui-play"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
                            <img src="/assets/images/corona/01.jpg" alt="corona">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="ccb-content">
                            <h2>ކޮވިޑް 19 އަކީ ކޮބާ ؟</h2>

                            <p style="font-size: 20px;">ކޮވިޑް-19 ނުވަތަ އާންމު ނަމުންނަމަ ކޮރޯނާ ވައިރަސްއަކީ މުޅިން އަލަށް 2019 ވަނަ އަހަރު ފެނިފައިވާ ވައިރަސްއެކެވެ. ކޮރޯނާ ވައިރަސްގެ އާއިލާއަށް ނިސްބަތްވާ މިވައިރަސް އަކީ އެވައިރަސް އަކަށް ވެކްސިން އެއް ނުވަތަ ސީދާ މިބައްޔަށް ފަރުވާއެއް އަދި ނުލިބޭ ބައްޔެކެވެ.

ޗައިނާގެ ސިޓީއެއް ކަމަށްވާ ވޫހާންގެ މާރުކޭޓް ސަރަހައްދުން ފެތުރެން ފެށި ކަމަށް ބެލެވޭ މި ވައިރަސް އަކީ ކޮރޯނާ އާއިލާގެ އެހެން ވައިރަސްތައް ފަދައިން ކޮންމެވެސް ކަހަލަ ޖަނަވާރެއްގެ ފަރާތުން އުފެދިފައިވާ ވައިރަސްއެއް ކަމަށްވެއެވެ.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- corona count section ending here -->

<!-- Service Section Start Here -->
<section class="service-section bg-service padding-tb">
    <div class="service-shape">
        <div class="shape shape-1">
            <img src="/assets/images/service/shape/01.png" alt="service-shape">
        </div>
        <div class="shape shape-2">
            <img src="/assets/images/service/shape/01.png" alt="service-shape">
        </div>
    </div>
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>ކޮވިޑް 19 ގެ އަލާމާތައް</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="/assets/images/service/01.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>ކެެއްސާ ކިބިހި އެޅުން</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item text-center">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="/assets/images/service/02.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>ގަދަޔަށް ހުންއައުން</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="/assets/images/service/03.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>ބޮލުގައި ރިއްސުން</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item text-center">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="/assets/images/service/04.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>ނޭވާ ކުރުވުން</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="/assets/images/service/05.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>ވަރުބަލިވުން</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item text-center">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="/assets/images/service/06.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>ކަރުގައި ރިއްސުން</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section Ending Here -->


<!-- Team Member Section Start here -->
<section id="clinics">
    <div class="team-section bg-team padding-tb">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h2>ކްލިނިކްތައް</h2>
                <p style="font-size: 20px;"> ކޮވިޑް 19 ގެ އެއްވެސް އަލާމަތެއް ފެނިއްޖެނަމަ، އެއްވެސް ލަސްކުރުމެއްނެތި އެންމެ ކައިރީ ކްލިނިކަށް ދުރުވާށެވެ</p>
            </div>
            <div class="team-area">
                <div class="row justify-content-center align-items-stretch">
                    <?php $i=1 ?>

                    @foreach ($hpa->local->clinics as $clinic)
                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="team-item-inner">
                                <div class="team-thumb">
                                    <img src="/assets/images/team/0{{ $i }}.jpg" alt="team-membar">
                                </div>
                                <div class="team-content">
                                    <h5 class="member-name">{{ $clinic->dhivehi_name }}</h5>
                                    <p class="member-details">
                                        {!! $clinic->dhivehi_description !!}
                                    </p>
                                    <ul class="icon-style-list lab-ul">
                                        <li style="padding-top: 10px; padding-bottom: 10px;">
                                            <span class="text-center">{!! $clinic->open_hours_dhivehi !!}</span>
                                        </li>
                                        <li class="text-center" style="padding-top: 10px; padding-bottom: 10px;">
                                            <a href="{{ $clinic->location }}" class="btn btn-info" target="_blank">Google Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Member Section Ending here -->


<!-- safe actions section start here -->
<section class="safe-actions padding-tb bg-action" id="safe-actions">
    <div class="action-shape">
        <img src="/assets/images/safe/shape/01.png" alt="action-shape">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="sa-thumb-part">
                    <div class="safe-thumb">
                        <img src="/assets/images/safe/01.jpg" alt="safe-actions">
                        <div class="shape-icon">
                            <div class="sa-icon sa-green saicon-1">
                                <img src="/assets/images/safe/shape/green/01.png" alt="green-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-green saicon-2">
                                <img src="/assets/images/safe/shape/green/02.png" alt="green-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-green saicon-3">
                                <img src="/assets/images/safe/shape/green/03.png" alt="green-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-green saicon-4">
                                <img src="/assets/images/safe/shape/green/04.png" alt="green-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-green saicon-5">
                                <img src="/assets/images/safe/shape/green/05.png" alt="green-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-red saicon-6">
                                <img src="/assets/images/safe/shape/red/01.png" alt="red-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-red saicon-7">
                                <img src="/assets/images/safe/shape/red/02.png" alt="red-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-red saicon-8">
                                <img src="/assets/images/safe/shape/red/03.png" alt="red-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-red saicon-9">
                                <img src="/assets/images/safe/shape/red/04.png" alt="red-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                            <div class="sa-icon sa-red saicon-10">
                                <img src="/assets/images/safe/shape/red/05.png" alt="red-signal">
                                <div class="saicon-content">
                                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="sa-content-part">
                    <h2>ރައްކާތެރިވުމަށް އެޅޭނެ ފިޔަވަޅު</h2>

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="sa-title">
                                <h6><i class="icofont-checked"></i>ކުރަން ޖެހޭނެ ކަންތައް</h6>
                            </div>
                            <ul class="lab-ul">
                                <li><i class="icofont-check-circled"></i>ގޭ ތެރޭ ތިބުން</li>
                                <li><i class="icofont-check-circled"></i>މާސްކް އެޅުން</li>
                                <li><i class="icofont-check-circled"></i>ގިނައިން އަތް ދޮވުން</li>
                                <li><i class="icofont-check-circled"></i>އަމިއްލައަށް ކެއްކުން</li>
                                <li><i class="icofont-check-circled"></i>ބަލިވާހެން ހީވާނަމަ އަވަހަށް ޑރ އަކަށް ދެކުން</li>
                                <li><i class="icofont-check-circled"></i>މީހުން އެއްވާ ތަންތަނަށް ނުދިޔުން</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- safe actions section ending here -->


<!-- faq section start here -->
<section class="faq-section bg-faq padding-tb">
    <div class="faq-shape">
        <img src="/assets/images/faq/shape/01.png" alt="action-shape">
    </div>
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>ރާއްޖެއަށް ދަތުރުފަތުރު ކުރުމުގައި އަޅާފައިވާ ފިޔަވަޅުތައް</h2>
            <p style="font-size: 20px;"> އެއްވެސް ފަސިންޖަރަކު މިއިންތަނަކުން ފުރައިގެން ނުވަތަ އެތަނުގައި/އެޤައުމުގައި ޓްރާންސްޒިޓްވެފައިވާ ކަމަށް އެ ފަސިންޖަރެއް އެންމެފަހުން ދަތުރުކުރި ތަންތަނުގެ ލިސްޓުގައި ހިމެނޭނަމަ އެ ފަސިންޖަރަކު ރާއްޖެ އެތެރެވުމުގެ ހުއްދައެއް ނުދެވޭނެއެވެ.
                ކަންމިހެން އޮތްނަމަވެސް، ދިވެހިންނާއި ދިވެއްސެއްގެ އަނބިންނާއި ފިރިން ރާއްޖެ އެތެރެވުމަށް ހުއްދަކުރެވޭނެއެވެ. ނަމަވެސް މިގޮތަށް ހުއްދަކުރާއިރު އެފަރާތްތައް ކަރަންޓީނުކުރުންފަދަ އަޅަނަޖެހޭ ފިޔަވަޅުތައް އެޅޭނެއެވެ.</p>
        </div>
        <div class="section-wrapper wow fadeInUp" data-wow-delay="0.4s">
            <div class="row justify-content-center">
                <ul class="accordion lab-ul" style="width: 50%; font-size: 20px !important;">
                <div class="row">
                    @foreach ($hpa->local->travel_bans as $ban)
                    <div class="col-lg-6 col-sm-8 col-12">
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h4>{{ $ban->dhivehi_country }}</h4>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>{!! $ban->dhivehi_details !!}</p>
                            </div>
                        </li>
                    </div>
                    @endforeach
                </div>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- faq section ending here -->

<!-- Blog Section Start Here -->
@if (!$news3->isEmpty())
<section class="blog-section bg-blog padding-tb" id="news-section">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>ފަހުގެ ހަބަރުތައް</h2>
            <p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                @foreach ($news3 as $news)
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="post-item" style="box-shadow: 5px 5px 10px;">
                        <div class="post-item-inner">
                            <div class="post-thumb" style="">
                                <a href="{{ $news->url }}"><img src="{{ $news->image_url }}" alt="lab-blog"></a>
                            </div>
                            <div class="post-content" style="background: #d2f0d2 !important; box-shadow: inset 0 0 3px;">
                                <h5><a href="{{ $news->url }}">{{ $news->title }}</a></h5>
                                <div class="author-date">
                                    <a href="{{ $news->url }}" class="date"><i class="icofont-calendar" style="color: #008d01;"></i> {{ $news->date }} </a>
                                    <br>
                                    <a href="{{ $news->url }}" class="admin"><i class="icofont-ui-user" style="color: #008d01;"></i> {{ $news->auth }} </a>
                                </div>
                                <div class="post-footer">
                                    <a href="{{ $news->url }}" class="text-btn">Read More<i class="icofont-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Blog Section Ending Here -->
@endif

<!-- Sponsor Section Start Here -->
{{-- <div class="sponsor-section">
    <div class="container">
        <div class="section-wrapper wow fadeInUp" data-wow-delay="0.3s">
            <div class="sponsor-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/assets/images/sponsor/01.png" alt="lab-sponsor"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/assets/images/sponsor/02.png" alt="lab-sponsor"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/assets/images/sponsor/03.png" alt="lab-sponsor"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/assets/images/sponsor/04.png" alt="lab-sponsor"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/assets/images/sponsor/05.png" alt="lab-sponsor"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/assets/images/sponsor/06.png" alt="lab-sponsor"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Sponsor Section Ending Here -->

@endsection
