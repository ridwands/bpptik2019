<?php
include 'koneksi.php';
$id = $_GET['id'];
$hapusanggota=mysqli_query($koneksi,"delete from anggota where id_anggota='$id'");
if ($hapusanggota)
	{
		header('location:admin.php');
	}

?>