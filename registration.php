<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Styles/registrationStyles.css">
        <link rel="stylesheet" href="FooterHeader/FHstyles.css">
        <script src="header.js"></script>
        <title>FefuBirds</title>
    </head>
    <?php include("FooterHeader/header.php")?>
    <body>
            <div class = "upperBox">
                            РЕГИСТРАЦИЯ
            </div>
        <div class = "content">
            <div class = "TitleBackground">
                <form method = "post" class = "form" enctype="multipart/form-data" action = "regp.php">
                    <div class = "inputs">
                        <div class = "left">
                            <div class = "inputBox">
                                Имя<br>
                                <input name = "name" required type = "text" class = "textBox">
                            </div>
                            <div class = "inputBox">
                                Фамилия<br>
                                <input name = "surname" required type = "text" class = "textBox">
                            </div>
                        </div>
                        <div class = "right">
                            <div class = "inputBox">
                                Email<br>
                                <input name = "email" required type = "text" class = "textBox">
                            </div>
                            <div class = "inputBox">
                                Пароль<br>
                                <input name = "password" required type = "password" class = "textBox">
                            </div>
                        </div>
                    </div>
                        <div class = "imgInputBox">
                        Аватар<br>
                        <input name ="avatar" required type = "file">
                        </div>
                    <input type = "submit" value = "Регистрация" class = "Button">
                </form>
            </div>
        </div>
        <?php include("FooterHeader/footer.php");?>
    </body>
</html>
