-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2026 at 11:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_adat_kuta_rekatatau`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'admin.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `foto`) VALUES
(5, 'Admin', 'admin@gmail.com', '$2y$10$rsYgD5mKMt.ahOF3HCrfZeQKQOsyF5F4iZwPrfHj6tc/FswLabDwC', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `nama_kegiatan` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kategori` enum('Adat','Budaya','Edukasi','Pemerintahan','Sosial','Umum') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `lokasi` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('aktif','arsip') COLLATE utf8mb4_general_ci DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `deskripsi`, `nama_kegiatan`, `kategori`, `tanggal`, `lokasi`, `gambar`, `status`) VALUES
(3, 'nondoi', 'Upacara adat utama di Penajam Paser Utara adalah Festival Belian Adat Paser Nondoi, sebuah ritual tahunan suku Paser untuk \"bersih kampung,\" memohon keselamatan dan kesejahteraan, serta melestarikan budaya lewat tarian (seperti Tarian Ronggeng) dan musik adat seperti petep. Ritual ini melibatkan Balian (dukun), Tipong Tawar (mantra), dan acara makan bersama, di mana tamu undangan juga bisa berpartisipasi ringan, menjadi daya tarik budaya di \"Serambi Nusantara\". \r\nFestival Belian Adat Paser Nondoi\r\nTujuan: Membersihkan diri dan lingkungan dari hal buruk, memohon berkah, menghormati leluhur, serta melestarikan budaya suku Paser.\r\nPelaksanaan: Biasanya diadakan setiap tahun pada bulan Oktober atau November, seringkali di Rumah Adat Rekan Tatau.\r\nRitual Kunci:\r\nBelian: Pengobatan tradisional atau ritual penyembuhan yang dipimpin oleh Balian.\r\nTipong Tawar: Mantra yang dibacakan Balian untuk memohon berkah, terutama saat menanam dan panen padi.\r\nTarian Adat & Musik Petep: Tarian massal dan iringan musik tradisional menjadi bagian penting, termasuk tarian Ronggeng.\r\nMakan Bersama: Menjadi penutup acara sebagai simbol kebersamaan.\r\nMakna Budaya: Festival ini mencerminkan nilai gotong royong, persaudaraan, dan keseimbangan antara manusia dengan alam, sangat relevan dengan pembangunan IKN. \r\nUpacara Adat Lain\r\nMelas Taon: Ritual tahunan serupa untuk membersihkan alam dan waktu dari hal negatif, juga menjadi platform pelestarian budaya.\r\nMayar Sala: Tradisi yang menunjukkan semangat gotong royong dan kebersamaan masyarakat Paser. \r\nSimbolisme dalam Ritual\r\nBujok: Tombak yang diberikan sebagai simbol kehormatan dan kepemimpinan, seperti yang diberikan kepada Pj Bupati saat pembukaan.\r\nPemotongan Tebu & Penyerahan Kelapa: Simbol penghormatan pada kesucian dan keseimbangan alam. \r\nFestival Nondoi menjadi acara penting yang kini juga menjadi daya tarik wisata, mengajak generasi muda dan wisatawan untuk terlibat dalam kekayaan budaya Paser', NULL, 'Adat', '2026-12-12', 'rumah adat kuta rekantatau', 'nondoi.jpg', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `cerita_rakyat`
--

CREATE TABLE `cerita_rakyat` (
  `id` int NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `penulis` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_general_ci,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('pending','acc') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri_kegiatan`
--

CREATE TABLE `galeri_kegiatan` (
  `id` int NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `lokasi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri_kegiatan`
--

INSERT INTO `galeri_kegiatan` (`id`, `kategori`, `judul`, `deskripsi`, `lokasi`, `tanggal`, `gambar`, `created_at`) VALUES
(3, 'Upacara Adat', NULL, NULL, NULL, NULL, 'upacara adat 2.jpg', '2025-12-30 03:21:29'),
(4, 'Upacara Adat', NULL, NULL, NULL, NULL, 'upacara adat.jpg', '2025-12-30 03:23:47'),
(5, 'UPCARA ADAT', 'ORNAMEN RUMAH ADAT', '', 'PENAJAM', '2026-04-30', '1 gambar ornamen.png', '2026-07-17 06:49:08'),
(6, 'UPACARA', 'ORNAMEN RUMAH ADAT', 'BAGUS SEKALI', 'PENAJAM', '2026-03-02', '1 gambar ornamen.png', '2026-07-17 10:05:14'),
(7, 'UPCARA ADAT', 'ORNAMEN RUMAH ADAT', '', 'penajam', '2025-02-02', '1 gambar ornamen.png', '2026-07-17 10:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pusaka`
--

CREATE TABLE `pusaka` (
  `id` int NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `sumber` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pusaka`
--

INSERT INTO `pusaka` (`id`, `nama`, `kategori`, `deskripsi`, `sumber`, `tanggal`, `gambar`, `created_at`) VALUES
(1, 'Tradisi Lisan PPU', 'Tradisi Lisan', 'Pusaka tradisi lisan Penajam, khususnya Suku Paser, berpusat pada ritual adat seperti Belian Paser Nondoi yang sarat dengan nyanyian mantra sakral bernama Besoyong, cerita rakyat, pantun, dan lagu adat, yang diwarisakan secara turun-temurun untuk penyembuhan, bersih kampung, atau permohonan, menjadi identitas budaya yang dilestarikan di tengah modernisasi melalui dukungan pemerintah dan peran lembaga adat, meskipun menghadapi tantangan pelestarian. \r\nBentuk-bentuk Pusaka Tradisi Lisan:\r\nBesoyong: Mantra bernyanyi yang diucapkan untuk berkomunikasi dengan roh leluhur dan \"Sangiyang\" (Tuhan), menjadi inti dari ritual Belian, biasanya dilafalkan oleh orang pilihan dan diturunkan secara genetik.\r\nRitual Adat: Upacara seperti Belian Paser Nondoi sebagai wadah pementasan tradisi lisan, termasuk doa, nyanyian, dan musik adat (petep, kenong), yang bisa melibatkan wisatawan dalam beberapa bagian.\r\nCerita Rakyat & Pantun: Melalui tutur (ucapan) dan nyanyian, disampaikan nilai-nilai luhur dan sejarah, seperti yang ada dalam ritual atau kehidupan sehari-hari. \r\nPentingnya Tradisi Lisan Suku Paser:\r\nIdentitas dan Kearifan Lokal: Mencerminkan hubungan harmonis dengan alam dan Tuhan, serta modal sosial masyarakat.\r\nPewarisan Budaya: Menjaga jati diri suku Paser, terutama menghadapi globalisasi.\r\nFungsi Sosial: Digunakan untuk berbagai hajat, dari pengobatan hingga pembangunan rumah adat. \r\nUpaya Pelestarian:\r\nFestival Budaya: Penyelenggaraan acara seperti Festival Belian Adat Paser Nondoi untuk menampilkan dan mempromosikan budaya.\r\nDukungan Pemerintah: Pemkab Penajam Paser Utara berkomitmen pada pembinaan, dokumentasi, dan promosi budaya.\r\nDokumentasi: Mengalihwujudkan konsep lisan menjadi tulisan untuk mencegah kepunahan, seperti penelitian mantra Besoyong. \r\nTantangan:\r\nModernisasi: Generasi muda cenderung memilih budaya baru yang praktis, membuat tradisi lokal terancam terlupakan. \r\nPusaka tradisi lisan di Penajam adalah kekayaan tak benda yang terus diupayakan lestari sebagai cerminan jiwa dan akar sejarah Suku Pase', NULL, NULL, 'Tradisi lisa.jpg', '2025-12-30 02:50:46'),
(6, 'Manuskrip', 'Manuskrip', 'Dalam sorotan sinar lampu temaram, lembaran-lembaran kuno atau modern ini membawa cerita yang tak terungkap, gagasan yang tak tersentuh, dan pengetahuan yang tersembunyi. Manuskrip, dalam segala bentuk dan warna, memiliki daya tariknya sendiri. Dari naskah kuno yang dihiasi dengan huruf-huruf indah hingga dokumen elektronik yang tersimpan di dalam memori komputer, setiap manuskrip adalah pintu gerbang ke dunia pengetahuan yang tak terbatas.\r\n\r\nNamun, apa itu manuskrip? Apakah itu hanya kumpulan kata-kata yang ditorehkan di atas kertas, ataukah ada lebih banyak lagi yang tersembunyi di balik garis-garis tinta?Dalam artikel ini, kita akan menelusuri ke dalam makna sejati dari manuskrip.', NULL, NULL, 'manuskrip.jpg', '2026-01-24 23:47:25'),
(7, 'adat istiadat', 'Adat Istiadat', 'Adat istiadat memiliki peran krusial dalam membentuk karakter bangsa dan menjaga harmoni sosial. Lebih dari sekadar tradisi usang, adat istiadat adalah cerminan dari nilai-nilai yang dijunjung tinggi oleh suatu masyarakat.\r\n\r\nNilai-nilai seperti gotong royong, musyawarah mufakat, penghormatan kepada leluhur, dan kepedulian terhadap sesama, tertanam kuat dalam setiap aspek adat istiadat. Melalui ritual, upacara, dan praktik sehari-hari, nilai-nilai ini diinternalisasi oleh setiap anggota masyarakat, sehingga membentuk perilaku dan pola pikir yang selaras dengan norma-norma yang berlaku.', NULL, NULL, 'adat_istiadat.jpg', '2026-01-24 23:49:40'),
(8, 'ritus', 'Ritus', 'Ritus merupakan objek pemajuan kebudayaan yang berupa tata cara pelaksanaan upacara atau kegiatan yang didasarkan pada nilai tertentu dan dilakukan oleh kelompok masyarakat secara terus menerus dan diwariskan pada generasi berikutnya antara lain berbagai perayaan, peringatan kelahiran, upacara perkawinan, upacara kematian, dan ritual kepercayaan beserta perlengkapannya.\r\n\r\n1. Tolak Bala\r\n\r\nKegiatan tolak bala yang dilaksanakan pada bulan Muharram dengan kegiatan sembahyang hajat, membaca yasin dan doa tolak bala, doa selamat dan pembacaan Burdah keliling kampung dengan membawa obor di ikuti oleh para tuan guru, masyarakat kampung tersebut dengan harapan agar tiadak terjadi bencana maupun wabah penyakit  kegiatan ini juga dapat di laksanakan apabila di suatu wilayah telah terjadi bencana secara berturut-turut dalam waktu yang berdekatan.\r\n\r\n2. Aruh Adat Dayak Paramasan\r\n\r\nUpacara syukuran panen dan selamatan kampung karena pada tahun tersebut panen berhasil dan tidak ada musibah yang menimpa dan berajanji akan melaksanakan aruh pada tahun depan apabila panen juga berhasil.\r\n\r\nUpacara dilaksanakan pada saat mulai tanam, padi berumur 3 bulan dan saat selesai panen raya selama 7 sampai 15 hari di balai adat dengan memanjatkan doa dan pujian kepada sang pencipta serta pembrian sesaji kepada roh leluhur dan penjaga lingkungan mereka.', NULL, NULL, 'ritus.jpg', '2026-01-24 23:55:57'),
(9, 'pengetahuan tradisonal', 'Pengetahuan Tradisional', 'Pengetahuan lokal merupakan suatu bentuk pengetahuan yang diwariskan oleh nenek moyang terhadap suatu adat atau komunitas tertentu yang menjadi bagian dari unsur atau substansi kebudayaan. Suatu masyarakat dapat beradaptasi serta menyelaraskan diri dengan lingkungan di sekitar melalui sistem pengetahuan lokal yang dipegang teguh. Di tengah gempuran berkembangnya produk teknologi sebagai hasil dari modernisasi, pengetahuan lokal mulai tergerus, bahkan ada yang menganggap tidak relevan. Padahal, sistem pengetahuan lokal mengandung nilai-nilai kehidupan, seperti nilai material, nilai vital, dan nilai kerohanian dengan tujuan untuk menyeimbangkan serta mengharmonisasikan kehidupan sosial serta alam (Raharja et al., 2022).\r\n\r\nApabila ditelaah kembali, pengetahuan lokal yang diwariskan secara turun-temurun memiliki relevansi dengan konsep sains, meskipun cara penyebutan atau penyampaiannya berdasarkan ciri khas, bahasa, atau kepercayaan masing-masing daerah atau komunitas. Maka dari itu, pengetahuan lokal telah ada lebih dahulu untuk mendukung serta menyelaraskan kehidupan bermasyarakat sebelum berkembangnya teknologi modern. Pengetahuan lokal menguatkan hubungan manusia dengan alam, di mana memaksimalkan potensi yang dimiliki oleh lingkungan untuk dapat bertahan hidup. Selain itu, pengetahuan lokal dirancang dengan menyesuaikan potensi wilayah, pola sosial masyarakat, bahasa, kondisi lingkungan, dan lainnya sehingga masyarakat dapat terus berdaya melalui sumber daya yang mereka miliki.\r\n\r\nDalam aspek ketahanan pangan, pengetahuan lokal memiliki peran yang bukan hanya untuk melestarikan kebudayaan, tetapi juga mempunyai peran untuk menyediakan kebutuhan pangan bagi masyarakat secara alami tanpa harus merusak lingkungan. Hal ini seperti yang dilakukan oleh masyarakat adat Dayak, yaitu menggunakan metode pertanian yang disebut slash and burn atau dapat disebut sebagai gawai. Metode pertanian ladang ini kerap dituduh sebagai penyebab masalah kebakaran hutan sehingga tuduhan tersebut menjadi ancaman bagi masyarakat adat Dayak. Padahal, abu yang dihasilkan dari proses pembakaran dimanafaatkan sebagai pupuk alami oleh masyarakat adat untuk menyuburkan padi yang ditanamnya untuk memenuhi kebutuhan pangan, ditengah permasalahan harga pupuk yang semakin mahal dan sulit dijangkau.', NULL, NULL, 'pengetahuan.jpg', '2026-01-24 23:57:31'),
(10, 'teknologi tradisional', 'Teknologi Tradisional', 'Teknologi Tradisional merupakan objek pemajuan kebudayaan yang berupa keseluruhan sarana untuk menyediakan barang barang atau cara yang diperlukan bagi kelangsungan atau kenyaman hidup manusia dalam bentuk produk, kemahiran,dan ketrampilan masyarakat sebagai hasil pengalaman nyata dalam berinteraksi dengan lingkungan, dikembangkan secara terus menerus dan diwariskan pada generasi berikutnya.\r\n\r\nAdapun teknologi tradisional ialah segala hal yang berhubungan dengan sistem peralatan dalam sifat dan bentuk tradisional. Teknologi juga berarti kerangka pengetahuan yang berkenaan dengan proses pembuatan dan penggalian (sumber daya). Teknologi (Yunani Kuno) berasal dari akar kata techne yang berarti seni (art), kerajinan (craft). Pada permulaannya seni (art) berarti sesuatu yang dibuat oleh manusia untuk dilawankan dengan benda alam, namun kemudian menunjuk pada keterampilan (skill) dalam membuat barang itu.\r\n\r\nNenek moyang Masyarakat Banjar membuat banyak kanal dengan sebutan yang berbeda-beda untuk menunjukan jenis dan tingkatan-tingkatannya. Sejak berabad-abad yang lalu mereka telah terbiasa membuat kanal yang disebut dengan “antasan”, “anjir”, “handil”, “tatah”, dan “saka”. Oleh karena sifat, cara, dan alat pengerjaannya yang khas sehingga Schophuys menyebut hal itu sebagai “sistem irigasi Banjar”. Setiap kanal yang dibangun selalu bersifat multi fungsi (minimal utamanya untuk kepentingan pengairan sawah dan transportasi). Kanal dibangun secara bersama dala suatu komunitas atau oleh satu keluarga dengan peralatan sederhana yang disebut sundak (sebagian masyarakat di Kabupaten Banjar menyebutnya “linggis”). Dengan alat ini Masyarakat Banjar mampu membangun kanal hingga puluhan kilometer.\r\n\r\n', NULL, NULL, 'tradisional.jpg', '2026-01-24 23:58:55'),
(11, 'seni', 'Seni', 'Gerakan tari digunakan sebagai ritual untuk berkomunikasi dengan roh leluhur dan kekuatan alam. Gerakan yang meniru unsur-unsur alam, seperti angin, air, dan tumbuhan, diyakini sebagai doa agar masyarakat diberi keselamatan dan hasil panen yang berlimpah.\r\n\r\nDi era Kerajaan Sadurangas, ronggeng paser tidak hanya hadir dalam ritual adat, tetapi juga menjadi hiburan resmi di lingkungan istana. Para penari perempuan yang terlatih menampilkan gerakan anggun diiringi musik bersyair pesan moral dan kisah kehidupan masyarakat.\r\n\r\nDi masa kerajaan ini pula, tarian mulai dikenal sebagai \"ronggeng paser\", sebuah istilah yang dipengaruhi interaksi dagang dengan pedagang dari Semenanjung Malaya.\r\n\r\nDalam Tari Ronggeng Paser Sebagai Identitas Masyarakat Suku Paser di Kabupaten Paser Kalimantan Timur oleh Narsidah Ilam dari Institut Seni Indonesia Yogyakarta, salah satu ciri khas yang muncul dalam perkembangan pasca-kemerdekaan adalah tradisi ngibing.\r\n\r\nNgibing adalah interaksi langsung antara penari dan penonton. Dalam ngibing, penari memberikan selendang atau sapu tangan kepada penonton untuk diajak menari bersama di arena pertunjukan.\r\n\r\nMulai dekade 1980-an, pemerintah daerah mulai menyadari pentingnya pelestarian seni tradisional sebagai identitas budaya. Sanggar-sanggar seni didirikan, penari muda dilatih, dan festival budaya digelar secara rutin.\r\n\r\nTari ronggeng paser pada umumnya dimainkan berkelompok. Berdasarkan studi Bentuk dan Fungsi Tari Ronggeng Paser di Desa Sesulu Gunung Batu Kabupaten Penajam Paser Utara Kalimantan Timur oleh Lia Sukma Istiani dan Slamet MD dari ISI Surakarta, biasanya tari dibawakan enam orang perempuan. Tarian bersifat terbuka, sehingga penonton dapat ikut menari bersama di arena.\r\n\r\n', NULL, NULL, 'seni.jpg', '2026-01-25 00:03:05'),
(12, 'bahasa paser', 'Bahasa Paser', 'A\r\nAhad: hari Minggu\r\nAkad: berdiri, bangun\r\nAkai: aduh\r\nAkon: keponakan; akonku: keponakanku; akonko: keponakanmu\r\nAlek: ambil; ngalek: mengambil; aleko; kamu ambil; aleku: ku ambil; alek dero: diambilnya\r\nAlo: lebih baik, ayo\r\nAloi: perawan tua\r\nAlus: halus, kecil, pea alus: anak kecil\r\nAmpe: sampai\r\nAmpu: mertua\r\nAmu: pelihara; amu dero: dipeliharanya\r\nAnak: anak; anakam: anakmu; anako: anakmu, pea pelulo: anak yatim piatu; nganak: beranak\r\nAndek: ambil: ngandek: mengambil; andekko: kamu ambil; andekku: kuambil; andek yo; diambilnya\r\nAndi: kakak\r\nAnjang: panjang\r\nAnta: nanti,akan;  belo anta: tidak akan; anta taka mangkuruku nua: nanti kita jumpa lagi\r\nAntor: antar; ngantor ; mengantar; antorku, kuantar;antorko:  kamu antar\r\nApai: tikar; jali: tikar yang dibuat dari rotan\r\nApam: kue apam\r\nApan: agar\r\nApi: api\r\nAret: tahan; ngaret: menahan; sekaret: puasa\r\nArong: arang\r\nAso: lagi; aso be; mau lagi ya; aso buen: lebih baik; olo manin aso buen si olondo: hari esok lebihbaik dari hari ini\r\nAspal: aspal\r\nAtang: sungai; atang seratai: sungai seratai\r\nAte: hati\r\nAtok: isi; ngatok: mengisi; atokku de: ku isilah; belo keo atok yo: tidak ada isinya\r\nAwa: tempat; awa mangkuruku: tempat saling bertemu, gedung pertemuan\r\nAwat: bantu; ngawat: membantu; awatko: kamu bantu; awatku: kubantu\r\nB\r\nBaba: gendong; benaba: digendong\r\nBaca:baca; ngembaca: membaca; ngembaca Qoran: membaca Al Quran\r\nBahe: mungkin; bahe ene; mungkin itu\r\nBai : kawan, teman; baiko: temamu; baiku: temanku; baiyo: temannya\r\nBai: dahulu kala; ulun bai: orang dahulu\r\nBaju: baju\r\nBaka: rendah\r\nBaki: baki\r\nBako: akar, dalir: cabang akar; wakat: akar dalam tanah\r\nBaling: keluar: tembaling: keluarkan; nembaling: mengeluarkan; pinabaling : dibawa keluar; balingka: keluar saja; kakan baling: akan keluar\r\nBalo: rambut; balo yo bura aut: rambutnya sudah putih; tumbu balo yo: tumbuh rambutnya\r\nBange: pergi ke ladang; dero bange engket mema ende: mereka ke ladang dari pagi tadi\r\nBango: tempurung kelapa;\r\nBanos: bari-bari\r\nBapa: bapak\r\nBare: basi; bias ene bare aut: nasi itu sudah basi\r\nBasa: bahasa; basa Paser: bahasa Paser\r\nBasung: rebung\r\nBatang ongan: bubungan rumah\r\nBatang pondosan: batang kayu tempat buang air besar\r\nBatang: batang\r\nBatil: baskom\r\nBatu: batu\r\nBawang: bawang\r\nBawe: Isteri, perempuan, wanita; pea bawe: anak perempuan; ulun bawe; orang perempuan;tembawe: diperisteri; ngembawe: beristeri\r\nBawi: babi\r\nBawo: tanah gunung, bukit\r\nBayo: arang\r\nBayo: buaya; singkap bayo: disambar buaya\r\nBayu: baru; baju bayu; baju baru; ulun bayu sulet: orang baru datang; bayu ka mate yo: baru saja meninggalnya\r\nBebe: ayunan; benebe: diayun, tembot bebe: naik ayunan( upacara pemberian nama,tasmiyah)\r\nBecara: berbicara\r\nBegamat:pelan-pelan, perlahan-lahan\r\nBegasa: habis-habisan; dero begasa ruok: mereka berkelahi habis-habisan\r\nBeguru: belajar\r\nBejagur: betampar\r\nBeju: bepergian\r\nBekakang: pohon kayu karamunting\r\nBekat: putus\r\nBekok: kodok\r\nBelacan: terasi\r\nBelai: telanjang\r\nBelayar: berlayar\r\nBeleleng: pusing; beleleng utokku: pusing kepalaku\r\nBeleso: tikus; eka okan beleso: habis dimakan tikus\r\nBeliai: kadal;bengkarung\r\nBelibis: belibis\r\nBeliku: dapur; nampa jaja mo beliku: membuat kue didapur\r\nBelinjan: tomat\r\nBeliung: beliung\r\nBelo: tidak; belo kate: tidak bisa; belo roan: tidak karuan; belo kate tenggang: tidak bisa pisah; belo moko one: tidak apa-apa; belo kakan: tidak mau; belo keo jodo yo: tidak ada gunanya\r\nBembe: kambing; okan bembe: dimakan kambing; nyembele bembe: menyembelih kambing\r\nBemeo: menjaga burung\r\nBenasa: susah; benasa ba kain endo: susah semua kami ini\r\nBencana: bencana\r\nBengat: asma\r\nBengkolong bila: bulat\r\nBepekat: bermusyawarah, rapat; awa bepekat: tempat bermusyawarah\r\nBerasung: buah kelubut\r\nBereko: rewel; bereko nua peaku: rewel lagi anakku\r\nBerik: kaget; nemberik: membuat kaget\r\nBeringat: dingin: beringat beta aku endo: dingin betul saya; roni: dingin; danum roni: air dingin\r\nBeriri: bayam; erai siret beriri: satu ikat bayam\r\nBeriwit: rumput\r\nBerse: bersih\r\nBerubu: angin ribut\r\nBesi: besi\r\nBeta: betul: beta yo be: betulkah\r\nBetore: berbalas pantun\r\nBias kopas: beras, nasi biasa\r\nBias pulut: nasi, beras ketan\r\nBias: Beras, nasi; insok bias ene lang panci: masukan beras itu kedalam panci\r\nBiduk: perahu; biduk olai: perahu besar; pedangkang: perahu layar besar\r\nBie: beri; bieko de: kamu berikan ya; bieku : kuberi; bie yo: diberinya; bie kam: kamu beri\r\nBika: sebelah; lou bika: rumah sebelah; bika endo: sebelah ini\r\nBitik: semut\r\nBiung: leher\r\nBiwi: bibir\r\nBiwit: pancing/kail; miwit: memancing; dero miwit mo atang Seratai: mereka memancing disungai Seratai\r\nBoar: sakit; boar kesong: sakit hati; boar beta kesongku: sakit betul hatiku; boar buntung: sakit perut; boar utok: sakit kepala; boar mato: sakit mata; boar kukut: sakit gigi; boar toing: sakit pinggang; boar botis: sakit kaki\r\nBobo: Astaga\r\nBogol: gemuk\r\nBoka: belah; moka: membelah; moka duyan: membelah durian\r\nBolum: hidup; penyembolum: penghidupan; nembolum: menghidupkan; ketone nembolum sio: bagaimana menghidupkannya; nembolum ine uma yo: menghidupi orangtuanya\r\nBontul: malas\r\nBoruk: monyet\r\nBosa: basah\r\nBoting: kenyang; boting aut: sudah kenyang\r\nBotis: kaki; malan botis: jalan kaki\r\nBoto: busuk, jabuk;\r\nBotol: botol\r\nBotuk: tengah; tunge mo botuk: duduk ditengah botuk-botuk : ketengah\r\nBowa: mulut\r\nBoyan: jalan\r\nBoyat: berat; boyat beta: berat betul; nemboyat: memberatkan\r\nBrebuntung: bersaudara; rebuntung ruang: saudara kembar, rebuntung yo: saudaranya, rebuntungku: saudaraku\r\nBu: bubu\r\nBua: buah, ngembua: berbuah; bayuka ngembua: baru saja berbuah;\r\nBuen: baik; buen kesong: berhati baik; buen nau: cantik,tampan; regok: cantik\r\nBui: cuci; ngembui, mui: mencuci: buiko: kamu cuci; buiku: ku cuci\r\nBujang: remaja; bujang song, remaja putra, bujang bawe: remaja putri; pea bujang: anak-anak remaja, pemuda\r\nBujok: tombak\r\nBukes: lengkeng hutan\r\nBulan: bulan; bulan purnama: Bulan prendama\r\nBulau: emas; bulau sayang: nama ilmu  untuk memikat hati lawan jenis\r\nBuneng: buah; tenu erai buneng gula mea endo: berapa sebuah gula merah ini\r\nBungang: bodoh; bungang beta: bodoh betul\r\nBungkus: bungkus\r\nBungo: bunga; ngembungo: berbunga\r\nBuntung: perut; olai buntung: perut besar\r\nBuo: gerimis\r\nBuo: gerimis hujan rintik-rintik\r\nBura: putih, ratu bura daya: ratu berdarah putih\r\nBuran: keladi\r\nBusai: pengayuh,dayung; busaiko de: kamu dayung ya; ngembusai: mendayung\r\nBute: saja; erai bute: satu saja\r\nButi: butir\r\nButu: penis\r\nBuur: bungur\r\nBuyang: kertas\r\nBuyung: hitam\r\nC\r\nCabe: lombok, cabe\r\nCangkol: cangkul\r\nCicak : cecak\r\nCincin: cincin\r\nCoba: coba; nyoba: mencoba\r\nCoek: cobek\r\nComong: cupak;\r\nCucuk: tusuk; tenu erai cucuk: berapa setusuk\r\nD\r\nDai yo: ujarnya\r\nDali : otak\r\nDanum: air; danum layong: air panas; danum mate: air yang sudah direbus; danum enta: air yang belum dimasak; danum roni: air dingin\r\nDaon: daun, daon rembia: daum rumbia; daon nipa: daun nipah\r\nDapet: dapat;\r\nDasoi: lantai\r\nDasu: kejar; dasuku: kukejar; dasu koko: dikejar anjing; ngendasu; mengejar\r\nDat: jahat, tidak baik: dat nau: buruk rupa; buen nau: cantik, tampan; dat kesong: berhati jahat\r\nDato: kakek; dato-nene: kakek-nenek; mate dato: almarhum kakek\r\nDaya: darah; ratu bura daya: ratu berdarah putih\r\nDelawi: bulus\r\nDeli: sayur; deli-luen: sayur mayur; nampa deli: membuat sayur\r\nDempet: dekat; ngedempet: mendekati: sedempet: berdekatan\r\nDene: dulu; deneka: dulu saja\r\nDenia: dunia;\r\nDeo: banyak; deo sen: banyak uang; deo bawe: banyak isteri; memedeo: memperbanyak; pinadeo: diperbanyak; deoka: banyak saja; deo yo: banyaknya; kedeo: sebanyak\r\nDepo mone: kemana\r\nDerang: kali: tenu derang: berapa kali\r\nDero: mereka; uda dero: paman mereka\r\nDes: saat; des ene: saat itu; des kain aso burok dene: saat kami masih muda dahulu\r\nDiang: dengan; diang ise: dengan siapa; diang sio: dengan dirinya, dengan dia; diang saku: denganku\r\nDike: tinggal, dike yo: ditinggalnya; ngendike: meninggalkan\r\nDikur; punggung; dikurko: punggungmu\r\nDikut: rumput; ngerikut: merumput; ombo dikut yo aut: tinggi sudah rumputnya\r\nDilang: datang, bertamu;\r\nDile: sebentar: dileka: sebentar saja\r\nDinding: dinding\r\nDingo: dengar; ngeringo: mendengar; dingoku: ku dengar; dingoko: kamu dengar\r\nDiris: sarung\r\nDita: air; dita wani: madu; dita tuak : air tuak; dita kelapa: air kelapa\r\nDiwa: turun: pinadiwa: diturunkan, memediwa: menurunkan; mediwa: menurunkan; diwa ka: turun saja\r\nDodong: lamban; dodong beta: lamban sekali\r\nDola:lidah; dola bayo: lidah buaya; dola nayu: lidah petir\r\nDombo: naik; pinadombo: dinaikan, ngedombo: menaikan; dombo kelas: naik kelas\r\nDompu: singkong, dompu bako: ubi jalar\r\nDondom: gelap malam\r\nDongon: berang-berang\r\nDotu: tengah hari\r\nDului: sore; dului pore: sore kemarin\r\nDuo: dua\r\nDuo: dua; keduo derang: kedua kali; tenu derang: berapa kali\r\nDupa: dupa\r\nE\r\nEka: habis; pengekayo: akhirnya; pengeka: penghabisan; mekeka: menghabiskan; eka gus: habis sama sekali; eka-eka macam: segala macam\r\nEle: beri; eleko garam : kamu beri garam\r\nEles: racun\r\nEma: mama,ibu\r\nEmpulu: burung, ompit: burung pipit; koniu: burung elang\r\nEna: kalau; ena beai: kalau ada waktu; ena kate: kalau bisa\r\nEndo: ini\r\nEne: itu\r\nEngau : buka; engau jawong ede: buka pintu itu;:ngengau : membuka\r\nEngkang: diantara\r\nEngkat: angkat; engkatko: kamu angkat\r\nEngket: dari; engket Kerang: dari kerang; engket bai: dari zaman dahulu\r\nEngus: bau\r\nEnsak: masak; ensak aut: masak sudah; ensak be: sudah masakkah\r\nEnta: mentah\r\nEntang: ujar; entang dato: ujar kakek\r\nErai: satu\r\nEsa: ikan; esa koreng: ikan kering\r\nEta: dusta, bohong; nampa eta : berdusta, berbohong\r\nEto:cari; meto: mencari; meto kuman: mencari makan; meto bawe: mencari isteri; meto sen: mencari uang; meto elmu: mencari ilmu\r\nF\r\nG\r\nGalak: kuat; galak beta iko kuman: kuat betul kamu makan\r\nGambus: gambus\r\nGaram: garam\r\nGau: bubur; nampa gau: membuat ubur\r\nGawal: suka,senang,tertarik\r\nGawi: kerja; genawi dikerjakan; gawiko: kamu kerjakan;gawiku: kukerjakan; gawiku mo lou ka de: kukerjakan dirumah sajalah…; gawi-gata: semua pekerjaan\r\nGayong: gayung\r\nGedang: pepaya; taruk gedang: pucuk pepaya; gedang belo daon: nama mantera untuk mendundukan hati seseorang, biasanya wanita\r\nGelang: gelang\r\nGelas: gelas\r\nGendang: gendang\r\nGentung: gantung; genantung: digantung; begentung: bergantung\r\nGergaji: gergaji\r\nGeta: getah\r\nGula: gula\r\nGuling: guling\r\nGunting: gunting; genunting; digunting\r\nGuru: guru; guruku: guruku; guruko: gurumu; beguru: belajar; guru taka: guru kita: guru kain: guru kami\r\nH\r\nI\r\nIdik: halus, kecil\r\nIjau: hijau\r\nIkam: kamu\r\nIkui: ekor: ikui timang: ekor harimau\r\nIne: ibu\r\nInsek: sempit\r\nInsok: masukan; nginsok: memasukan\r\nIsau: pisau\r\nIse: apa; iseko ulun tuo ene: ada hubungan apa kamu dengan orang tua itu; ise sina baiah: apa yang terjadi pada zaman dahulu ya…\r\nIsop: minum; isopka: minum saja\r\nIte: lihat\r\nIwat: dibawah\r\nIwoi: liur\r\nJ\r\nJaba: padang; jabauras: padang sampah\r\nJabung: sawi pahit\r\nJagur: tampar; jagur ku: ku tampar; jagurko: kamu tampar\r\nJail: luka; jail jongel: luka parah\r\nJaja: kue; jaja-loa: segala macam kue\r\nJali: tikar yang terbuat dari rotan (lampit)\r\nJanas: habis terbakar\r\nJantong: jantung\r\nJatus: seratus\r\nJawong: pintu\r\nJele: jendela\r\nJelepong: tepung\r\nJemat: hari Jumat\r\nJenaga: dijaga\r\nJenolak : disambar ; jenolak nayu: disambar petir\r\nJiring: jengkol\r\nJono: sering\r\nJura: ludah; ngenjura: meludah; jura yo diludahinya\r\nJuta:  juta\r\nK\r\nKabar: kabar\r\nKacang enta: kacang tanah\r\nKacang ijau: kacang hijau\r\nKain: kami; kain endo belo keo pentau ise-ise: kami ini tidak punya pengetahuan apa-apa\r\nKakan: mau,hendak; kakan mate: hendak mati ;kakan lumpat: hendak ikut\r\nKakit: buat ke….\r\nKanam: rasa; buen kanam; enak rasanya: dat kanam: tidak baik rasanya, pagunanam: perasaan; kiso kanam: tahu rasa\r\nKangkong: kangkung\r\nKantem: terjepit\r\nKao: sangat miskin\r\nKapak: kapak\r\nKaran: nama, ise karanko: siapa namamu\r\nKasan: sisa,kelebihan; kasan ona: kelebihan disimpan\r\nKase: kasih, kekasih; Pengkase: mantra agar orang merasa sayang dengan kita\r\nKate: bias; kate be lumpat: bisakah ikut\r\nKate: boleh, bias\r\nKayang: tangan\r\nKayom: tengelam\r\nKayu: kayu; kayu mate: kayu mati\r\nKeap: kurap\r\nKecamba: kecambah, taoge\r\nKedera: kursi\r\nKeke: jemur; ngeke: menjemur; keneke: dijemur; kekeko: kamu jemur\r\nKelambu: kelambu\r\nKelapa: kelapa\r\nKelato: gatal\r\nKeling: jagung\r\nKelotu: pelepah\r\nKemis : hari Kamis\r\nKempo: bengkak\r\nKentas: menyeberang; ngentas: menyeberangkan\r\nKenupi: termimpi-mimpi\r\nKeo: ada; keo be: adakah\r\nKeo: ada; pengkeo pendapatan, perolehan\r\nKerembalung: jari tengah\r\nKerengan: haus\r\nKerewau: kerbau; jomit kerewau: temulawak\r\nKesa: cerita; kesayo taka: diceritakannya kita\r\nKesakaseku: cerita cintaku\r\nKesio: adanya\r\nKesong: hati,perasaan,sifat; buen kesong: berhati baik\r\nKetikai: ketupat\r\nKetindo: begini, ketindo be: beginikah\r\nKetine: begitu; kenone moko ketine: kenapa maka begitu; ketine enta: begitu semua; ketine ba: begitu semua\r\nKetiris: bakul tempat mencuci beras\r\nKetone: bagaimana\r\nKetowong: mangkuk\r\nKias: sapu; ngias: menyapu; pengkias: penyapu; kiasko dile: kamu sapu dahulu\r\nKikit: gigit; kikityo: digigitnya\r\nKikit: gigit; kikityo: digigitnya\r\nKito: melihat\r\nKno::sifat, perasaan\r\nKoe: silakan\r\nKoeng: goreng; ngoeng: menggoreng\r\nKoka: tertawa; ngoka: menertawakan; pengoka: suka tertawa\r\nKoko: anjing\r\nKokop: peluk; ngokop: memeluk; kenokop: dipeluk\r\nKokot: cakar\r\nKola: berapa lama; diang kola; lama kelamaan\r\nKola: kapan\r\nKolai: sebesar; kolai bua kelapa: sebesar buah kelapa; kolai yo: besarnya\r\nKompu: badan\r\nKomputonga: tubuh\r\nKongo: nyamuk; nang turi mene, deo kongo yo: jangan tidur disitu, banyak nyamuknya\r\nKongo: orang; tenu kongo: berapa orang\r\nKono: kena; pengkono: musibah; keo pengkono: tertimpa musibah\r\nKopal: tebal\r\nKopi: kopi\r\nKoreng: kering\r\nKoreng: kering; korengreng: kering sama sekali\r\nKorik: binatang hutan\r\nKoroi: keras; koroi kesong: semangatnya keras\r\nKosang:  iba; belo kosang be mite pea pelulo ene: tidak ibakah melihat anak yatim piatu itu\r\nKotil: cubit; ngotil: mencubit; kotilku: kucubit\r\nKukui: ekor; tenu kukui timang yo: berapa ekor harimaunya\r\nKukut: gigi\r\nKuli: dapat; nengkuli: mendapatkan\r\nKuman: makan; kuman taka: mari kita makan; kakan kuman belo keo ulak: mau makan tidak ada ikan\r\nKuto: gila;\r\nKuyar: monyet\r\nL\r\nLa: di; la landu: disitu\r\nLabika: disebelah; labika lou yo: disebelah rumahnya\r\nLabu danum: labu air\r\nLabu: labu\r\nLai: pohon besar\r\nLaiwat: dibawah\r\nLaju: cepat\r\nLalo: lewat; lalo mendo: lewat disini\r\nLando: disini; lade: disana;\r\nLane: disana;lana-landu: sana-sini\r\nLangot: panas; langot beta olo endo: panas betul hari ini\r\nLaombo: diatas\r\nLapang: punya waktu\r\nLatak: buah pelir\r\nLati: hutan\r\nLatu: jatuh\r\nLawai: benang, lawai pilos: benang jarum\r\nLayong: panas; danum layong: air panas\r\nLayung: buah seperti durian berwarna merah\r\nLega: lapang\r\nLemang: makanan dari ketan bersantan yang dimasak dalam bambu\r\nLemari: lemari\r\nLembukon: burung punai\r\nLemit: kuning\r\nLempeng: gambas\r\nLemu: ilmu\r\nLemuing: daki\r\nLenga: minyak; lenga okan: minyak goreng; lenga gas: minyak tanah\r\nLengan: ujar,kata; lengan yo: ujarnya\r\nLengkuas: lengkuas\r\nLeo: Jahe\r\nLepu: keong\r\nLesat: langsat\r\nLesek: lumpur\r\nLewok: sirih; daon lewok: daun sirih\r\nLilip: kuku\r\nLimo: lima; limo jatus: limo jatus\r\nLipis: tipis\r\nLisung: Lesung;\r\nLitut: keruh; litut beta danum endo:keruh betul air ini\r\nLokoi: lelah; selokoi: istirahat; awa selokoi: tempat beristirahat\r\nLokung: cacing\r\nLoma: lemah; lomaliot: lemah liat\r\nLonsi: anyir (bau amis ikan)\r\nLontop: dalam; lontop beta: dalam sekali\r\nLopong: bocor\r\nLosan: tembus, tidak ada rintangan\r\nLosu: lepas; osu baju: buka\r\nLotong: hanyut; lotongyo :hanyutnya;\r\nLou: rumah, gedung; lou sekola; gedung sekolah\r\nLowak: sungai kecil\r\nLowong: kuburan\r\nLuang: lubang\r\nLumpat: ikut; ngelumpat: mengikutkan, pina lumpat: diikutkan\r\nLupo:jinak; pelanduk lupo: nama mantra untuk menundukan hati seseorang\r\n M\r\nMabuk: mabuk\r\nMai: malu; nemai: membuat malu; nang mai-mai: jangan malu-malu; mai-mai using: malu-malu kucing\r\nMais: kurus\r\nMak: lain; yo mak: yang lain; mak si sio: bukan dia;\r\nMakai: menggunakan\r\nMakat: minggat\r\nMakes: lain; makse dero: lain mereka\r\nMalan: berjalan; malan-malan tingen: jalan-jalan saja; dalan yo : jalannya\r\nMalom: malam; malom Jemat: malam Jumat; malom pakot: malam hari pasar; tenga malom: tengah malam;malom ende: tadi malam\r\nMana: membuang; penana: dibuang; pana yo: dibuangnya; panaku: kubuang\r\nMandor: berlayar menuju muara\r\nManggis: manggis\r\nMangku awat: saling menolong,saling membantu\r\nManin: besok; manin keruan: besok lusa\r\nManis: manis\r\nMapos: hilang\r\nMara: marah; kinamara: dimarahi; konomara: dapat amarah\r\nMasin: asin\r\nMate: mati; mate bapa: almarhum ayah, mate ema: almarhum ibu; piak ene mate kono eles: ayam itu mati terkena racun; salupate: saling membunuh\r\nMato olo: matahari\r\nMato: mata; waemato: air mata, mato olo: matahari\r\nMauk: mabuk\r\nMayar: membayar\r\nMea: merah; mea mato yo: merah matanya\r\nMean: ringan,tidak berat\r\nMeco: mengulak; meco cabe: mengulak Lombok\r\nMehet: ingin sekali; mehethet: sangat ingin sekali tidak bisa tidak\r\nMeja: meja\r\nMekom: sakit; mekom ries: sakit keras\r\nMekus: melahirkan\r\nMemai: tupai\r\nMemekeo: mengadakan\r\nMemma: subuh\r\nMemo: manja\r\nMena: bibi\r\nMenau: belajar; menau begawi diang nengkorong: belajar bekerja dan membangun\r\nMengket: memanjat; mengket kelapa; memanjat kelapa; engket kam ka: kamu panjat saja\r\nMensow : meloncat\r\nMenta: kain katun\r\nMere: memberi tahu: benere: diberitahu\r\nMeroa: ramai sekali\r\nMerota: kotor; merota ba: kotor semua\r\nMesen: mesin\r\nMesgit: mesjid\r\nMie: memberi; bieko: berikan padanya; bie yo: diberinya: bieku: kuberi\r\nMili: memilih; penili: memilih; pilikoka: kamu pilih saja\r\nMite: melihat;  nite: dilihat; pengite yo: penglihatannya\r\nMiwit: memancing; pore kain miwit mo atang Seratai: kemarin kami memancing disungai seratai\r\nMobel: mobil\r\nMoko: maka\r\nMolo: siang tengah hari\r\nMomba: memanggil, bomba : panggil;benomba: dipanggil\r\nMombas: menebas\r\nMone: mana; taon one bulan one: tahun berapa bulan berapa; jeman one: kapan; belo tau kejeman: tidak tahu kapan\r\nMoni: kencing\r\nMono: tidak mau; mono enta: tidak mau semuanya\r\nMonsit: lari\r\nMontong: diam\r\nMopak: menerkam\r\nMosom: rasa asam\r\nMoti: tumbuh\r\nMoyong : rajin\r\nMukas: cakap\r\nMuli: pulang; tempuliko: kamu pulangkan; tempuli kain: kami kembalikan\r\nMulus: memasak; bulusko dile: kamu masak dulu; sebulus: memasak-masakan\r\nMunin: musang\r\nMurek: mudik\r\nMuta: muntah\r\nMutu: menumbuk\r\nMutu: menumbuk, tutu; tumbuk;tenutu: ditumbuk\r\nN\r\nNaket: mencari,mengambil\r\nNampa: membuat: nampa eta: berbohong; nampa ponta: membuat emping\r\nNang: jangan; nang ngerokok mendo: jangan merokok disini; nang genanggu: jangan diganggu\r\nNangis: menangis\r\nNangka: nangka; nangka burok: nangka muda; nangka ensak: nangka masak\r\nNantai: menampung\r\nNantu:menantu\r\nNaris: memarang; salutaris: saling memarang\r\nNas:  nenas\r\nNasa: asah\r\nNasok: menugal\r\nNau: rupa, wajah;nauko: wahajmu; buen nau: gagah,tampan; dat nau: buruk rupa; ise nau: kenapa rupanya\r\nNayap : senja\r\nNayu: petir; jura nayu: disambar petir\r\nNe doko: nah itu kan\r\nNembaling: mengeluarkan\r\nNembawe: memperisteri\r\nNempakan: membuat bibit padi\r\nNempate: membunuh\r\nNempia:seperti dia yang bisa-bisanya\r\nNene: nenek\r\nNengkorong: mendirikan; tengkorongko : kamu dirikan\r\nNgaji: mengaji; ngajingeja: berlajar segala ilmu agama\r\nNgako: maling; pengako: pencuri; akoyo : dicurinya\r\nNgalek: mengambil\r\nNgalor: tumpul\r\nNgani: mengetam padi\r\nNgawat: membantu\r\nNgempolo: gotong royong;\r\nNgeno: mengenang,rindu; ngeno saku turai mate: mengenang aku hingga mati\r\nNgepang: menambal\r\nNgeracaw: asal bicara\r\nNgerendek: mendidih\r\nNgerikut: merumput\r\nNginjam: meminjam; injam: pinjam; sekinjam: berniat meminjam; injamku de: ku pinjam ya;\r\nNginte: menunggu; inte: tunggu; inteko dile: kamu tunggu sebentar\r\nNgitop: mengerenyitkan dahi;\r\nNgo:…menyapa\r\nNgona: menyimpan; ona: simpan, onaka: simpan saja; onaku de: ku simpan ya; ona kain: kami simpan\r\nNgoson: mengangkat; osonko dile: kamu angkat dulu\r\nNgosot: menjahit; osotko dile: kamu jahit dulu\r\nNgucur: berziarah\r\nNgula: mengyiangi; ngula esa: menyiangi ikan\r\nNgunti: menanyakan\r\nNgusar: mengayak\r\nNindo: nanti\r\nNipa: nipah\r\nNipo: ular\r\nNokon: masih\r\nNoli: bertelur\r\nNondok: memasang: nondok telion: memasang batur,nisan\r\nNopap: menampar\r\nNotok: memotong\r\nNotou: menebang (pohon)\r\nNulis: menulis; tulisko: kamu tulis; tulisku: saya tulis; tulis kain: kami tulis\r\nNulo: ditanam; ngulo: menanam; uloko: kamu tanam; uloku: kutanam; ulo kain: kami tanam\r\nNupi: mimpi, kenupi: termimpi; ngenupi: bermimpi\r\nNuta: dimuntahkan; uta: muntah; muta; muntah\r\nNutik: dipetik;utikku: ku petik, utikka: petik saja; utik kain: kami petik\r\nNyanga: menyanga\r\nNyelemang: ada-ada saja\r\nNyembula: memulai\r\nNyenduo: sepupu dua kali\r\nNyera: menyerahkan, kain nyera de po siko ka: kami menyerahkan ke kamu saja\r\nNyiau: menampi\r\nNyindai: sepupu\r\nNyingkap: makan\r\nNyoyar: berteriak\r\nO\r\nOal: bodoh\r\nOjek : ojek\r\nOkan: makan\r\nOki: untukku\r\nOkong: adik; pengokong: adik-adik\r\nOla: lama, diang kola: lama kelamaan\r\nOlai: besar; Olai-ombo: besar tinggi\r\nOlo : hari; olo pakot: hari pasar\r\nOlong: muara; Olong Samu: Muara Samu\r\nOmbo: atas; la ombo: diatas; komboyo: tingginya\r\nOmbung: sembung\r\nOmoi: duga,kira\r\nOmpan: umpan\r\nOmpit: burung pipit\r\nOna: simpan; onaku: kusimpan\r\nOndos: berak\r\nOngkar: seusia, seumur\r\nOni: air kencing;moni: kencing\r\nOno: duluan\r\nOnom: enam\r\nOnon si : didepan\r\nOnsom: asam\r\nOnson:  minyak\r\nOntus: tebak, asal sebut\r\nOpai: seberang\r\nOpat: empat\r\nOre: tidak jadi, batal\r\nOri: tiang\r\nOro: jauh; oro-oro iko tunge: jauh-jauh kamu duduk\r\nOson:pikul\r\nOsu: buka; osu bajuko: buka bajumu\r\nOtak: parang; otak anjang: parang panjang\r\nOto: dedak\r\nOto: mobil\r\nOtut: kentut\r\nOwa: banjir\r\nOyon; bunyi, suara\r\nP\r\nPagar: pagar\r\nPais: makanan yang dimasak diungkus dalam daun pisang; nempais: membuat pais\r\nPait: pahit\r\nPaka: dahan kayu\r\nPakot: pesan; makot: memesan\r\nPaku: paku\r\nPana: buang; penana: dibuang; panako: kamu buang, panaku : ku buang\r\nPantai: pantai\r\nPasar: pasar\r\nPasu: ember\r\nPatau: santan; penatau: diberi santan\r\nPateko: kamu matikan\r\nPato: penurut\r\nPayak: taruh; payak mene ka: taruh disitu saja\r\nPayan: sibuk, banyak kerjaan\r\nPayau: payau\r\nPayo: sawah\r\nPayong: payung\r\nPea: anak-anak,remaja\r\nPelita: lampu\r\nPembakal: kepala desa\r\nPendo: kemari\r\nPengangkan: suka mengakui barang orang menjadi miliknya\r\nPengkakan: kehendak, keinginan\r\nPengokan: makanan\r\nPenjuyus: tapisan\r\nPenyakap: pelit\r\nPenyembolum: penghidupan\r\nPerangat: rambai sungai\r\nPeseu: jantung pisang\r\nPetak: ikan lele\r\nPetete: jembatan\r\nPetikang: koreng\r\nPetondek: kegirangan, minta perhatian\r\nPiak: ayam\r\nPilos: jarum\r\nPinang: pinang\r\nPinggan: piring\r\nPinggir: pinggir\r\nPini: pernah;belo pini: belum pernah\r\nPisang: pisang\r\nPitis: uang\r\nPo lane: kesana\r\nPo pendo: kesini\r\nPo: paha\r\nPokung: lumpuh, tidak bias berjalan\r\nPolok: ingus\r\nPone: kemana\r\nPontis: lilin\r\nPonu: penuh\r\nPopal: hajar, popalku: ku hajar; popalko: kamu hajar\r\nPora: ikan gabus\r\nPore: kemarin\r\nPosa: buta\r\nPotok api: puntung berapi\r\nPotu: pecah, nempotu: memecahkan\r\nPoyo: payah\r\nPujat: kuyang\r\nPukan: rebah, nempukan: merebahkan (pohon, tiang)\r\nPuli: obat; bepuli: berobat\r\nPulut: ketan; bias pulut:nasi ketan, beras ketan\r\nPuskesmas: Puskesmas\r\nPuya: kepiting\r\nPuyan: kapur sirih\r\nQ\r\nQoran: Al Quran\r\nR\r\nRabak: robek\r\nRame: ramai\r\nRampa: pilek\r\nRawai: rawai\r\nReba: hari Rabu\r\nReban: kurungan; reban piak: kurungan ayam\r\nRegok: cantik\r\nRela: rela\r\nRembia: rumbia\r\nRembiran: kecipir\r\nRembutan: rambutan\r\nRempa: bumbu\r\nRendong: letak\r\nRenset: robek\r\nRese : pedas\r\nRetok otak: kacang parang\r\nRetok: kacang panjang\r\nRies: kuat;nyaring\r\nRiut: angin\r\nRoko: rokok; ngeroko merokok\r\nRonggeng: penari rongeng\r\nRoni: dingin\r\nRonu: berani; belo ronu: tidak berani\r\nRoton: penyakit; belokeo rotonsan: tidak ada sakit apa-apa\r\nRuang: kembar\r\nRuko: terbangun, terjaga\r\nRumah sakit: rumah sakit\r\nRuwo: semangat\r\nS\r\nSabar: sabar\r\nSabtu: hari Sabtu\r\nSabun: sabun\r\nSae: luas\r\nSakan : ayam hutan\r\nSala omoi: keliru, salah duga; omoiyo: dikiranya\r\nSala: salah\r\nSampe: sampai\r\nSampo: sampo\r\nSan: perasaan\r\nSanan: kanan\r\nSang: merica\r\nSanga: sanga( goreng tanpa minyak) senanga: menggoreng tanpa minyak\r\nSapo: atap; nyapo: memasang atap\r\nSaya: saya, aku\r\nSederai: sendirian\r\nSei: kiri\r\nSelangui: berenang\r\nSelasa: hari selasa\r\nSelau: lapar\r\nSelendako: ibu jari\r\nSelingking: kelingking\r\nSeloar: celana\r\nSelokoi: istirahat\r\nSembolot: bisul\r\nSempatai: pelataran tempat menjemur biasanya menjemur padi\r\nSempirang: linggis\r\nSempokong: jongkok\r\nSempotan: sumpitan\r\nSempuri: bercerita\r\nSen: uang; deo sen: banyak uang\r\nSendal: sandal\r\nSenen: hari Senin\r\nSengayap: buah leci\r\nSepat: ikan sepat\r\nSepatu: sepatu\r\nSepeda: sepeda\r\nSeprai: seprai\r\nSepulu: sepuluh\r\nSerai: serai\r\nSesung: uang kembali;\r\nSia: terbakar\r\nSie: Sembilan\r\nSikam:…kalian, anda\r\nSiken: tekan; pinasiken: ditekan\r\nSilom: selam: ensilom: menyelam\r\nSimpong: tuli, kurang pendengaran\r\nSindai: sekali\r\nSingkut: kencur\r\nSingot; sengat, penyengat\r\nSiret: ikat\r\nSiru: nyiru\r\nSisa: sisa\r\nSogon: wajan\r\nSolong: lanjung\r\nSompa: menginang, makan sirih\r\nSompui: cuci muka\r\nSonda: lihat keatas\r\nSong: laki; song yo: suaminya, song ko be: suamimu kah; rebuntung song yo: saudara suaminya\r\nSongko: kopiah, songkok\r\nSowot: ingat: ngesowot: mengingat: kesowot: teringat\r\nSudu: sendok\r\nSugai: sisir\r\nSulet: datang\r\nSundok: sudah\r\nSuni: sunyi\r\nSuyu: Suruh; nyuyu: menyuruh; suyuko: kamu suruh; suyuku: ku suruh; senuyu: disuruh\r\nT\r\nTabe: permisi\r\nTai: tahi; tai using: tahi kucing; luang tai: anus\r\nTajak: bajak tangan\r\nTaji: taji\r\nTaka: kita; benuo taka: benua kita, kampong kita;basa taka: bahasa kita, daya taka: darah kita; taka sama rata: kita bersama; taka ba: kita semua, sama taka: sesama kita\r\nTaksi: taxi\r\nTakut: takut\r\nTali: tali\r\nTamba: tambah\r\nTampa: buat, olah; tenampa: dibuat; tampako ente oki: kamu buatkan untukku, ise tampako: apa yang kamu buat\r\nTampi: pinggir ladang\r\nTana bawo: tanah gunung\r\nTana payo: tanah sawah\r\nTana: tanah\r\nTang: sesat\r\nTangis: tangis; tenangis: ditangisi; ise tangisko yede: apa yang kamu tangiskan itu\r\nTangop: tangkap; tangopyo: ditangkapnya; tenangop: ditangkap\r\nTanjal: pingsan\r\nTaon: tahun; taon one bulan one: tahun kapan, bulan kapan\r\nTape: tinggal; tapeka: tinggal saja; tapeku: kutinggal\r\nTapen: kepuhunan\r\nTapol: suap\r\nTaris : memarang\r\nTarom: tajam\r\nTaruk: pucuk\r\nTasik: laut\r\nTau: tahu, dapat; aku ka yo tau sio: saya saja yang mengetahuinya; pentauko: pengetahuanmu; belo keo pentau ise-ise: tidak ada kebisaan apa-apa; ena deo ngisop tuak ene tau beleleng : bila banyak minum tuak itu dapat membuat pusing kepala; pentauku: sepengetahuanku\r\nTe: teh\r\nTelaos: rusa\r\nTelengka: miring\r\nTelingo: telinga\r\nTelion: kayu ulin\r\nTelonan: tenggorokan\r\nTembot: menaikan: tembot bebe: naik ayunan, tasmiah\r\nTemoya: timah, timah pemberat pancing\r\nTempakan: padi yang telah disemai sebelum ditanam disawah\r\nTenai: usus,isi perut\r\nTendikon: ikan baung\r\nTendungan: comberan\r\nTenga: setengah\r\nTengot: telan\r\nTepa: tempat sirih pinang\r\nTepok: patah\r\nTerebe: cepat, lekas\r\nTerese: lekas\r\nTerminal: terminal\r\nTerunggang: tumpah\r\nTerus: terus\r\nTetel: batuk\r\nTilo: tinggal\r\nTimun: ketimun\r\nTinan: sumur\r\nTindu: minta: tenindu: diminta; tindu maaf: minta maaf; tindu sen: minta uang; deo-deo tindu ampun: banyak-banyak minta ampun\r\nTingen: saja\r\nTingkut: patuk; tingkut piak: dipatok ayam\r\nTiras: gila\r\nTokom: tutup, nokom: menutup; tokomko: kamu tutup\r\nTolang: bambu\r\nToli: telur; tau noli aut: bisa bertelur sudah\r\nTolu: tiga\r\nTondal: pohon; tondal kelapa: pohon kelapa\r\nTontan: sebatas\r\nTopap: tampar\r\nTopi: topi\r\nTotak: ketinggalan\r\nTotou: tebang; notou: menebang; totouku: kutebang\r\nTou: tebu\r\nToyak: jatuh\r\nToyung: terung\r\nTriau: bicara yang bukan-bukan\r\nTudak: cempedak\r\nTudas: mati\r\nTuing: sahut; belo nuing: tidak menyahut\r\nTuju: setuju; belo tuju: tidak setuju\r\nTumbit: tumit\r\nTuna: bakar; tenuna: dibakar; ngenuna: membakar; nuna sio: membakarnya\r\nTunge: duduk; pinatunge: didudukan\r\nTungkong: pantat\r\nTungku: tungku\r\nTuo: tua; pinatuo: dituakan;ulun tuo: beliau\r\nTurai: sampai, hingga\r\nTurak;  lempar; tenurak : dilempar; nurak: melempar; turak yo: dilemparnya; turakku: kulempar\r\nTuri: tidur; penturi: tempat tidur\r\nTuru: tujuh\r\nTutuko: kamu tumbuk; tutuku: ku tumbuk; tenutu: ditumbuk\r\nTuyu: kumbang\r\nTwalang: terbalik, terhalang\r\nU\r\nUan: uban\r\nUbe-ube: tiba-tiba….?\r\nUda: paman\r\nUdang: udang\r\nUkat: cabut; ngukat; mencabut\r\nUlak: lauk, ulak-aluk: lauk pauk\r\nUlun : orang; ulun mate: orang meninggal; ulun bai: orang zaman dahulu\r\nUman: harga; tenu uman yo : berapa harganya\r\nUmbut: umbut\r\nUmo: huma; ngumo: berhuma; ngumo ngentaon: berhuma dan tinggal beberapa saat disana\r\nUnan: bantal\r\nUndus : mandi; undustota; bermandi-mandi; nundus: dimandikan; sundok tenundus: sudah dimandikan\r\nUntung: hamil\r\nUpa: upah\r\nUpak: kulit\r\nUpan: belalang\r\nUpu: cucu\r\nUran: hujan\r\nUras: sampah\r\nUrung: hidung\r\nUsang: lama, sudah lama\r\nUsar: ayakan\r\nUsi: kupas; ngusi: mengupas, usiko: kamu kupas, usiku: saya kupas\r\nUsi: siput\r\nUtok bokut: lutut\r\nUtok: kepala; utok otak: hulu parang; utok Kendilo: kepala sungai Kendilo\r\nUtut: asap; deo utut yo: banyak asapnya\r\nUwok: hantu\r\nUyan: maksud; uyanku: maksudku, uyan dero: maksud mereka\r\nUyat: urat; lenga uyat: minyak urat\r\nUyut: urut,pijat; sempuyut: minta pijat, nguyut: memijat\r\nV\r\nVeksin: vetsin;\r\nW\r\nWae: muka. Wae mato: air mata\r\nWalik: seperti; walik koko: seperti anjing\r\nWalu: delapan\r\nWani: lebah, tawon madu\r\nWatun: pindah\r\nWensut: pindah; wensut-wensut: berpindah-pindah\r\nX\r\nY\r\nYo ba: ya semuanya\r\nYo bayu: yang baru; yo bayu muli enende: yang baru pulang tadi\r\nYo buen : yang baik\r\nYo dat : yang tidak baik\r\nYo dempet: yang dekat; yo dempet lang kesongku: yang dekat dihatiku\r\nYo ene: yaitu\r\nYo enta: ya semuanya\r\nYo idik: yang kecil\r\nYo kelika : ya mungkin\r\nYo lalo : yang lalu\r\nYo lemit: yang kuning warnanya\r\nYo ola: yang lama\r\nYo olai: yang besar\r\nYo ono: yang duluan\r\nYo oro: yang jauh\r\nYo sori: yang belakangan\r\nYo: ya, yang\r\n', NULL, NULL, 'bahasa_paser.jpg', '2026-01-25 00:04:36'),
(13, 'permainan rakyat', 'Permainan Rakyat', 'Permainan rakyat atau tradisional  adalah sebagai wujud ekspresi budaya lokal dan cara hidup yang memberikan sumbangsih terhadap identitas umum kemanusiaan saat ini telah banyak yang menghilang dan yang masih bertahan juga terancam punah karena pengaruh globalisasi yang saat ini semakin banyak membuat orang lebih menyukai gadget sebagai sarana dan media untuk bermain secara daring (dalam jaringan) sehingga ini membuat aktivitas di luar rumah semakin sedikit dan permainan tradisional yang semakin ditinggalkan oleh anak-anak bahkan tidak sedikit anak-anak yang tidak tahu apa itu permainan tradisional.\r\n\r\nSalah satu permainan rakyat yang berasal dari Kalimantan Timur tepatnya di Kabupaten Paser adalah permainan Belogo. Permainan ini merupakan permainan rakyat  yang dibawa dari Sulawesi ke wilayah Kabupaten Paser ketika masa Kesultanan Paser.\r\n', NULL, NULL, 'permainan_rakyat.jpg', '2026-01-25 00:06:25'),
(14, 'olahraga tradisional', 'Olahraga Tradisional', 'Olahraga tradisional adalah jenis olahraga yang berasal dari Indonesia serta diakui sebagai tradisi dan kebudayaan yang telah diturunkan secara turun-temurun pada suatu suku, etnis, maupun kelompok budaya tertentu yang ada di Indonesia.\r\nOlahraga tradisional yang berasal dari berbagai daerah di Indonesia ini, tentunya mempunyai nilai budaya dan makna yang mendalam, serta bermanfaat untuk melatih tubuh secara jasmani dan rohani.  Karena Indonesia memiliki luas wilayah yang sangat luas serta mempunyai daerah dan budaya yang berbeda-beda, olahraga tradisionalnya pun juga menjadi ikut beragam. Langsung saja berikut 15 olahraga tradisional Indonesia yang telah menjadi kekayaan warisan nusantara.', NULL, NULL, 'olahraga_tradisional.jpg', '2026-01-25 00:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `pusaka_benuo`
--

CREATE TABLE `pusaka_benuo` (
  `id` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `format` enum('PDF','Video','Audio','Dokumen') NOT NULL,
  `file` varchar(255) NOT NULL,
  `narasumber` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `status` enum('Draft','Dipublikasikan') DEFAULT 'Draft',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pusat_informasi`
--

CREATE TABLE `pusat_informasi` (
  `id` int NOT NULL,
  `kontak` text NOT NULL,
  `aturan` text NOT NULL,
  `faq` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pusat_informasi`
--

INSERT INTO `pusat_informasi` (`id`, `kontak`, `aturan`, `faq`) VALUES
(1, '', 'Panduan Berkunjung Kuta Rekan Tatau\r\nSelamat datang di Kuta Rekan Tatau. Untuk menjaga kelestarian dan kenyamanan bersama, setiap pengunjung diharapkan mematuhi aturan berikut:\r\n1. Sebelum Masuk (Area Luar)\r\nParkir: Parkirkan kendaraan dengan rapi di tempat yang telah disediakan agar tidak menghalangi akses jalan.\r\nAlas Kaki: Mohon melepas alas kaki sebelum menaiki tangga atau memasuki area lantai kayu rumah adat.\r\n2. Etika di Dalam Rumah Adat\r\nPakaian: Gunakan pakaian yang sopan .\r\nSikap: Jaga ketenangan, tidak berlari-larian, atau berteriak di dalam area Kuta.\r\nKoleksi: Dilarang menyentuh, menduduki, atau memindahkan benda-benda pajangan dan ukiran tanpa seizin petugas/pengelola.\r\n3. Dokumentasi\r\nFoto/Video: Diperbolehkan untuk dokumentasi pribadi. Untuk penggunaan komersial atau konten profesional (film/iklan), wajib berkoordinasi dengan pengelola.\r\nHormati Privasi: Jika sedang ada tamu lain atau kegiatan adat, mohon mengambil gambar dengan tetap menjaga jarak dan privasi orang lain.\r\n4. Kebersihan dan Keamanan\r\nSampah: Jaga kebersihan. Dilarang meninggalkan sampah di dalam atau di sekitar area Rumah Adat Kuta Rekan Tatau.\r\nharta benda: harta benda yang dibawa pengunjung sepenuhnya tanggung jawab pengunjung dan tidak diperkenankan untuk meninggalkan benda berharga di sekitaran rumah adat.', '1. Apakah boleh berfoto dengan patung yang ada di Rumah Adat Kuta Rekan Tatau?\r\n2. Bayar berapa untuk masuk Rumah Adat Kuta Rekan Tatau ?\r\n3. Untuk berkunjung Ke Rumah Adat Kuta Rekan Tatau TIDAK DIPUNGUT BIAYA.\r\n4. Apakah boleh membawa makanan ke atas Rumah Adat Kuta Rekan Tatau ?\r\n5. Berapa biaya jika ingin mengikuti kelas membatik di Rumah Adat Kuta Rekan Tatau ?\r\n6. Apakah masyarakat umum boleh mengikuti pelaksanaan ritual adat nondoi ?\r\n7. Apa itu ritual adat BELIAN NONDOI ?\r\n8. Kapan ritual adat BELIAN NONDOI dilaksanakan ?\r\n9. Mulai jam berapa Rumah Adat Kuta Rekan Tatau dapat dikunjungi ?\r\n10. Apa pantangan saat berada di Rumah Adat Kuta Rekan Tatau ?\r\n11. Dimana lokasi Rumah adat Kuta Rekan Tatau ?');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `judul`, `isi`) VALUES
(1, 'Sejarah Rumah Adat Lowu Kuta Rekan Tatau', ' Rusa Sambar (Cervus unicolor) karena melambangkan keharmonisan manusia dan alam, kekayaan hayati Kalimantan, serta pengingat pentingnya pelestarian alam, terutama di tengah pembangunan Ibu Kota Nusantara (IKN). Keberadaan rusa ini sangat erat dengan budaya lokal dan alam liar PPU. \r\nMakna dan Simbolisme Rusa Sambar:\r\nIdentitas Daerah: Rusa Sambar menjadi identitas khas dan maskot resmi Kabupaten PPU.\r\nHarmoni Alam: Melambangkan hubungan erat antara manusia dan alam, serta upaya menjaga keseimbangan meski ada modernisasi.\r\nPelestarian: Penggunaannya sebagai simbol mengingatkan akan pentingnya konservasi keanekaragaman hayati.\r\nSatwa Khas Kalimantan: Spesies rusa besar ini memang habitat aslinya di hutan-hutan Kalimantan. \r\nPenerapan dalam Adat dan Identitas:\r\nSimbol rusa sambar sering terlihat di baliho, patung, dan lambang resmi pemerintah daerah PPU.\r\nAda upaya penangkaran rusa sambar di Desa Api-Api, Waru, sebagai wujud perlindungan terhadap maskot ini. \r\nDengan demikian, Rusa Sambar bukan sekadar hewan, melainkan representasi budaya dan komitmen PPU terhadap alam Kalimantan. ');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_galeri`
--

CREATE TABLE `sejarah_galeri` (
  `id` int NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah_galeri`
--

INSERT INTO `sejarah_galeri` (`id`, `gambar`) VALUES
(2, 'rusa sambar.jpg'),
(3, 'rusa sambar.jpg'),
(4, 'rusa sambar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cerita_rakyat`
--
ALTER TABLE `cerita_rakyat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_kegiatan`
--
ALTER TABLE `galeri_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `pusaka`
--
ALTER TABLE `pusaka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pusaka_benuo`
--
ALTER TABLE `pusaka_benuo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pusat_informasi`
--
ALTER TABLE `pusat_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah_galeri`
--
ALTER TABLE `sejarah_galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cerita_rakyat`
--
ALTER TABLE `cerita_rakyat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri_kegiatan`
--
ALTER TABLE `galeri_kegiatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pusaka`
--
ALTER TABLE `pusaka`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pusaka_benuo`
--
ALTER TABLE `pusaka_benuo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pusat_informasi`
--
ALTER TABLE `pusat_informasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah_galeri`
--
ALTER TABLE `sejarah_galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
