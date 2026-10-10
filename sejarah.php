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


/* JUDUL TENGAH */
.sejarah-header{
  text-align: center;
  margin-bottom: 60px;
}

.sejarah-header h1{
  font-size: 36px;
  margin-bottom: 15px;
}

.sejarah-header p{
  font-size: 18px;
  max-width: 750px;
  margin: auto;
}

/* ISI */
.sejarah-content h2{
  font-size: 24px;
  margin-top: 50px;
  margin-bottom: 15px;
}

.sejarah-content p{
  margin-bottom: 18px;
  text-align: justify;
}

.btn-baca{
  display: inline-block;
  margin-top: 20px;
  padding: 12px 22px;
  background: #2f2a26;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  font-size: 14px;
}

.btn-baca:hover{
  background: #444;
}

.sejarah-lengkap{
  display: none;   /* AWALNYA TERSEMBUNYI */
  margin-top: 40px;
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

  <div class="sejarah-header">
    <h1>Sejarah & Asal-Usul Lowu Kuta Rekan Tatau</h1>
    <p>
    Di sini Anda dapat menelusuri jejak perjalanan Rumah Adat Lowu Kuta Rekan Tatau—dari masa Kerajaan Padang Kero hingga pembangunan kembali sebagai warisan budaya yang dijaga bersama.
    </p>
  </div>

  <div class="sejarah-content">

    <h2>Makna Nama</h2>
    <p>
    <strong>Lowu Kuta Rekan Tatau</strong> adalah istilah dalam bahasa kuno suku Paser yang berarti “Rumah besar dan megah untuk seluruh masyarakat agar tercapai kejayaan.” Nama ini berakar dari masa kejayaan Negeri Paser di bawah <strong>Kerajaan Padang Kero</strong>, yang terletak di hulu Sungai Telake (kini Kecamatan Longkali, Kabupaten Paser).
    </p>

    <h2>Asal-Usul & Sejarah</h2>
    <p>
    Pada masa <strong>Kerajaan Padang Kero</strong>, muncul sosok pemimpin terkenal yang bernama Nalau Raja Tondoi, yang digambarkan gagah berani dan sakti mandraguna. Pengaruh kekuasaannya disebut meliputi sebagian besar Pulau Borneo (Timur, Tenggara, Selatan, dan Tengah), tercermin dari luasnya penyebaran budaya Belian yang berasal dari Paser. Saat itu, masyarakat menyebut pulau besar Borneo/Kalimantan sebagai <strong>“Benuo Rekan Tatau”</strong> yang berarti negeri yang luas, besar, dan kaya raya. Penyebutan Lowu Kuta Rekan Tatau dapat ditelusuri dari kisah legenda (sempuri) suku Paser, terutama legenda Nalau Raja Tondoi yang memiliki rumah bernama Kuta <strong>Talun Luwai dan Kuta Talun Renrok.</strong>
    </p>

    <h2>Kuta dalam Tradisi Paser</h2>
    <p>
    <strong>Kuta merupakan rumah adat suku Paser</strong> yang telah ada sejak ribuan tahun lalu. Namun kini keberadaan rumah adat Kuta nyaris punah karena jarang dibangun lagi.  Satu-satunya situs Kuta yang masih bertahan adalah bekas <strong>istana Kesultanan Paser di Paser Belengkong.</strong> Situs ini merupakan kediaman Sultan Paser ke-XIV, Aji Tenggara bergelar <strong>Sultan Sepuh II Alamsyah (1853–1875 M).</strong> Bangunan tersebut dikenal sebagai <strong>“Kuta Iman Duyu Kinalenja”</strong> yang berarti rumah pemimpin yang bertingkat
    </p>

    <h2>Perjuangan Pelestarian Rumah Adat</h2>
    <p>

    Agar rumah adat Kuta tidak punah ditelan modernisasi, masyarakat adat Paser—baik di Kabupaten Paser maupun Penajam Paser Utara—telah lama menuntut pemerintah membangun kembali rumah adat tersebut sebagai bentuk pelestarian budaya dan identitas suku Paser.
    <br>Di Kabupaten Penajam Paser Utara, tuntutan pembangunan Kuta telah digaungkan sejak tahun 2008, dan semakin kuat saat aksi demonstrasi pada 7 Maret 2016.
    Penetapan Pembangunan
    Puncaknya terjadi pada 29 November 2017, ketika dalam rapat penetapan anggaran DPRD Kabupaten PPU, para sesepuh, tokoh adat, mandong, dan organisasi adat Paser mendesak agar pembangunan Kuta dimasukkan dalam anggaran tahun 2018.</h2> Akhirnya, DPRD menyetujui anggaran sebesar Rp 3.000.000.000,- (Tiga Milyar Rupiah) untuk pembangunan rumah adat Paser.
    </p>

    <p>
      Pada hari yang sama, bertempat di <strong>Lowu Nondoi Paser Pakot Tuo Ono Pasar Nenang Km. 4,</strong> dilakukan musyawarah penentuan bentuk dan nama rumah adat yang akan dibangun. Dalam suasana penuh kegembiraan, disepakati nama:
      <strong>“LOWU KUTA REKAN TATAU”</strong>.
    </p>


    <!-- Sejarah Lengkap (Awal Tersembunyi) -->
    <div id="sejarah-lengkap" class="sejarah-lengkap">
      <h2>Sejarah Lengkap Lowu Kuta Rekan Tatau</h2>
      <p>
        (Isi sejarah lengkap kamu bisa ditambahkan di sini. Misalnya detail tokoh, proses pembangunan, filosofi rumah adat, dll.)
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
