<?php
include 'koneksi.php';

//Tambah Anggota
if (isset($_POST['submitanggota']))
{
	$id_anggota=$_POST['id_anggota'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$status=$_POST['status'];
	$tambahanggota=mysqli_query($koneksi,"insert into anggota values ('$id_anggota','$nama','$alamat','$status')");
	if ($tambahanggota)
	{
		header('location:admin.php');
	}

}

//Tambah Buku
if (isset($_POST['submitbuku']))
{
	$kode_buku=$_POST['kode_buku'];
	$judul_buku=$_POST['judul_buku'];
	$pengarang_buku=$_POST['pengarang_buku'];
	$jumlah_buku=$_POST['jumlah_buku'];
	$penerbit_buku=$_POST['penerbit_buku'];
	$tambahbuku=mysqli_query($koneksi,"insert into buku values ('$kode_buku','$judul_buku','$pengarang_buku','$jumlah_buku','$penerbit_buku')");
	if ($tambahbuku)
	{
		header('location:admin.php');
	}
}

//Tambah Peminjaman
if (isset($_POST['submit']))
{
	$kode_buku=$_POST['kode_buku'];
	$nama=$_POST['nama'];
	$id_anggota=$_POST['id_anggota'];
	$tgl_pinjam=$_POST['tgl_pinjam'];
	$tgl_kembali=$_POST['tgl_kembali'];
	$lama_pinjam=$_POST['lama_pinjam'];
	$keadaan_buku=$_POST['keadaan_buku'];
	$tambahpeminjaman=mysqli_query($koneksi," insert into peminjaman values ('$id_anggota','$kode_buku','$tgl_kembali','$lama_pinjam','$keadaan_buku','$tgl_pinjam','$nama')");
	if ($tambahpeminjaman)
	{
		header('location:admin.php');
	}
	
}
?>