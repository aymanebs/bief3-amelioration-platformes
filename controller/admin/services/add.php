<?php 

$succes=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
require __DIR__ . '/../../../db/connect.php';
$libel = "";
$category = "";
$price = "";


 $libel = $_POST['libel'];
 $category = $_POST['category'];
 $price = $_POST['price'];


//  require __DIR__ . '../../../db/connect.php';



//  $requete = "INSERT INTO services (libel,category,price)" .
//  "VALUES('$libel','$category','$price')";
// $query=mysqli_query($connection,$requete);

$stmt=mysqli_prepare($connection,"INSERT INTO services(libel,category,price) Values(?,?,?)");
mysqli_stmt_bind_param($stmt,'ssd',$libel,$category,$price);
mysqli_stmt_execute($stmt);

if ($stmt) {
 $succes++;

}
else{
    die(mysqli_error($connection));
}

}

?>