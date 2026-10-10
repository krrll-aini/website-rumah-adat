<?php
function get_preview($file_path, $length = 200) {
    if(file_exists($file_path)) {
        ob_start();
        include $file_path;
        $content = ob_get_clean();
        $content = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);
        $content = preg_replace('#<style(.*?)>(.*?)</style>#is', '', $content);
        $content = strip_tags($content);
        $content = trim(preg_replace('/\s+/', ' ', $content));
        if(strlen($content) > $length) {
            $content = substr($content, 0, $length) . '...';
        }
        return $content;
    } else {
        return "Konten belum tersedia.";
    }

}
// Daftar halaman dan linknya
$pages = [
    'tentang' => 'tentang.php',
    'pusaka' => 'pusaka.php',
    'cerita' => 'cerita_rakyat.php',
    'galeri' => 'galeri.php',
    'agenda' => 'agenda.php',
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Adat Kuta Rekan Tatau</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
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

    /* ====== HERO SECTION ====== */
   .hero {
        width: 100%;
        height: 90vh;
        background: url('images/background.jpeg') center/cover no-repeat;
        position: relative;
        display: flex;
        align-items: flex-end; /* ← diubah dari 'center' jadi 'flex-end' */
        padding-bottom: 70px; /* ← jarak dari bawah */
    }


    .hero::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,.40);
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: white;
        padding-left: 60px;
        max-width: 550px;
    }

    .hero-content h2 {
        font-size: 25px;
        margin-bottom: 2px;
        letter-spacing: 1px;
        opacity: .9;
    }

    .hero-content h1 {
        font-size: 36px;
        line-height: 1.0;
        font-weight: 700;
    }

    /* ====== BUTTONS ====== */
    .hero-buttons {
        margin-top: 30px;
        display: flex;
        gap: 20px;
    }

    .btn {
        background: #000;
        padding: 12px 22px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        color: #ffcc00;
        border: 2px solid #ffcc00;
        text-decoration: none;
        transition: .3s;
    }

   .btn:hover {
        background: #FFD700;
        color: #000;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.2);
    }

    /* ====== SEJARAH RUMAH ADAT ====== */
.sejarah {
    background-color: #FFF952;
    padding: 80px 40px;
}

.sejarah-container {
    max-width: 1200px;
    margin: auto;
}

.sejarah-judul {
    text-align: center;
    margin-bottom: 50px;
}

.sejarah-judul h2 {
    font-size: 30px;
    font-weight: 700;
    color: #000;
    display: inline-block;
    padding-bottom: 10px;
    border-bottom: 4px solid #F5BD02;
}

.sejarah-content {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr; /* teks kiri, gambar kanan */
    gap: 40px;
    align-items: flex-start;
}

.sejarah-text {
    text-align: justify;
}

.sejarah-subjudul {
    font-size: 15px;
    line-height: 1.9;
    color: #333;
}

.sejarah-text .baca-selengkapnya {
    display: inline-block;
    margin-top: 20px;
    font-weight: 600;
    font-size: 14px;
    color: #000;
}

.sejarah-images {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.sejarah-images img {
    width: 100%;
    border-radius: 12px;
    border: 3px solid #F5BD02;
    object-fit: cover;
}

@media (max-width: 768px) {
    .sejarah-content {
        grid-template-columns: 1fr;
    }
}

/* ====== EKSPLORASI KONTEN ====== */
.eksplorasi {
    padding: 80px 40px;
    text-align: center;
    background: #FFF952; /* ganti dari putih ke kuning */
}

.eksplorasi-title {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 6px; /* jarak ke subjudul diperkecil */
}

.eksplorasi-subtitle {
    font-size: 15px;
    max-width: 700px;
    margin: 0 auto 24px; /* jarak ke box diperkecil */
    color: #333;
}

.eksplorasi-box {
    position: relative;
    max-width: 1380px; /* dibesarkan sedikit lagi */
    margin: 10px auto 0; /* dinaikkan mendekati judul */
    padding: 120px 100px; /* box makin lega */
    background-size: cover;
    background-position: center;
    border-radius: 20px;
}

.eksplorasi-items {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
    justify-items: stretch;
}

.item {
    padding: 26px; /* ornamen sedikit dibesarkan */
    border-radius: 14px;
    font-size: 16px; /* teks ikut naik dikit */
    font-weight: 600;
    min-height: 105px; /* kotak lebih tinggi */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.item.hijau { background:#1f7a3f; color:#fff; }
.item.putih { background:#fff; color:#000; }
.item.kuning { background:#FFD700; color:#000; }
.item.hitam {
    background:#000;
    color:#fff;
    grid-column: 2; /* baris bawah kolom tengah */
}
.item.merah {
    background:#b00000;
    color:#fff;
    grid-column: 3; /* baris bawah kolom kanan */
}

.rusa-ornamen {
    position: absolute;
    left: 35px;
    bottom: 35px;
    width: 170px; /* rusa dibesarkan sedikit */
}

@media (max-width:768px){
    .eksplorasi-box{ padding:40px 20px; }
    .rusa-ornamen{ width:90px; }
}

/* ====== CERITA RAKYAT PASER ====== */
.cerita {
    padding: 100px 40px;
    text-align: center;
    background: linear-gradient(180deg, #FFFFD0, #FFF952, #C51F1A);
}

.cerita-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 8px;
}

.cerita-subtitle {
    max-width: 700px;
    margin: 0 auto 50px;
    font-size: 15px;
}

.cerita-grid {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.cerita-card {
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 24px rgba(0,0,0,.25);
}

.cerita-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.cerita-btn {
    margin-top: 50px;
}

.cerita-rakyat {
  background: #FFF952;
  padding: 80px 40px;
  text-align: center;
}

.judul-cerita {
  font-size: 32px;
  font-weight: 700;
}

.subjudul-cerita {
  margin: 10px 0 40px;
  font-size: 15px;
}

/* LAPISAN KUNING */
.lapisan-kuning {
  padding: 40px;
  border-radius: 25px;
}

/* LAPISAN COKLAT */
.lapisan-coklat {
  padding: 40px;
  border-radius: 25px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 25px;
}

/* KARTU CERITA */
.card-cerita {
    background: rgba(255, 255, 208, 0.92); /* transparan dikit */
    border-radius: 20px;
    padding: 22px;
    text-align: left;
    backdrop-filter: blur(2px);
    position: relative; /* ⬅️ penting untuk tombol pojok */
    min-height: 420px; /* ruang tombol */
}


.card-cerita img {
  width: 100%;
  border-radius: 15px;
  margin-bottom: 12px;
}

.card-cerita h3 {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 8px;
}

.card-cerita p {
  font-size: 14px;
  line-height: 1.6;
  margin-bottom: 40px; /* ruang untuk tombol */
}

.tombol-cerita {
  margin-top: 30px;
}

/* tombol baca selengkapnya di dalam card */
.card-cerita .baca-selengkapnya {
  position: absolute;
  right: 22px;
  bottom: 20px;
  font-size: 13px;
  font-weight: 600;
  color: #000;
  text-decoration: none;
}

.card-cerita .baca-selengkapnya:hover {
  text-decoration: underline;
}


@media (max-width: 768px) {
    .cerita-grid {
        grid-template-columns: 1fr;
    }
}

/* ====== PRATINJAU HALAMAN ====== */
    .preview-section {
        padding: 50px 30px;
        background: #f4f4f4;
        margin: 20px 0;
        border-radius: 10px;
    }

    .preview-section h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .preview-section p {
        font-size: 16px;
        margin-bottom: 20px;
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

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .footer-desc {
            margin: auto;
        }

.footer-maps{
    margin-top:20px;
}
        .hero-content {
            padding-left: 20px;
        }

        .hero-content h1 {
            font-size: 28px;
        }

        .hero-buttons {
            flex-direction: column;
            width: 70%;
        }
    }
</style>
<body>

<!-- NAVBAR -->
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
        <h2>RUMAH ADAT KUTA REKAN TATAU</h2>
        <h1>MENJAGA YANG LAMA<br>MENGINSPIRASI YANG BARU</h1>
        <div class="hero-buttons">
            <a href="#pusaka" class="btn">Jelajahi Budaya</a>
            <a href="#tentang" class="btn">Baca Sejarah Rumah Adat</a>
        </div>
    </div>
</section>

<!-- SEJARAH RUMAH ADAT -->
<section class="sejarah">
  <div class="sejarah-container">

  <!-- Judul di tengah -->
  <div class="sejarah-judul">
    <h2>Sejarah Rumah Adat Kuta Rekan Tatau</h2>
  </div>

  <!-- Konten kiri & kanan -->
  <div class="sejarah-content">
    <div class="sejarah-text">
      <p class="sejarah-subjudul">
        Lowu Kuta Rekan Tatau adalah istilah bahasa kuno suku Paser yang berarti “rumah besar dan megah untuk seluruh masyarakat agar tercapai kejayaan.” Nama ini berakar dari masa kejayaan Negeri Paser di bawah Kerajaan Padang Kero di hulu Sungai Telake, masa ketika Nalau Raja Tondoi dikenal sebagai pemimpin sakti dan berpengaruh hingga lebih dari separuh Pulau Borneo. Istilah ini juga muncul dalam kisah mitologi suku Paser, terutama legenda tentang Kuta Talun Luwai dan Kuta Talun Renrok, dua rumah besar milik Nalau Raja Tondoi. “Kuta” adalah sebutan rumah adat kuno suku Paser yang telah ada sejak ribuan tahun, meskipun kini hanya satu situs asli yang masih tersisa di Paser Belengkong.
        <br><br>
        Rumah adat Lowu Kuta Rekan Tatau yang berdiri saat ini dibangun kembali pada tahun 2018 sebagai upaya menghidupkan kembali simbol rumah adat Kuta yang hampir punah. Pendirian ini menjadi wujud pelestarian identitas budaya, tempat berkumpulnya masyarakat, sekaligus ruang untuk menjaga keberlanjutan adat dan nilai-nilai leluhur Paser di era modern.
        <br><br>
        Secara filosofis, bentuk rumah adat ini menyerupai induk ayam yang mengembangkan sayapnya untuk melindungi anak-anaknya. Struktur atap yang melebar dan bangunan yang memanjang melambangkan perlindungan, kehangatan, dan pengayoman.
      </p>
      </div>

    <div class="sejarah-images">
      <img src="images/sejarah1.jpeg" alt="Sejarah 1">
      <img src="images/sejarah2.jpeg" alt="Sejarah 2">
      <img src="images/sejarah3.jpeg" alt="Sejarah 3">
    </div>
  </div>
</div>
</section>

<!-- EKSPLORASI KONTEN -->
<section class="eksplorasi">
  <h3 class="eksplorasi-title">Lihat Lebih Banyak Disini</h3>
  <p class="eksplorasi-subtitle">“ Temukan cerita, tradisi, dan panduan kunjungan untuk mengenal Rumah Adat Paser dengan lebih dekat ”</p>

  <div class="eksplorasi-box" style="background-image:url('images/box-coklat.jpeg')">
    <div class="eksplorasi-items">
      <div class="item hijau">Mengenal Sejarah dan Filosofi Bangunan Rumah Adat Kuta Rekan Tatau</div>
      <div class="item putih">10 Warisan Budaya Takbenda Masyarakat Paser</div>
      <div class="item kuning">Kisah Legenda, Mitos, dan Dongeng Rakyat</div>
      <div class="item hitam">Dokumentasi Foto dan Video Kegiatan</div>
      <div class="item merah">Bantuan dan Panduan untuk Pengunjung</div>
    </div>

    <img src="images/rusa.jpeg" class="rusa-ornamen" alt="Rusa">
  </div>
</section>

<section class="cerita-rakyat">
  <h2 class="judul-cerita">Cerita Rakyat Paser</h2>
  <p class="subjudul-cerita">
    “ Kisah dan legenda suku Paser yang menggambarkan kehidupan, kepercayaan, dan budaya leluhur ”
  </p>

  <!-- LAPISAN KUNING -->
  <div class="lapisan-kuning">

    <!-- LAPISAN COKLAT -->
    <div class="lapisan-coklat">

      <!-- CERITA 1 -->
      <div class="card-cerita">
        <img src="images/cerita1.jpeg" alt="Legenda Putri Petung">
        <h3>LEGENDA PASER : PUTRI PETUNG</h3>
        <p>
          Legenda Putri Petung adalah legenda yang berasal dari Kalimantan Timur
          tepatnya di Kabupaten Paser Penajam. Legenda yang berhubungan dengan
          sejarah perjuangan bangsa Indonesia melawan penjajahan Belanda.....
        </p>
        <a href="cerita_rakyat.php" class="baca-selengkapnya">Baca Selengkapnya →</a>
      </div>

      <!-- CERITA 2 -->
      <div class="card-cerita">
        <img src="images/cerita2.jpeg" alt="Legenda Putri Petung">
        <h3>LEGENDA PASER : PUTRI PETUNG</h3>
        <p>
          Legenda Putri Petung adalah legenda yang berasal dari Kalimantan Timur
          tepatnya di Kabupaten Paser Penajam. Legenda yang berhubungan dengan
          sejarah perjuangan bangsa Indonesia melawan penjajahan Belanda.....
        </p>
        <a href="cerita_rakyat.php" class="baca-selengkapnya">Baca Selengkapnya →</a>
      </div>

      <!-- CERITA 3 -->
      <div class="card-cerita">
        <img src="images/cerita3.jpeg" alt="Danau Lipan">
        <h3>Asal Usul Danau Lipan</h3>
        <p>
          Cerita Rakyat Kalimantan Timur | Kisah Nusantara....
        </p>
        <a href="cerita_rakyat.php" class="baca-selengkapnya">Baca Selengkapnya →</a>
      </div>
    </div>
  </div>
  

  <div class="tombol-cerita">
    <a href="cerita_rakyat.php" class="btn">Lihat Semua Cerita</a>
  </div>
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
