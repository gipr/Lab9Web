<?php
include_once 'Koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM data_barang WHERE id_barang= '{$id}'";
$result = mysqli_query($conn, $sql);
header('location:home.php');
?>