@extends('frontend.layouts.base')
@section('title', 'Partners')

@section('content')

<section>
    <div class="w-100 position-relative" style="background: linear-gradient(0deg, rgba(11,68,50,1) 0%, rgba(197,160,64,1) 100%);">
        <div class="pg-title-wrap bg-color10 pt-150 pb-40 position-relative w-100 mouse_anim scroll_anim">
            <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/partners-header.png);"></div>
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100">
                    <h1>Partners <i class="btm-ln v2 bg-color27"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">Partners</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Title Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-100 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/partners-bg1.png);"></div>
        <div class="container">
         
            <div class="team-wrap w-100">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="testi-box position-relative text-center w-100">
                            <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="{{ asset('storage/' . $partnerData1->image) }}" alt="Testimonial Image 1"></div>
                            <div class="testi-info w-100">
                                <h5 class="mb-0">{{ $partnerData1->name }}</h5>
                                <span class="d-block">{{ $partnerData1->position }}</span>
                            </div>
                            <p class="mb-0">{!! str_replace('%%', '<br>', nl2br($partnerData1->description)) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="testi-box position-relative text-center w-100">
                            <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="{{ asset('storage/' . $partnerData2->image) }}" alt="Testimonial Image 1"></div>
                            <div class="testi-info w-100">
                                <h5 class="mb-0">{{ $partnerData2->name }}</h5>
                                <span class="d-block">{{ $partnerData2->position }}</span>
                            </div>
                            <p class="mb-0">{!! str_replace('%%', '<br>', nl2br($partnerData2->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div><!-- Team Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pb-100 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/partners-bg2.png);"></div>
        <div class="container">
            <div class="team-wrap w-100 pt-50">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="testi-box position-relative text-center w-100">
                            <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="{{ asset('storage/' . $partnerData3->image) }}" alt="Testimonial Image 1"></div>
                            <div class="testi-info w-100">
                                <h5 class="mb-0">{{ $partnerData3->name }}</h5>
                                <span class="d-block">{{ $partnerData3->position }}</span>
                            </div>
                            <p class="mb-0">{!! str_replace('%%', '<br>', nl2br($partnerData3->description)) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="testi-box position-relative text-center w-100">
                            <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="{{ asset('storage/' . $partnerData4->image) }}" alt="Testimonial Image 1"></div>
                            <div class="testi-info w-100">
                                <h5 class="mb-0">{{ $partnerData4->name }}</h5>
                                <span class="d-block">{{ $partnerData4->position }}</span>
                            </div>
                            <p class="mb-0">{!! str_replace('%%', '<br>', nl2br($partnerData4->description)) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="testi-box position-relative text-center w-100">
                            <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="{{ asset('storage/' . $partnerData5->image) }}" alt="Testimonial Image 1"></div>
                            <div class="testi-info w-100">
                                <h5 class="mb-0">{{ $partnerData5->name }}</h5>
                                <span class="d-block">{{ $partnerData5->position }}</span>
                            </div>
                            <p class="mb-0">{!! str_replace('%%', '<br>', nl2br($partnerData5->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div><!-- Team Wrap -->
        </div>
    </div>
</section>

@endsection