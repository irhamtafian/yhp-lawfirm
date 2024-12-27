@extends('frontend.layouts.base')
@section('title', 'About Us')

@section('content')

<section>
    <div class="w-100 position-relative" style="background: linear-gradient(0deg, rgba(11,68,50,1) 0%, rgba(197,160,64,1) 100%);">
        <div class="pg-title-wrap pt-150 pb-40 position-relative w-100 mouse_anim scroll_anim">
            <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/about-us-header.png);"></div>
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100">
                    <h1>About Us <i class="btm-ln v2 bg-color27"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

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
</section>

<section>
    <div class="w-100 pt-20 pb-20 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/about-us-bg2.png);"></div>
        <div class="container">
            <div class="spclizd-dvlpmnt-wrap position-relative w-100 d-flex align-items-center">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                        <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700">
                            <img class="img-fluid" src="{{ asset('storage/' . $aboutUsData2->image) }}" alt="Background About Us 2" height="507" width="513">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="text-box w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0"><span>{!! str_replace('%%', '</span> <br>', $aboutUsData2->title) !!}</h2>
                                <i class="btm-ln bg-color27"></i>
                            </div>
                            <p class="mb-0">{!! str_replace('%%', '<br><br>', nl2br($aboutUsData2->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-100 pb-100 pt-20 bg position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/about-us-bg3.png);"></div>
        <div class="container">
            <div class="innov-key-wrap position-relative w-100">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700">
                            <img class="img-fluid" src="{{ asset('storage/' . $aboutUsData3->image) }}" alt="Background About Us 3" height="527" width="527">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="text-box w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0"><span>{!! str_replace('%%', '</span> <br>', $aboutUsData3->title) !!}</h2>
                                <i class="btm-ln bg-color27"></i>
                            </div>
                            <p class="mb-0">{!! str_replace('%%', '<br><br>', nl2br($aboutUsData3->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection