<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('backend/AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dreamerz Shop</span>
    </a>>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel pb-3 d-flex">
            <div class="image">
                <img src="{{ asset('storage/user/' . Auth::user()->image) }}" class="img-circle elevation-2" alt="default.png">
            </div>
            <div class="info">
                <a href="javascript:void(0)" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/secret/admin/dashboard" class="nav-link {{ Request::is('secret/admin/dashboard') ? 'active bg-success' : '' }}" aria-current="page">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/secret/admin/product" class="nav-link {{ Request::is('secret/admin/product') ? 'active bg-success' : '' }}" aria-current="page">
                        <i class="nav-icon fas fa-warehouse"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/secret/admin/users-management" class="nav-link {{ Request::is('secret/admin/users-management') ? 'active bg-success' : '' }}" aria-current="page">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users Management
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/secret/admin/report" class="nav-link {{ Request::is('secret/admin/report') ? 'active bg-success' : '' }}" aria-current="page">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Report
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/secret/admin/logoutAdmin" class="nav-link" aria-current="page">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
