<?php
$text = <<< T

  zsl - Zespół
  szkół
  łączności
T;





echo "Przed wywołaniem funkcji nl2br:<br> $text";
echo "<br>Po wywołaniu funkcji nl2br:<br>";
echo nl2br ($text);

///zamiana na male litery



$text='JaNuSz';



echo strtolower ($text);

// zamiana na duze litery

echo strtoupper ($text);


//zamiana 1 litery na duza


$text='rAz dWa tRZY';


 echo ucfirst($text);


//zamiana wszystkich 1 liter na duze


echo ucwords($text);
//


$text = 'janusz';

$x = substr($text,1);

echo$x;

echo $firstletter;

$lateletter = substr($text,1);
//$name
//pierwsza litera imienia duza


 ?>
