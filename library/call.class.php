<?php

//This is a php filemade specifically to call classes

spl_autoload_register('classAutoloader', 'interfaceAutoloader');

function classAutoloader($className)
{
    $path = 'class';

    require_once(LIBRARY_PATH . "/$path.$className.php");
}
 
?>
