<?php 

$succes=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require __DIR__ . '/../../../db/connect.php';
    require __DIR__ . '/../../../model/orders/add.php';
$service_id = "";
$team_id = "";
$user_id = "";

if (addOrder($service_id,$team_id,$user_id)) {
 $succes++;

}
else{
    die(mysqli_error($connection));
}

}

?>