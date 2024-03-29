<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GTA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('homeController') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home Page Controller</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Visa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Visa Services</h6>
                <a class="collapse-item" href="{{ route('visa-add') }}">Add Visa Services</a>
                <a class="collapse-item" href="{{ route('visa-index') }}">List of Visa Services</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Country</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Country:</h6>
                <a class="collapse-item" href="{{ route('country-add') }}">Add Country</a>
                <a class="collapse-item" href="{{ route('countries') }}">List of Countries</a>

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packagesCollapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-shipping-fast"></i>
            <span>Packages</span>
        </a>
        <div id="packagesCollapse" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Packages:</h6>
                <a class="collapse-item" href="{{ route('packages.add') }}">Add Package</a>
                <a class="collapse-item" href="{{ route('packages.list') }}">List of Packages</a>

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hotelsCollapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-hotel"></i>
            <span>Hotels</span>
        </a>
        <div id="hotelsCollapse" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hotels:</h6>
                <a class="collapse-item" href="{{ route('hotels.add') }}">Add Hotel</a>
                <a class="collapse-item" href="{{ route('hotels.list') }}">List of Hotels</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#blogcollapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-blog"></i>
            <span>Blog</span>
        </a>
        <div id="blogcollapse" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hotels:</h6>
                <a class="collapse-item" href="{{ route('blog.add') }}">Add Blog</a>
                <a class="collapse-item" href="{{ route('blog.list') }}">List of Blogs</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
