<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$id_digantikan = $_POST['id_digantikan'] ?? NULL;

$stmt = $koneksi->prepare("INSERT INTO penerima_bantuan (nama, nik, alamat, status, id_digantikan) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $nama, $nik, $alamat, $status, $id_digantikan);
$stmt->execute();

header("Location: index.php");
exit;
?>
