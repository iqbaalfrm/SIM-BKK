<!-- CSS untuk dropdown menu -->
<style>
/* CSS untuk dropdown menu */
.navbar ul li {
    position: relative;
}

.navbar ul li ul {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: rgba(14, 29, 52, 0.8); /* Warna biru dengan opacity 0.8 */
    padding: 10px;
    border: 1px solid #ccc;
}

.navbar ul li:hover ul {
    display: block;
}

/* Tambahkan class 'dropdown-toggle' untuk membuatnya bisa di-klik */
.navbar ul li.dropdown > a.dropdown-toggle::after {
    content: '\f107'; /* Unicode for arrow down icon */
    margin-left: 5px;
}

.navbar ul li.dropdown > a.dropdown-toggle.collapsed::after {
    content: '\f106'; /* Unicode for arrow up icon when collapsed */
}


</style>

<!-- HTML untuk menu -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>SIM-BKK</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Tentang Kami</a>
                    <ul>
                        <li><a href="/latar-belakang-sejarah">Latar Belakang & Sejarah</a></li>
                        <li><a href="/fungsi-tujuan">Fungsi, Tujuan & Ruang Lingkup</a></li>
                        <li><a href="/kegiatan-utama">Kegiatan Utama</a></li>
                    </ul>
                </li>
                <li><a href="/lowongan/">Lowongan</a></li>
                <li><a href="/informasi/">Informasi</a></li>
               
                @auth
                    <li><a class="get-a-quote" href="/dashboard">Dashboard</a></li>
                @else
                    <li><a class="get-a-quote" href="/login">Masuk/Daftar</a></li>
                @endauth
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- JavaScript untuk toggle dropdown -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Menambahkan event listener untuk setiap dropdown
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        dropdownToggles.forEach((toggle) => {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                const parentLi = this.parentElement;
                const dropdownMenu = parentLi.querySelector('ul');
                if (dropdownMenu) {
                    const isCollapsed = toggle.classList.contains('collapsed');
                    if (isCollapsed) {
                        // Tutup dropdown
                        dropdownMenu.style.display = 'none';
                        toggle.classList.remove('collapsed');
                    } else {
                        // Buka dropdown
                        dropdownMenu.style.display = 'block';
                        toggle.classList.add('collapsed');
                    }
                }
            });
        });
    });
</script>

