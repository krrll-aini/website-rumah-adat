<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Material & Teknik Pembangunan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
.container{
  max-width: 1100px;
  margin: auto;
  padding: 80px 20px 30px;
}

h1.page-title{
  text-align: center;
  font-size: 32px;
  margin-bottom: 30px;
}
p{
  text-align: left;
  margin-bottom: 20px;
  line-height: 1.7;
}
.subjudul{
  font-weight: 600;
  margin: 25px 0 15px;
  font-size: 20px;
}
/* GALERI Gambar horizontal */
.gambar-row{
  display: flex;
  justify-content: flex-start;
  gap: 15px;
  margin-bottom: 15px;
}
.gambar-row img{
  width: calc(33.33% - 10px);
  border-radius: 8px;
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

  <!-- JUDUL -->
  <h1 class="page-title">Material & Teknik Pembangunan</h1>

    <!-- DESKRIPSI UMUM -->
  <p>
    Pembangunan Lowu Kuta Rekan Tatau menggunakan material alami yang sejak dahulu menjadi ciri khas rumah adat Paser. Setiap bahan dipilih karena kekuatannya, nilai filosofisnya, serta kesesuaiannya dengan lingkungan. Teknik pengerjaannya pun mengikuti cara tradisional yang diwariskan turun-temurun, mengutamakan ketelitian, gotong royong, dan hubungan harmonis dengan alam.
  </p>

    <!-- 1. BAHAN UTAMA -->
  <div class="subjudul">1. Bahan Utama</div>
  <div class="gambar-row">
    <img src="images/kayu1.jpeg" alt="Kayu Ulin">
    <img src="images/kayu2.jpeg" alt="Bangkirai">
    <img src="images/sirap.jpeg" alt="Sirap">
  </div>
  <p>
    Kayu ulin, bangkirai, dan sirap menjadi bahan utama pembangunan rumah adat. Semua kayu dipilih langsung dari hutan adat dengan doa khusus agar diberi keselamatan, kekuatan, dan restu leluhur. Pemilihan bahan ini bukan hanya karena ketahanannya, tetapi juga menjadi simbol penghormatan masyarakat Paser terhadap alam dan warisan nenek moyang.
  </p>
    <!-- 2. Upacara Ori Botuk -->
  <div class="subjudul">2. Upacara Ori Botuk (Tiang Utama)</div>
  <p>
    Sebelum tiang pertama didirikan, masyarakat melaksanakan ritual adat Ori Botuk untuk memohon izin kepada roh penjaga tanah.
    Upacara ini memastikan bahwa pembangunan rumah berjalan dalam perlindungan spiritual. Ritual ini melambangkan harapan agar rumah berdiri kokoh,
    membawa berkah, serta menjadi tempat yang aman bagi seluruh warga.
  </p>
    <!-- 3. Penyusunan Rangka Rumah -->
  <div class="subjudul">3. Penyusunan Rangka Rumah</div>
  <p>
    Kerangka rumah disusun menggunakan teknik tradisional pasak kayu tanpa paku logam.
    Setiap sambungan dibuat dengan ketelitian tinggi, disertai gotong royong seluruh warga kampung.
    Tahap ini menegaskan nilai persatuan, kerja sama, dan kekompakan masyarakat Paser dalam membangun ruang kehidupan bersama.
  </p>
    <!-- 4. Pemasangan Dinding dan Atap -->
  <div class="subjudul">4. Pemasangan Dinding dan Atap</div>
  <p>
    Setelah rangka berdiri, papan dinding dan atap sirap dipasang dengan arah bangunan menghadap timur sebagai simbol menyongsong kehidupan baru.
    Arah timur dianggap membawa harapan, kesejahteraan, dan keberlanjutan, sehingga rumah adat dipercaya menjadi tempat yang membawa kebaikan bagi penghuninya.
  </p>

  <!-- 5. Pemasangan Ornamen dan Ukiran -->
  <div class="subjudul">5. Pemasangan Ornamen dan Ukiran</div>
  <p>
    Tahap berikutnya adalah pemasangan ornamen tradisional berupa ukiran hewan dan tumbuhan seperti Basung, Sarumbolum, Timang, dan Bayo.
    Semua dibuat oleh pengrajin adat melalui proses ukir tangan. Ornamen ini melambangkan kekuatan, keindahan, perlindungan, dan spiritualitas yang menjadi jati diri budaya Paser.
  </p>
    <!-- 6. Upacara Penyucian dan Peresmian -->
  <div class="subjudul">6. Upacara Penyucian dan Peresmian</div>
  <p>
    Sebagai penutup, dilakukan doa adat dan upacara Belian kecil untuk menyucikan rumah sebelum digunakan.
    Ritual ini menandai bahwa bangunan telah diberi restu, bersih secara spiritual, dan siap menjadi pusat kehidupan adat bagi masyarakat.
    Upacara ini menjadi simbol kesucian, kelayakan, dan kesiapan rumah untuk menjalankan fungsinya.
  </p>

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
