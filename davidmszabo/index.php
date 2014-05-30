<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "is":
        //echo "PAGE FR";
        include("index_is.php");//include check session FR
        break;
    case "se":
        //echo "PAGE IT";
        include("index_se.php");
        break;
    case "en":
        //echo "PAGE EN";
        Header("Location: http://www.davidmszabo.com/index_en.php");//include EN in all other cases of different lang detection
        break;        
    default:
        //echo "PAGE EN - Setting Default";
        Header("Location: http://www.davidmszabo.com/index_en.php");//include EN in all other cases of different lang detection
        break;
}
?>