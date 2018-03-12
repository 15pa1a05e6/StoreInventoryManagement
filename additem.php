<?php
  //header('Access-Control-Allow-Origin: *');
  require_once('connect.php');
  //$json_array = json_decode(data);
  $name = $_POST["name"];
  $quantity = $_POST["quantity"];
  $price = $_POST["price"];
  echo($name);
  echo($quantity);
  $sql = "INSERT INTO `data`( `productname`, `quantity`, `price`) VALUES ('$name','$quantity','$price')";
 // $sql = "INSERT INTO `data`( `productname`, `quantity`, `price`) 
 // VALUES ('".$json_array['name']."','".$json_array['quantity']."','".$json_array['price']."')";
  $res = mysqli_query($connection,$sql);
  if(! $res ) {
        echo "Please check your data";
    }
    else
        echo "Entered data successfully\n";

?>


