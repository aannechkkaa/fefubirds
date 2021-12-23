<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Styles/BirdPageStyles.css">
        <link rel="stylesheet" href="FooterHeader/FHstyles.css">
        <script src="header.js"></script>
        <title>FefuBirds</title>
    </head>
    <?php include("FooterHeader/header.php")?>
    <body>
            <div class = "TitleBackground">
                Название вида
            </div>
            <div class = "listen">
                <p class = "listenText">
                    Слушать щебет
                </p>
                <img src = "img/PLAY.png" style = "height: 70%" class="listenelement">
                </img>
                <img src = "img/Audio.png" style = "height: 80%" class="listenelement">
                </img>
            </div>
        <div class = "informationBackground">
            <img src = "img/ExampleUnique.png" style = "height: 80%">
            </img>
            <p class = "information">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent volutpat, metus id iaculis aliquam, neque ex finibus nisl,
                id blandit tellus erat at nunc. Nam vitae sapien porta, facilisis nisi ac,
                tristique tortor. Etiam at massa vehicula, rhoncus elit vitae, porta felis.
                Pellentesque viverra, justo eget imperdiet aliquet, tellus diam tempus neque,
                eu bibendum libero lacus a leo. Phasellus rhoncus blandit ligula, et elementum
                erat iaculis ac. Sed pretium felis at mi convallis tempus. Praesent dui urna,
                ultrices a erat ut, faucibus mattis diam.
            </p>
        </div>
        <div class = "commentsTitle">
            КОММЕНТАРИИ
        </div>
        <div class = "commentsBox">
            <div class = "commentsBackground">
                <div class = "comment">
                    <div class = "left">
                        <img src = "img/defaultpp.png" class = "profilePicture">
                        </img>
                    </div>
                    <div class = "right">
                        <p class = "name">Имя Фамилия</p>
                        <p class = "commentText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Praesent volutpat, metus id iaculis aliquam, neque ex finibus nisl,
                            id blandit tellus erat at nunc. Nam vitae sapien porta, facilisis nisi ac,
                            tristique tortor. Etiam at massa vehicula, rhoncus elit vitae, porta felis.
                            Pellentesque viverra, justo eget imperdiet aliquet, tellus diam tempus neque,
                            eu bibendum libero lacus a leo. Phasellus rhoncus blandit ligula, et elementum
                            erat iaculis ac. Sed pretium felis at mi convallis tempus. Praesent dui urna,
                            ultrices a erat ut, faucibus mattis diam.
                        </p>
                        <img src = "img/ExampleUnique.png" class = "commentImg">
                        </img>
                    </div>
                </div>
                <div class = "commentSeptum"></div>
                <div class = "comment">
                    <div class = "left">
                        <img src = "img/defaultpp.png" class = "profilePicture">
                        </img>
                    </div>
                    <div class = "right">
                        <p class = "name">Имя Фамилия</p>
                        <p class = "commentText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Praesent volutpat, metus id iaculis aliquam, neque ex finibus nisl,
                            id blandit tellus erat at nunc. Nam vitae sapien porta, facilisis nisi ac,
                            tristique tortor. Etiam at massa vehicula, rhoncus elit vitae, porta felis.
                            Pellentesque viverra, justo eget imperdiet aliquet, tellus diam tempus neque,
                            eu bibendum libero lacus a leo. Phasellus rhoncus blandit ligula, et elementum
                            erat iaculis ac. Sed pretium felis at mi convallis tempus. Praesent dui urna,
                            ultrices a erat ut, faucibus mattis diam.
                        </p>
                        <img src = "img/ExampleUnique.png" class = "commentImg">
                        </img>
                    </div>
                </div>
                <div class = "commentSeptum"></div>
            </div>
            <from id = "commentForm">
                <input name = "photo" type = "file"><br>
                <textarea form = "commentForm" class = "inputText" name = "text" required type = "text" placeholder = "Оставить комментарий..."></textarea>

            </form>
        </div>
    </body>
</html>
