<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Manuskrip | Pusaka Benuo Taka</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

body {
  margin: 0;
  background-color: #8B5A2B;
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

/* ===== HEADER MANUSKRIP ===== */
.manuskrip-header{
  position:relative;
  background:#FFF952;
  padding:80px 40px 70px;
  text-align:center;
}

.manuskrip-header h1{
  font-size:42px;
  margin-bottom:10px;
  color:#5a3e1b;
}

.manuskrip-header .deskripsi{
  max-width:700px;
  margin:auto;
  font-size:16px;
  line-height:1.6;
}

.manuskrip-header .tagline{
  margin-top:20px;
  font-weight:600;
}

.left-text{
  position:absolute;
  bottom:20px;
  left:40px;
  text-align:left;
}

.left-text h3{
  font-size:18px;
  font-weight:bold;
  color:#000;
}

.left-text p{
  font-size:12px;
  color:#333;
}

/* HERO BACKGROUND */
.hero-manuskrip{
  height: 80vh;
  background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
              url('images/manuskrip.jpeg') center/cover no-repeat;
  display: flex;
  align-items: flex-end;
  padding: 40px;
}

/* TEXT DI KIRI BAWAH */
.overlay-text{
  color: #fff;
}

.overlay-text h1{
  font-size: 28px;
  font-weight: bold;
}

.overlay-text p{
  font-size: 14px;
  opacity: 0.8;
}

/* SECTION COKLAT */
.manuskrip-intro{
  background: #8B5A2B;
  text-align: center;
  padding: 60px 20px;
}

.manuskrip-intro h1{
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 15px;
}
.manuskrip-intro h1,
.manuskrip-intro .desc{
  color: #fff;
}

.manuskrip-intro .desc{
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
  line-height: 1.6;
}

.manuskrip-intro .highlight{
  color: #FFF952;
  font-weight: bold;
  margin-top: 10px;
}

/* ===== ISI MANUSKRIP ===== */
.manuskrip-content{
  background:#8B5A2B;
  padding:60px 80px;
  color:#fff;
}

/* atas */
.top-section{
  display:flex;
  gap:40px;
  margin-bottom:50px;
  align-items:flex-start; /* biar sejajar atas */
}

.top-text{
  max-width:400px; /* batasi biar rapi */
}

.top-text p{
  text-align:justify; /* biar rata kiri kanan kayak desain */
}

.top-section img{
  width:350px;
  border-radius:10px;
}

.top-text h3{
  font-size:20px;
  margin-bottom:10px;
}

.top-text p{
  font-size:14px;
  line-height:1.7;
  margin-bottom:15px;
}

.btn-kecil{
  display:inline-block;
  background:#5a2d0c;
  color:#fff;
  padding:6px 14px;
  font-size:12px;
  border-radius:6px;
  text-decoration:none;
}

.garis-khusus{
  position: relative;
  margin: 40px 0;
  height: 12px;
}

/* garis emas */
.garis-khusus::before{
  content:"";
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:2px;
  background:#F5BD02;
}

/* garis coklat (mepet) */
.garis-khusus::after{
  content:"";
  position:absolute;
  top:4px;
  left:0;
  width:100%;
  height:2px;
  background:#F5BD02;
}

/* garis bawah (jarak dikit) */
.garis-khusus span{
  position:absolute;
  top:10px;
  left:0;
  width:100%;
  height:2px;
  background:rgba(255,255,255,0.3);
}

/* garis */
.garis{
  margin:40px 0;
  border-top:1px solid rgba(255,255,255,0.3);
}

/* list */
.list-manuskrip{
  display:flex;
  flex-direction:column;
  gap:25px;
}

.item{
  display:flex;
  gap:20px;
  align-items:center;
}

.item{
  position: relative;
}

.item a{
  position: absolute;
  right: 0;
  bottom: -0px; 
}
.item img{
  width:120px;
  border-radius:6px;
}

.item-text{
  flex:1;
}

.item-text h4{
  margin-bottom:5px;
  font-size:16px;
}

.item-text p{
  font-size:13px;
  margin-bottom:8px;
}

.item a{
  font-size:12px;
  background:#5a2d0c;
  padding:6px 12px;
  border-radius:5px;
  color:#fff;
  text-decoration:none;
}

/* ===== CONTENT TAMBAHAN ===== */
.container{
  padding:60px 80px;
}

.container h2{
  font-size:28px;
  margin-bottom:20px;
}

.container p{
  line-height:1.8;
  font-size:15px;
  max-width:900px;
}

/* ===== NAV BUTTON ===== */
.nav-pusaka{
  display:flex;
  justify-content:space-between;
  margin:60px 80px 30px;
}

.nav-pusaka a{
  background:#6b4f3b;
  color:#fff;
  padding:12px 22px;
  border-radius:8px;
  text-decoration:none;
  font-weight:600;
}

.nav-pusaka a:hover{
  background:#8b6f4e;
}

/* ====== FOOTER ====== */
    .footer-detail {
        background: #000;
        color: #fff;
        padding: 50px 40px;
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

<!-- NAV -->
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

<!-- HERO MANUSKRIP -->
<section class="hero-manuskrip">
  <div class="overlay-text">
    <h1>Pusaka Benuo Taka</h1>
    <p>Sepuluh Warisan Takbenda yang Menjadi Jiwa Benuo Taka</p>
  </div>
</section>

<section class="manuskrip-intro">
  <h1>Manuskrip</h1>

  <p class="desc">
    Manuskrip adalah warisan tulisan tangan peninggalan leluhur yang menyimpan nilai sejarah, ilmu pengetahuan, dan identitas budaya.
  </p>

  <p class="highlight">
    Menjaga Warisan Leluhur, Mewarisi Nilai Budaya
  </p>
</section>



<!-- ISI MANUSKRIP -->
<div class="manuskrip-content">

  <div class="top-section">
    <img src="images/batu.jpeg">

<div class="top-text">

  <h2 class="judul">
    Judul
  </h2>

  <h3 class="judul-atas">
    Abad ke-14 | Melayu (Jawi)<br>
    Sejarah awal blablabla
  </h3>

  <p class="judul-bawah">
    Hikayat Raja Pasai merupakan salah satu karya sastra Melayu klasik 
    yang menceritakan sejarah awal Kerajaan Samudera Pasai serta proses 
    masuknya Islam ke Nusantara.
  </p>
      <a href="#" class="btn-kecil">Lihat</a>
    </div>
  </div>
<div class="garis-khusus">
  <span></span>
</div>


<div class="list-manuskrip">

  <div class="item">
    <img src="images/manuskrip1.jpeg">
    <div class="item-text">
      <h4>Judul</h4>
      <p>
        blablabla <br><br>

        <strong>Pengarang:</strong><br>
        Tidak diketahui (Anonim)<br><br>

        <strong>Tahun Penulisan:</strong><br>
        Sekitar abad ke-14
      </p>
      <a href="#">Lihat</a>
    </div>
  </div>

      <div class="garis"></div>

<div class="item">
    <img src="images/manuskrip2.jpeg">
    <div class="item-text">
      <h4>Judul</h4>
      <p>
        blablabla <br><br>

        <strong>Pengarang:</strong><br>
        Tidak diketahui (Anonim)<br><br>

        <strong>Tahun Penulisan:</strong><br>
        Sekitar abad ke-14
      </p>
      <a href="#">Lihat</a>
    </div>
  </div>

      <div class="garis"></div>

  <div class="item">
    <img src="images/manuskrip3.jpeg">
    <div class="item-text">
      <h4>Judul</h4>
      <p>
        blablabla <br><br>

        <strong>Pengarang:</strong><br>
        Tidak diketahui (Anonim)<br><br>

        <strong>Tahun Penulisan:</strong><br>
        Sekitar abad ke-14
      </p>
      <a href="#">Lihat</a>
    </div>
  </div>
  <div class="garis"></div>
  </div>
</div>


<!-- NAVIGASI -->
<div class="nav-pusaka">
  <a href="pusaka.php">← Kembali ke 10 Daftar Pusaka</a>
  <a href="pusaka_adat.php">Lanjut ke Adat Istiadat →</a>
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

</body>
</html>