<?php
$nama = $_POST["nama"];
$nilai = $_POST["nilai"];
$mean=array_sum($nilai)/count($nilai);
if(isset($_POST['submit'])) 
{
	$max = max($nilai);
	for ($i=0; $i < count($nilai); $i++) 
	{ 
    	if ($nilai[$i] == $max) 
    	{ 
     		$nama_max = $i;
   		}
	}
	echo "Rata -Rata Nilai Adalah ".$mean;
	echo "<br>";
	echo "Nilai Tertinggi Adalah ".$max." Di Dapat Oleh ".$nama[$nama_max];
}




?>