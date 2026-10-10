<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="logo">LOGO</div>
    <nav>
        <ul>
            <li><a href="dashboard.php" class="<?= ($current_page == 'dashboard.php') ? 'active' : ''; ?>">BERANDA</a></li>
            <li><a href="tentang.php" class="<?= ($current_page == 'tentang.php') ? 'active' : ''; ?>">TENTANG RUMAH ADAT</a></li>
            <li><a href="pusaka.php" class="<?= ($current_page == 'pusaka.php') ? 'active' : ''; ?>">PUSAKA BENUO TAKA</a></li>
            <li><a href="cerita_rakyat.php" class="<?= ($current_page == 'cerita_rakyat.php') ? 'active' : ''; ?>">CERITA RAKYAT</a></li>
            <li><a href="galeri.php" class="<?= ($current_page == 'galeri.php') ? 'active' : ''; ?>">GALERI</a></li>
            <li><a href="agenda.php" class="<?= ($current_page == 'agenda.php') ? 'active' : ''; ?>">PUSAT INFORMASI</a></li>
            <li><a href="bahasa.php" class="<?= ($current_page == 'bahasa.php') ? 'active' : ''; ?>">BAHASA</a></li>
        </ul>
    </nav>
    <a href="admin/login.php" class="login-admin">LOGIN ADMIN</a>
</header>