<?php 
function deleteDevelopers($id){
global $connection;
$requete="DELETE FROM users WHERE id=$id";
return $query=mysqli_query($connection,$requete);
}

?>