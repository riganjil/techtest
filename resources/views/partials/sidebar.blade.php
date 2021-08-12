
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url("/")}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Salt</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('active_home')">
        <a class="nav-link" href="{{url('/')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Category -->
    <li class="nav-item @yield('active_technical')">
        <a class="nav-link" href="{{url('technical')}}">
            <i class="fas fa-fw fa-list"></i>
            <span>Technical Test</span></a>
    </li>
    <li class="nav-item @yield('active_technical_php')">
        <a class="nav-link" href="{{url('technical_php')}}">
            <i class="fas fa-fw fa-list"></i>
            <span>Technical Test - PHP</span></a>
    </li>
    <li class="nav-item @yield('active_employee')">
        <a class="nav-link" href="{{url('employee')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Employee</span></a>
    </li>
    <li class="nav-item @yield('active_job')">
        <a class="nav-link" href="{{url('job')}}">
            <i class="fas fa-fw fa-key"></i>
            <span>Job</span></a>
    </li>
    <li class="nav-item @yield('active_department')">
        <a class="nav-link" href="{{url('department')}}">
            <i class="fas fa-fw fa-building"></i>
            <span>Department</span></a>
    </li>
    <li class="nav-item @yield('active_dependent')">
        <a class="nav-link" href="{{url('dependent')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Dependent</span></a>
    </li>
    <li class="nav-item @yield('active_region')">
        <a class="nav-link" href="{{url('region')}}">
            <i class="fas fa-fw fa-globe"></i>
            <span>Region</span></a>
    </li>
    <li class="nav-item @yield('active_country')">
        <a class="nav-link" href="{{url('country')}}">
            <i class="fas fa-fw fa-flag"></i>
            <span>Country</span></a>
    </li>
    <li class="nav-item @yield('active_location')">
        <a class="nav-link" href="{{url('location')}}">
            <i class="fas fa-fw fa-search-location"></i>
            <span>Location</span></a>
    </li>

</ul>
