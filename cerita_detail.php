<?php
include "service/db.php";

// Ambil id dari URL
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);
$stmt = $conn->prepare("SELECT * FROM cerita_rakyat WHERE id = ? AND status='acc'");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 0) {
    echo "<h2 style='text-align:center;margin-top:50px;'>Cerita tidak ditemukan!</h2>";
    exit;
}

$cerita = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($cerita['judul']) ?> - Cerita Rakyat Paser</title>

<style>
body { 
    margin: 0; 
    font-family: 'Poppins', sans-serif; 
    background:#fef6a5; 
}
header {
     background: #000; 
     padding: 12px 30px; 
     position: sticky; 
     top: 0; z-index: 999; 
    }
.navbar { 
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
}
.logo { 
    color: #ffcc00; 
    font-weight: 700; 
    font-size: 20px; 
}
nav ul { 
    list-style: none; 
    display: flex; 
    gap: 20px; 
    margin: 0; 
    padding: 0; 
}
nav ul li a { 
    color: #fff; 
    text-decoration: none; 
    font-size: 13px; 
}
nav ul li a:hover {
     color: #ffcc00; 
    }
.section-detail { 
    max-width: 800px; 
    margin: 50px auto; 
    background: #fff;
    padding: 30px; 
    border-radius: 18px; 
    box-shadow: 0 5px 12px rgba(0,0,0,.2); 
}
.section-detail img { 
    width: 100%; 
    max-height: 400px; 
    object-fit: cover; 
    border-radius: 12px; 
}
.section-detail h2 { 
    color: #d62d24; 
    margin-top: 20px; 
}
.section-detail .penulis { 
    font-size: 14px; 
    color: #555; 
    margin-bottom: 20px; 
}
.section-detail p { 
    font-size: 15px; 
    line-height: 1.6; 
    color: #333;
}
.btn-back { 
    display: inline-block; 
    margin-top: 20px; 
    background: #d62922; 
    color: #fff; 
    padding: 8px 14px; 
    border-radius: 8px; 
    text-decoration: none; 
    }
</style>
</head>

<body>
<header>
<div class="navbar">
    <div class="logo">Paser</div>
    <nav>
        <ul>
            <li><a href="cerita_rakyat.php#cerita">Kembali ke Cerita</a></li>
        </ul>
    </nav>
</div>
</header>

<section class="section-detail">
    <img src="admin/uploads/<?= $cerita['gambar'] ?>" alt="<?= htmlspecialchars($cerita['judul']) ?>">
    <h2><?= htmlspecialchars($cerita['judul']) ?></h2>
    <p class="penulis">Penulis: <b><?= htmlspecialchars($cerita['penulis']) ?></b> | Dibuat pada: <?= date("d M Y", strtotime($cerita['created_at'])) ?></p>
    <p><?= nl2br(htmlspecialchars($cerita['isi'])) ?></p>

    <a class="btn-back" href="cerita_rakyat.php">← Kembali</a>
</section>

</body>
</html>
