<?php
include 'koneksi.php';
$id= $_GET['id'];
$hapusbuku=mysqli_query($koneksi,"delete from buku where kode_buku='$id'");
if ($hapusbuku)
{
	header('location:admin.php');
}
?>