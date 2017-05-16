<?php  

function Fibo($number) {
	// $s1 = 0;
	// $s2 = 1;
	// $s3 = "";
	// for ($i=1; $i < $number; ++$i) { 
	// 	$s3 = $s1 + $s2;
	// 	echo $s3 . " ";
	// 	$s2 = $s1;
	// 	$s1 = $s3;
	// }
	if ($number == 0 || $number == 1) {
		return 1;
	} else {
		return (Fibo($number - 2) + Fibo($number - 1));
	}
}
function Dao_chuoi($number) {
	$s = 0;
	$a = 0;
	while($number) {		
		$a = $number % 10;
		$s = $s * 10 + $a;
		$number = floor($number / 10);
	}
	return $s;
}
	//$i = "i love string";
	$i = -1235967065;
	if ($i >= 0) {
		echo Dao_chuoi($i);
	}
	else {
		$i = -$i;
		echo -Dao_chuoi($i);
	}

?>