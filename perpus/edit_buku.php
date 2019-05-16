<html>
	<head>
		<title>Admin Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
	<div class="container">

<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_buku = mysqli_query($koneksi,"select * from buku where kode_buku='$id'");
while($buku = mysqli_fetch_array($query_buku)){
?>
<p class="btn btn-success" align="center">Edit Data buku</p>
	<form action="update_buku.php" method="POST">
		<input type="hidden" class="form-control" value="<?php echo $id?>" name="id">
 		<label>Kode Buku</label>
 		<input type="text" class="form-control" value="<?php echo $buku['kode_buku']?>" name="kode_buku">
 		<label>Judul Buku</label>
 		<input type="text" class="form-control" value="<?php echo $buku['judul_buku']?>" name="judul_buku">
 		<label>Pengarang Buku</label>
 		<input type="text" class="form-control" value="<?php echo $buku['pengarang_buku']?>" name="pengarang_buku">
 		<label>Jumlah Buku</label>
 		<input type="text" class="form-control" value="<?php echo $buku['jumlah_buku']?>" name="jumlah_buku">
 		<label>Penerbit Buku</label>
 		<input type="text" class="form-control" value="<?php echo $buku['penerbit_buku']?>" name="penerbit buku">
 		<br>
 		<input type="submit" class="btn btn-success" name="submit" value="Submit"/>
 	</form>
	<?php }?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
