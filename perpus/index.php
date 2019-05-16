<html>
	<head>
		<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
<div class="container">
	<!--Search-->
	<form action="" method="GET">
		<input type="text" name="search" class="form-control"/>
		<button type="submit" class="btn btn-primary">Search</button>
	</form>

<?php 
include 'koneksi.php';
$no = 1;
if(isset($_GET['search']))
{
	$search = $_GET['search'];
	$data = mysqli_query($koneksi,"select * from buku where judul_buku like '%".$search."%'");				
}
else
{
	$data = mysqli_query($koneksi,"select * from buku");		
}

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
