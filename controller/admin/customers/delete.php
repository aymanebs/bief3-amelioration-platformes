<?php

require __DIR__ . "/../../../db/connect.php";
$id=$_GET['id'];
$requete="DELETE FROM users WHERE id=$id";
$query=mysqli_query($connection,$requete);
if(isset($requete)){
     echo '<script>
    alert("Deleted successfully"); 
    window.location.href = "../../../../view/admin/customers/list.php";
    </script>';
}


?>