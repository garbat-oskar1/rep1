<?php


function value($a)
{
 if($a <0){

return "ujemna";
}else if($a ==0){
  return 0;
}else {
  return "dodatnia<br>";
}
}

echo value(4);

/*function getValue():int{
  return 10.99;
}

echo getValue();
echo gettype(getValue());
*/

#################################################################

//zasięg zmiennych

$x = 10;
function show(){
  echo "Wartosc zmiennej \$x wynosi: {$GLOBALS['x']}<br>";
}
//echo $GLOBALS['x'];
show();

##########################################################################


$y = 10;
function show1(){
global $y;
  echo "Wartosc zmiennej \$y wynosi: $y<br>";

}

show1();

##########################################################################

function sum(){
  $number =10;
  echo "\$number wynosi: $number<br>";
  $number +=10;
}

sum(); //10
sum(); //10

#####################################################################

function sum1(){
static  $number =10;
  echo "\$number wynosi: $number<br>";
  $number +=10;
}

sum1(); //10
sum1(); //20
sum1(); //30

##########################################################

//argumenty funkcji

function add($x, $y = 5){
  return $x + $y;

}
$z = 10;

echo add(1),'<br>'; //6
echo add($y, $x=3); //13
echo add($y, $x=3); //15


//argumenty i typy danych

/*function mult(float $x, int $y){

return $x*$Y;
}

echo mult(3, 4); //12
echo mult(2.5 ,4); //10
echo mult(4 ,2.5); //8
*/

#####################################################################################

//tablice






?>
