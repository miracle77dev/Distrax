<?php
function autoload($classe)
{
require 'class/'.$classe . '.php'; 
}
spl_autoload_register('autoload'); 

?>