<?php
// session_start();
require __DIR__ . '/../../../db/connect.php';
require __DIR__ . '/../../../model/developers/delete.php';
$id=$_GET['id'];
$result=deleteDevelopers($id);
if($result){
     echo '<script>
    alert("Deleted successfully"); 
    window.location.href = "../../../../view/admin/developers/list.php";
    </script>';
}


?>