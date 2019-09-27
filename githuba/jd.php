<?php

    echo $_SERVER['SCRIPT_NAME'];
    echo $_SERVER['SERVER_PROTOCOL'];
    echo $_SERVER['DOCUMENT_ROOT'];


    //$localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
    $localFile = $_SERVER['DOCUMENT_ROOT'];
    $localFile =  $_SERVER['SCRIPT_NAME'];

    echo '<br>',$localFile;
    #########################################################################
    //stałe
    //nazwy z dużych liter


    define('NAME','Janusz');
    echo '<br>',NAME;

    define('SURNAME','Anna');
    echo '<br>',SURNAME;

    define('COUNTRY','Polska', true);
    echo '<br>',COUNTRY;

##########################################################################
/// STAŁE PREDEFINIOWANE

echo PHP_VERSION; //5.6.14 ja mam 7.3.9
echo gettype(PHP_VERSION),'<br>'; //string

if (PHP_VERSION >5.6) {
echo 'NOWA wersja PHP';
}else{
  echo 'Stara werjsa php<br>';
}


echo PHP_OS;
echo __LINE__;
echo __FILE__;
echo __DIR__; 


 ?>
