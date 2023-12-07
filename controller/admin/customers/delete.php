<?php
// session_start();
require __DIR__ . "/../../../db/connect.php";
require __DIR__ . "/../../../model/customers/delete.php";
$id=$_GET['id'];
// deleteCustomers($id);
if((deleteCustomers($id))){
     echo '<script>
    alert("Deleted successfully"); 
    window.location.href = "../../../../view/admin/customers/list.php";
    </script>';
}


?>