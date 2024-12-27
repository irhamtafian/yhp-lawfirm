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