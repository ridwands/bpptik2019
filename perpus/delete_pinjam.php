<?php
include 'koneksi.php';
$id = $_GET['id'];

	$hapuspinjam=mysqli_query($koneksi,"delete from peminjaman where id_anggota='$id'");
		if ($hapuspinjam)
		{
			header('location:admin.php');
		}
?>
