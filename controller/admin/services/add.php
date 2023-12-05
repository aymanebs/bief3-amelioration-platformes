<?php 

$succes=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
require __DIR__ . '/../../../db/connect.php';
require __DIR__ . '/../../../model/services/add.php';
$libel = "";
 $category = "";
$price = "";

if (addService($libel,$category,$price)) {
 $succes++;

}
else{
    die(mysqli_error($connection));
}

}

?>