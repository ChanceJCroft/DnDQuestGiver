<?php
//add in all requires and includes



//Config file
require_once 'config.php';



//autoloader
function myAutoLoad($class_name){
    require_once 'lib/'.$class_name. '.php';
}
spl_autoload_register('myAutoLoad');


?>