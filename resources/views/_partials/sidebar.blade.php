
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mt-4">
                <p>Pengaduan Masyarakat</p>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 mt-5">
        <!-- Dashboard -->
        {{-- <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li> --}}
        <li class="menu-item {{ Route::is('dashboardmasyarakat') ? 'active' : ''}}">
            <a href="{{ route('dashboardmasyarakat') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Masyarakat</div>
            </a>
        </li>
        <li class="menu-item {{ Route::is('dashboardpengaduan') ? 'active' : ''}}">
            <a href="{{ route('dashboardpengaduan') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message"></i>
                <div>Pengaduan</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-power-off"></i>
                <div>Logout</div>
            </a>
        </li>

        <!-- Layouts -->
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Layouts</div>
            </a>
        </li> --}}

    </ul>

</aside>

    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none mt-2 ms-5">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>
