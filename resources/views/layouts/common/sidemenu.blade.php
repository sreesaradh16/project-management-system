<!--APP-SIDEBAR-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="">
            <img src="{{ asset('images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
            <img src="{{ asset('images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
            <img src="{{ asset('images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
            <img src="{{ asset('images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a> 
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a> 
    </div>
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{ asset('images/avatar.jpg') }}" alt="user-img" class="avatar-xl rounded-circle">
            </div>
            <div class="user-info">
                <h6 class=" mb-0 text-dark">{{ ucfirst(auth()->user()->name) }}</h6>
            </div>
        </div>
    </div>
    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle"> </ul>
    </div>
    <ul class="side-menu">
        <li>
            <a class="side-menu__item" href="{{ route('home') }}">
                <i class="side-menu__icon mdi mdi-home"></i>
                <span class="side-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('projects.index')}}">
                <i class="side-menu__icon mdi mdi-folder"></i>
                <span class="side-menu__label">Manage Project</span>
            </a>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('tasks.index')}}">
                <i class="side-menu__icon mdi mdi-check-circle"></i>
                <span class="side-menu__label">Manage Tasks</span>
            </a>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('time_entries.index')}}">
                <i class="side-menu__icon mdi mdi-note-multiple"></i>
                <span class="side-menu__label">Manage Time Entry</span>
            </a>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('reports.index')}}">
                <i class="side-menu__icon mdi mdi-chart-bar"></i>
                <span class="side-menu__label">Reports</span>
            </a>
        </li>
    </ul>
</aside>
<!--/APP-SIDEBAR-->

<!-- Mobile Header -->
<div class="mobile-header">
    <div class="container-fluid">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
            <a class="header-brand" href="index.html">
                <img src="{{ asset('images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('images/brand/logo-3.png')}}" class="header-brand-img desktop-logo mobile-light" alt="logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto header-right-icons">
                <div class="dropdown profile-1">
                    <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                        <span> <img src="{{ asset('images/avatar.jpg') }}" alt="profile-user" class="avatar  profile-user brround cover-image"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-0">{{ ucfirst(auth()->user()->name) }}</h5>
                                <small class="text-muted">{{ auth()->user()->email }}</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Mobile Header -->