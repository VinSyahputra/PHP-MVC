<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= $base_url; ?>index.php?pages=dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Halaman</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#informasi" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bookmarks"></i><span>Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="informasi" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Memo</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Lihat Kamar</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $base_url; ?>index.php?pages=chat">
                        <i class="bi bi-circle"></i><span>Chat</span>
                    </a>
                </li>
            </ul>
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-cart4"></i>
                <span>Pembayaran</span>
            </a>
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-clock-history"></i>
                <span>History Transaksi</span>
            </a>

        </li><!-- End Login Page Nav -->

        <li class="nav-heading">Laporan</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Statistik</span>
            </a>
            <a class="nav-link collapsed" data-bs-target="#keuangan" data-bs-toggle="collapse" href="#">
                <i class="bi bi-currency-dollar"></i><span>Keuangan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="keuangan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Pendapatan</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Pengeluaran</span>
                    </a>
                </li>
            </ul>

        </li><!-- End Login Page Nav -->

        <li class="nav-heading">Master</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="bi bi-people"></i>
                <span>Kelola Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-wifi"></i>
                <span>WI-FI</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-key"></i>
                <span>Ubah Password</span>
            </a>
        </li>

    </ul>

</aside>