<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="birdList.css">
        <link rel="stylesheet" href="FooterHeader/FHstyles.css">
        <script src="birdList.js"></script>
        <script src="header.js"></script>
        <title>FefuBirds</title>
    </head>
    <?php include("FooterHeader/header.php")?>
    <body>


        <div class = content>
            <div class = half>
                <div class = TitleBackground>
                    <p>
                        СПИСОК ВИДОВ
                    </p>
                </div>
              </div>
              <img src = "img/BirdLine.png" class = "birdLine">
              </img>
            </div>


        <div class = "inputBird">
          <input required type = "text" id = "nameofbird" placeholder="введите название вида..." class = "textBox">

          <button id = "searchbyname()" onclick = "searchbyname()" class="searchButton">

            <img src = "img/Search.png" class = "search">
            </img>

          </button>

        </div>


        <img src = "img/BirdLine.png" class = "birdLine2">
        </img>


        <div class = "wordsBackground">
          <button class = "wordsbutton" onclick = "searchA()">
          <div class = "word">
            А
          </div>
          </button>
          <button class = "wordsbutton" onclick = "searchB()">
            <div class = "word">
            Б
            </div>
          </button>
          <button class = "wordsbutton" onclick = "searchV()">
            <div class = "word">
            В
            </div>
          </button>
          <button class = "wordsbutton" onclick = "searchG()">
            <div class = "word">
            Г
            </div>
          </button>
          <button class = "wordsbutton" onclick = "searchD()">
            <div class = "word">
            Д
            </div>
          </button>
          <button class = "wordsbutton" onclick = "searchE()">
            <div class = "word">
            Е
            </div>
          </button>
          <button class = "wordsbutton" onclick = "searchJ()">
            <div class = "word">
            Ж
            </div>
          </button>
          <button class = "wordsbutton" onclick = "searchZ()">
            <div class = "word">
            З
            </div>
          </button>
          <button class = "wordsbutton" onclick = "searchI()">
            <div class = "word">
            И
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            Й
            </div>
          </button>
          <button class = "wordsbutton" onclick = "searchK()">
            <div class = "word">
            К
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            Л
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            М
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            Н
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            О
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            П
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            Р
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            С
            </div>
          </button>
          <button class = "wordsbutton">
            <div class = "word">
            Т
            </div>
          </button>
        </div>






        <div class = "birdsLinksBox">
          <div id="A" class = "birdsLinks">
            <a class = birdLinkTitle > А </a>
            <div class = linkslist>
            <a href="birdPage.php" class="word"> Название вида </a>
          </div>
        </div>
        <div id="B" class = "birdsLinks">
          <a class = birdLinkTitle> Б </a>
          <div class = linkslist>
          <a href="birdPage.php" class="word"> Название вида </a>
        </div>
       </div>
       <div id="V" class = "birdsLinks">
         <a class = birdLinkTitle> В </a>
         <div class = linkslist>
         <a href="birdPage.php" class="word"> Название вида </a>
       </div>
      </div>
      <div id=G class = "birdsLinks">
        <a class = birdLinkTitle> Г </a>
        <div class = linkslist>
        <a href="birdPage.php" class="word"> Название вида </a>
      </div>
     </div>
     <div id="D" class = "birdsLinks">
       <a class = birdLinkTitle> Д </a>
       <div class = linkslist>
       <a href="birdPage.php" class="word"> Название вида </a>
     </div>
    </div>
    <div id="E" class = "birdsLinks">
      <a class = birdLinkTitle> Е </a>
      <div class = linkslist>
      <a href="birdPage.php" class="word"> Название вида </a>
    </div>
   </div>
   <div id="J" class = "birdsLinks">
     <a class = birdLinkTitle> Ж </a>
     <div class = linkslist>
     <a href="birdPage.php" class="word"> Название вида </a>
   </div>
  </div>
  <div id="Z" class = "birdsLinks">
    <a class = birdLinkTitle> З </a>
    <div class = linkslist>
    <a href="birdPage.php" class="word"> Название вида </a>
  </div>
 </div>
 <div id="I" class = "birdsLinks">
   <a class = birdLinkTitle> И </a>
   <div class = linkslist>
   <a href="birdPage.php" class="word"> Название вида </a>
 </div>
</div>
<div id="K" class = "birdsLinks">
  <a class = birdLinkTitle> К </a>
  <div class = linkslist>
  <a href="birdPage.php" class="word"> Название вида </a>
</div>
</div>
</div>
        <?php include("FooterHeader/footer.php"); ?>
    </body>
</html>
