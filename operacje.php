<?php

    $potega = 2 ** 10;
    echo $potega,'<hr>';

//operatory bitowe: and &, or |, not ~, xor ^, >>, <<

    $x = 0b1010;
    $x = $x >> 1;
    $x = $x << 2;
    echo $x;



##########################################################################

    $x = 1;
    $y = 1.0;
    echo gettype($x),'<br>';
    echo gettype($y),'<br>';

    if ($x == $y)
      echo 'Równe<br>';
    else
      echo 'Różne<br';

      if ($x == $y)
        echo 'Identyczne<br>';
      else
        echo 'Różne<br>';

##########################################################################

//$x = 1;
//$y = 1;
//$wynik = $x <=> $y; //php 7 :(
//echo $wynik;

##########################################################################

$x =2;
echo$x++;//2
echo++$x;//4
echo $x;//4
$y = $x++;
echo$y;//4
$y=++$x;
echo$y;//6
echo++$y;//7
##########################################################################

//rzutowanie
//bool, int, float,string,array,object,unset
echo '<hr>';
$text1 = '123ssd';
$x1 = (int)$text1;
echo $x1;
$x1 = (float)$x1;
echo $x1,'<br>';
echo gettype($x1); //doubleval

 $text2 = -1;
 $x2 = (bool)$text2;
 echo $x2,'<br>'; // 1 oznacza - true

 $x3 = (unset)$text2;

echo'<hr>'  ,$x3;
echo gettype($x3); //NULL


//rozmiar integer

echo PHP_INT_SIZE,'<hr>'; //8

$w;
//@operator ignorowania błędump
echo @$w;

echo @gettype($w); // NULL

$text = 'ZSL';
echo is_string($text); //
echo is_bool($text); //
echo is_float($text); //
echo is_int($text); //
echo is_null($text); //

//$_GET, $_POST, $_COOKIE, $_FIELES, $_SESSION, $_SERVER

echo $_SERVER['SERVER_PORT']; //80


 ?>
