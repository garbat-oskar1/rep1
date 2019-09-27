<!DOCTYPE html>
<html lang=en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
//typ integar
$calkowita = 10;
$hex=0xA;
$oct=021;
$bin = 0b1011;
echo $bin;

//typ zmiennoprzecinkowy
//double /float
$x= 3.0;

//typ string
$name ='Janusz';
echo "Masz na imie $name";


//skladnia heredoc

$surname ='Kowalski';

$text = <<< ETYKIETA
Heredoc2<br>
Masz na imie: $name<br>
Naziwsko: $surname<hr>
ETYKIETA;

echo $text;

//składnia nowdoc

  $surname ='Kowalski';

  $text = <<< 'E'
  Nowdoc<br>
  Masz na imie: $name<br>
  Naziwsko: $surname<hr>
E;

$text='kupa';

echo"Zmienna o nazwie \$text ma wartość: zmienna $text";



 ?>


  </body>
</html>
