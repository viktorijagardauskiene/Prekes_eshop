
<pre>
<?php
/* $b = ["zole", "pienas", "karve"];
$a=[5, 8, 4, 6, 3, 1];
$c = "orangutangas";
$x = 3;
*/

function get_pallet_count($aikstes_plotas, $trinkeliu_kiekis_paleteje, $trinkeles_a, $trinkeles_d) {
	$tr_s = $trinkeles_d*$trinkeles_a;
	$tr_kiekis = ceil($aikstes_plotas/$tr_s);
	$result = ceil($tr_kiekis/$trinkeliu_kiekis_paleteje);

	return $result;
}

$kiekis = get_pallet_count(5000, 500, 0.3, 0.2);
echo $kiekis;

/*
function trap_plotas($a, $b, $h) {
$s = (($a+$b)/2)*$h;
return $s;
}

$s = trap_plotas(2, 4, 3);

echo $s;



function plotas($r) {
	$s = pi()*$r*$r;
	return $s;
}
$s = plotas(2);





 if (array_search($x, $a)) {
 	echo "Yra";
 } else {
 	echo "Nera";
 }

echo "<br />";

$position_in_array = array_search($x, $a);

if ($position_in_array != false) {
	echo $position_in_array;
} else {
	echo "elementas nerastas";
}


 //$d = 1;
//if(isset($d)) {
//	unset($d);
//	echo($d);
//}

echo "<br />";

$cc = str_split($c);

print_r($a);



shuffle($a);
print_r($a);


sort($b);
print_r($b);

shuffle($b);
print_r($b);


print_r($c);
echo "<br />";
sort($cc);
print_r($cc);

shuffle($cc);
print_r($cc);
*/
?>
</pre>