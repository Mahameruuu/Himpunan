<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Link -->
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Pengurus Link with Collapsible Submenu -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#pengurus-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>Pengurus</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pengurus-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-link" href="/anggota/admin">
                        <i class="bi bi-circle"></i><span>Admin</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="/anggota">
                        <i class="bi bi-circle"></i><span>Anggota</span>
                    </a>
                </li>
                <!-- Divisi Link -->
                <li>
                    <a class="nav-link" href="/divisi">
                        <i class="bi bi-circle"></i><span>Divisi</span>
                    </a>
                </li>
                <!-- Periode Link -->
                <li>
                    <a class="nav-link" href="/periode">
                        <i class="bi bi-circle"></i><span>Periode</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Komunitas Link with Submenu -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#komunitas-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i>
                <span>Komunitas</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="komunitas-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-link" href="/komunitas">
                        <i class="bi bi-circle"></i><span>Daftar Komunitas</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Kegiatan Link with Submenu -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#kegiatan-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-calendar"></i>
                <span>Kegiatan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="kegiatan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-link" href="/kegiatan">
                        <i class="bi bi-circle"></i><span>Kegiatan Himpunan</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="/kegiatan_komunitas">
                        <i class="bi bi-circle"></i><span>Kegiatan Komunitas</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
