<?php 
function getServices(){
    global $connection;
    $sql = "SELECT * FROM services";
    return $query = mysqli_query($connection, $sql);
}

function getServicesById($id){
    global $connection;
    $id=$_GET['id'];
    $sql="SELECT *
    FROM services 
    WHERE id='$id'";
    return $query=mysqli_query($connection,$sql);
}


?>