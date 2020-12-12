<?php
$koneksi = mysqli_connect("localhost", "root", "", "prakwebmgg6");
if(!$koneksi){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>