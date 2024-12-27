@extends('frontend.layouts.base')
@section('title', 'Detail')

@section('content')

<section>
    <div class="w-100 position-relative">
        <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
            <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="{{ asset('assets/frontend/images/ttl-bg-shp.png') }}" alt="Title Background Shape" height="329" width="1920">
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100">
                    <h1>Articles <i class="btm-ln v2 bg-color9"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/articles" title="Home">Articles</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Title Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-100 pb-120 position-relative">
        <div class="container">
            <div class="post-detail-wrap position-relative w-100">
                <div class="post-detail-img w-100">
                    <img class="img-fluid w-100" src="{{ asset('assets/frontend/images/resources/blog-detail-img.jpg') }}" alt="Blog Detail Image" height="576" width="1024">
                </div>
                <div class="post-detail-desc w-100">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nunc iaculis lobortis. Vestibulum pretium, sapien eget fermentum feugiat, ligula turpis viverra enim, eget luctus nisi nunc hendrerit lorem. Mauris vitae nisl sed purus mattis tincidunt vitae eget nisl. Phasellus semper lorem sed porttitor tempor. Vestibulum blandit at tortor non faucibus. Cras sit amet lorem convallis, scelerisque purus et, elementum ligula.</p>
                    <p class="mb-0">Sed laoreet pharetra magna eu gravida. Nullam massa magna, hendrerit id consequat vitae, semper in sapien. Vivamus sodales dolor quis ipsum imperdiet, nec tempor orci interdum. Nunc facilisis neque id semper ullamcorper. Nam ac faucibus arcu, facilisis finibus urna. Integer pulvinar nulla sit amet ipsum facilisis, sit amet placerat orci pretium. Fusce eget enim maximus, mollis quam vel, sagittis augue.</p>
                    <div class="post-detail-gal w-100">
                        <div class="row mrg15">
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="post-detail-gal-item position-relative overflow-hidden w-100">
                                    <a href="{{ asset('assets/frontend/images/resources/post-detail-gal-img1.jpg') }}" data-fancybox="gal" title=""><img class="img-fluid w-100" src="{{ asset('assets/frontend/images/resources/post-detail-gal-img1.jpg') }}" alt="Post Detail Gallery Image 1"></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="post-detail-gal-item position-relative overflow-hidden w-100">
                                    <a href="{{ asset('assets/frontend/images/resources/post-detail-gal-img2.jpg') }}" data-fancybox="gal" title=""><img class="img-fluid w-100" src="{{ asset('assets/frontend/images/resources/post-detail-gal-img2.jpg') }}" alt="Post Detail Gallery Image 2"></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="post-detail-gal-item position-relative overflow-hidden w-100">
                                    <a href="{{ asset('assets/frontend/images/resources/post-detail-gal-img3.jpg') }}" data-fancybox="gal" title=""><img class="img-fluid w-100" src="{{ asset('assets/frontend/images/resources/post-detail-gal-img3.jpg') }}" alt="Post Detail Gallery Image 3"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">Nullam massa magna, hendrerit id consequat vitae, semper in sapien. Vivamus sodales dolor quis ipsum imperdiet, nec tempor orci interdum. Nunc facilisis neque id semper ullamcorper. Nam ac faucibus arcu, facilisis finibus urna. Integer pulvinar nulla sit amet ipsum facilisis, sit amet placerat orci pretium. Fusce eget enim maximus, mollis quam vel, sagittis augue.</p>
                    <p class="mb-0">Pellentesque venenatis quis elit id maximus. In ligula tellus, placerat ut lobortis ut, tempus commodo felis. Quisque porttitor accumsan neque, accumsan bibendum risus maximus vel. Donec a congue sem. Phasellus venenatis gravida lectus, sed pharetra ex laoreet vel.</p>
                </div>
                <div class="post-nav w-100 d-flex flex-wrap justify-content-between">
                    <div class="post-nav-item post-prev">
                        <a class="d-block" href="javascript:void(0);" title="">
                            <div class="post-nav-item d-flex flex-wrap align-items-center">
                                <img class="img-fluid" src="{{ asset('assets/frontend/images/resources/post-prev-img.jpg') }}" alt="Post Prev Image">
                                <div class="post-nav-item-info">
                                    <span>Prev Post</span>
                                    <h5 class="mb-0">Creative solutions</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-nav-item post-next">
                        <a class="d-block" href="javascript:void(0);" title="">
                            <div class="post-nav-item d-flex flex-wrap align-items-center">
                                <div class="post-nav-item-info">
                                    <span>Next Post</span>
                                    <h5 class="mb-0">Gallery</h5>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/frontend/images/resources/post-next-img.jpg') }}" alt="Post Next Image">
                            </div>
                        </a>
                    </div>
                </div><!-- Post Navigation -->
                <div class="related-posts-wrap mt-45 mb-60 w-100">
                    <div class="sec-title w-100 position-relative">
                        <h2 class="mb-0">Related Posts</h2>
                        <i class="btm-ln bg-color3"></i>
                    </div><!-- Sec Title -->
                    <div class="blog-wrap position-relative w-100">
                        <div class="row post-caro">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="post-box brd-rd15 w-100">
                                    <div class="post-img overflow-hidden position-relative w-100">
                                        <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url({{ asset('assets/frontend/images/resources/related-post-img1.jpg') }});"></div></a>
                                    </div>
                                    <div class="post-info w-100">
                                        <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Creativity</a></span>
                                        <h3 class="mb-0"><a href="blog-detail.html" title="">Action plans</a></h3>
                                        <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="post-box brd-rd15 w-100">
                                    <div class="post-img overflow-hidden position-relative w-100">
                                        <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url({{ asset('assets/frontend/images/resources/related-post-img2.jpg') }});"></div></a>
                                    </div>
                                    <div class="post-info w-100">
                                        <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Footer</a></span>
                                        <h3 class="mb-0"><a href="blog-detail.html" title="">Praesent elementum Facilisis</a></h3>
                                        <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="post-box brd-rd15 w-100">
                                    <div class="post-img overflow-hidden position-relative w-100">
                                        <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url({{ asset('assets/frontend/images/resources/related-post-img3.jpg') }});"></div></a>
                                    </div>
                                    <div class="post-info w-100">
                                        <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Masonry</a></span>
                                        <h3 class="mb-0"><a href="blog-detail.html" title="">New Perspective</a></h3>
                                        <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="post-box brd-rd15 w-100">
                                    <div class="post-img overflow-hidden position-relative w-100">
                                        <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url({{ asset('assets/frontend/images/resources/related-post-img4.jpg') }});"></div></a>
                                    </div>
                                    <div class="post-info w-100">
                                        <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Strategy</a></span>
                                        <h3 class="mb-0"><a href="blog-detail.html" title="">Great team</a></h3>
                                        <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="post-box brd-rd15 w-100">
                                    <div class="post-img overflow-hidden position-relative w-100">
                                        <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url({{ asset('assets/frontend/images/resources/related-post-img5.jpg') }});"></div></a>
                                    </div>
                                    <div class="post-info w-100">
                                        <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Creativity</a></span>
                                        <h3 class="mb-0"><a href="blog-detail.html" title="">Test UI/UX</a></h3>
                                        <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Blog Wrap -->
                </div><!-- Related Posts Wrap -->
                <div class="reply-form-wrap w-100">
                    <div class="devider bg-color25 mb-80 w-100"></div>
                    <div class="sec-title w-100 position-relative">
                        <h2 class="mb-0">Write A Comment</h2>
                        <i class="btm-ln bg-color3"></i>
                    </div><!-- Sec Title -->
                    <form class="w-100">
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="field-box w-100">
                                    <label>Name <sup class="text-color3">*</sup></label>
                                    <input type="text" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="field-box w-100">
                                    <label>Email <sup class="text-color3">*</sup></label>
                                    <input type="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="field-box w-100">
                                    <label>Comment <sup class="text-color3">*</sup></label>
                                    <textarea placeholder="Your Comment"></textarea>
                                </div>
                                <div class="field-btn w-100">
                                    <button class="thm-btn d-inline-block rounded-pill" type="submit">Post Comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- Reply Form Wrap -->
            </div><!-- Post Detail Wrap -->
        </div>
    </div>
</section>

@endsection