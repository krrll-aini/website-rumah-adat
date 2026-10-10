<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Pengetahuan Tradisional | Pusaka Benuo Taka</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}

body{
  background:#8B5A2B;
}

/* NAVBAR */
header{
  background:#000;
  color:#fff;
  padding:12px 30px;
  display:flex;
  justify-content:space-between;
}

.logo-img{
  height:32px;
}

nav ul{
  display:flex;
  gap:12px;
  list-style:none;
}

nav ul li a{
  color:#FFD700;
  text-decoration:none;
}

/* HERO */
.hero-tradisional{
  height:100vh;
  background:url('images/tradisional.jpeg') center/cover no-repeat;
  display:flex;
  align-items:flex-end;
  padding:40px;
}

.overlay-text{
  color:#fff;
}

.overlay-text h1{
  font-size:28px;
  font-weight:bold;
}

.overlay-text p{
  font-size:14px;
}

/* INTRO */
.tradisional-intro{
  text-align:center;
  padding:60px 20px;
  color:#fff;
}

.tradisional-intro h1{
  font-size:36px;
  margin-bottom:15px;
}

.tradisional-intro .desc{
  max-width:600px;
  margin:auto;
  line-height:1.6;
}

.tradisional-intro .highlight{
  color:#FFF952;
  margin-top:10px;
  font-weight:600;
}

/* NAV BUTTON */
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

<!-- HERO -->
<section class="hero-tradisional">
  <div class="overlay-text">
    <h1>Pusaka Benuo Taka</h1>
    <p>Sepuluh Warisan Takbenda yang Menjadi Jiwa Benuo Taka</p>
  </div>
</section>

<!-- INTRO -->
<section class="tradisional-intro">
  <h1>Pengetahuan Tradisional</h1>

  <p class="desc">
    Pengetahuan tradisional merupakan warisan intelektual masyarakat yang diwariskan secara turun-temurun, mencakup cara hidup, pengobatan, pertanian, serta pemahaman terhadap alam.
  </p>

  <p class="highlight">
    Menjaga Pengetahuan, Merawat Kearifan Lokal
  </p>
</section>

<!-- NAV -->
<div class="nav-pusaka">
  <a href="pusaka.php">← Kembali ke 10 Daftar Pusaka</a>
  <a href="teknologi.php">Lanjut ke Teknologi Tradisional →</a>
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

