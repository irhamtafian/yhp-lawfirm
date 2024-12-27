@extends('frontend.layouts.base')
@section('title', 'Contact')

@section('content')

<section>
    <div class="w-100 position-relative" style="background: linear-gradient(0deg, rgba(11,68,50,1) 0%, rgba(197,160,64,1) 100%);">
        <div class="pg-title-wrap pt-150 pb-40 position-relative w-100 mouse_anim scroll_anim">
            <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/contact-header.png);"></div>
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100">
                    <h1>Contact Us <i class="btm-ln v2 bg-color29"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Title Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-90 pb-100 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/contact-bg.png);"></div>
        <div class="container">
            <div class="contact-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-5 col-sm-12 col-lg-4">
                        <div class="get-in-touch-wrap bg-color11 brd-rd20 mt-40 position-relative overflow-hidden w-100">
                            <h2 class="mb-0">Get in Touch</h2>
                            <div class="contact-info-box mt-40 d-flex flex-wrap w-100">
                                <i style="color: #c5a040"><a data-feather="map"></a></i>
                                <div class="contact-info-inner">
                                    <h5 class="mb-0">Address:</h5>
                                    <p class="mb-0">{{ $contact->location }}</p>
                                </div>
                            </div>
                            <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                <i style="color: #c5a040"><a data-feather="mail"></a></i>
                                <div class="contact-info-inner">
                                    <h5 class="mb-0">Mail:</h5>
                                    <a href="mailto:{{ $contact->email }}" title="">{{ $contact->email }}</a>
                                </div>
                            </div>
                            <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                <i style="color: #c5a040"><a data-feather="phone"></a></i>
                                <div class="contact-info-inner">
                                    <h5 class="mb-0">Phone:</h5>
                                    <p class="mb-0">{{ $contact->phone }}</p>
                                </div>
                            </div>
                            <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                <i style="color: #c5a040"><a data-feather="instagram"></a></i>
                                <div class="contact-info-inner">
                                    <h5 class="mb-0">Instagram:</h5>
                                    <a href="https://www.instagram.com/{{ $contact->instagram }}/" target="_blank" title="">{{ $contact->instagram }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-lg-8">
                        <div class="contact-form-wrap mt-40 w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">Send a Message</h2>
                                <i class="btm-ln bg-color29"></i>
                            </div><!-- Sec Title -->
                            @if (session('success'))
                            <div class="">
                                <div class="alert alertstyle2 mb-30 alert-dismissible d-flex align-items-center flex-wrap fade show brd-rd15">
                                    <i class="flaticon-check-mark-black-outline"></i>
                                    <div class="alert-inner-info">
                                        <h4 class="alert-heading mb-0">Success</h4>
                                        <p class="mb-0">{{ session('success') }}</p>
                                    </div>
                                    <button type="button" class="close rounded-circle" data-bs-dismiss="alert" aria-label="Close"><i class="flaticon-delete"></i></button>
                                </div>
                            </div>
                            @endif

                            @if (session('error'))
                            <div class="">
                                <div class="alert alert-danger mb-30 alert-dismissible d-flex align-items-center flex-wrap fade show brd-rd15">
                                    <i class="flaticon-delete"></i>
                                    <div class="alert-inner-info">
                                        <h4 class="alert-heading mb-0">Error Message</h4>
                                        <p class="mb-0">{{ session('error') }}</p>
                                    </div>
                                    <button type="button" class="close rounded-circle" data-dismiss="alert" aria-label="Close"><i class="flaticon-delete"></i></button>
                                </div>
                            </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="fname" type="text" name="name" placeholder="Name *" required>
                                            <p class="text-white" style="color: white; font-style: italic; background-color: red; border-radius: 10px; padding: 0 10px; margin-top: 5px;">{{ $errors->first('name') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="lname" type="email" name="email" placeholder="Email *" required>
                                            <p class="text-white" style="color: white; font-style: italic; background-color: red; border-radius: 10px; padding: 0 10px; margin-top: 5px;">{{ $errors->first('email') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box w-100">
                                            <textarea class="contact_message" name="message" placeholder="Message *" required></textarea>
                                            <p class="text-white" style="color: white; font-style: italic; background-color: red; border-radius: 10px; padding: 0 10px; margin-top: 5px;">{{ $errors->first('message') }}</p>
                                        </div>
                                        <div class="field-btn w-100">
                                            <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Send A Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div><!-- Contact Wrap -->
            <div class="contact-map w-100 overflow-hidden mt-50 brd-rd20">
                <iframe src="{{ $contact->gmaps }}"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection