<?php
//start session
session_start();



//Config file
require_once 'config.php';

//include helper file
require_once 'helpers/system_helper.php';


//autoloader
function myAutoLoad($class_name){
    require_once 'lib/'.$class_name. '.php';
}
spl_autoload_register('myAutoLoad');


?>