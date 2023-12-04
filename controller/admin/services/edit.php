<?php 


$succes="";


// Affichage des informations dans les input formulaire
    
    if(isset($_GET["id"])){
        require __DIR__ . '/../../../db/connect.php';
    $id=$_GET['id'];
    $sql="SELECT *
    FROM services 
    WHERE id='$id'";
    $query=mysqli_query($connection,$sql);
    $row=mysqli_fetch_assoc($query);
    $libel = $row["libel"];
    $category = $row["category"];
    $price = $row["price"];
    
    
    }
    
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST["id"];
    $libel = $_POST["libel"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    

    // $requete ="UPDATE services 
    // SET libel='$libel',category='$category',price='$price'";
    // $query=mysqli_query($connection,$requete);
    $stmt=mysqli_prepare($connection,"UPDATE services SET libel=?,category=?,price=? WHERE id='$id' ");
    mysqli_stmt_bind_param($stmt,'ssd',$libel,$category,$price);
    mysqli_stmt_execute($stmt);
    if ($stmt) {
        $succes++;
        header("location:list.php");
       }
       else{
           die(mysqli_error($connection));
       }

   

}
?>