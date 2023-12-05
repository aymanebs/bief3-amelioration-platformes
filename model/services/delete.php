<?php

function deleteServices($id){
    global $connection;
    $requete="DELETE FROM services WHERE id=$id";
    return $query=mysqli_query($connection,$requete);
}


?>