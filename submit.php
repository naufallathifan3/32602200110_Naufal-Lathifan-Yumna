<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $komentar = htmlspecialchars($_POST['komentar']);
    echo "<h2>Nama: $nama</h2>";
    echo "<p>Komentar: $komentar</p>";
    echo '<a href="index.html">Back to home</a>';
}
?>
