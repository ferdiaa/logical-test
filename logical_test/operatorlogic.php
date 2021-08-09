<?php 

$angka1=7;
$angka2=2;
$i=$angka2;
while ($i<= $angka1) {
	if (($i % 2) == 0) {
		echo $angka1.":".$angka2."=".$i+1;
	}
	$i=$i+2;
}
?>