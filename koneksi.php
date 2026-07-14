<?php
$host = getenv('mysql');
$user = getenv('root');
$pass = getenv('LWfTBEhhjuTvIPJHrtJaWaXdkLRNvWfw');
$db   = getenv('railway');
$port = getenv('3306');

try {
    // Kita pakai pa9rameter port karena Railway tidak pakai port default standar
    $koneksi = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
    die();
}
?>
