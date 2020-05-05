<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    @auth('admin')
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}" aria-expanded="true">
                <span class="badge badge-warning navbar-badge">退出登陆</span>
            </a>
        </li>
    </ul>
    @endauth
</nav>