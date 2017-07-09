<?php
// ====================== connect sql
    $conn = mysqli_connect('localhost', 'ViktorijaG', 'GardauskieneV','prekes');
 
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
// ========================== add to sql
    if(isset($_POST['submit'])){
       
        $sql = "INSERT INTO prekes2 (
        barcode,
        product_name,
        brand,
        weight,
        price,
        description)
 
        VALUES ('"
        .$_POST["input_barcode"]."','"
        .$_POST["input_name"]."','"
        .$_POST["input_brand"]."','"
        .$_POST["input_weight"]."','"
        .$_POST["input_price"]."','"
        .$_POST["input_description"]
        ."')";
}
// ================================== meta error jei dar sesijos nera
    if (mysqli_query($conn, $sql)) {
        echo "all good";
    } else {
        echo "fail again...";
    }
 
// ================== select everything from form
 
    $sql = "SELECT * FROM eshop_db";
    $result = mysqli_query($conn, $sql);
 
    $eshop_db = [];
 
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        array_push($eshop_db, $row) ;
    }
   
    } else {
        echo "0 results";
    }
 
    mysqli_close($conn);
 
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Learning SQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 
<style>
 
    @import url('https://fonts.googleapis.com/css?family=Josefin+Slab');
 
    body {
        font-family: 'Josefin Slab', serif;
        }
 
    .box {
        margin-top: 20px;
        background: SteelBlue;
        padding: 15px;
        color:white ;
        }
 
    .line{
        border-right: 1px solid #B29999;
 
    }
 
    </style>
 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                    <div class="box">
        <div class="text-center">
            <h3>Add Product</h3>
        </div>
        <form action="" method="POST">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 line">
                        <div class="form-group">
                            <label for="input_barcode">Barcode</label>
                            <input type="text" class="form-control" id="barcode" name="input_barcode" placeholder=" Enter Barcode">
                        </div>
                        <div class="form-group">
                            <label for="input_name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="input_name" placeholder=" Enter Product Name">
                        </div> 
                        <div class="form-group">
                            <label for="input_brand">Brand</label>
                            <input type="brand" class="form-control" id="input_brand" name="input_brand" placeholder=" Enter Brand">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input_weight">Weight</label>
                            <input type="weight" class="form-control" id="input_weight" name="input_weight" placeholder=" Enter Weight">
                        </div>
                        <div class="form-group">
                            <label for="input_weight">Price</label>
                            <input type="price" class="form-control" id="input_price"  name="input_price" placeholder=" Enter Price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="input_description" name="input_description" placeholder="Product Description"></textarea>
                        </div>
                        <div>
                            <button type="submit" name="submit" class="btn btn-info float-right">Send Message</button>
                        </div>
                    </div>
 
                </div>
            </div>
        </form>
    </div>
            </div>
            <div class="col-md-7">
 
<?php
echo "<table class='table table-bordered'>
        <tr>
        <th>#</th>
        <th>Barcode</th>
        <th>Product Name</th>
        <th>Brand</th>
        <th>Weight</th>
        <th>Price</th>
        <th>Description</th>
        </tr>";
    foreach ($eshop_db as $eshop) {
        echo
        "<tr>
        <td>".$eshop['#']."</td>"
        ."<td>".$eshop['barcode']."</td>"
        ."<td>".$eshop['product_name']."</td>"
        ."<td>".$eshop['brand']."</td>"
        ."<td>".$eshop['weight']."</td>"
        ."<td>".$eshop['price']."</td>"
        ."<td>".$eshop['description']."</td></tr>";
        }
echo "</table>";
 
 
?>
 
            </div>
        </div>
    </div>
 
 
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>