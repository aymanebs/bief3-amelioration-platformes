<?php 
$succes="";
// Affichage des informations dans les input formulaire
    
    if(isset($_GET["id"])){
    require __DIR__ . '/../../../db/connect.php';
    require __DIR__ . '/../../../model/orders/list.php';
    require __DIR__ . '/../../../model/orders/edit.php';
    $id=$_GET['id'];
    $result=getOrderyId($id);
    $row=mysqli_fetch_assoc($result);
    $service_id = $row["service_id"];
    $team_id = $row["team_id"];
    $user_id = $row["user_id"];
    
    }
    
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST["id"];
    $service_id = $_POST["service_id"];
    $team_id = $_POST["team_id"];
    $user_id = $_POST["user_id"];
    

  
    if(updateOrder($id,$service_id,$team_id,$user_id)){
    echo '<script>
    alert("Updated successfully"); 
    window.location.href = "../../../../view/admin/orders/list.php";
    </script>';
    }
}
   


?>