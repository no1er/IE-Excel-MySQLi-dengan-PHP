<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
 
// update data ke database
mysqli_query($koneksi,"update data_pegawai set nama='$nama', alamat='$alamat', telepon='$telepon' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>