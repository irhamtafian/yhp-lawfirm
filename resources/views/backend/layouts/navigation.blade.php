<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/frontend/images/logo-yhp-lawfirm-favicon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        {{-- <li>
            <a href="/admin/dashboard">
                <div class="parent-icon"><i class='bx bx-tachometer'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li> --}}
        <li class="menu-label">Articles & Mails</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-file'></i>
                </div>
                <div class="menu-title">Articles</div>
            </a>
            <ul>
                <li> <a href="/admin/articles"><i class='bx bx-radio-circle'></i>Articles</a>
                </li>
                <li> <a href="/admin/articles/categories"><i class='bx bx-radio-circle'></i>Categories</a>
                </li>
                <li> <a href="/admin/articles/comments"><i class='bx bx-radio-circle'></i>Comments</a>
            </ul>
        </li>
        <li>
            <a href="/admin/mails">
                <div class="parent-icon"><i class='bx bx-envelope'></i>
                </div>
                <div class="menu-title">Mails</div>
            </a>
        </li>
        <li class="menu-label">Pages</li>
        <li>
            <a href="/admin/home">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
        </li>
        <li>
            <a href="/admin/about-us">
                <div class="parent-icon"><i class='bx bx-info-circle'></i>
                </div>
                <div class="menu-title">About Us</div>
            </a>
        </li>
        <li>
            <a href="/admin/services">
                <div class="parent-icon"><i class='bx bx-support'></i>
                </div>
                <div class="menu-title">Services</div>
            </a>
        </li>
        <li>
            <a href="/admin/partners">
                <div class="parent-icon"><i class='bx bx-smile'></i>
                </div>
                <div class="menu-title">Partners</div>
            </a>
        </li>
        <li>
            <a href="/admin/our-clients">
                <div class="parent-icon"><i class='bx bx-group'></i>
                </div>
                <div class="menu-title">Our Clients</div>
            </a>
        </li>
        <li>
            <a href="/admin/contact">
                <div class="parent-icon"><i class='bx bx-phone'></i>
                </div>
                <div class="menu-title">Contact</div>
            </a>
        </li>
        <li class="menu-label">Others</li>
        <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="parent-icon">
                    <i class='bx bx-log-out'></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
            
            <form id="logout-form" action="logout" method="post" style="display: none;">
                @csrf
            </form>
        </li>
       
       
    </ul>
    <!--end navigation-->
</div>