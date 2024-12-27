@extends('frontend.layouts.base')
@section('title', 'Our Clients')

@section('content')

<section>
    <div class="w-100 position-relative" style="background: linear-gradient(0deg, rgba(11,68,50,1) 0%, rgba(197,160,64,1) 100%);">
        <div class="pg-title-wrap pt-150 pb-40 position-relative w-100 mouse_anim scroll_anim">
            {{-- <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="assets/frontend/images/ttl-bg-shp.png" alt="Title Background Shape" height="329" width="1920"> --}}
            <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/our-clients-header.png);"></div>
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100">
                    <h1>Our Clients<i class="btm-ln v2"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">Our Clients</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Title Wrap -->
    </div>
</section>


<section>
    <div class="w-100 pt-100 pb-20 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/our-clients-bg.png);"></div>
        <div class="container">
            <div class="marketing-sol-wrap position-relative w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="mckp-img pe-lg-5 tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/frontend/images/statis/our-clients.png" alt="Marketing Solution Mockup" height="561" width="670"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="text-box w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">Our <span>Clients</span></h2>
                                <i class="btm-ln bg-color3"></i>
                            </div><!-- Sec Title -->
                            <p class="mb-0">Listed below are the valued clients with whom we have had the privilege of working closely, building strong relationships, and delivering exceptional services tailored to their needs and goals.</p>
                            <div class="toggle schm-14 w-100" id="toggle">
                                <div class="toggle-item position-relative w-100">
                                    <h4 class="mb-0 position-relative"><i></i>{{ $ourClientData1->title }}</h4>
                                    <div class="toggle-content w-100">
                                        <p class="mb-0">
                                            {!! str_replace('-', '<br>-', nl2br($ourClientData1->description)) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="toggle-item position-relative w-100">
                                    <h4 class="mb-0 position-relative"><i></i>{{ $ourClientData2->title }}</h4>
                                    <div class="toggle-content w-100">
                                        <p class="mb-0">
                                            {!! str_replace('-', '<br>-', nl2br($ourClientData2->description)) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="toggle-item position-relative w-100">
                                    <h4 class="mb-0 position-relative"><i></i>{{ $ourClientData3->title }}</h4>
                                    <div class="toggle-content w-100">
                                        <p class="mb-0">
                                            {!! str_replace('-', '<br>-', nl2br($ourClientData3->description)) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Marketing Solutions Wrap -->
        </div>
    </div>
</section>

{{-- 
<section>
    <div class="w-100 pt-100 pb-20 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/about-us-bg1.png);"></div>
        <div class="container">
            <div class="innov-key-wrap position-relative w-100">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700">
                            <img class="img-fluid" src="{{ asset('storage/' . $aboutUsData1->image) }}" alt="Background About Us 1" height="527" width="527">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="text-box w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0"><span>{!! str_replace('%%', '</span> <br>', $aboutUsData1->title) !!}</h2>
                                <i class="btm-ln bg-color27"></i>
                            </div>
                            <p class="mb-0">{!! str_replace('%%', '<br><br>', nl2br($aboutUsData1->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection