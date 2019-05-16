<html>
	<head>
		<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
<div class="container">

	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Tambah Anggota
  	</button>
	<div class="collapse" id="collapseExample">
  	<div class="card card-body">
 	<form action="tambah.php" method="POST">
 		<label>ID Anggota</label>
 		<input type="text" class="form-control" name="id_anggota">
 		<label>Nama</label>
 		<input type="text" class="form-control" name="nama">
 		<label>Alamat</label>
 		<input type="text" class="form-control" name="alamat">
 		<label>Status</label>
 		<input type="text" class="form-control" name="status">
 		<br>
 		<input type="submit" class="btn btn-success" name="submitanggota" value="Submit"/>
 	</form>
  	</div>
	</div>

<?php 
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from anggota");		
?>
	<!--Table Anggota-->
	<table border="2" class="table">
		
  		<thead>

		    <tr>
		      <th scope="col">ID Anggota</th>
		      <th scope="col">Nama Anggota</th>
		      <th scope="col">Alamat Anggota</th>
		      <th scope="col">Status Anggota</th>
		      <th scope="col">Edit</th>
		      <th scope="col">Delete</th>
		    </tr>
  		</thead>
  		<tbody>
  			<?php while($anggota = mysqli_fetch_array($data)){ ?>
		    <tr>
		      <td><?php echo $anggota['id_anggota'];?></td>
		      <td><?php echo $anggota['nama'];?></td>
		      <td><?php echo $anggota['alamat'];?></td>
		      <td><?php echo $anggota['status'];?></td>
		      <td><a class="btn btn-warning" href="edit.php?id=<?php echo $anggota['id_anggota'];?>">Edit</a></td>
		     
		     <td><a class="btn btn-danger" href="delete.php?id=<?php echo $anggota['id_anggota'];?>">Hapus</a></td>
		     </tr>
		     <?php } ?>
  		</tbody>
	</table>

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#buku" aria-expanded="false" aria-controls="collapseExample">
    Tambah Buku
  	</button>
	<div class="collapse" id="buku">
  	<div class="card card-body">
 	<form action="tambah.php" method="POST">
 		<label>Kode Buku</label>
 		<input type="text" class="form-control" name="kode_buku">
 		<label>Judul Buku</label>
 		<input type="text" class="form-control" name="judul_buku">
 		<label>Pengarang Buku</label>
 		<input type="text" class="form-control" name="pengarang_buku">
 		<label>Jumlah Buku</label>
 		<input type="text" class="form-control" name="jumlah_buku">
 		<label>Penerbit Buku</label>
 		<input type="text" class="form-control" name="penerbit buku">
 		<br>
 		<input type="submit" class="btn btn-success" name="submitbuku" value="Submit"/>
 	</form>
  	</div>
	</div>
<!--Buku-->
<?php 
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from buku");		
?>
	<!--Table Buku-->
	<table border="2" class="table">
		
  		<thead>

		    <tr>
		      <th scope="col">Kode Buku</th>
		      <th scope="col">Judul Buku</th>
		      <th scope="col">Pengarang Buku</th>
		      <th scope="col">Jumlah Buku</th>
		      <th scope="col">Penerbit Buku</th>
		      <th scope="col">Edit</th>
		      <th scope="col">Delete</th>
		    </tr>
  		</thead>
  		<tbody>
  			<?php while($buku = mysqli_fetch_array($data)){ ?>
		    <tr>
		      <td><?php echo $buku['kode_buku'];?></td>
		      <td><?php echo $buku['judul_buku'];?></td>
		      <td><?php echo $buku['pengarang_buku'];?></td>
		      <td><?php echo $buku['jumlah_buku'];?></td>
		      <td><?php echo $buku['penerbit_buku'];?></td>
		      <td><a class="btn btn-warning" href="edit_buku.php?id=<?php echo $buku['kode_buku'];?>">Edit</a></td>
		     
		     <td><a class="btn btn-danger" href="delete_buku.php?id=<?php echo $buku['kode_buku'];?>">Hapus</a></td>
		     </tr>
		     <?php } ?>
  		</tbody>
	</table>

<!--Form Peminjaman-->
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#minjem" aria-expanded="false" aria-controls="collapseExample">
    Tambah Peminjaman
  	</button>
	<div class="collapse" id="minjem">
  	<div class="card card-body">
 	<form action="tambah.php" method="POST">
 		<label>ID Anggota</label>
 		<input type="text" class="form-control" name="id_anggota">
 		<label>Nama Anggota</label>
 		<input type="text" class="form-control" name="nama">
 		<label>Kode Buku</label>
 		<input type="text" class="form-control" name="kode_buku">
 		<label>Tanggal Pinjam</label>
 		<input type="text" class="form-control" name="tgl_pinjam">
 		<label>Tanggal Kembali</label>
 		<input type="text" class="form-control" name="tgl_kembali">
 		<label>Lama Pinjam</label>
 		<input type="text" class="form-control" name="lama_pinjam">
 		<label>Keadaan Buku</label>
 		<input type="text" class="form-control" name="keadaan_buku">
 		<br>
 		<input type="submit" class="btn btn-success" name="submit" value="Submit"/>
 	</form>
  	</div>
	</div>
<!--Peminjaman-->
<?php 
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from peminjaman");		
?>
	<!--Table Peminjaman-->
	<table border="2" class="table">
		
  		<thead>

		    <tr>
		      <th scope="col">ID Anggota</th>
		      <th scope="col">Nama Anggota</th>
		      <th scope="col">Kode Buku</th>
		      <th scope="col">Tgl Pinjam</th>
		      <th scope="col">Tgl Kembali</th>
		      <th scope="col">Lm Pinjam</th>
		       <th scope="col">Keadaan Buku</th>
		      <th scope="col">Edit</th>
		      <th scope="col">Delete</th>
		    </tr>
  		</thead>
  		<tbody>
  			<?php while($peminjaman = mysqli_fetch_array($data)){ ?>
		    <tr>
		      <td><?php echo $peminjaman['id_anggota'];?></td>
		      <td><?php echo $peminjaman['nama_anggota'];?></td>
		      <td><?php echo $peminjaman['kode_buku'];?></td>
		      <td><?php echo $peminjaman['tgl_pinjam'];?></td>
		      <td><?php echo $peminjaman['tgl_kembali'];?></td>
		      <td><?php echo $peminjaman['lama_pinjam'];?></td>
		      <td><?php echo $peminjaman['keadaan_buku'];?></td>
		      <td><a class="btn btn-warning" href="edit_peminjaman.php?id=<?php echo $peminjaman['id_anggota'];?>">Edit</a></td>
		     
		     <td><a class="btn btn-danger" href="delete_pinjam.php?id=<?php echo $peminjaman['id_anggota'];?>">Hapus</a></td>
		     </tr>
		     <?php } ?>
  		</tbody>
	</table>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
