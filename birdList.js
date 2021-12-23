
  function hideandseek(){
    for(var i = 0; i < 10; i++){
            if (i != b){
              if (words[i].style.display != "none") {
                  words[i].style.display = "none";
                }
            }
            else{
              words[i].style.display = "block";
            }
    }
  }

  function searchbyname(){
    words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'), document.getElementById('G'), document.getElementById('D'), document.getElementById('E'), document.getElementById('J'), document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
    str = document.getElementById('nameofbird').value;
    arr = str.split('')
    birdname = arr[0];
    b = 0;
    if ((birdname == "А")||(birdname == "а")){
      b = 0;
    }
    if ((birdname == "Б")||(birdname == "б")){
      b = 1;
    }
    if ((birdname == "В")||(birdname == "в")){
      b = 2;
    }
    if ((birdname == "Г")||(birdname == "г")){
      b = 3;
    }
    if ((birdname == "Д")||(birdname == "д")){
      b = 4;
    }
    if ((birdname == "Е")||(birdname == "е")){
      b = 5;
    }
    if ((birdname == "Ж")||(birdname == "ж")){
      b = 6;
    }
    if ((birdname == "З")||(birdname == "з")){
      b = 7;
    }
    if ((birdname == "И")||(birdname == "и")){
      b = 8;
    }
    if ((birdname == "К")||(birdname == "к")){
      b = 9;
    }
    hideandseek();
}
function searchA(){
   words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 0;
  hideandseek();
}
function searchB(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 1;
  hideandseek();
}
function searchV(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 2;
  hideandseek();
}
function searchG(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 3;
  hideandseek();
}
function searchD(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 4;
  hideandseek();
}
function searchE(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 5;
  hideandseek();
}
function searchJ(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 6;
  hideandseek();
}
function searchZ(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 7;
  hideandseek();
}
function searchI(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 8;
  hideandseek();
}
function searchK(){
  words=new Array(document.getElementById('A'),document.getElementById('B'),document.getElementById('V'),document.getElementById('G'),document.getElementById('D'),document.getElementById('E'),document.getElementById('J'),document.getElementById('Z'), document.getElementById('I'), document.getElementById('K'));
  b = 9;
  hideandseek();
}
