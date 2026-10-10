<?php
include "service/db.php";

// Ambil ID agenda dari URL
if (!isset($_GET['id'])) {
    header("Location: agenda.php");
    exit;
}

$id = intval($_GET['id']);
$q = $conn->query("SELECT * FROM agenda WHERE id=$id AND status='aktif'");

if ($q->num_rows == 0) {
    echo "Agenda tidak ditemukan.";
    exit;
}

$row = $q->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($row['judul']) ?> - Agenda Rumah Adat</title>
<style>
body { 
    font-family:Poppins,sans-serif; 
    background:#fef5e7; 
    margin:0; 
    color:#333; 
    line-height:1.6; 
}
.container { 
    max-width:900px; 
    margin:40px auto; 
    padding:0 20px; 
}
h1 { 
    color:#b51c1a; 
    text-shadow: 2px 2px 5px rgba(0,0,0,0.2); 
}
p { 
    margin:10px 0; 
}
img { 
    width:100%; 
    border-radius:12px; 
    margin-bottom:20px; 
    object-fit:cover; 
    max-height:400px; 
}
.label { 
    font-weight:700; 
    color:#7c3e00;
}
.back { 
    display:inline-block; 
    margin-top:20px; 
    text-decoration:none; 
    color:#b51c1a; 
    font-weight:700; 
}
.back:hover { 
    text-decoration:underline; 
}
</style>
</head>
<body>

<div class="container">
    <h1><?= htmlspecialchars($row['judul']) ?></h1>
    <img src="Admin/uploads/<?= htmlspecialchars($row['gambar']) ?>" alt="<?= htmlspecialchars($row['judul']) ?>">
    
    <p><span class="label">Kategori:</span> <?= htmlspecialchars($row['kategori']) ?></p>
    <p><span class="label">Tanggal:</span> <?= date('d M Y', strtotime($row['tanggal'])) ?></p>
    <p><span class="label">Lokasi:</span> <?= htmlspecialchars($row['lokasi']) ?></p>
    <p><span class="label">Deskripsi:</span><br><?= nl2br(htmlspecialchars($row['deskripsi'])) ?></p>

    <a href="agenda.php" class="back">← Kembali ke Agenda</a>
</div>

</body>
</html>
