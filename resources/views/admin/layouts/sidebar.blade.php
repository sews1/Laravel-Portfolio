<aside class="main-sidebar" style="background-color: #343a40; color: #c2c7d0;">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link" style="background-color: #007bff; color: #fff;">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;">
        <span class="brand-text font-weight-light">Sews.Portfolio Admin</span>
    </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard -->
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link" style="color: #c2c7d0; background-color: {{ Request::is('admin/dashboard*') ? '#007bff' : 'transparent' }};">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- Messages -->
            <li class="nav-item">
                <a href="/admin/message" class="nav-link" style="color: #c2c7d0; background-color: {{ Request::is('admin/message*') ? '#007bff' : 'transparent' }};">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>Messages</p>
                </a>
            </li>

            <!-- Portfolio -->
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: #c2c7d0; background-color: {{ Request::is('admin/project*') ? '#007bff' : 'transparent' }};">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        Portfolio
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/posts/project" class="nav-link" style="color: #c2c7d0; background-color: {{ Request::is('admin/posts/project*') ? '#007bff' : 'transparent' }};">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Project</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/posts/category" class="nav-link" style="color: #c2c7d0;">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category</p>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Skills -->
            <li class="nav-item">
                <a href="/admin/skill" class="nav-link" style="color: #c2c7d0; background-color: {{ Request::is('admin/skill*') ? '#007bff' : 'transparent' }};">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Skills</p>
                </a>
            </li>

            <!-- Users -->
            <li class="nav-item">
                <a href="/admin/user" class="nav-link" style="color: #c2c7d0; background-color: {{ Request::is('admin/user*') ? '#007bff' : 'transparent' }};">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->

    <!-- Sidebar Custom -->
    <div class="sidebar-custom" style="background-color: #343a40; padding: 10px;">
        <a href="#" class="btn btn-link" style="color: #007bff;"><i class="fas fa-cogs"></i></a>
        <a href="#" class="btn btn-secondary" style="background-color: #007bff; border: none; color: #fff; margin-top: 10px;">Help</a>
    </div>
    <!-- /.sidebar-custom -->
</aside>
