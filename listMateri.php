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
    <title>List Materi</title>
</head>
<body>
    <h1>List Materi</h1>
    <ul>
        <li><a href="detailMateri.php?materi=penalaran_kuantitatif">Penalaran Kuantitatif</a></li>
        <li><a href="detailMateri.php?materi=penalaran_matematika">Penalaran Matematika</a></li>
        <li><a href="detailMateri.php?materi=literasi_indonesia">Literasi Bahasa Indonesia</a></li>
        <li><a href="detailMateri.php?materi=literasi_inggris">Literasi Bahasa Inggris</a></li>
        <li><a href="detailMateri.php?materi=penalaran_umum">Penalaran Umum</a></li>
    </ul>
    <p><a href="homePage.php">Back</a></p>

    <form action="logout.php" method="POST" style="display:inline;">
    <button type="submit" class="logout-button">Logout</button>
</form>

</body>
</html>
