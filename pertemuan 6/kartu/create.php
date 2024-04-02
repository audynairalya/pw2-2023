<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$kartu = new Kartu($db);

if(isset($_POST['add'])){
    $kartu -> kode = $_POST['kode'];
    $kartu -> nama = $_POST['nama'];
    $kartu -> diskon = $_POST['diskon'];
    $kartu -> iuran = $_POST['iuran'];

    $kartu -> store(); 
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding New Data</title>
</head>
<body>
    <h1>Adding new Data</h1>
    <form method="POST" action="">
        <label for="id">ID : </label>
        <input type="number" name="id" required>
        <br>
        <label for="kode">Code : </label>
        <input type="text" name="kode" required>
        <br>
        <label for="nama">Name : </label>
        <input type="text" name="nama" required>
        <br>
        <label for="diskon">Discount : </label>
        <input type="number" name="diskon" required>
        <br>
        <label for="iuran">Dues : </label>
        <input type="number" name="iuran" value="iuran">
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>