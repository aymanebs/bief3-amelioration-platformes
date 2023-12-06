<?php
$login=0;
$invalid=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/../../db/connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM users WHERE username='$username';";
    $query = mysqli_query($connection, $sql);
    $row=mysqli_fetch_assoc($query);
    $query = mysqli_query($connection, $sql);

if (!$query) {
    die("Query failed: " . mysqli_error($connection));
}

    if ($query) {
        $num = mysqli_num_rows($query);
        if (password_verify($password,$row['password'])) {
            $login++;
            session_start();
            $_SESSION['username']=$username;

            if($row["role"]=="Admin"){
              header('LOCATION:/../view/admin/customers/list.php');
            }
            else if($row["role"]=="Developer"){
              header('LOCATION:/../view/developers/customers/list.php');
            }
            // else{
            //   header('LOCATION:/../view/client/customers/list.php');
            // }

        } 
        else{
            $invalid++;
        }
        // else {
        //     $sql = "INSERT INTO users (username, password)
        //         VALUES ('$username', '$password')";

        //     $query = mysqli_query($connection, $sql);

          
        //     if ($query) {
        //         $succes++;
        //     }
        //     else{
        //         die(mysqli_error($connection));
        //     }
                
        // }
    }
    }
?>