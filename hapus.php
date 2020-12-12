<?php
include 'koneksi.php';

$nim = $_POST['id'];

$a = "DELETE FROM mahasiswa WHERE nim='$nim'";
$urut = mysqli_query($koneksi, $a);
?>