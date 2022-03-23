<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            @can('author')                    
            <li class="nav-item menu-open mb-3">
                <a href="#" class="nav-link {{ $title1 === 'Post' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>
                        Post
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/post" class="nav-link {{ $title2 === 'daftar post' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Postingan</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
            @can('admin')                            
            <li class="nav-item menu-open mb-3">
                <a href="#" class="nav-link {{ $title1 === 'Buat User' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-plus"></i>
                    <p>
                        Buat User login
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/user" class="nav-link {{ $title2 === 'buat_user' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar User login</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link {{ $title1 === 'Buat Author' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book-reader"></i>
                    <p>
                        Buat Author
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/author" class="nav-link {{ $title2 === 'daftar_author' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Author</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
            @can('pembina')                
            <li class="nav-item menu-open">
                <a href="#" class="nav-link {{ $title1 === 'Perizinan' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-key"></i>
                    <p>
                        Perizinan Santri
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/perizinan" class="nav-link {{ $title2 === 'daftar_perizinan' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Perizinan Aktif</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/perizinan/histori" class="nav-link {{ $title2 === 'daftar_histori_perizinan' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Histori Perizinan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/perizinan_siswa" class="nav-link {{ $title2 === 'daftar_regis_siswa' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Regis Siswa </p>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>