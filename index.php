<?php

// Prijungiam failą saugantį duomenų bazės prisijungimo duomenis ir galbūt kitus parametrus
include 'config.php';

// Prijungiam failą saugantį visas mūsų php funkcijas
include 'functions.php';

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db);

// Check connection
if (!$conn) {
	// jei prisijungti nepavyko
	alert(FALSE, mysqli_connect_error());
    die();
} else {
	// jei prisijungi pavyko
	mysqli_set_charset($conn, "utf8");
}
 
// tikriname ar iš formos nėra perduodami duomenys įrašymui
if (isset($_POST['name']) && $_POST['name'] != null) {
	add_product($conn);
}

// gauname visas prekes
$products = get_products($conn);

// atsijungiame
mysqli_close($conn);


// Iškviečiam template (šabloną), kuriame atvaizduosim rezultatus
include 'templates/main.php';