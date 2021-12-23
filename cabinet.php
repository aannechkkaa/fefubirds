<?php
    session_start();
    $uname = $_SESSION['uname'];
    $usurname = $_SESSION['usurname'];
    $uavatar = $_SESSION['uavatar'];
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Styles/cabinetStyles.css">
        <link rel="stylesheet" href="FooterHeader/FHstyles.css">
       <script src="header.js"></script>
        <title>FefuBirds</title>
    </head>
    <?php include("FooterHeader/header.php")?>
    <body>
        <img src = "img/birdLine.png" class = "birdLine" style = "transform: scale(-1, 1);">
        <div class = "content">
            <div class = "left">
                <div class = "up">
                    <img src = "userAvatars/<?php echo($uavatar) ?>" class = "profilePic">
                    <p class = "name"><?php echo($uname);?><br><?php echo($usurname); ?></p>
                </div>
                <div class = "StatisticBackground">
                    СТАТИСТИКА
                </div>
                <p class = "stats">
                    Количество оставленных<br>вами комментариев: 0
                </p>
                <button class = "logout" onclick = 'location.href = "logp.php"'>Выход</button>
            </div>
            <div class = "right">
                <p class = "title"> Виды птиц к которым вы оставили комментарии: </p>
                <p class = "commented">Тут птицы всякие</p>
            </div>
            <button class = "logout2" onclick = 'location.href = "logp.php"'>Выход</button>
        </div>
        </div>
        <img src = "img/birdLine.png" class = "birdLine" style = "margin-left: 45vw">

    </body>
    <?php include("FooterHeader/footer.php"); ?>
</html>
