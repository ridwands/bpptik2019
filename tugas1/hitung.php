<?php
$uts=$_POST["uts"];
$uas=$_POST["uas"];
$tugas=$_POST["tugas"];
$kehadiran=$_POST["kehadiran"];

if(isset($_POST['submit'])) 
{
	if ($uts > 100 || $uts < 0 || $uas > 100 || $uas < 0 || $tugas > 100 || $tugas <0 || $kehadiran > 100 || $kehadiran < 0)
	{
		echo "<script>alert('Nilai Harus 0-100');window.location.href='index.php'</script>";
	}
	$totalnilai = ($uts*30/100)+($uas*40/100)+($tugas*20/100)+($kehadiran*10/100);
	echo "Total Nilai Adalah ".$totalnilai. "<br>";
	if ($totalnilai < 55 )
	{
		echo "Indeks Adalah E";
	}
	elseif ($kehadiran < 80) 
	{
		echo "Indeks Adalah E Karena kehadiran Dibawah 80";
	}
	elseif ($totalnilai >= 55 && $totalnilai< 60)
	{
		echo "Indeks Adalah D";
	}
	elseif ($totalnilai >= 60 && $totalnilai< 70)
	{
		echo "Indeks Adalah C";
	}
	elseif ($totalnilai >= 70 && $totalnilai< 85)
	{
		echo "Indeks Adalah B";
	}
	else 
	{
		echo "Indeks Adalah A";
	}
	echo "<br>";
	echo "<button><a href='index.php'>Kembali Ke Perhitungan</a></button>";
}
?>