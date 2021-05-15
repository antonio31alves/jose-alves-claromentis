<?php
    
    spl_autoload_register(function($class){//THIS FUNCTION WILL SEARCH EACH CLASS IN MY MVC
        if(file_exists("libraries/"."core/".$class.".php")){
            require_once("libraries/"."core/".$class.".php");
        }
    });
?>