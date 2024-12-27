<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="assets/frontend/images/logo-yhp-lawfirm-favicon.png" sizes="32x32" type="image/png">
    <title>YHP Law Firm</title>

    <link rel="stylesheet" href="assets/frontend/css/all.min.css">
    <link rel="stylesheet" href="assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="assets/frontend/css/animate.min.css">
    <link rel="stylesheet" href="assets/frontend/css/aos.min.css">
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/frontend/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/frontend/css/slick.css">
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <link rel="stylesheet" href="assets/frontend/css/responsive.css">

    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" href="assets/frontend/css/revolution/settings.css">
    <!-- Revolution Layers Styles -->
    <link rel="stylesheet" href="assets/frontend/css/revolution/layers.css">
    <!-- Revolution Navigation Styles -->
    <link rel="stylesheet" href="assets/frontend/css/revolution/navigation.css">
</head>
<body>
<main>
    <header class="style3 w-100">
        <div class="menubar w-100">
            <div class="container">
                <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo"><h1 class="mb-0"><a href="/" title="Home"><img width="185" src="assets/frontend/images/logo-yhp-lawfirm3.png" alt="Logo"></a></h1></div><!-- Logo -->
                    <nav>
                        <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li><a href="/" title="">Home</a></li>
                            <li><a href="/about-us" title="">About Us</a></li>
                            <li><a href="/services" title="">Services</a></li>
                            <li><a href="/partners" title="">Partners</a></li>
                            <li><a href="/articles" title="">Articles</a></li>
                            <li><a href="/our-clients" title="">Our Clients</a></li>
                        </ul>
                    </nav>
                    <div class="header-btns d-inline-flex flex-wrap align-items-center">
                        <a class="search-btn d-inline-block" href="javascript:void(0);" title=""><i class="flaticon-magnifying-glass"></i></a>
                        <a class="thm-btn v2 brd-btn rounded-pill d-inline-block" href="/contact" title="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div><!-- Menubar -->
    </header><!-- Header -->
    <div class="sticky-header style3 w-100 bg-color26">
        <div class="container">
            <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100 bg-color26">
                <div class="logo"><h1 class="mb-0"><a href="/" title="Home"><img width="185" src="assets/frontend/images/logo-yhp-lawfirm3.png" alt="Logo"></a></h1></div><!-- Logo -->
                <nav>
                    <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                        <li><a href="/" title="">Home</a></li>
                        <li><a href="/about-us" title="">About Us</a></li>
                        <li><a href="/services" title="">Services</a></li>
                        <li><a href="/partners" title="">Partners</a></li>
                        <li><a href="/articles" title="">Articles</a></li>
                        <li><a href="/our-clients" title="">Our Clients</a></li>
                    </ul>
                </nav>
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="search-btn d-inline-block" href="javascript:void(0);" title=""><i class="flaticon-magnifying-glass"></i></a>
                    <a class="thm-btn v2 brd-btn rounded-pill d-inline-block" href="/contact" title="">Contact Us</a>
                </div>
            </div>
        </div>
    </div><!-- Sticky Header -->
    
    {{-- Search --}}
    <div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
        <span class="search-close-btn"><i class="flaticon-delete"></i></span>
        <form action="{{ route('frontend.search.index') }}" method="GET">
            <input id="search-input" name="keyword" type="text" placeholder="Search" autofocus />
        </form>
      </div>
      

    <div class="responsive-header position-relative w-100 bg-color26">
        <div class="responsive-topbar w-100 bg-color26">
            <div class="container d-flex flex-wrap align-items-center justify-content-between">
                <div class="logo"><h1 class="mb-0"><a href="/" title="Home"><img class="img-fluid" src="assets/frontend/images/logo-yhp-lawfirm3.png" alt="Logo"></a></h1></div><!-- Logo -->
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="search-btn d-inline-block" href="javascript:void(0);" title=""><i class="flaticon-magnifying-glass"></i></a>
                    <a class="res-menu-btn d-inline-block" href="javascript:void(0);" title=""><i class="fas fa-align-justify"></i></a>
                </div>
            </div>
        </div><!-- Responsive Topbar -->
        <div class="responsive-menu w-100">
            <div class="logo"><h1 class="mb-0"><a href="/" title="Home"><img class="img-fluid" src="assets/frontend/images/logo-yhp-lawfirm3.png" alt="Logo"></a></h1></div><!-- Logo -->
            <ul class="mb-0 list-unstyled w-100">
                <li><a href="/" title="">Home</a></li>
                <li><a href="/about-us" title="">About Us</a></li>
                <li><a href="/services" title="">Services</a></li>
                <li><a href="/partners" title="">Partners</a></li>
                <li><a href="/articles" title="">Articles</a></li>
                <li><a href="/our-clients" title="">Our Clients</a></li>
                <li><a href="/contact" title="">Contact Us</a></li>
            </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->
    <section>
        <div class="w-100 bg-color26">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric125"
                 data-source="gallery" style="background-color:transparent;padding:0px;">
                <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="{{ asset('storage/' . $homeData1->image) }}" alt="Slide Background 1" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="tp-caption tp-resizeme"
                                 id="slide1-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['65','55','45','35']"
                                 data-lineheight="['85','75','65','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#ffffff;">
                                 {!! str_replace('%%', '<br>', nl2br($homeData1->title)) !!}
                            </div>

                            <div class="tp-caption"
                                 id="slide1-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #fff;">
                                 {!! str_replace('%%', '<br>', nl2br($homeData1->description)) !!}
                            </div>

                        </li>
                        <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="{{ asset('storage/' . $homeData2->image) }}" alt="Slide Background 2" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="tp-caption tp-resizeme"
                                 id="slide2-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['65','55','45','35']"
                                 data-lineheight="['85','75','65','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#ffffff;">
                                 {!! str_replace('%%', '<br>', nl2br($homeData2->title)) !!}
                            </div>

                            <div class="tp-caption"
                                 id="slide2-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #fff;">
                                 {!! str_replace('%%', '<br>', nl2br($homeData2->description)) !!}
                            </div>

                        </li>
                        <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="{{ asset('storage/' . $homeData3->image) }}" alt="Slide Background 3" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="tp-caption tp-resizeme"
                                 id="slide3-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['65','55','45','35']"
                                 data-lineheight="['85','75','65','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#ffffff;">
                                 {!! str_replace('%%', '<br>', nl2br($homeData3->title)) !!}
                            </div>
                          
                            <div class="tp-caption"
                                 id="slide3-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #fff;">
                                 {!! str_replace('%%', '<br>', nl2br($homeData3->description)) !!}
                            </div>

                        </li>
                    </ul>
                </div>
            </div><!-- End Revolution Slider -->
        </div>
    </section>
    
    <section>
        <div class="w-100 pt-90 pb-100 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/frontend/images/statis/home-bg.png);"></div>
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0">What<span> We Do?</span></h2>
                    <i class="btm-ln bg-color1"></i>
                </div><!-- Sec Title -->
                <div class="wrk-dn-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="wrk-dn-box text-center w-100 bg-color26">
                                <div class="wrk-dn-img w-100"><img class="img-fluid" src="{{ asset('storage/' . $homeData4->image) }}" alt="Work Done Image 1"></div>
                                <div class="wrk-dn-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">{{ $homeData4->title }}</a></h3>
                                    <p class="mb-0">{{ $homeData4->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="wrk-dn-box text-center w-100">
                                <div class="wrk-dn-img w-100"><img class="img-fluid" src="{{ asset('storage/' . $homeData5->image) }}" alt="Work Done Image 2"></div>
                                <div class="wrk-dn-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">{{ $homeData5->title }}</a></h3>
                                    <p class="mb-0">{{ $homeData5->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="wrk-dn-box text-center w-100">
                                <div class="wrk-dn-img w-100"><img class="img-fluid" src="{{ asset('storage/' . $homeData6->image) }}" alt="Work Done Image 3"></div>
                                <div class="wrk-dn-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">{{ $homeData6->title }}</a></h3>
                                    <p class="mb-0">{{ $homeData5->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Work We Have Done Wrap -->
            </div>
        </div>
    </section>
    
   
    <footer>
        <div class="w-100 pt-40 bg-color11 position-relative">
            <div class="container">
                <div class="logo text-center w-100"><h1 class="mb-0"><a href="index.html" title="Logo"><img class="img-fluid" src="{{ asset('assets/frontend/images/logo-yhp-lawfirm.png') }}" alt="Logo White" height="89" width="287"></a></h1></div>
                <div class="footer-data position-relative w-100">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget w-100">
                                <ul class="footer-contact-list list-unstyled mb-0 w-100">
                                    <li><i><a data-feather="mail"></a></i><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget w-100">
                                <ul class="footer-contact-list list-unstyled mb-0 w-100">
                                    <li><i><a data-feather="phone"></a></i>{{ $contact->phone }}</li>
                                    <li><i><a data-feather="instagram"></a></i><a href="https://www.instagram.com/{{ $contact->instagram }}/" target="_blank">{{ $contact->instagram }}</a></li>    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget w-100">
                                <ul class="footer-contact-list list-unstyled mb-0 w-100">
                                    <li><a>{{ $contact->location }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- Footer -->
    <div class="bottom-bar bg-color12 w-100">
        <div class="container">
            <div class="bottom-inner d-flex flex-wrap align-items-center justify-content-center w-100">
                <p class="mb-0 text-center">&copy; 
                    <script>
                    document.write(new Date().getFullYear())
                    </script> 
                    YHP Law Firm. All right reserved.</p>
            </div>
        </div>
    </div><!-- Bottom Bar -->    
</main><!-- Main Wrapper -->

<script src="assets/frontend/js/jquery.min.js"></script>
<script src="assets/frontend/js/popper.min.js"></script>
<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/js/aos.min.js"></script>
<script src="assets/frontend/js/counterup.min.js"></script>
<script src="assets/frontend/js/particles.min.js"></script>
<script src="assets/frontend/js/tilt.jquery.min.js"></script>
<script src="assets/frontend/js/jquery.fancybox.min.js"></script>
<script src="assets/frontend/js/perfect-scrollbar.min.js"></script>
<script src="assets/frontend/js/slick.min.js"></script>
<script src="assets/frontend/js/scroll-up-bar.min.js"></script>
<script src="assets/frontend/js/custom-scripts.js"></script>

<script src="assets/frontend/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="assets/frontend/js/revolution/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="assets/frontend/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/frontend/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/frontend/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/frontend/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/frontend/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/frontend/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/frontend/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/frontend/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/frontend/js/revolution/extensions/revolution.extension.video.min.js"></script>
<script src="assets/frontend/js/revolution/revolution-init2.js"></script>

<script src="https://unpkg.com/feather-icons"></script>
	<script>
		feather.replace()
	</script>
</body>
</html>