<?php

function deleteOrders($id){
    global $connection;
    $requete="DELETE FROM orders WHERE id=$id";
    return $query=mysqli_query($connection,$requete);
}


?>