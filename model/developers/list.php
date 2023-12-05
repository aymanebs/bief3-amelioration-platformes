<?php 
    function getDevelopers(){
    global $connection;
    $sql = "SELECT id,username,name,email,phone,adress,created_at 
    FROM users
    WHERE role='Developer' ";
    return $query = mysqli_query($connection, $sql);
}

    function getDevelopersById($id){
    global $connection;
    
    $sql="SELECT id,username,name,email,phone,adress,role
    FROM users
    WHERE id='$id' ";
    return $query=mysqli_query($connection,$sql);
}


?>
