<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="#"><img src="{{ asset('public/backend/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Tổng Quát</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('category.list') }}" class='sidebar-link'>
                        <i class="fa fa-folder-open"></i>
                        <span>Danh Mục</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-cubes"></i>
                        <span>Sản Phẩm</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-newspaper-o"></i>
                        <span>Tin Tức</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-users"></i>
                        <span>Khách Hàng</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-trash"></i>
                        <span>Thùng Rác</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i class="bi bi-x"></i></button>
    </div>
</div>