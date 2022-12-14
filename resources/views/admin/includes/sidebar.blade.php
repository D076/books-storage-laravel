<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.main.index') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Админ панель</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Пользователи</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.book.index') }}" class="nav-link">
                    <i class="nav-icon far fa-clipboard"></i>
                    <p>Книги</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.genre.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Жанры</p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
