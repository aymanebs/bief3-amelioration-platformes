<?php 


$succes="";


// Affichage des informations dans les input formulaire
    
    if(isset($_GET["id"])){
    require __DIR__ . '/../../../db/connect.php';
    require __DIR__ . '/../../../model/services/list.php';
    require __DIR__ . '/../../../model/services/edit.php';
    $id=$_GET['id'];
    $result=getServicesById($id);
    $row=mysqli_fetch_assoc($result);
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
    $update=updateServices($id,$libel,$category,$price);
    if ($update) {
        $succes++;
        header("location:list.php");
       }
       else{
           die(mysqli_error($connection));
       }

   

}
?>