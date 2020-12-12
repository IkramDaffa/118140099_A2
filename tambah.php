<?php
include "koneksi.php";
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];

$sintaks = "insert into mahasiswa
values ('$nim', '$nama', '$prodi', '$angkatan')";

$urut = mysqli_query($koneksi, $sintaks);
?>