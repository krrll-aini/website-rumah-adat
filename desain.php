<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Desain Lowu Kuta Rekan Tatau</title>

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

    .desain-item p,
.arsitektur-body,
.detail {
    text-align: left;
    padding-left: 12px; /* halus masuk ke dalam */
    margin-bottom: 18px;
}


.container{
  max-width: 1100px;
  margin: auto;
  padding: 80px 20px 30px;
}


.desain-intro{
  margin-bottom: 32px;
}

.desain-item-title{
  margin-top: 0;
}


/* CONTAINER */
.container{
  max-width:1100px;
  margin:auto;
  padding:80px 20px;
}

/* JUDUL */
.judul-halaman{
  text-align:center;
  margin-bottom:30px;
}

.judul-halaman h1{
  font-size:34px;
  margin-bottom:12px;
}

/* KOTAK COKLAT */
.box-coklat{
  background:#6b2e00;
  color:#fff;
  padding:16px 22px;
  border-radius:14px;
  max-width:720px;
  margin:0 auto 32px;
  font-size:15px;
}

/* SUB JUDUL */
.subjudul{
  font-weight:600;
  margin-bottom:25px;
}

/* ITEM DESAIN */
.desain-item{
  margin-bottom:30px;
}

.desain-item h3{
  font-size:20px;
  margin-bottom:15px;
}

.desain-item img{
  display:block;
  margin:0 auto 18px;
  width:40%;
  max-width:520px;
  border-radius:12px;
}

.desain-item p{
  text-align:justify;
}

/* ARSITEKTUR */
.arsitektur-section{
  max-width: 900px;
  margin: -10px auto;
}

.arsitektur-title{
  text-align: center;
  font-size: 30px;
  margin-bottom: 20px;
}


.arsitektur-desc{
  text-align:left;   /* rata kiri */
  line-height: 1.9;
  margin-bottom: 40px;
  padding-left:0;    /* hapus geser */
}

.arsitektur-item{
  margin-bottom:6px;   /* jarak dekat */
}

.arsitektur-head{
  cursor:pointer;
  font-weight:400;
}

.rotate{
  transform:rotate(180deg);
}

.arsitektur-body{
  display:none;
  padding-left: 18px; /* bisa dikurangi jika terlalu masuk */
  line-height:1.7;
  font-size:15px;
}

.item {
  display: flex;
  align-items: center;
  max-width: 900px;
  margin: 6px auto;
  cursor: pointer;
  gap: 8px;
}

.arrow{
  width:16px;
  text-align:center;
 flex-shrink:0;
}

/* panah muter ke atas */
.rotate{
  transform: rotate(180deg);
}


.section-title {
  text-align: center;
  margin: 40px 0 10px;
}

.section-desc{
  max-width: 900px;
  font-size: 16px;
  margin: 0 auto 25px;   /* tengah */
  padding-left: 10px;    /* GESER SEDIKIT KE KANAN */
}


/* DETAIL ITEM */
.detail{
  display: none;
  max-width: 880px;
  font-size: 14px;
  margin:0 0 10px 0;  /* hapus auto agar tidak ke tengah */
  padding-left:0;      /* hapus indent */
  text-align:left;
}

/* KOTAK ABU */
/* KOTAK ABU */
.kotak-abu-wrap{
  margin-top: 40px;
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

<script>
function toggleItem(el){
  const body = el.nextElementSibling;
  const arrow = el.querySelector('.arrow');

  if(body.style.display === "block"){
    body.style.display = "none";
    arrow.classList.remove("rotate");
  }else{
    body.style.display = "block";
    arrow.classList.add("rotate");
  }
}
</script>
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
  <div class="judul-halaman">
    <h1>Desain Lowu Kuta Rekan Tatau</h1>
  </div>

  <!-- KOTAK COKLAT -->
  <div class="box-coklat">
Adapun Desain Lowu Kuta Rekan Tatau disepakati sebagai gabungan dua gaya:
    <br>• Lowu Kuta berciri khas Kesultanan Paser, dan  
    <br>• Lowu Kuta masyarakat Paser pedalaman/kampung.  
    <br><br>
    Desain ini menghadirkan karakter arsitektur tradisional Paser yang selaras antara nilai adat, fungsi ruang, dan filosofi kehidupan masyarakatnya.
  </div>

  <!-- TEKS PEMBUKA -->
  <p class="subjudul">
    Rumah adat ini terdiri dari delapan bagian utama tata ruang, masing-masing memiliki fungsi simbolis dan sosial tersendiri:
  </p>

  <!-- 1 -->
  <div class="desain-item">
    <h3>1. Lego – lego (teras depan serta samping kanan dan kiri)</h3>
    <img src="images/desain1.jpeg" alt="Lego-lego">
    <p>
      Bagian lego–lego terletak di bagian depan serta samping kanan dan kiri rumah.
      Fungsinya sebagai tempat masyarakat umum berkumpul dan menyaksikan ritual adat Paser
      yang berlangsung di area tengah (Botuk Bowa Lawang).
      Ruang ini juga menjadi simbol keterbukaan masyarakat adat terhadap kebersamaan dan persaudaraan.
    </p>
  </div>

  <!-- 2 -->
  <div class="desain-item">
    <h3>2. Botuk Bowa Lawang (Ruang Tengah)</h3>
    <img src="images/desain2.jpeg" alt="Botuk Bowa Lawang">
    <p>
 Istilah Botuk Bowa Lawang berasal dari kata botuk (tengah), bowa (mulut), dan lawang (luas). Ruang ini berfungsi sebagai pusat kegiatan adat dan tempat menerima tamu, serta digunakan untuk pelaksanaan ritual adat suku Paser. Ciri khasnya, ruangan ini tidak memiliki dinding, agar masyarakat luar dapat menyaksikan upacara dari kejauhan. Di sekelilingnya terdapat 12 tiang utama yang melambangkan 12 Manti Adat, yaitu pengurus adat yang berada di atas Mandong dan di bawah Penggawa.
    </p>
  </div>

  <!-- 3 -->
  <div class="desain-item">
    <h3>3. Peseban Imam Kinalenja (Altar Pemimpin Bertingkat)</h3>
    <img src="images/desain3.jpeg" alt="Ruang Pemimpin">
    <p>
Ruang ini merupakan tempat berkumpul para pemimpin adat untuk bermusyawarah atau bepekat. Selain itu, Peseban Imam Kinalenja juga digunakan untuk pertunjukan seni tari dan teater pada acara adat tertentu. Strukturnya yang bertingkat melambangkan tingkatan kebijaksanaan dan kepemimpinan adat.
    </p>
  </div>

  <!-- 4 -->
  <div class="desain-item">
    <h3>4. Awa’ Semole (Wadah Istirahat)</h3>
    <img src="images/desain4.jpeg" alt="Ruang Ritual">
    <p>
Awa’ Semole berfungsi sebagai tempat beristirahat, bercengkerama, dan ruang rapat tertutup.Selain itu, bagian ini juga bisa dijadikan museum mini, tempat memamerkan benda pusaka, foto bersejarah, dan warisan budaya Paser. Ruang ini mencerminkan suasana kebersamaan dan kekeluargaan di dalam rumah adat.
    </p>
  </div>

  <!-- 5 -->
  <div class="desain-item">
    <h3>5. Amber (Serambi Kanan dan Kiri)</h3>
    <img src="images/desain5.jpeg" alt="Pusaka">
    <p>
Bagian amber merupakan serambi tertutup di sisi kanan dan kiri rumah.Di sini terdapat delapan kamar, empat di kanan dan empat di kiri, yang melambangkan delapan Penggawa Adat Paser — tokoh adat yang pernah memimpin pada masa lalu. Beberapa kamar juga difungsikan sebagai tempat tidur atau museum mini, serta terdapat satu kamar besar untuk gudang perlengkapan adat.
    </p>
  </div>

  <!-- 6 -->
  <div class="desain-item">
    <h3>6. Duyu Beliku (Ruang Dapur)</h3>
    <img src="images/desain6.jpeg" alt="Ruang Istirahat">
    <p>
Bagian ini berfungsi sebagai tempat memasak, kamar mandi (Awa’ Undus), dan toilet (Awa’ Pondosan). Ruang ini menunjukkan bagaimana rumah adat Paser menggabungkan fungsi ritual dan kehidupan sehari-hari secara harmonis.
    </p>
  </div>

  <!-- 7 -->
  <div class="desain-item">
    <h3>7. Duyu Pemuwi’ (Ruang Pencucian)</h3>
    <img src="images/desain7.jpeg" alt="Persiapan">
    <p>
Ruang ini digunakan untuk mencuci dan menjemur pakaian secara tertutup.nMenunjukkan perhatian masyarakat adat terhadap kebersihan dan tata ruang fungsional dalam desain tradisionalnya.
    </p>
  </div>

  <!-- 8 -->
  <div class="desain-item">
    <h3>8. Sempatai (Teras Terbuka)</h3>
    <img src="images/desain8.jpeg" alt="Pendukung">
    <p>
Sempatai adalah teras terbuka di bagian belakang rumah, digunakan untuk menjemur padi dan aktivitas pertanian seperti nyentiriu pare (memisahkan bulir padi dengan sekam menggunakan tampih dan angin). Ruang ini melambangkan keterkaitan rumah adat Paser dengan kehidupan agraris dan alam sekitar.
    </p>
  </div>

</div>

<!-- JUDUL ARSITEKTUR -->
<section class="arsitektur-section">

  <h2 class="arsitektur-title">
    Arsitektur Rumah Adat Kuta Rekan Tatau
  </h2>

  <p class="arsitektur-desc">
    Klik panah di setiap istilah untuk melihat penjelasan fungsi dan makna filosofisnya.<br>
    Setiap bagian pada Lowu Kuta Rekan Tatau memiliki nama khusus yang bukan hanya menjelaskan fungsi bangunan, 
    tapi juga menggambarkan nilai budaya dan kearifan lokal masyarakat Paser. 
    Melalui daftar di bawah ini, kamu bisa mengenal struktur dan makna dari setiap unsur rumah adat ini secara lebih dalam.
  </p>

  <!-- CONTOH ITEM TERBUKA -->
<div class="arsitektur-item">
  <div class="arsitektur-head" onclick="toggleItem(this)">
    [Pondasi] <span class="arrow">▼</span>
  </div>
    <div class="arsitektur-body">
      Pondasi berfungsi memperkokoh konstruksi Kuta. Terbuat dari kayu ulin 10x10 cm,
      simbol keteguhan dan kekuatan.
    </div>
  </div>

  <!-- DAFTAR ITEM -->
  <div class="arsitektur-list">
      <div class="arsitektur-item">
    <div class="arsitektur-head" onclick="toggleItem(this)">
      [1] Pondasi <span class="arrow">▼</span>
    </div>
    <div class="arsitektur-body">Pondasi berfungsi memperkokoh konstruksi Kuta.</div>
  </div>

  <div class="arsitektur-item">
    <div class="arsitektur-head" onclick="toggleItem(this)">
      [2] Laci (Balok / Kayu Penyangga) <span class="arrow">▼</span>
    </div>
    <div class="arsitektur-body">Balok penyangga utama struktur rumah.</div>
  </div>
  
  <div class="arsitektur-item">
    <div class="arsitektur-head" onclick="toggleItem(this)">
      [3] Ori Botuk / Ori Tendang (Tiang Utama) <span class="arrow">▼</span>
    </div>
    <div class="arsitektur-body">Tiang utama simbol kekuatan dan pusat bangunan.</div>
  </div>

    <div>[4] Ori (Tiang) ▼</div>
    <div>[5] Tungkot (Tongkat) ▼</div>
    <div>[6] Soki / Suwai (Kayu Suwai) ▼</div>
    <div>[7] Buat Kuta (Balok / Kayu Penyangga Matung) ▼</div>
    <div>[8] Benturan (Kayu Penahan Lantai) ▼</div>
    <div>[9] Matung (Gelagar Utama / Kayu Slop) ▼</div>
    <div>[10] Gelagar / Kanang ▼</div>
    <div>[11] Pengerat (Gelagar Utama Atas) ▼</div>
    <div>[12] Kuda-Kuda ▼</div>
    <div>[13] Pemurus (Penyangga Segitiga) ▼</div>
    <div>[14] Derodok ▼</div>
    <div>[15] Tiang Gantung ▼</div>
    <div>[16] Dasoi (Lantai) ▼</div>
    <div>[17] Angin-Angin (Ventilasi) ▼</div>
    <div>[18] Tuarang (Konstruksi Kerangka Bangunan) ▼</div>
    <div>[19] Sapo (Atap) ▼</div>
    <div>[20] Jurai (Kayu Reng) ▼</div>
    <div>[21] Pemus (Atap Penutup Bubungan) ▼</div>
    <div>[22] Kasau (Kerangka Atap) ▼</div>
    <div>[23] Pengawat Kasau (Gording) ▼</div>
    <div>[24] Bungan / Ungan (Kayu Nok) ▼</div>
    <div>[25] Kelempan (Kayu Kuda-Kuda Bagian Bawah) ▼</div>
    <div>[26] Pengentewa (Lest Plang Bagian Bawah Atap) ▼</div>
    <div>[27] Pangunsiring (Lest Plang) ▼</div>
    <div>[28] Olar Pangunsiring (Sayap Pangunsiring) ▼</div>
    <div>[29] Mastogok (Mahkota Bubungan Atap) ▼</div>
    <div>[30] Dinding ▼</div>
    <div>[31] Empong (Kamar) ▼</div>
    <div>[32] Tendapi’ (Dinding Layar Pojok Atap) ▼</div>
    <div>[33] Jawong (Pintu) ▼</div>
    <div>[34] Jendele (Jendela) ▼</div>
    <div>[35] Parung (Langit-Langit / Plafon) ▼</div>
    <div>[36] Siring (Papan Tempel) ▼</div>
    <div>[37] Amber (Ruangan Samping) ▼</div>
    <div>[38] Pagar Lego-Lego ▼</div>
    <div>[39] Lego-Lego (Teras Depan dan Samping) ▼</div>
    <div>[40] Tukar (Tangga) ▼</div>
    <div>[41] Tukar Song & Tukar Bawe (Tangga Laki-Laki dan Perempuan) ▼</div>
    <div>[42] Sarunoyan (Titian / Pegangan Tangga) ▼</div>
  </div>
</section>

<h2 class="section-title">
Nama dan Jumlah Alat Pendukung Bangunan Kuta Rekan Tatau
</h2>

<p class="section-desc">
Klik panah di setiap nama untuk melihat rincian jumlah dan keterangan fungsinya.
Bagian-bagian berikut merupakan unsur fisik yang mendukung konstruksi dan tata ruang
rumah adat Lowu Kuta Rekan Tatau sesuai tradisi masyarakat Paser.
</p>

<!-- A -->
<div class="item">
  <span class="item-title">[A] Tukar (Tangga)</span>
  <span class="arrow">▼</span>
</div>
<div class="detail">
  Jumlah: 1 buah<br>
  Fungsi: Sebagai akses naik ke dalam rumah.
</div>

<!-- B -->
<div class="item">
  <span class="item-title">[B] Jawong (Pintu)</span>
  <span class="arrow">▼</span>
</div>
<div class="detail">
  Jumlah: 1 buah<br>
  Fungsi: Sebagai akses keluar dan masuk rumah.
</div>

<!-- C -->
<div class="item">
  <span class="item-title">[C] Empong (Kamar / Ruangan)</span>
  <span class="arrow">▼</span>
</div>
<div class="detail">
  Jumlah: Beberapa ruang<br>
  Fungsi: Sebagai ruang tidur dan aktivitas keluarga.
</div>

<!-- D -->
<div class="item">
  <span class="item-title">[D] Angin-Angin (Ventilasi)</span>
  <span class="arrow">▼</span>
</div>
<div class="detail">
  Jumlah: Beberapa buah<br>
  Fungsi: Mengatur sirkulasi udara di dalam rumah.
</div>

<!-- E -->
<div class="item">
  <span class="item-title">[E] Ori Botuk / Ori Tendang (Tiang Utama / Soko Guru)</span>
  <span class="arrow">▼</span>
</div>
<div class="detail">
  Jumlah: 4 buah<br>
  Fungsi: Menopang struktur utama bangunan.
</div>

<!-- F -->
<div class="item">
  <span class="item-title">[F] Ori (Tiang)</span>
  <span class="arrow">▼</span>
</div>
<div class="detail">
  Jumlah: Beberapa buah<br>
  Fungsi: Penyangga lantai dan dinding rumah.
</div>

<!-- G -->
<div class="item">
  <span class="item-title">[G] Tungkot (Tongkat)</span>
  <span class="arrow">▼</span>
</div>
<div class="detail">
  Jumlah: Beberapa batang<br>
  Fungsi: Penguat konstruksi rumah.
</div>

<!-- H -->
<div class="item">
  <span class="item-title">[H] Pangunsiring</span>
  <span class="arrow">▼</span>
</div>
<div class="detail">
  Jumlah: Beberapa buah<br>
  Fungsi: Elemen pengikat dan penguat bangunan.
</div>

<script>
document.querySelectorAll('.item').forEach(item => {
  item.addEventListener('click', () => {
    const detail = item.nextElementSibling;
    const arrow = item.querySelector('.arrow');

    const open = detail.style.display === 'block';
    detail.style.display = open ? 'none' : 'block';
    arrow.style.transform = open ? 'rotate(0deg)' : 'rotate(180deg)';
  });
});
</script>

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
