<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Materi</title>
</head>
<body>
    <h1>Detail Materi</h1>

    <?php
    if (isset($_GET['materi'])) {
        $materi = $_GET['materi'];

        switch ($materi) {
            case 'penalaran_kuantitatif':
                echo "<h2>Penalaran Kuantitatif</h2>";
                echo "<p>Pengetahuan Kuantitatif merupakan pengetahuan terkait matematika yang diperoleh melalui pembelajaran dan mewakili kemampuan menggunakan informasi kuantitatif dan memanipulasi simbol-simbol angka.</p>";
                break;
            case 'penalaran_matematika':
                echo "<h2>Penalaran Matematika</h2>";
                echo "<p> Penalaran Matematika merupakan kemampuan untuk memahami, menerapkan, dan menyelesaikan masalah-masalah matematika yang kompleks. Ini melibatkan pemahaman konsep-konsep matematika, penerapan rumus, pemecahan masalah, dan pengambilan keputusan berdasarkan data numerik.</p>";
                break;
            case 'penalaran_umum':
                echo "<h2>Penalaran Umum</h2>";
                echo "<p>Penalaran Umum merupakan penggunaan prosedur-prosedur secara terarah dan terkendali dalam memecahkan permasalahan-permasalahan baru. Pengujian Penalaran Umum mencakup tiga komponen meliputi penalaran induktif, deduktif, dan kuantitatif.</p>";
                break;
            case 'literasi_indonesia':
                echo "<h2>Literasi Bahasa Indonesia</h2>";
                echo "Literasi bahasa Indonesia merupakan menguji bagaimana pemahaman peserta dalam penggunaan bahasa Indonesia yang baik, benar, dan efektif</p>";
                break;
            case 'literasi_inggris':
                echo "<h2>Literasi Bahasa Inggris</h2>";
                echo "<p>Literasi bahasa Inggris merupakan soal yang menguji kemampuan calon mahasiswa untuk benar-benar memahami esensi dari suatu bacaan</p>";
                break;
            
            default:
                echo "<p>Materi tidak ditemukan.</p>";
        }
    } else {
        echo "<p>Materi tidak ditemukan.</p>";
    }
    ?>

    <p><a href="listMateri.php">Previous</a></p>
</body>
</html>
