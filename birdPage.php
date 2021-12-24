<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Styles/BirdPageStyles.css">
        <link rel="stylesheet" href="FooterHeader/FHstyles.css">
        <title>FefuBirds</title>
    </head>
    <?php include("FooterHeader/header.php")?>
    <body>
        <?php
        session_start();
        $bid = $_GET['id'];
        include("connect.php");
        $sql = "SELECT * FROM `birds` WHERE id='$bid'";
        $result = mysqli_query($conn, $sql);
        if($row = $result->fetch_assoc()){
        ?>
            <div class = "TitleBackground">
                <?php echo($row['birdName']) ?>
            </div>
            <div class = "listen">
                <p class = "listenText">
                    Слушать щебет
                </p>
                <img src = "img/PLAY.png" style = "height: 70%">
                </img>
                <img src = "img/Audio.png" style = "height: 80%">
                </img>
            </div>
        <div class = "informationBackground">
            <img src = "birdPic/<?php echo($row['birdPicture']) ?>" style = "height: 80%">
            </img>
            <p class = "information">
                <?php echo($row['description']) ?>
            </p>
        </div>

        <?php } else {
            header("Location: /index.php");
        } ?>


        <div class = "commentsTitle">
            КОММЕНТАРИИ
        </div>
        <div class = "commentsBox">
            <div class = "commentsBackground">
                <?php
                $sql = "SELECT * FROM `comments` WHERE birdId='$bid'";
                $cresult = mysqli_query($conn, $sql);
                while($row = $cresult->fetch_assoc()){
                    $cuid = $row['userId'];
                    $sql = "SELECT * FROM `users` WHERE id='$cuid'";
                    $uresult = mysqli_query($conn, $sql);
                    $urow = $uresult->fetch_assoc();
                ?>
                <div class = "comment">
                    <div class = "left">
                        <img src = "userAvatars/<?php echo($urow['avatar']);?>" class = "profilePicture">
                        </img>
                        <?php
                        if ($_SESSION['ustatus'] == 1 || $_SESSION['uid'] == $cuid){ ?>
                            <button style = "width: 80%; margin-left: 10%;" class = "Button" onclick = "location.href = 'deleteComment.php?id=<?php echo($row['id'].'&bid='.$bid); ?>'"> Удалить комментарий </button>

                        <?php } ?>
                    </div>
                    <div class = "right">
                        <p class = "name"><?php echo($urow['name'].' '.$urow['surname']);?></p>
                        <p class = "commentText">
                            <?php echo($row['commentText']); ?>
                        </p>
                        <img src = "userComments/<?php echo($row['commentImage']); ?>" class = "commentImg">
                        </img>
                    </div>
                </div>
                <div class = "commentSeptum"></div>
                <?php } ?>
            </div>
            <form method = "post" id = "commentForm" enctype="multipart/form-data" action = "commentp.php?id=<?php echo($bid); ?>">
                <input name = "photo" type = "file"><br>
                <textarea form = "commentForm" class = "inputText" name = "text" required type = "text" placeholder = "Оставить комментарий..."> </textarea>
                <input type = "submit" value = "Отправить" class = "Button">
            </form>
        </div>
    </body>
</html>
