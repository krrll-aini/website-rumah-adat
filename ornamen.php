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


.ornamen-title{
    text-align: center;
    font-size: 28px;
    margin: 30px 0 15px;
}

.ornamen-desc{
    text-align: left;
    margin-bottom: 25px;
    line-height: 1.7;
}

.ornamen-item{
    margin-bottom: 10px;
}

.ornamen-head{
    cursor: pointer;
    font-weight: 500;
}

.ornamen-body{
    display: none;
    padding-left: 18px;
    font-size: 15px;
    line-height: 1.7;
}

.arrow{
    display: inline-block;
    transition: 0.3s;
}

.rotate{
    transform: rotate(180deg);
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


<div class="container">

  <!-- JUDUL UTAMA -->
  <h2 class="ornamen-title">Nama dan Jenis Ornamen, Ukiran dan Motif pada Lowu Kuta Rekan Tatau</h2>

  <!-- TEKS KIRI -->
  <p class="ornamen-desc">
    Pada bangunan Lowu Kuta Rekan Tatau, setiap ukiran dan motif memiliki makna mendalam yang bersumber dari alam serta kepercayaan masyarakat adat Paser. Ornamen-ornamen tersebut terbagi menjadi bentuk fauna dan flora, yang masing-masing membawa simbol kehidupan, perlindungan, kekuatan, dan keseimbangan spiritual.Melalui setiap detail ukiran, tersimpan nilai luhur yang menunjukkan jati diri budaya Paser.
    Klik setiap bagian di bawah ini untuk mengenal lebih dekat makna di balik setiap ornamen khas Paser:
  </p>

  <!-- DAFTAR ORNAMEN INTERAKTIF -->
  <div class="ornamen-list">
    <div class="ornamen-item">
      <div class="ornamen-head" onclick="toggleOrnamen(this)">
        [1] Ornamen Hewan / Binatang (Fauna) <span class="arrow">▼</span>
      </div>
      <div class="ornamen-body">
        <!-- Isi bisa ditambahkan nanti -->
      </div>
    </div>

    <div class="ornamen-item">
      <div class="ornamen-head" onclick="toggleOrnamen(this)">
        [2] Ornamen Tumbuhan (Flora) <span class="arrow">▼</span>
      </div>
      <div class="ornamen-body">
        <!-- Isi bisa ditambahkan nanti -->
      </div>
    </div>

    <div class="ornamen-item">
      <div class="ornamen-head" onclick="toggleOrnamen(this)">
        [3] Makna dan Filosofi Ornamen / Motif <span class="arrow">▼</span>
      </div>
      <div class="ornamen-body">
        <!-- Isi bisa ditambahkan nanti -->
      </div>
    </div>
  </div>

  <!-- H2 FILOSOFI -->
  <h2 class="ornamen-title">Filosofi dan Nilai Budaya</h2>

  <!-- TEKS FILOSOFI -->
  <p class="ornamen-desc">
    Pembangunan Rumah Adat Paser (Kuta Rekan Tatau) pada dasarnya bangunan  bagian depan/teras harus menghadap kearah Timur yang bermakna menyongsong  kehidupan. Pada subsuku Paser lain mungkin arahnya juga berbeda-beda. 
    <br>Bangunan Lowu Kuta Rekan Tatau menyerupai sayap induk ayam yang sedang  melindungi anaknya. Ini mengandung filosofi bahwa Lowu Kuta Rekan Tatau  merupakan tempat semua lapisan masyarakat tanpa memandang kelas kasta,  keturunan, suku, ras maupun agama. Ketika berada dalam bangunan Lowu Kuta  Rekan Tatau maka akan dilindungi oleh keadatan negeri Paser khususnya di  Kabupaten Penajam Paser Utara.<br>

    <br>Ada 4 (empat) warna sakral suku Paser yakni:</br>
    <ol>
      <li>Bura (putih) simbol dari Sengiang yang menguasai alam ruh...</li>
      <li>Lemit (kuning) simbol dari Tondoi yang menguasai alam air...</li>
      <li>Mea’ (merah) simbol dari Nayu yang menguasai alam api...</li>
      <li>Buyung (hitam) simbol dari Longai/Bongai yang menguasai alam darata...</li>
    </ol>
    Adapun warna hijau juga dipakai oleh suku Paser, ini merupakan pengaruh Islam.
  </p>

</div>

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
