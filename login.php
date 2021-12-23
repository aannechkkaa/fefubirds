<?php
session_start();
$uemail = $_SESSION['uemail'];

if ($uemail != NULL){
    header("Location: /cabinet.php");
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Styles/loginStyles.css">
        <link rel="stylesheet" href="FooterHeader/FHstyles.css">
        <script src="header.js"></script>
        <title>FefuBirds</title>
    </head>
    <?php include("FooterHeader/header.php")?>
    <body>
            <div class = "upperBox">
                            ВХОД
            </div>
        <div class = "content">
            <div class = "TitleBackground">

                <p class = "logotext"> <b style = "font-family: 'Montserrat-black'">FEFU</b> <br>BIRDS </p>
                <form method = "post" class = "form" action = "logp.php">
                <div class = "inputBox">
                    Email<br>
                    <input name = "email" required type = "text" class = "textBox">
                </div>
                <div class = "inputBox">
                    Password<br>
                    <input name = "password" required type = "password" class = "textBox">
                </div>
                <div class = "buttonBox">
                    <input type = "submit" class = "Button" value = "Вход">
                    <form>
                        <input type = "button" value = "Регистрация" class = "Button" onClick = 'location.href = "registration.php"'>
                    </form>
                </div>
                </form>
            </div>
        </div>
        <?php include("FooterHeader/footer.php");?>
    </body>
</html>
