<div class="sticky-header style3 w-100">
    <div class="container">
        <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100 bg-color26">
            <div class="logo"><h1 class="mb-0"><a href="/" title="Home"><img width="185" src="{{ asset('assets/frontend/images/logo-yhp-lawfirm3.png') }}" alt="Logo"></a></h1></div><!-- Logo -->
            <nav>
                <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                    @include("frontend.layouts.navigation")
                </ul>
            </nav>
            <div class="header-btns d-inline-flex flex-wrap align-items-center">
                <a class="search-btn d-inline-block" href="javascript:void(0);" title=""><i class="flaticon-magnifying-glass"></i></a>
                <a class="thm-btn v2 brd-btn rounded-pill d-inline-block" href="/contact" title="">Contact Us</a>
            </div>
        </div>
    </div>
</div><!-- Sticky Header -->
