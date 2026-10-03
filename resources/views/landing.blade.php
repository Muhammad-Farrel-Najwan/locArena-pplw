<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>Landing-page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asimovian&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <header class="navbar">
        <div class="navbar1">
            <a href="#" class="navbar-text-logo">
                <span class="logo-loc">loc</span><span class="logo-arena">Arena</span>
            </a>
            <div class="navbar-button">
                <button class="btn-masuk">
                    Masuk
                </button>
                <button class="btn-daftar">
                    Daftar
                </button>
            </div>
        </div>
    </header>
    <section id="landing-hero">
        <div class="hero-text">
            <div class="hero-text-judul">
                <h1 class="hero-text-judul-1">Sewa Lapangan Badminton</h1>
                <h1 class="hero-text-judul-2">Lebih Cepat & Praktis</h1>
            </div>
            <div class="hero-text-desc">
                <p>Akses instan ribuan arena berstandar federasi dengan jadwal terintegrasi langsung, pembayaran digital terproteksi, dan tiket QR check-in otomatis.</p>
            </div>
        </div>

        <!-- FILTER -->
        <div class="landing-filter">
            <!-- Filter provinsi -->
            <div class="filter-container">
                <span class="material-symbols-outlined">location_on</span>
                <div class="filter-form-container">
                    <label for="provinsi">Pilih Provinsi</label>
                    <div class="filter-select-container">
                        <select class="filter-form-select" name="provinsi" id="provinsi">
                            <option value="semua-provinsi">Semua Provinsi</option>
                            <option value="jawa-timur">Jawa Timur</option>
                        </select>
                        <span class="material-symbols-outlined">arrow_drop_down</span>
                    </div>
                </div>
            </div>
            <!-- Filter kota -->
            <div class="filter-container">
                <span class="material-symbols-outlined">location_on</span>
                <div class="filter-form-container">
                    <label for="provinsi">Pilih Kota</label>
                    <div class="filter-select-container">
                        <select class="filter-form-select" name="provinsi" id="provinsi">
                            <option value="semua-kota">Semua Kota</option>
                            <option value="jatim-surabaya">Surabaya</option>
                        </select>
                        <span class="material-symbols-outlined">arrow_drop_down</span>
                    </div>
                </div>
            </div>
            <!-- Filter kecamatan -->
            <div class="filter-container">
                <span class="material-symbols-outlined">location_on</span>
                <div class="filter-form-container">
                    <label for="provinsi">Pilih Kecamatan</label>
                    <div class="filter-select-container">
                        <select class="filter-form-select" name="provinsi" id="provinsi">
                            <option value="semua-kota">Semua Kecamatan</option>
                            <option value="jatim-surabaya-gubeng">Gubeng</option>
                            <option value="jatim-surabaya-rungkut">Rungkut</option>
                            <option value="jatim-surabaya-mulyorejo">Mulyorejo</option>
                        </select>
                        <span class="material-symbols-outlined">arrow_drop_down</span>
                        </div>
                </div>
            </div>
            <!-- Filter olahraga -->
            <div class="filter-container">
                <span class="material-symbols-outlined">sports_soccer</span>
                <div class="filter-form-container">
                    <label for="olahraga">Jenis Olahraga</label>
                    <div class="filter-select-container">
                        <select class="filter-form-select" name="olahraga" id="olahraga">
                            <option value="semua-olahraga">Semua Jenis Olahraga</option>
                            <option value="bola-basket">Bola Basket</option>
                            <option value="futsal">Futsal</option>
                        </select>
                        <span class="material-symbols-outlined">arrow_drop_down</span>
                    </div>
                </div>
            </div>
            <!-- Filter jenis lantai -->
            <div class="filter-container">
                <span class="material-symbols-outlined">sports_soccer</span>
                <div class="filter-form-container">
                    <label for="olahraga">Jenis Lantai</label>
                    <div class="filter-select-container">
                        <select class="filter-form-select" name="olahraga" id="olahraga">
                            <option value="semua-jenis-lantai">Semua Jenis Lantai</option>
                            <option value="rumput-sintetis">Rumput Sintetis</option>
                            <option value="kayu">Kayu</option>
                        </select>
                        <span class="material-symbols-outlined">arrow_drop_down</span>
                    </div>
                </div>
            </div>
            <button class="filter-search">
                <span class="material-symbols-outlined">search</span>
                Cari lapangan
            </button>
        </div>
    </section>

    <!-- HASIL SEARCH -->
    <section id="landing-result">
        <div class="landing-result-container">
            <div class="landing-result-title">
                <h1>Pilihan arena</h1>
                <h2>Menampilkan arena terbaik sesuai kriteria yang kamu cari</h2>
            </div>
            <div class="result-card-container">
                <div class="card">
                    <div class="card-top">
                        <div class="card-top-header">
                            <span class="material-symbols-outlined">sports_soccer</span>
                            <h3>Mini soccer</h3>
                        </div>
                    </div>
                    <div class="card-bottom">
                        <div class="card-bottom-header">
                            <p>
                                <span class="material-symbols-outlined">location_on</span>
                                Gubeng, Surabaya Pusat
                            </p>
                            <div class="card-rating">
                                <p>
                                    <span class="material-symbols-outlined">star</span>
                                    Belum Ada
                                </p>
                            </div>
                        </div>
                        <p class="nama-lapangan">Lapangan Pak Firdaus</p>
                        <div class="card-fasilities">
                            <span class="material-symbols-outlined">location_on</span>
                            <span class="material-symbols-outlined">location_on</span>
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div class="card-price-container">
                            <div class="card-price">
                                <h4>
                                    HARGA SEWA
                                </h4>
                                <h3>
                                    Rp170.000
                                    <span>
                                        / jam
                                    </span>
                                </h3>
                            </div>
                            <button class="card-lihat-jadwal">
                                Lihat jadwal
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div id="footer-section-1">
            <div>
                <span class="logo-loc">loc</span><span class="logo-arena">Arena</span>
            </div>
            <div>
                <p>
                Platform digital sewa lapangan dan arena olahraga modern di indonesia.
                Temukan, pesan waktu main dan langsung bayar secara online di satu tempat
                </p>
                <br>
                <p>
                © locArena Indonesia. Hak Cipta Dilindungi Undang-Undang
                </p>
            </div>
        </div>
        <div id="footer-section-2">
            <h3>KATEGORI POPULER</h3>
            <p>Sewa Lapangan Futsal</p>
            <p>Sewa Lapangan Badminton</p>
            <p>Sewa Lapangan Basket</p>
            <p>Sewa Lapangan Tennis</p>
        </div>
        <div id="footer-section-3">
            <h3>PUSAT BANTUAN</h3>
            <p>Customer Support</p>
            <p>Kebijakan Reschedule</p>
            <p>QR entry Arena</p>
            <p>Daftarkan Arena Anda</p>
        </div>
    </footer>
</body>

</html>
