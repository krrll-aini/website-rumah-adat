<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tradisi Lisan</title>
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

/* ===== HERO SECTION ===== */
.hero{
    width:100%;
    height:calc(100vh - 70px); /* 1 layar tanpa header */
    background:
        linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
        url('images/tradisi_lisan.jpeg') center/cover no-repeat;
    display:flex;
    align-items:flex-end;
    padding:60px;
}

.hero-content{
    max-width:650px;
    margin-left:60px;
    margin-bottom:80px; /* ⬅ jarak dari bawah */
    color:#fff;
}

.hero-content h1{
    font-size:40px;
    margin-bottom:14px;
}


.hero-content p{
    font-size:16px;
    line-height:1.7;
    max-width:700px;
    margin-bottom:22px;
}

.btn-hero{
    display:inline-block;
    background:#fff;
    color:#000;
    padding:12px 22px;
    border-radius:10px;
    font-weight:600;
    text-decoration:none;
}

.tradisi-section{
  background: #8B5A2B; /* mocca kecoklat */
  padding: 80px 20px;
  text-align: center;
}

.tradisi-section h1{
  color: #fff;
  font-size: 36px;
  margin-bottom: 20px;
}

.tradisi-section .deskripsi{
  color: #fff;
  font-size: 18px;
  margin-bottom: 20px;
}

.tradisi-section .highlight{
  display: inline-block;
  background: #FFF952;
  color: #000;
  padding: 10px 20px;
  font-weight: bold;
  border-radius: 6px;
  margin-bottom: 30px;
}

.btn-tradisi{
  display: inline-block;
  background: #5E2A08;
  color: #fff;
  padding: 12px 30px;
  text-decoration: none;
  border-radius: 25px;
  font-weight: bold;
  margin-bottom: 40px;
}

.btn-tradisi:hover{
  opacity: 0.9;
}

.kotak-coklat{
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  background: #5E2A08;
  padding: 20px 14px;
  border-radius: 12px;
}

.kotak-coklat h3{
  color: #fff;
  font-size: 24px;
  text-align: center;
}


.tradisi-cards{
  background:#8B5A2B;
  padding:50px 80px;
  display:grid;
  grid-template-columns: repeat(4, 1fr);
  gap:25px;
}

/* CARD PUTIH */
.card-tradisi{
  background:#fff;
  border-radius:16px;
  padding:14px;
  text-align:center;
}

/* IMAGE */
.img-wrap{
  position:relative;
  border-radius:12px;
  overflow:hidden;
}

.img-wrap img{
  width:100%;
  height:180px;
  object-fit:cover;
}

/* TULISAN DI ATAS GAMBAR */
.img-text{
  position:absolute;
  bottom:12px;
  left:50%;
  transform:translateX(-50%);
  color:#fff;
  padding:6px 14px;
  border-radius:20px;
  font-weight:700;
  font-size:14px;
}

/* BUTTON */
.btn-telusuri{
  display:inline-block;
  margin-top:14px;
  background:#5E2A08;
  color:#fff;
  padding:8px 20px;
  border-radius:20px;
  text-decoration:none;
  font-size:14px;
  font-weight:600;
}

@import url('https://fonts.googleapis.com/css2?family=Port+Lligat+Sans&display=swap');

.pantun-section{
  background:#8B5A2B;
  padding:80px 20px;
  display:flex;
  justify-content:center;
}

.pantun-box{
  background:#fff;
  width:80%;
  max-width:900px;
  padding:30px 30px 20px;
  border-radius:16px;
  position:relative;
}

.pantun-box h3{
  text-align:center;
  font-family:'Port Lligat Sans', sans-serif;
  font-size:26px;
  margin-bottom:30px;
}

.pantun-isi{
  text-align:center;
  font-family:'Port Lligat Sans', sans-serif;
  font-size:18px;
  line-height:1.8;
  margin-bottom:40px;
}

.pantun-arti{
  font-family:'Port Lligat Sans', sans-serif;
  font-size:16px;
  line-height:1.7;
  position:absolute;
  left:30px;
  bottom:30px;
  max-width:350px;
}

@import url('https://fonts.googleapis.com/css2?family=Port+Lligat+Sans&display=swap');

.puisi-section{
  background:#8B5A2B;
  padding:80px 20px;
  display:flex;
  justify-content:center;
}

.puisi-box{
  background:#fff;
  width:80%;
  max-width:900px;
  padding:30px 30px 20px;
  border-radius:16px;
  position:relative;
}

.puisi-box h3{
  text-align:center;
  font-family:'Port Lligat Sans', sans-serif;
  font-size:26px;
  margin-bottom:30px;
}

.puisi-isi {
  font-family: 'Port Lligat Sans', sans-serif;
  font-size: 16px;
  line-height: 1.8;
  white-space: pre-wrap;
}

.puisi-arti{
  font-family:'Port Lligat Sans', sans-serif;
  font-size:16px;
  line-height:1.7;
  position:absolute;
  left:40px;
  bottom:30px;
  max-width:420px;
}
.puisi-isi,
.puisi-arti {
  white-space: pre-line !important;
  line-height: 1.8 !important;
  display: block;
}

/* background coklat mocca */
.nav-pusaka-wrapper {
  background: #8B5A2B;
  padding: 30px 0;
}

.nav-pusaka {
  background-color: #8B5A2B;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 30px;
}

.btn-pusaka {
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  background: rgba(255, 255, 255, 0.15);
  padding: 10px 18px;
  border-radius: 6px;
  transition: 0.3s;
}

.btn-pusaka:hover {
  background: rgba(255, 255, 255, 0.3);
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

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h1>TRADISI LISAN</h1>
        <p>Tuturan lisan seperti cerita rakyat, pantun, dan puisi</p>
    </div>
</section>


<section class="tradisi-section">
  <h1>Pengantar Tradisi Lisan</h1>

  <p class="deskripsi">
    Tuturan lisan seperti cerita rakyat, pantun, mantra, dan lagu daerah.
  </p>

  <p class="highlight">
    Menjaga Warisan Leluhur, Mewarisi Nilai Budaya
  </p>

<div class="kotak-coklat">
  <h3>Jenis Tradisi Lisan</h3>
</div>
</section>

<section class="tradisi-cards">
  <div class="card-tradisi">
    <div class="img-wrap">
      <img src="images/tradisi1.jpeg" alt="Cerita Rakyat">
      <span class="img-text">Pantun Paser</span>
    </div>
    <a href="#" class="btn-telusuri">Telusuri</a>
  </div>

  <div class="card-tradisi">
    <div class="img-wrap">
      <img src="images/tradisi2.jpeg" alt="Pantun">
      <span class="img-text">Puisi Paser</span>
    </div>
    <a href="#" class="btn-telusuri">Telusuri</a>
  </div>

  <div class="card-tradisi">
    <div class="img-wrap">
      <img src="images/tradisi3.jpeg" alt="Mantra">
      <span class="img-text">Cerita Rakyat</span>
    </div>
    <a href="#" class="btn-telusuri">Telusuri</a>
  </div>

  <div class="card-tradisi">
    <div class="img-wrap">
      <img src="images/tradisi4.jpeg" alt="Lagu Daerah">
      <span class="img-text">Pribahasa Paser</span>
    </div>
    <a href="#" class="btn-telusuri">Telusuri</a>
  </div>
</section>


<section class="pantun-section">
  <div class="pantun-box">
    <h3>Pantun</h3>

    <p class="pantun-isi">
      Buah tiung kusing maman (a)<br>
      Beli de pasar Tanjung Aru (b)<br>
      Adun sanang kito kawan (a)<br>
      Asal jaji kawan baru (b)
    </p>

    <p class="pantun-arti">
      <b>Artinya:</b><br>
      Buah terong rasanya manis<br>
      Beli di pasar Tanjung Aru<br>
      Betapa senang hati kita kawan<br>
      Karena dapat kawan baru
    </p>
  </div>
</section>

<section class="puisi-section">
  <div class="puisi-box">
    <h3>Puisi</h3>

    <p>Paser, Taka Serumpun</p>
    <p>Olo nyanda di langit Kandilo</p>
    <p>Ngencorong jara de pusu mata</p>
    <p>Benuo takat, benuo mulyo</p>
    <p>Taka nio jaji seiya sekata</p>

    <p>Isi gumi nio dait tanding e</p>
    <p>Kayu meranti jangkung de langat</p>
    <p>Sungi e mengalir mawa berkat e</p>
    <p>Penyemangat atei takat si semangat</p>

    <p>Paser... Benuo Taka, tumpah darahku</p>
    <p>Eling mo adat, eling mo pesuru</p>
    <p>Sampai mate jaji pengabdianku</p>

    <br>

    <p><b>Artinya:</b></p>
    <p>Paser, Kita Serumpun</p>
    <p>Matahari bersinar di langit Kandilo</p>
    <p>Memancar cahaya di pusat mata</p>
    <p>Negeri kita, negeri yang mulia</p>
    <p>Kita mau jadi seiya sekata</p>

    <p>Isi bumi tiada tandingannya</p>
    <p>Kayu meranti menjulang ke langit</p>
    <p>Sungainya mengalir membawa berkat</p>
    <p>Penyemangat hati yang penuh semangat</p>

    <p>Paser... Negeri Kita, tumpah darahku</p>
    <p>Ingatlah adat, ingatlah pesan leluhur</p>
    <p>Sampai mati jadi pengabdianku</p>
  </div>
</section>

<div class="nav-pusaka">
  <a href="pusaka.php" class="btn-pusaka kiri">
    ← Kembali ke 10 Daftar Pusaka
  </a>

  <a href="manuskrip.php" class="btn-pusaka kanan">
    Lanjut ke Manuskrip →
  </a>
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
