<?php

require __DIR__ . '/../../../db/connect.php';
require __DIR__ . '/../../../model/orders/delete.php';
$id=$_GET['id'];
$result=deleteOrders($id);
if($result){
     echo '<script>
    alert("Deleted successfully"); 
    window.location.href = "../../../../view/admin/orders/list.php";
    </script>';
}


?>