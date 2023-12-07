<?php

function searchCustomers($search){
    global $connection;
    $sql="SELECT id,username,name,email,phone,adress,created_at 
    FROM users
    WHERE role='Client' and name LIKE '%$search%'";
    return $query=mysqli_query($connection,$sql);
    
}
?>