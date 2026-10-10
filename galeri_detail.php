<?php
include "service/db.php";

// Ambil id dari URL
if(!isset($_GET['id'])) {
    header("Location: galeri.php"); // arahkan ke halaman galeri jika id tidak ada
    exit;
}

$id = intval($_GET['id']);

// Ambil data galeri berdasarkan id
$stmt = $conn->prepare("SELECT * FROM galeri_kegiatan WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 0){
    echo "<h2 style='text-align:center;margin-top:50px;color:white;'>Foto tidak ditemukan!</h2>";
    exit;
}

$foto = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Detail - <?= htmlspecialchars($foto['kategori']) ?></title>

<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #b51c1a;
    color: white;
}
.header { 
    padding: 15px 30px; 
    text-align:center; 
    background:#7c0b0a; }
.section-detail {
    max-width: 800px;
    margin: 50px auto;
    background: #fff;
    color: #000;
    padding: 30px;
    border-radius: 18px;
    box-shadow: 0 5px 12px rgba(0,0,0,.3);
    text-align: center;
}
.section-detail img {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 12px;
    border: 3px solid #ffd200;
}
.section-detail h2 {
     margin-top: 20px; 
     color:#d62d24; }
.section-detail p { 
    margin: 10px 0; 
    font-size: 14px; }
.btn-back {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 25px;
    background: #d62922;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
}
.btn-back:hover { 
    background:#b51c1a; }
</style>
</head>
<body>

<div class="header">
    <h2>Detail Galeri Kegiatan</h2>
</div>

<section class="section-detail">
    <img src="assets/galeri/<?= $foto['gambar'] ?>" alt="<?= htmlspecialchars($foto['kategori']) ?>">
    <h2><?= htmlspecialchars($foto['kategori']) ?></h2>
    <p>Diupload pada: <?= date("d M Y", strtotime($foto['created_at'])) ?></p>

    <a class="btn-back" href="galeri.php">← Kembali ke Galeri</a>
</section>

</body>
</html>
