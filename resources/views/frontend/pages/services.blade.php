@extends('frontend.layouts.base')
@section('title', 'Services')

@section('content')

<section>
    <div class="w-100 position-relative" style="background: linear-gradient(0deg, rgba(11,68,50,1) 0%, rgba(197,160,64,1) 100%);">
        <div class="pg-title-wrap bg-color10 pt-150 pb-40 position-relative w-100 mouse_anim scroll_anim">
            <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/services-header.png);"></div>
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100">
                    <h1>Services<i class="btm-ln v2 bg-color27"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Title Wrap -->
    </div>
</section>

<section>
    <div class="w-100 pt-100 pb-20 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/services-bg1.png);"></div>
        <div class="container">
            <div class="spclizd-dvlpmnt-wrap position-relative w-100 d-flex align-items-center">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                        <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700">
                            <img class="img-fluid" src="assets/frontend/images/statis/services.png" alt="Background Services 1" height="507" width="513">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="text-box w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">Our Service <span>Providers</span></h2>
                                <i class="btm-ln bg-color3"></i>
                            </div>
                            <p class="mb-0">Our team of experienced professionals is dedicated to providing legal services in various areas, including:</p>
                            <ul class="list-unstyled mb-0 w-100 text-white">
                                <li>{{ $serviceData1->title }}</li>
                                <li>{{ $serviceData2->title }}</li>
                                <li>{{ $serviceData3->title }}</li>
                                <li>{{ $serviceData4->title }}</li>
                                <li>{{ $serviceData5->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-100 pb-100 pt-40 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/services-bg2.png);"></div>
        <div class="container">
            <div class="blog-wrap blog-wth-sidebar blog-spac position-relative w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-info brd-rd15">
                                <span class="post-cate d-block text-uppercase"></span>
                                <h3 class="mb-0"><a href="javascript:void(0)" title="">{{ $serviceData1->title }}</a></h3>
                                <p class="mb-0">{{ $serviceData1->description }}</p>
                                <div class="post-btm-bar d-flex flex-wrap justify-content-between align-items-center w-100">
                                </div>
                            </div>
                        </div>
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"></span>
                                <h3 class="mb-0"><a href="javascript:void(0)" title="">{{ $serviceData2->title }}</a></h3>
                                <p class="mb-0">{{ $serviceData2->description }}</p>
                                <div class="post-btm-bar d-flex flex-wrap justify-content-between align-items-center w-100">
                                </div>
                            </div>
                        </div>
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"></span>
                                <h3 class="mb-0"><a href="javascript:void(0)" title="">{{ $serviceData3->title }}</a></h3>
                                <p class="mb-0">{{ $serviceData3->description }}</p>
                                <div class="post-btm-bar d-flex flex-wrap justify-content-between align-items-center w-100">
                                </div>
                            </div>
                        </div>
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"></a></span>
                                <h3 class="mb-0"><a href="javascript:void(0)" title="">{{ $serviceData4->title }}</a></h3>
                                <p class="mb-0">{{ $serviceData4->description }}</p>
                                <div class="post-btm-bar d-flex flex-wrap justify-content-between align-items-center w-100">
                                </div>
                            </div>
                        </div>
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"></span>
                                <h3 class="mb-0"><a href="javascript:void(0)" title="">{{ $serviceData5->title }}</a></h3>
                                <p class="mb-0">{{ $serviceData5->description }}</p>
                                <div class="post-btm-bar d-flex flex-wrap justify-content-between align-items-center w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Blog Wrap -->
        </div>
    </div>
</section>
@endsection