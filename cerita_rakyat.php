<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sejarah & Asal Usul</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

<style>
body{
  font-family: Arial, sans-serif;
  line-height: 1.9;
  margin: 0;
  color: #000000;
}

    /* ====== NAVBAR ====== */
    header {
        background: #000;
        color: #fff;
        padding: 12px 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 999;
    }

    .logo {
        font-size: 14px;
        background: #222;
        padding: 5px 10px;
        border-radius: 3px;
        border: 1px solid #555;
        color: #FFD700;
        font-weight: bold;
        white-space: nowrap;
    }

    .logo-img {
        height: 32px;
        margin-right: 30px;
        vertical-align: middle;
        display: block;
    }

    .nav-container {
        display: flex;
        justify-content: center; /* ← pusatkan menu */
        flex: 1;
        margin: 0 20px; /* beri ruang dari logo & login */
    }

    nav ul {
        display: flex;
        gap: 12px; /* jarak rapat */
        list-style: none;
        margin: 0;
        padding: 0;
        align-items: center;
        justify-content: center; /* ← ini yang bikin menu jadi ke tengah */
        flex: 1;
    }

    nav ul li a {
        color: #FFD700;
        text-decoration: none;
        font-size: 14px;
        padding: 4px 8px;
        transition: .3s;
    }

    nav ul li a:hover,
    nav ul li a.active {
        color: #FFD700;
        font-weight: bold;
    }

    .login-admin {
        color: #FFD700;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        padding: 4px 6px;
        transition: .3s;
    }

    .login-admin:hover {
        color: #fff;
    }

.container{
  max-width: 1100px;
  margin: auto;
  padding: 80px 20px 30px;
}

/* =====================================
   HERO CERITA RAKYAT
===================================== */

.hero-cerita{

    width:100%;
    height:327px;

    background:
    linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
    url("images/bg-rakyat.jpeg") center center/cover no-repeat;

    display:flex;
    justify-content:center;
    align-items:center;

    text-align:center;

}


/* ===============================
   ISI HERO
================================= */

.hero-content{

    width:90%;
    max-width:900px;

}


/* JUDUL */

.hero-content h1{

    font-size:48px;

    font-weight:700;

    color:#fff;

    margin-bottom:18px;

    letter-spacing:2px;

}


/* DESKRIPSI */

.hero-content p{

    font-size:18px;

    font-weight:300;

    color:#f2f2f2;

    line-height:1.8;

    max-width:700px;

    margin:auto;

}

/* ===========================
   QUOTE CERITA RAKYAT
=========================== */

.quote-cerita{
    max-width:900px;
    margin:50px auto 20px;
    padding:0 20px;
    text-align:center;
}

.quote-cerita p{
    color:#b22222;          /* merah elegan */
    font-size:26px;
    font-weight:bold;
    line-height:1.8;
    font-style:italic;
}

/* ===============================
   GAMBAR BESAR
================================= */

.gambar-utama{

    width:90%;
    max-width:1260px;

    margin:50px auto;

}

.gambar-utama img{

    width:100%;

    height:520px;

    object-fit:cover;

    border-radius:16px;

    display:block;

    box-shadow:0 8px 25px rgba(0,0,0,.18);

}




/* ===============================
   GRID CERITA
================================= */

.card-cerita{

    width:90%;
    max-width:1300px;
    margin:60px auto;

    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:35px;

}


/* ===============================
   ITEM CERITA
================================= */

.cerita-item{

    display:flex;
    flex-direction:column;

}


/* ===============================
   GAMBAR
================================= */

.cerita-item img{

    width:100%;
    height:260px;

    object-fit:cover;

    border-radius:12px;

    transition:.3s;

}

.cerita-item img:hover{

    transform:scale(1.03);

}


/* ===============================
   INFO CERITA
================================= */

.info-cerita{

    margin-top:18px;

    text-align:left;

}

.info-cerita h3{

    font-size:22px;

    color:#5b3b1f;

    margin-bottom:8px;

    font-weight:bold;

}

.info-cerita p{

    font-size:15px;

    color:#777;

    margin-bottom:12px;

}


/* ===============================
   LINK BACA YUK
================================= */

.btn-baca{

    display:inline-block;

    color:#7b5a45;

    text-decoration:none;

    font-size:17px;

    font-weight:bold;

    transition:.3s;

}

.btn-baca:hover{

    color:#b8860b;

    transform:translateX(6px);

}

/* =====================================
   CTA CERITA RAKYAT
===================================== */

.cta-cerita{

    width:92%;
    max-width:1391px;

    margin:70px auto;

    background:#fff;

    border:1px solid #ddd;

    border-radius:15px;

    padding:55px 60px;

    box-sizing:border-box;

    box-shadow:0 8px 25px rgba(0,0,0,.08);

}


/* =============================== */

.cta-content{

    text-align:left;

}


/* =============================== */

.cta-content h2{

    font-size:34px;

    color:#222;

    margin-bottom:15px;

    line-height:1.5;

}


/* =============================== */

.cta-content p{

    font-size:18px;

    color:#666;

    margin-bottom:35px;

    line-height:1.8;

}


/* =============================== */

.btn-cta{

    display:inline-block;

    background:#000;

    color:#D4A017;

    text-decoration:none;

    padding:18px 42px;

    border-radius:8px;

    font-size:17px;

    font-weight:bold;

    transition:.3s;

}

.btn-cta:hover{

    background:#222;

    transform:translateY(-3px);

}



/* KOTAK ABU */
.kotak-abu-wrap{
  margin-top: 20px;
}

.kotak-abu{
  max-width: 1200px;
  margin: 0 auto;
  background: #eee;
  padding: 26px 40px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  row-gap: 16px;
  border-radius: 4px;
}

.kotak-item{
  font-size: 16px;
}

.kiri-atas, .kiri-bawah{
  text-align: left;
}

.kanan-atas, .kanan-bawah{
  text-align: right;
}

/* ====== FOOTER ====== */
  .footer-detail {
    background: #000;
    color: #fff;
    padding: 50px 40px;
    margin-top: 40px;  /* beri jarak dari kotak abu */
}


    .footer-container {
        display: grid;
        grid-template-columns: 1.2fr 1fr 1.2fr;
        gap: 40px;
    }

    .footer-logos {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .footer-logos img {
        width: 40px;
    }

    .footer-logos .dot {
        width: 40px;
        height: 15px;
        background: #ddd;
        border-radius: 50%;
    }

    .footer-image {
        width: 120px;
        margin: 15px 0;
    }

    .footer-desc {
        font-size: 14px;
        line-height: 1.6;
        max-width: 300px;
    }

    .footer-middle h4,
    .footer-right h4 {
        font-size: 16px;
        margin-bottom: 15px;
        border-bottom: 2px solid #ffcc00;
        display: inline-block;
        padding-bottom: 5px;
    }

    .footer-middle ul {
        list-style: none;
    }

    .footer-middle ul li {
        margin-bottom: 8px;
    }

    .footer-middle ul li a {
        text-decoration: none;
        color: #ccc;
        font-size: 14px;
    }

    .footer-middle ul li a:hover {
        color: #ffcc00;
    }

    .footer-right p {
        font-size: 14px;
        margin-bottom: 10px;
        line-height: 1.5;
    }

    .footer-map {
        width: 100%;
        max-width: 260px;
        margin-top: 10px;
        border-radius: 5px;
    }

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
    .section{
        grid-template-columns:1fr;
    }

    .banner h1{
        font-size:26px;
    }
}
</style>
</head>
<body>

<!-- HEADER -->
<header>
  <img src="images/logo.jpeg" alt="Rumah Adat Kuta Rekan Tatau" class="logo-img"> 
  <nav>
    <ul>
      <li><a href="dashboard.php">BERANDA</a></li>
      <li><a href="tentang.php">TENTANG RUMAH ADAT</a></li>
      <li><a href="pusaka.php">PUSAKA BENUO TAKA</a></li>
      <li><a href="cerita_rakyat.php">CERITA RAKYAT</a></li>
      <li><a href="galeri.php">GALERI</a></li>
      <li><a href="agenda.php">PUSAT INFORMASI</a></li>
      <li><a href="admin/login.php">LOGIN ADMIN</a></li>
    </ul>
  </nav>
</header>


<!-- HERO CERITA RAKYAT -->
<section class="hero-cerita">
    <div class="hero-content">
        <h1>Cerita Rakyat</h1>
        <p>
            Cerita rakyat yang diwariskan secara lisan dari generasi ke generasi, mengajarkan nilai kebersamaan dan rasa hormat terhadap alam Mari jelajahi cerita rakyat dari tanah paser, dan temukan pelajaran berharga dari warisan leluhur.
        </p>
    </div>
</section>

<section class="quote-cerita">
    <p>
        “Cerita rakyat Paser bukan sekadar hiburan. Ia adalah pengajaran, sejarah,
        dan doa yang diwariskan melalui lisan dari satu generasi ke generasi berikutnya.”
    </p>
</section>

<!-- ================= GAMBAR UTAMA ================= -->

<section class="gambar-utama">

    <img src="images/banner-cerita.jpeg" alt="Cerita Rakyat Paser">

</section>




<section class="card-cerita">

    <!-- Cerita 1 -->
    <div class="cerita-item">

        <img src="images/rakyat1.jpeg" alt="Putri Petung">

        <div class="info-cerita">
            <h3>Kisah Putri Petung</h3>
            <p>Penulis : ABCD EFGH</p>

            <a href="putri_petung.php" class="btn-baca">
                 Baca Yuk →
            </a>
        </div>

    </div>


    <!-- Cerita 2 -->
    <div class="cerita-item">

        <img src="images/rakyat2.jpeg" alt="Kerajaan Paser">

        <div class="info-cerita">
            <h3>Kisah Putri Petung</h3>
            <p>Penulis : ABCD EFGH</p>

            <a href="kerajaan_paser.php" class="btn-baca">
                 Baca Yuk →
            </a>
        </div>

    </div>


    <!-- Cerita 3 -->
    <div class="cerita-item">

        <img src="images/rakyat3.jpeg" alt="Legenda Danau">

        <div class="info-cerita">
            <h3>Kisah Putri Petung</h3>
            <p>Penulis : ABCD EFGH</p>

            <a href="legenda_danau.php" class="btn-baca">
                 Baca Yuk →
            </a>
        </div>

    </div>


    <!-- Cerita 4 -->
    <div class="cerita-item">

        <img src="images/rakyat4.jpeg" alt="Tokoh Adat">

        <div class="info-cerita">
            <h3>Kisah Putri Petung</h3>
            <p>Penulis : ABCD EFGH</p>

            <a href="tokoh_adat.php" class="btn-baca">
                 Baca Yuk →
            </a>
        </div>

    </div>

</section>

<!-- =======================
     CTA CERITA RAKYAT
======================== -->

<section class="cta-cerita">

    <div class="cta-content">

        <h2>
            Setiap kisah punya tempat untuk hidup kembali. Yuk, ikut menulis dan berbagii cerita rakyat yang kamu tau
        </h2>


        <a href="tulis_cerita.php" class="btn-cta">
            Tuliskan dan Bagikan Warisan Cerita
        </a>

    </div>

</section>


    <!-- Kotak abu -->
    <div class="kotak-abu-wrap">
      <div class="kotak-abu">
        <div class="kotak-item kiri-atas">Sejarah & Asal-Usul</div>
        <div class="kotak-item kanan-atas">Ornamen & Filosofi</div>
        <div class="kotak-item kiri-bawah">Desain Bangunan</div>
        <div class="kotak-item kanan-bawah">Material & Teknik</div>
      </div>
    </div>
  </div>
</div>


<!-- FOOTER -->
<footer>
<section class="footer-detail">
    <div class="footer-container">
        <div class="footer-left">
            <div class="footer-logos">
                <img src="images/logo2.jpeg" alt="Logo 1">
                <img src="images/logo3.jpeg" alt="Logo 2">
            </div>
            <img src="images/rusa.jpeg" class="footer-image" alt="Rusa">
            <p class="footer-desc">
                “Dibuat untuk mendukung pelestarian budaya suku Paser dan
                memperkenalkan nilai-nilai adat kepada generasi muda.”
            </p>
      </div>
        <div class="footer-middle">
            <h4>INFORMASI</h4>
            <ul>
                <li><a href="#">BERANDA</a></li>
                <li><a href="#">SEJARAH RUMAH ADAT</a></li>
                <li><a href="#">PUSAKA BENUO TAKA</a></li>
                <li><a href="#">CERITA RAKYAT</a></li>
                <li><a href="#">GALERI</a></li>
                <li><a href="#">PUSAT INFORMASI</a></li>
                <li><a href="#">BAHASA</a></li>
            </ul>
        </div>
        <div class="footer-right">
            <h4>KONTAK & LOKASI</h4>
            <p>📧 rusintanbueng@gmail.com</p>
            <p>📞 +62 813-4874-7700</p>
<div class="footer-maps">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.778685188953!2d116.73772430419922!3d-1.3080097436904907!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df13f99eaa4c993%3A0x7c2e3491a9619928!2sRumah%20Adat%20Kuta%20Rekan%20Tatau%20Penajam!5e0!3m2!1sen!2sid!4v1768956139380!5m2!1sen!2sid"
        width="100%"
        height="250"
        style="border:0;border-radius:12px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
        </div>
    </div>
</section>
&copy; 2025 Rumah Adat Lowu Kuta Rekan Tatau | Semua Hak Dilindungi
</footer>

<!-- JS untuk tombol baca sejarah -->
<script>
function toggleSejarah(e){
  e.preventDefault();
  const box = document.getElementById("sejarah-lengkap");
  if(box.style.display === "none" || box.style.display === ""){
    box.style.display = "block";
  } else {
    box.style.display = "none";
  }
}
</script>


</body>
</html>
