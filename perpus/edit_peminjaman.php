<html>
	<head>
		<title>Admin peminjaman</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
	<div class="container">

<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_peminjaman = mysqli_query($koneksi,"select * from peminjaman where id_anggota='$id'");
$nomor = 1;
while($peminjaman = mysqli_fetch_array($query_peminjaman)){
?>
<p class="btn btn-success" align="center">Edit Data peminjaman</p>
	<form action="update_peminjaman.php" method="POST">
		<input type="hidden" class="form-control" value="<?php echo $id?>" name="id">
 		<label>ID Anggota</label>
 		<input type="text" class="form-control" value="<?php echo $peminjaman['id_anggota']?>" name="id_anggota">
 		<label>Nama Anggota</label>
 		<input type="text" class="form-control"  value="<?php echo $peminjaman['nama_anggota']?>" name="nama">
 		<label>Kode Buku</label>
 		<input type="text"  value="<?php echo $peminjaman['kode_buku']?>" class="form-control" name="kode_buku">
 		<label>Tanggal Pinjam</label>
 		<input type="text" class="form-control"  value="<?php echo $peminjaman['tgl_pinjam']?>" name="tgl_pinjam">
 		<label>Tanggal Kembali</label>
 		<input type="text"  value="<?php echo $peminjaman['tgl_kembali']?>" class="form-control" name="tgl_kembali">
 		<label>Lama Pinjam</label>
 		<input type="text"  value="<?php echo $peminjaman['lama_pinjam']?>" class="form-control" name="lama_pinjam">
 		<label>Keadaan Buku</label>
 		<input type="text"  value="<?php echo $peminjaman['keadaan_buku']?>" class="form-control" name="keadaan_buku">
 		<br>
 		<input type="submit" class="btn btn-success" name="submit" value="Submit"/>
 	</form>
	<?php }?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
