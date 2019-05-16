
<?php
include 'koneksi.php';
$id=$_POST['id'];
	$id_anggota=$_POST['id_anggota'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$status=$_POST['status'];
if (isset($_POST['submit']))
{

	if(mysqli_query($koneksi,"update anggota set id_anggota='$id_anggota', nama='$nama', alamat='$alamat', status='$status' where id_anggota='$id'"))
	{
		header('location:admin.php');
	}
}

?>