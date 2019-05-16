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
	echo "<br>";

	

	$counts = array_count_values($nilai);
	$modus = array_search(max($counts), $counts);
	echo "Modusnya Adalah ".$modus." Oleh ";
	for ($i=0; $i < count($nilai); $i++) 
	{ 
    	if ($nilai[$i] == $modus) 
    	{ 
     		echo $nama[$i]." ";
   		}
	}
	


$array =$nilai;
$array1=$nama;

$count = count($array);

for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $temp1 = $array1[$i];
            $array[$i] = $array[$j];
            $array1[$i] = $array1[$j];
            $array[$j] = $temp;
            $array1[$j] = $temp1;
        }
    }
}

echo "<br>";
$arrlength1 = count($array);
if ($arrlength1 % 2 == 0)
	{
		$b=$arrlength1/2;
		echo "Mediannya Adalah ".($array[$b]+$array[$b-1])/2;
		//echo "<br>";
		echo " Oleh ".$array1[$b];
	}
else 
    {
	$b=($arrlength1+1)/2;;
	echo "Mediannya Adalah ".$array[$b-1]." Oleh ".$array1[$b-1];	
    }
}
?>

