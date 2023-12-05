<?php 
function addService($libel,$category,$price){
    global $connection;
  
    $libel = $_POST['libel'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stmt=mysqli_prepare($connection,"INSERT INTO services(libel,category,price) Values(?,?,?)");
    mysqli_stmt_bind_param($stmt,'ssd',$libel,$category,$price);
    return mysqli_stmt_execute($stmt);
}

?>