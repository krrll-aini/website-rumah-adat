<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tentang Rumah Adat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

/* ===== CONTAINER ===== */
.container{
    max-width:1100px;
    margin:60px auto;
    padding:0 20px;
}

/* ===== TENTANG RUMAH ADAT PASER ===== */
.tentang-paser {
  padding: 80px 40px;
}

.tentang-container {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 50px;
  align-items: center;
}

/* GAMBAR */
.tentang-image img {
  width: 90px0%;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

/* TEKS */
.tentang-text h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 18px;
  color: #000;
}

.tentang-text h2 span {
  font-weight: 600;
}

.tentang-text p {
  font-size: 15px;
  line-height: 1.8;
  color: #000;
  text-align: justify;
}

/* ===== SEJARAH & ASAL USUL ===== */
.sejarah-section{
    padding: 70px 40px;
}

.sejarah-container {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: -90px; /* ⬅ dirapetin */
  align-items: center;
}


/* TEKS */
.sejarah-text h2{
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 18px;
    color: #000;
}

.sejarah-text p{
    font-size: 15px;
    line-height: 1.8;
    color: #333;
    max-width: 520px;
    margin-bottom: 30px;
    text-align: justify;
}

/* TOMBOL */
.btn-sejarah{
    display: inline-block;
    background: #9BB8A7;
    color: #000;
    padding: 12px 22px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
}

.btn-sejarah:hover{
    background: #ffcc00;
    color: #000;
}

.sejarah-image img{
    width: 90%;
    max-width: 360px;
    margin-left: auto;      /* ⬅ dorong ke teks */
}



/* ===== PROFIL RUMAH ADAT ===== */
.profil-rumah-adat{
    background:#f5f5f5;
    padding:90px 20px;
}

.profil-container{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:50px;
    align-items:center;

    background: transparent;   /* ⬅️ HILANGKAN BOX */
    padding:0;                 /* ⬅️ OPTIONAL */
    border-radius:0;
    box-shadow:none;
}
/* GAMBAR */
.profil-image img{
    width:100%;
    height:360px;
    object-fit:cover;
    border-radius:18px;
}

/* TEKS */
.profil-text h2{
    font-size:30px;
    margin:0 0 20px;
    color:#222;
    line-height:1.3;
}

.profil-text h2 span{
    font-size:18px;
    color:#fff;
    font-weight:500;
}

.profil-text p{
    font-size:15px;
    line-height:1.9;
    color:#fff;
    margin-bottom:14px;
}

/* ===== QUOTE RUMAH ADAT ===== */
.quote-rumah-adat{
    padding: 60px 20px;
    margin-top: -100px; 
    text-align: center;
}

.quote-text{
    font-size: 18px;
    font-style: italic;
    color: #333;
    max-width: 700px;
    margin: 0 auto 20px;
    line-height: 1.7;
}

.line-abu{
    width: 190px;        /* ⬅ garis makin panjang */
    height: 1px;         /* ⬅ kalau ini <img>, boleh dihapus */
    margin: 12px auto 0;
}


/* ===== ORNAMEN SECTION ===== */
.ornamen-section{
    padding: 80px 40px;
    background: #fff;
}

/* JUDUL */
.ornamen-title{
    text-align: center;
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 45px;
    color: #000;
}

/* CONTAINER */
.ornamen-container{
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

/* KIRI */
.ornamen-left p{
    font-size: 15px;
    line-height: 1.8;
    color: #333;
    max-width: 520px;
    margin-bottom: 30px;
    text-align: justify;
}


/* TOMBOL */
.btn-ornamen{
    display: inline-block;
    background: #9BB8A7;
    color: #000;
    padding: 14px 26px;
    border-radius: 4px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
}

.btn-ornamen:hover{
    background: #ffcc00;
    color: #000;
}

/* KANAN */
.ornamen-right img{
    width: 100%;
    max-width: 430px;
    margin-left: 50px;
    border-radius: 6px;
}

/* ===== ORNAMEN & FILOSOFI ===== */
.filosofi-section{
    padding: 80px 40px;
    background: #fff;
}

.filosofi-container{
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    align-items: center;
    gap: 40px;
}

/* GAMBAR */
.filosofi-image img{
    width: 100%;
    max-width: 420px;
    margin-left: 20px; /* geser dikit ke kanan */
}

/* TEKS */
.filosofi-text h2{
    text-align: center;
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 22px;
    color: #000;
}

.filosofi-text p{
    font-size: 15px;
    line-height: 1.9;
    color: #333;
    text-align: justify;
    margin-bottom: 30px;
}

/* TOMBOL */
.btn-filosofi{
    display: inline-block;
    background: #9BB8A7;
    color: #000;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
}

.btn-filosofi:hover{
      background: #ffcc00;
      color: #000;
}

/* ===== MATERIAL & TEKNIK PEMBANGUNAN ===== */
.material-section{
    padding: 80px 40px;
    background: #fff;
}

.material-container{
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    align-items: center;
    gap: 40px;
}

/* TEKS */
.material-text h2{
    text-align: center;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 26px;
    color: #111;
    letter-spacing: .5px;
}

.material-text p{
    font-size: 15.5px;
    line-height: 1.9;
    color: #333;
    text-align: justify;
    max-width: 540px;
    margin-bottom: 32px;
}


/* TOMBOL */
.btn-material{
    display: inline-block;
    background: #9BB8A7;
    color: #000;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
}

.btn-material:hover{
     background: #ffcc00;
      color: #000;
}

/* GAMBAR */
.material-image h2{
    position: absolute;
    top: -50px;
    left: 0;
    font-size: 32px;
    font-weight: 700;
    color: #111;
}

.material-image img{
    display: block;
    margin-left: 40px;   /* ← GESER KE KANAN */
}


/* ===== DESAIN RUMAH ADAT ===== */
.desain-section{
    padding: 80px 40px;
    background: #fff;
}

.desain-container{
    max-width: 1000px;
    margin: auto;
}

.desain-container h2{
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #111;
    text-align: center;
}

.desain-container p{
    font-size: 15px;
    line-height: 1.9;
    color: #333;
    text-align: justify; /* ⬅ rapi kiri-kanan */
}

/* ===== NILAI DESAIN ===== */
.nilai-section{
    padding: 80px 40px;
    background: #fff;
}

.nilai-section h2{
    text-align: center;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 50px;
    color: #111;
}

/* GRID */
.nilai-grid{
    max-width: 1200px;
    margin: auto;
}

/* ATAS */
.nilai-atas img{
    width: 100%;
    max-width: 320px;
    aspect-ratio: 1 / 1;
    object-fit: cover;
    border-radius: 18px;
    display: block;

    margin-left: auto;
    margin-right: auto;
    margin-top: -40px;     /* ⬅ NAIK KE ATAS */
    margin-bottom: 20px;
}

/* BAWAH 3 */
.nilai-bawah{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.nilai-bawah img{
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 16px;
}


.cta-galeri{
    text-align: center;
    padding: 80px 20px;
    background: #fff;
}

.btn-galeri{
    display: inline-block;
    background: #9BB8A7;
    color: #000;
    padding: 14px 30px;
    border-radius: 10px;
    font-weight: 600;
    text-decoration: none;
    letter-spacing: .5px;
    transition: .3s;
}

.btn-galeri:hover{
    background: #ffcc00;
}

.cta-galeri h2{
    margin-top: 35px;
    font-size: 18px;
    font-weight: 600;
    color: #111;
    max-width: 720px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.5;
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
        <h1>Tentang Rumah Adat Kuta Rekan Tatau</h1>
        <p>
            Melalui halaman ini, mari mengenal dan ikut melestarikan
            keindahan budaya Paser yang terpancar dari Rumah Adat
            Lowu Kuta Rekan Tatau.
        </p>
        <a href="#sejarah" class="btn-hero">Mengenal Rumah Adat</a>
    </div>
</section>

<section class="profil-rumah-adat">
    <div class="profil-container">

        <!-- GAMBAR KIRI -->
        <div class="profil-image">
            <img src="images/rumah-adat.jpeg" alt="Rumah Adat Lowu Kuta Rekan Tatau">
        </div>

            <!-- TEKS KANAN -->
    <div class="tentang-text">
      <h2>
        RUMAH ADAT PASER<br>
        <span>(LOWU KUTA REKAN TATAU)</span>
      </h2>

      <p>
        Rumah Adat Lowu Kuta Rekan Tatau adalah rumah adat khas masyarakat
        Paser yang menjadi pusat budaya, simbol persatuan, dan identitas
        leluhur. Nama “Lowu Kuta Rekan Tatau” berarti rumah besar dan megah
        untuk seluruh masyarakat demi kejayaan. Rumah adat ini dibangun
        kembali pada tahun 2018 sebagai upaya menghidupkan kembali warisan
        rumah adat Paser (Kuta) yang hampir punah.
      </p>
        </div>

    </div>
</section>

<!-- QUOTE TENTANG RUMAH ADAT -->
<section class="quote-rumah-adat">
    <p class="quote-text">
        “Rumah adat bukan sekadar bangunan, tapi jiwa yang mempersatukan masyarakat.”
    </p>
    <img src="images/line-abu.jpeg" alt="Garis pemisah" class="quote-line">
</section>


<div class="sejarah-container">
  <div class="sejarah-image">
    <img src="images/sejarah.jpeg" alt="Sejarah Rumah Adat Paser">
  </div>

  <!-- TEKS KANAN -->
  <div class="sejarah-text">
    <h2>Sejarah & Asal Usul</h2>
    <p>
    Rumah Adat Lowu Kuta Rekan Tatau berasal dari masa kejayaan Kerajaan Padang KKero di Hulu Sungai Telake. Dibangun kembali pada tahun 2018 di Penajam Paser Utara, rumah ini menjadi simbol pelestarian budaya masyarakat Paser.
    </p>

    <a href="sejarah.php" class="btn-sejarah">Baca Sejarah dengan Lengkap</a>
  </div>
</div>



<section class="ornamen-section">
    <h2 class="ornamen-title">Desain Lowu Kuta Rekan Tatau</h2>

    <div class="ornamen-container">
        <!-- KIRI -->
        <div class="ornamen-left">
            <p>
                Setiap ornamen dan bagian pada rumah adat Paser merupakan wujud kearifan leluhur yang diwariskan dari generasi ke generasi. Melalui ukiran, bentuk, dan susunannya, kita dapat memahami makna, nilai, dan jati diri masyarakat Paser yang penuh dengan filosofi kehidupan.
            </p>

            <a href="desain.php" class="btn-ornamen">Lihat Semua Ornamen dan Maknanya</a>
        </div>

        <!-- KANAN -->
        <div class="ornamen-right">
            <img src="images/desain-lowu.jpeg" alt="Ornamen Rumah Adat Paser">
        </div>
    </div>
</section>


<section class="filosofi-section">
  <div class="filosofi-container">

    <!-- GAMBAR KIRI -->
    <div class="filosofi-image">
      <img src="images/ornamen.jpeg" alt="Ornamen Rumah Adat Paser">
    </div>

    <!-- TEKS KANAN -->
    <div class="filosofi-text">
      <h2>Ornamen & Filosofi</h2>
      <p>
        Ornamen pada rumah adat Paser memiliki makna yang lebih dalam daripada sekadar hiasan.
        Setiap ukiran, garis, dan motif diambil dari alam serta tradisi leluhur yang sarat filosofi kehidupan.
        Motif flora seperti daun dan akar melambangkan kesuburan serta kesinambungan hidup,
        sementara motif burung dan satwa menggambarkan kebebasan, penjagaan, dan hubungan spiritual
        antara manusia dan alam. Pola geometris yang teratur mencerminkan harmoni serta keseimbangan
        yang dijunjung masyarakat Paser dalam menjalani kehidupan.
        Beberapa ornamen juga terinspirasi dari tradisi Belian yang mengandung nilai perlindungan
        dan kekuatan spiritual. Keseluruhan ornamen ini tidak hanya memperindah bangunan,
        tetapi juga menjadi penanda identitas serta pandangan hidup suku Paser.
      </p>

     <a href="ornamen.php" class="btn-filosofi">Proses Pembangunan Lengkap</a>
    </div>

  </div>
</section>

<section class="material-section">
  <div class="material-container">

    <!-- TEKS KIRI -->
    <div class="material-text">
      <h2>Material & Teknik Pembangunan</h2>
      <p>
        Pembangunan Lowu Kuta Rekan Tatau mengikuti tradisi leluhur Paser,
        menggunakan material alam pilihan serta teknik konstruksi adat yang sarat makna,
        mulai dari pemilihan kayu hingga upacara peresmian.
      </p>

      <a href="material.php" class="btn-filosofi">Lihat Proses Pembangunan</a>
    </div>

    <!-- GAMBAR KANAN -->
    <div class="material-image">
      <img src="images/material.jpeg" alt="Material dan Teknik Pembangunan">
    </div>

  </div>
</section>

<section class="desain-section">
    <div class="desain-container">
        <h2>Desain Lowu Kuta Rekan Tatau</h2>
        <p>
            Rumah adat Paser (Kuta) mengandung nilai dan makna hidup yang mencerminkan pandangan masyarakat Paser terhadap kehidupan.
            Bentuk rumah yang menyerupai sayap induk ayam melambangkan persatuan dan perlindungan, sebagaimana induk ayam yang
            menaungi anak-anaknya dengan penuh kasih. Bentuk ini menjadi simbol kebersamaan, rasa aman, serta kesatuan keluarga
            dan masyarakat.
            <br><br>
            Selain itu, rumah adat Paser juga memuat empat warna sakral—kuning, hitam, merah, dan putih—yang masing-masing
            menggambarkan tahapan hidup manusia. Warna kuning melambangkan kehormatan dan keagungan, hitam menggambarkan
            kekuatan serta keteguhan, merah menjadi simbol semangat dan keberanian, sementara putih melambangkan kesucian dan
            awal kehidupan, serta tambahan warna hijau yang menandakan masuknya agama Islam.
            <br><br>
            Keseluruhan unsur ini mencerminkan perjalanan hidup manusia, mulai dari kelahiran, pertumbuhan, kedewasaan,
            hingga warisan nilai bagi generasi berikutnya. Bagi masyarakat Paser, rumah adat tidak sekadar bangunan,
            tetapi cermin kehidupan yang berdiri di atas gotong royong dan berpilar pada persaudaraan—sebuah pengingat
            bahwa budaya dan nilai leluhur harus selalu dijaga dan diwariskan.
        </p>
    </div>
</section>

<section>
    <div class="nilai-grid">
        <!-- ATAS 1 -->
        <div class="nilai-atas">
            <img src="images/nilai1.jpeg" alt="Nilai 1">
        </div>

        <!-- BAWAH 3 -->
        <div class="nilai-bawah">
            <img src="images/nilai2.jpeg" alt="Nilai 2">
            <img src="images/nilai3.jpeg" alt="Nilai 3">
            <img src="images/nilai4.jpeg" alt="Nilai 4">
        </div>
    </div>
</section>

<section class="cta-galeri">
    <a href="galeri.php" class="btn-galeri">LIHAT GALERI</a>
    <h2>"Lowu bukan hanya rumah, tapi lambang kehidupan masyarakat Paser".</h2>
</section>



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
