<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuliskan dan Bagikan Warisan Cerita</title>

    <link rel="stylesheet" href="style.css">
</head>

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



  /* ===== NOTIF ===== */
    .notif-success{
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,.3);
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:9999;
        animation: fadeIn .25s ease;
    }

    .notif-box{
        background:#fff;
        padding:40px;
        border-radius:12px;
        text-align:center;
        box-shadow:0 10px 30px rgba(0,0,0,.2);
        max-width:400px;
    }

    .notif-box h3{
        color:#2e7d32;
        margin-bottom:10px;
    }

    .notif-box p{
        color:#555;
        font-size:15px;
    }

    @keyframes fadeIn{
        from{opacity:0;}
        to{opacity:1;}
    }

    /* ===== FORM ===== */
    .container{
        max-width:1100px;
        margin:auto;
        padding:80px 20px 30px;
    }







/* ===========================
   KEMBALI KE DAFTAR CERITA
=========================== */

.kembali-section{

    width:90%;
    max-width:1200px;

    margin:35px auto 20px;

}

.btn-kembali{

    text-decoration:none;

    color:#5b3b1f;

    font-size:17px;

    font-weight:600;

    transition:.3s;

}

.btn-kembali:hover{

    color:#D4A017;

    padding-left:6px;

}

/* ===========================
   JUDUL TAMBAH CERITA
=========================== */

.judul-tambah-cerita{

    width:90%;
    max-width:900px;

    margin:20px auto 60px;

    text-align:center;

}

.judul-tambah-cerita h1{

    font-size:42px;

    font-weight:700;

    color:#222;

    margin-bottom:6px;      /* sebelumnya 15px */

}

.judul-tambah-cerita p{

    font-size:18px;

    font-weight:300;

    color:#666;

    line-height:1.5;        /* sebelumnya 1.8 */

    margin:0;

}

/* ===========================
   FORM CERITA
=========================== */

.form-wrapper{

    width:90%;
    max-width:900px;

    margin:40px auto 80px;

}


.form-cerita{

    border:3px solid #222;

    border-radius:15px;

    padding:30px;

    display:grid;

    grid-template-columns:1fr 1fr;

    gap:30px;

    background:#fff;

}


.form-cerita label{

    display:block;

    font-weight:bold;

    margin-bottom:8px;

    margin-top:18px;

    font-size:14px;

}


.form-cerita input,

.form-cerita select,

.form-cerita textarea{

    width:100%;

    padding:10px 12px;

    border:1px solid #bbb;

    border-radius:4px;

    font-size:14px;

    box-sizing:border-box;

}


.form-cerita textarea{

    resize:none;

}


.form-cerita input[type=file]{

    height:60px;

    padding:15px;

}


.btn-publish{

    margin-top:35px;

    width:100%;

    height:45px;

    border:none;

    border-radius:25px;

    background:#F5A623;

    color:#fff;

    font-size:16px;

    font-weight:bold;

    cursor:pointer;

    transition:.3s;

}


.btn-publish:hover{

    background:#d98b00;

}


@media(max-width:768px){

.form-cerita{

    grid-template-columns:1fr;

}

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

<!-- 🔥 NOTIFIKASI SUKSES -->
<?php if(isset($_GET['status']) && $_GET['status'] == 'sukses') { ?>
<div class="notif-success">
    <div class="notif-box">
        <h3>✔ Cerita berhasil dikirim</h3>
        <p>Admin akan meninjau sebelum dipublikasikan.</p>
    </div>
</div>
<?php } ?>

<!-- ===========================
     KEMBALI KE DAFTAR CERITA
=========================== -->

<section class="kembali-section">

    <a href="cerita_rakyat.php" class="btn-kembali">
        ← Kembali ke Daftar Cerita
    </a>

</section>

<!-- ===========================
     JUDUL HALAMAN
=========================== -->

<section class="judul-tambah-cerita">

    <h1>Tambahkan Cerita Rakyat Baru</h1>

    <p>
        Bagikan kisah dan legenda dari tanah Paser.
    </p>

</section>

<!-- ===========================
     FORM CERITA
=========================== -->

<section class="form-wrapper">

<form class="form-cerita" action="proses_cerita.php" method="POST" enctype="multipart/form-data">

    <div class="kiri">

        <label>Judul Cerita</label>
        <input type="text" name="judul">

        <label>Nama Penulis</label>
        <input type="text" name="penulis">

        <label>Narasumber</label>
        <select name="narasumber">
            <option>Pilih Narasumber</option>
            <option>Tokoh Adat</option>
            <option>Masyarakat</option>
            <option>Keluarga</option>
        </select>

        <label>Asal Daerah / Desa</label>
        <input type="text" name="asal">

        <label>Deskripsi Cerita</label>
        <textarea rows="5" name="deskripsi"></textarea>

    </div>


    <div class="kanan">

        <label>Upload Gambar</label>

        <input type="file" name="gambar">
        <p class="info-upload">
        Format JPG, JPEG, PNG (maks. 5 MB)
        </p>

        <label>Upload Cerita (PDF)</label>

        <input type="file" name="pdf">

        <label>Tanggal Dipublikasikan</label>

        <input type="date" name="tanggal">

        <button type="submit" class="btn-publish">
            Publikasikan Cerita
        </button>

    </div>

</form>

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
