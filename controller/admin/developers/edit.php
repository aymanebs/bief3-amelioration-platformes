<?php 

require __DIR__ . '/../../../db/connect.php';
$succes="";

// Affichage des informations dans les input formulaire
    

    if(isset($_GET["id"])){
    require __DIR__ . "/../../../db/connect.php";
    require __DIR__ . '/../../../model/developers/list.php';
    require __DIR__ . '/../../../model/developers/edit.php';
    $id=$_GET['id'];
    $result=getDevelopersById($id);
    $row=mysqli_fetch_assoc($result);
    $username = $row["username"];
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $adress = $row["adress"];
    $role = $row["role"];
    
    }
    
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST["id"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];
    $role = $_POST["role"];
     
    // $requete ="UPDATE users 
    // SET name='$name',username='$username',email='$email',phone='$phone',adress='$adress',role='$role'
    // WHERE id='$id' ";
    // $query=mysqli_query($connection,$requete);
   
    
    if(updateDevelopers($id, $name, $username, $email, $phone, $adress, $role)){
        echo '<script>
       alert("Updated successfully"); 
       window.location.href = "../../../../view/admin/developers/list.php";
       </script>';
   }

    // header("location:list.php");

}
?>