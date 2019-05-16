<html>
<head>
	<script>
	var angka = 1
	function myFunction() 
	{
	  	var table = document.getElementById("myTable");
	  	angka++;	
	  	//for (angka;angka<10;angka++){angka=angka}
	 	var row = table.insertRow(angka);
	 	var cell1 = row.insertCell(0);
	  	var cell2 = row.insertCell(1);
	  	var cell3 = row.insertCell(2);
	  	cell1.innerHTML = "<input type='text' name='nama[]' required/>";
	  	cell2.innerHTML = "<input type='text' name='nilai[]' required/>";
	  	cell3.innerHTML = "<button onclick='myDeleteFunction()'>Hapus Baris</button>";
	}

	function myDeleteFunction() 
	{
	angka--;
 	document.getElementById("myTable").deleteRow(angka+1);
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
				<td><button onclick="myDeleteFunction()">Hapus Baris</button></td>
			</tr>

		</table>
				<input type="submit" value="rekap" name="submit"/>
	</form>
<button onclick="myFunction()">Tambah Baris</button>