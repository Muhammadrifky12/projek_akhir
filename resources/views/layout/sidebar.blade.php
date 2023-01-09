<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="gradient">

    <!-- Sidebar - Brand -->
    <a class="justify-content-start">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline ">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item" style="--clr: #00ffff;">
            <a class="nav-link" data-text="Dashboard" href="/dashboard">
               Dashboard <i class="fas fa-tachometer-alt"></i></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item" style="--clr: #00ffff;">
            <a class="nav-link" href="/Pelanggaran" data-text="Pelanggaran">
                Pelanggaran <i class="fas fa-fw fa-user"></i></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item" style="--clr: #00ffff;">
            <a class="nav-link collapsed" data-text="DataMaster" href="#" data-toggle="collapse"
                data-target="#collapseUtilities">
                DataMaster <i class="fas fa-wrench"></i>
            </a>
            <div id="collapseUtilities" class="collapse">
                <div class="nav-linkav py-2 collapse-inner rounded">
                    <a class="collapse-item text-white" data-text="Siswa" href="/viewsiswa">
                        Siswa</a>
                    <a class="collapse-item text-white" data-text="Kelas" href="/Kelas">
                        Kelas</a>
                    <a class="collapse-item text-white" data-text="Guru" href="/Guru">Guru</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item" style="--clr: #00ffff;">
            <a class="nav-link" href="/History" data-text="History">
                History<i class="fas fa-fw  fa-align-left"></i>
            </a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item" style="--clr: #00ffff;">
            <a class="nav-link" href="/Input10rpl1" data-text="InputPoint">
                InputPoint
                <i class="far fa-sun"></i>
            </a>
        </li>

        {{-- <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div> --}}

        {{-- <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

        {{-- <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

        {{-- <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item active" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> --}}

        <!-- Nav Item - Charts -->
        {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

        {{-- <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <div class="loading">
            <span>Hallo</span>
        </div>

</ul>
<!-- End of Sidebar -->
<style>
    #gradient {
        background: linear-gradient(to bottom, #0066ff 0%, #33ccff 100%);
    }

    .loading {
        text-transform: uppercase;
        width: 150px;
        text-align: center;
        line-height: 50px;
        left: 0;
        right: 0;
        top: 50%;
        margin: auto;
        transform: translateY(-50%);
    }

    .loading span {
        position: relative;
        z-index: 999;
        color: #fff;
    }

    .loading::before {
        content: '';
        background: #61bdb6;
        width: 128px;
        height: 36px;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        animation: 2s loadingBefore infinite ease-in-out;
    }

    @keyframes loadingBefore {
        0% {
            transform: translateX(-14px);
        }

        50% {
            transform: translateX(14px);
        }

        100% {
            transform: translateX(-14px);
        }
    }

    .loading::after {
        content: '';
        background: #ff3600;
        width: 14px;
        height: 60px;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        opacity: .5;
        animation: 2s loadingAfter infinite ease-in-out;
    }

    @keyframes loadingAfter {
        0% {
            transform: translateX(-50px);
        }

        50% {
            transform: translateX(50px);
        }

        100% {
            transform: translateX(-50px);
        }
    }

</style>
