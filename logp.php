<?php
session_start();
$uemail = $_SESSION['uemail'];

if($uemail != NULL){
    session_unset();
    header("Location: /login.php");
}


include("connect.php");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if($row = $result->fetch_assoc()){


    $hashpass = $row['password'];

    if(password_verify($password, $hashpass)) {
        $_SESSION['uemail'] = $email;
        $_SESSION['uname'] = $row['name'];
        $_SESSION['usurname'] = $row['surname'];
        $_SESSION['uavatar'] = $row['avatar'];
        $_SESSION['uid'] = $row['id'];
        $_SESSION['ustatus'] = $row['status'];
        header('Location: /cabinet.php');
    } else {
        echo('Wrong password');
    }
} else {
    echo("Wrong email");
}
?>
