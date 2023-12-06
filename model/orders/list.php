<?php

function getOrders(){
    global $connection;
    $sql="SELECT * FROM orders;";
    return $query=mysqli_query($connection,$sql);

}
function getOrderyId($id){
    global $connection;
    $id=$_GET['id'];
    $sql="SELECT *
    FROM orders 
    WHERE id='$id'";
    return $query=mysqli_query($connection,$sql);
}


?>