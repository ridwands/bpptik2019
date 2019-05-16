<html>
<head>
	<script>
	function myFunction() 
	{
	  	var table = document.getElementById("myTable");
	 	var row = table.insertRow(1);
	 	var cell1 = row.insertCell(0);
	  	var cell2 = row.insertCell(1);
	  	cell1.innerHTML = "<input type='text' name='nama[]' required/>";
	  	cell2.innerHTML = "<input type='text' name='nilai[]' required/>";
	}
	</script>
	<style>
		table, td {
  					border: 1px solid black;
				}
	</style>
</head>
	<form action="rekap.php" method="post">
		<table id="myTable">
			<tr>
				<td>Nama</td>
				<td>Nilai</td>
			</tr>
			<tr>
				<td><input type="text" name="nama[]" required /></td>
				<td><input type="text" name="nilai[]" required/></td>
			</tr>
		</table>
				<input type="submit" value="rekap" name="submit"/>
	</form>
<button onclick="myFunction()">Tambah Baris</button>