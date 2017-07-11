<?php


function alert($is_success = TRUE, $text = "") {
	if($is_success) {
		$msg = '<div class="alert alert-success" role="alert"><strong> Well done!</strong> '.$text.'</div>';
	} else {
		$msg = '<div class="alert alert-danger" role="alert"><strong> Oh snap!</strong> '.$text.'</div>';
	}
}


function add_product($conn) {
	// gaunam paveiksliuko pletini (jpg, gif, png ar kt)
	$file_extension = explode(".", $_FILES['image']['name'])[1];

	//susikonstruojam nauja unikalu failo pavadinima
	$image_filename = $_POST['name'] . "_" . $_POST['brand'] . "_" . rand(11111, 99999) . "." . $file_extension;

	// bandom kelti i nurodyta vieta serveryje is TEMP direktorijos
	if (move_uploaded_file($_FILES['image']["tmp_name"], "product_images/" . $image_filename)) {
       alert(TRUE, "The file ". basename( $_FILES['image']["name"]). " has been uploaded.");
    } else {
       alert(FALSE, "Sorry, there was an error uploading your file.");
    }

    // suformuojama užklausa naujai preke įrašyti
    $sql = "INSERT INTO products (group, name, brand, description, price, weight, image) VALUES (
    '".$_POST['group']."', 
    '".$_POST['name']."', 
    '".$_POST['brand']."', 
    '".$_POST['description']."',
    '".$_POST['price']."',
    '".$_POST['weight']."',
    '".$image_filename."'
    )"; 

    // ivykdome užklausą
	if (mysqli_query($conn, $sql)) {
			alert(true, "Product added.");
	} else {
		alert(false, "Product not added.");
	}

	}


function get_products($conn) {

    // suformuojam užklausą visiems įrašams gauti
    $sql = "SELECT * FROM products";

    // įvykdom užklausą
    $result = mysqli_query($conn, $sql);

    // susikuriame prekių array, kuriame laikysime prekes
    $products = [];

    // jei mysql atsakyme eilučių yra daugiau nei viena...
    if (mysqli_num_rows($result) > 0) {
        // kol yra eilučių su duomenimis...
        while($row = mysqli_fetch_assoc($result)) {
            // tas eilutes surašome į masyvą.
            array_push($products, $row);
        }
    } else {
        alert(FALSE, "0 results found");
    }

    // gražinam rezultatus
    return $products;
}

function delete_product($conn, $id) {
	
    // suformuojama užklausa preke istrinti
    $sql = "DELETE FROM products WHERE id = ".$id;
    

    // ivykdome užklausą
	if (mysqli_query($conn, $sql)) {
			alert(true, "Product deleted.");
	} else {
		alert(false, "Product not deleted.");
	}

/* function add_group($conn) {
    // suformuojama užklausa naujai grupei įrašyti
    $sql = "INSERT INTO products_group (group) VALUES (
    '".$_POST['group']."'
    )"; 

    // ivykdome užklausą
    if (mysqli_query($conn, $sql)) {
            alert(true, "Group added.");
    } else {
        alert(false, "Group not added.");
    }

    }


function get_group($conn) {

    // suformuojam užklausą visiems įrašams gauti
    $sql = "SELECT * FROM products_group";

    // įvykdom užklausą
    $result_g = mysqli_query($conn, $sql);

    // susikuriame prekių array, kuriame laikysime prekes
    $products_group = [];

    // jei mysql atsakyme eilučių yra daugiau nei viena...
    if (mysqli_num_rows($result_g) > 0) {
        // kol yra eilučių su duomenimis...
        while($row_g = mysqli_fetch_assoc($result_g)) {
            // tas eilutes surašome į masyvą.
            array_push($products_group, $row_g);
        }
    } else {
        alert(FALSE, "0 results found");
    }

    // gražinam rezultatus
    return $products_group;
}

function delete_group($conn, $id) {
    
    // suformuojama užklausa preke istrinti
    $sql = "DELETE FROM products_group WHERE id = ".$id;
    

    // ivykdome užklausą
    if (mysqli_query($conn, $sql)) {
            alert(true, "Group deleted.");
    } else {
        alert(false, "Group not deleted.");
    }
}
*/
}