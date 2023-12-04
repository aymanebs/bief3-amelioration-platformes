<?php 


// Affichage des informations dans les input formulaire
    
    if(isset($_GET["id"])){
    require __DIR__ . "/../../../db/connect.php";
    $id=$_GET['id'];
    $sql="SELECT id,username,name,email,phone,adress,role
    FROM users
    WHERE id='$id' ";
    $query=mysqli_query($connection,$sql);
    $row=mysqli_fetch_assoc($query);
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
    $stmt=mysqli_prepare($connection,"UPDATE users SET name=?,username=?,email=?,phone=?,adress=?,role=? WHERE id='$id' ");
    mysqli_stmt_bind_param($stmt,'ssssss',$name,$username,$email,$phone,$adress,$role);
    mysqli_stmt_execute($stmt);


    header("location:list.php");

}
?>