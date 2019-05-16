<?php
	include 'koneksi.php';
	$id=$_POST['id'];
	$kode_buku=$_POST['kode_buku'];
	$judul_buku=$_POST['judul_buku'];
	$pengarang_buku=$_POST['pengarang_buku'];
	$jumlah_buku=$_POST['jumlah_buku'];
	$penerbit_buku=$_POST['penerbit_buku'];
if (isset($_POST['submit']))
{

	if(mysqli_query($koneksi,"update buku set kode_buku='$kode_buku',judul_buku='$judul_buku',pengarang_buku='$pengarang_buku', jumlah_buku='$jumlah_buku', penerbit_buku='$penerbit_buku' where kode_buku='$id'"))
	{
		header('location:admin.php');
	}
}
?>