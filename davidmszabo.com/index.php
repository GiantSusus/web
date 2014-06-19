<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "is":
        //echo "PAGE FR";
        break;
    case "se":
        //echo "PAGE IT";
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