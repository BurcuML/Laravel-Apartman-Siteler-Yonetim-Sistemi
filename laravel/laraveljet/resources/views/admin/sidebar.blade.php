<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('adminhome') }}">
            <img src="{{asset('assets')}}/admin/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{ route('adminhome') }}">
                        <i class="fas fa-chart-bar"></i>Home</a>
                </li>
                <li>
                    <a href="{{ route('admin_menu') }}">
                        <i class="fas fa-table"></i>Table Menu</a>
                </li>
                <li>
                    <a href="{{ route('admin_content') }}">
                        <i class="fas fa-table"></i>Contents</a>
                </li>
                <li>
                    <a href="{{ route('admin_menu_add') }}">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="{{ route('admin_setting') }}">
                        <i class="far fa-check-square"></i>Settings</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->