<html>
    <head>
        <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    </head>
<?php
    include("connect.php");
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE email='$email'";
    $result = $conn -> query($sql);
    if ($row = $result -> fetch_assoc()){
        echo("
                <b>email уже зарегистрирован</b><br>
            ");
        $conn ->close();
    } else if (isset($_FILES) && ($_FILES['avatar']['type'] == "image/png" || $_FILES['avatar']['type'] == "image/jpeg")
    && $_FILES['avatar']['error'] == 0) {

    $hashpass = password_hash($password, PASSWORD_BCRYPT);

    $destination_dir = dirname(__FILE__).'/userAvatars/'.$_FILES['avatar']['name'];
    move_uploaded_file($_FILES['avatar']['tmp_name'], $destination_dir);

    $avatar = $_FILES['avatar']['name'];

    $sql = "INSERT INTO users (`name`, `surname`, `email`, `avatar`, `password`, `status`) VALUES ('$name', '$surname', '$email', '$avatar', '$hashpass', 0)";
    $conn ->query($sql);
    $conn ->close();


    header('Location: /login.php');
    } else {
        echo("
                <b>Не верный формат аватара</b><br>
            ");
            echo($_FILES['avatar']['type']);
            echo("<br>");
            echo($_FILES['avatar']['error']);
            echo("<br>");
            echo(isset($_FILES));
    }
?>
</html>
