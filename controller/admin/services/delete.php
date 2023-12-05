<?php

require __DIR__ . '/../../../db/connect.php';
require __DIR__ . '/../../../model/services/delete.php';
$id=$_GET['id'];
// deleteServices($id);
if((deleteServices($id))){
     echo '<script>
    alert("Deleted successfully"); 
    window.location.href = "../../../../view/admin/services/list.php";
    </script>';
}


?>