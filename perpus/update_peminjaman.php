<?php
	include 'koneksi.php';
	$id=$_POST['id'];
	$kode_buku=$_POST['kode_buku'];
	$nama=$_POST['nama'];
	$id_anggota=$_POST['id_anggota'];
	$tgl_pinjam=$_POST['tgl_pinjam'];
	$tgl_kembali=$_POST['tgl_kembali'];
	$lama_pinjam=$_POST['lama_pinjam'];
	$keadaan_buku=$_POST['keadaan_buku'];
if (isset($_POST['submit']))
{

	if(mysqli_query($koneksi,"update peminjaman set id_anggota='$id_anggota',kode_buku='$kode_buku',tgl_kembali='$tgl_kembali', lama_pinjam='$lama_pinjam', keadaan_buku='$keadaan_buku',tgl_pinjam='$tgl_pinjam', nama_anggota='$nama' where id_anggota='$id'"))
	{
		header('location:admin.php');
	}
}
?>