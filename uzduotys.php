
<pre>
<?php


namu darbai: phonebook lentele id, name, prefix, number
sugeneruoti visus galimus kauno telefono numeriu, kodas 37, naudojam for cikla kad sugeneruotu numerius ir random vardus, $sql uzklausa kad idetu i duomenu baze, prisijungti prie duomenu bazes

for ciklas kuriame iterpiam i sql; 

// paskaiciuoti ar masyve yra tuscias elementas

$a = [1, 2, 3, null, 5, 4, 6];

//array_search funkcija



/*
$a = date_create("2017-07-12");
$b = date_create("2017-12-25");
echo date_diff($a, $b)->format("%R%a days")."<br />";

// date("z", mktime(0, 0, 0, 9, 1, 2017)) + 1 rodo kokie bus metu diena ta diena
// date("z") + 1 rodo kokia metu diena yra dabar (skaiciuoja nuo nulio todel ++)
// atemus gautusi kiek liko dienu iki tos datos







function format_nr($a) {
print_r(explode(" ", $a));
$b = explode(" ", $a);

if ($b[0] == "+370") {
$b[0] = "8"; 
echo "Numeris yra lietuviskas ";
} else {
	echo "Numeris yra nelietuviskas ";
}

$c = ["Salis1" => "123", "Salis2" => "321", "Salis3" => "654"];
$d = (array_search($b[0], $c)); // reikia kad parasytu kurios salies kodas yra

echo $b[0]." ".$b[1]." ".$b[2];

}

echo format_nr("+370 6AA BBBB");


$a = [
	['name'=> 'Delfi', 'url' => 'http://delfi.lt'],
	['name' => '15min', 'url' => 'http://15min.lt'],
	['name' => 'CodeAcademy', 'url' => 'http://codeacademy.lt']
];

function print_links($a) {

foreach ($a as $link) {

	echo '<a href="'.$link['url'].'">'.$link['name'].'</a><br />';
	
}
}




 $b = ["zole", "pienas", "karve"];
$a=[5, 8, 4, 6, 3, 1];
$c = "orangutangas";
$x = 3;

function get_pallet_count($aikstes_plotas, $trinkeliu_kiekis_paleteje, $trinkeles_a, $trinkeles_d) {
	$tr_s = $trinkeles_d*$trinkeles_a;
	$tr_kiekis = ceil($aikstes_plotas/$tr_s);
	$result = ceil($tr_kiekis/$trinkeliu_kiekis_paleteje);

	return $result;
}

$kiekis = get_pallet_count(5000, 500, 0.3, 0.2);
echo $kiekis;


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