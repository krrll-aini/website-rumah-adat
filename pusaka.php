<?php
include "service/db.php";
$data = $conn->query("SELECT * FROM pusaka ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Pusaka Benuo Taka</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: #ffffff;
        color: #333;
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
        url('images/hero-pusaka.jpeg') center/cover no-repeat;
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
.pusaka-title{
  text-align:center;
  font-size:32px;
  margin-bottom:20px;
}

.pusaka-desc{
  max-width: 800px;
  margin: 0 auto 20px;
  text-align: left;
  line-height: 1.8;
}

.pusaka-btn-wrap{
  text-align:center;
  margin:15px 0;
}

.pusaka-btn{
  background:#6b2e00;
  color:#fff;
  padding:10px 22px;
  border-radius:8px;
  text-decoration:none;
  font-weight:bold;
}
.pusaka-subtitle{
  text-align:center;
  font-style:italic;
  margin:20px 0;
}

.pusaka-h1{
  max-width: 800px;
  margin: 30px auto;
  line-height: 1.8;
  text-align: left;
}

.pusaka-grid{
  display:grid;
  grid-template-columns: repeat(3, 1fr);
  gap:20px;
}
.pusaka-item img{
  width:100%;
  border-radius:10px;
}

.card-coklat{
  background:#6b2e00;
  color:#fff;
  padding:10px;
  border-radius:8px;
  text-align:center;
  margin-top:8px;
}
/* Row terakhir full-width card */
.pusaka-grid .pusaka-item:last-child{
  grid-column: 1 / 4;
}

/* CARD PUSAKA */
.pusaka-card{
  background:#5E2A08;
  border-radius:18px;
  padding:18px 16px 28px;   /* ⬅ bikin card lebih panjang ke bawah */
  display:flex;
  flex-direction:column;
  align-items:center;      /* ⬅ gambar & teks ke tengah */
  text-decoration:none;
  color:#fff;
  transition:.3s;
}

.pusaka-card:hover{
  transform:translateY(-6px);
}

/* GAMBAR */
.pusaka-card img{
  width:90%;
  height:200px;
  object-fit:cover;
  border-radius:14px;
  margin-bottom:18px;      /* ⬅ jarak gambar ke teks */
}

/* JUDUL */
.pusaka-title-card{
  text-align:center;
  font-size:16px;
  font-weight:600;
  letter-spacing:.5px;
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
        <h1>Pusaka Benuo Taka</h1>
        <p>
            Sepuluh  Warisan Takbenda yang Menjadi Jiwa Benuo Taka
        </p>
    </div>
</section>


<div class="container">

  <!-- Judul Utama -->
  <h1 class="pusaka-title">Pusaka Benuo Taka</h1>

  
  <!-- Deskripsi -->
  <p class="pusaka-desc">
    Pusaka Benuo Taka memuat sepuluh aspek penting kebudayaan masyarakat Paser yang diwariskan lintas generasi. Setiap bagian mencerminkan identitas, pengetahuan, dan kearifan lokal yang hidup hingga kini.
  </p>

  <!-- Tombol -->
  <div class="pusaka-btn-wrap">
    <a href="#" class="pusaka-btn">Jelajahi 10 Warisan Budaya</a>
  </div>

    <!-- P teks tengah -->
  <p class="pusaka-subtitle">Menjaga Warisan Leluhur, Mewarisi Nilai Budaya</p>

  <!-- H2 deskripsi -->
  <h2 class="pusaka-h1">
 Sepuluh Pusaka ini menggambarkan kehidupan masyarakat Paser yang harmonis dengan alam, menghormati leluhur, dan menjunjung tinggi persatuan.
  </h2>

  
<!-- Grid Gambar & Card -->
<div class="pusaka-grid">
<?php while($row = $data->fetch_assoc()): ?>


<a href="<?=
    strpos(strtolower($row['nama']), 'tradisi lisan') !== false ? 'tradisi_lisan.php' :
    (strpos(strtolower($row['nama']), 'manuskrip') !== false ? 'manuskrip.php' :
    (strpos(strtolower($row['nama']), 'adat istiadat') !== false ? 'adat_istiadat.php' :
    (strpos(strtolower($row['nama']), 'ritus') !== false ? 'ritus.php' :
    (strpos(strtolower($row['nama']), 'teknologi tradisional') !== false ? 'teknologi.php' :
    (strpos(strtolower($row['kategori']), 'pengetahuan tradisional') !== false ? 'tradisional.php' :
    (strpos(strtolower($row['nama']), 'seni') !== false ? 'seni.php' :
    (strpos(strtolower($row['nama']), 'bahasa') !== false ? 'bahasa.php' :
    (strpos(strtolower($row['nama']), 'permainan') !== false ? 'permainan.php' :
    (strpos(strtolower($row['nama']), 'olahraga') !== false ? 'olahraga.php' :
     '#')))))))))
?>" class="pusaka-card">



    <img src="admin/uploads/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>">
    <div class="pusaka-title-card">
        <?= $row['nama']; ?>
    </div>

</a>

<?php endwhile; ?>
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
