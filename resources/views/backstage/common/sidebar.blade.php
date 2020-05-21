<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/backstage/dist/img/AdminLTELogo.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Aooled 站群</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/backstage/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">管理员 Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('carousels.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            轮播图
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('links.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            友情链接
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            产品
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('products.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>产品列表</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('pro_category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>产品类型目录</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            文章
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('articles.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>新闻列表</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('art_category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>新闻目录</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('setting.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            设置
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script src="/backstage/js/sidebar.js"></script>