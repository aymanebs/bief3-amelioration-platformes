<?php
$user=0;
$succes=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/../../db/connect.php';

    $username =htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirmation=htmlspecialchars($_POST['password_confirmation']);
    $role = htmlspecialchars($_POST['role']);
    $name = htmlspecialchars($_POST['name']);
    $adress = htmlspecialchars($_POST['adress']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
//   form validation
    if(empty(trim($username))){
        // die('name is required');
    //     echo'<div class="alert alert-info" role="alert">
    //     name is required
    //   </div>';
      

    }
    // var_dump($usename);
    // if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
    //     die('invalid email');
    // }
    // if(strlen($password)<4){
    //     die('Password must be at least 4 characters');
    // }
    // if(! preg_match("/[a-z]/i",$password)){
    //     die('Password must contain at least one letter');
    // }
    // if(! preg_match("/[0-9]/",$password)){
    //     die('Password must contain at least one number');
    // }
    // if($password!== $password_confirmation){
    //     die('Passwords dont match');
    // }
    $password=password_hash($password,PASSWORD_DEFAULT);
   


    $sql = "SELECT * FROM users WHERE username='$username';";
    $query = mysqli_query($connection, $sql);

    if ($query) {
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            $user++;
        } else {
            $sql = "INSERT INTO users (username, password, role, name, adress, phone, email)
                VALUES ('$username', '$password', '$role','$name','$adress','$phone','$email')";

            $query = mysqli_query($connection, $sql);

          
            if ($query) {
                $succes++;
            }
            else{
                die(mysqli_error($connection));
            }
                
        }
    }
    }
  
?>
