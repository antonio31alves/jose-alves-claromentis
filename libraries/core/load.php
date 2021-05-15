<?php

   // $controller = ucwords($controller);

    $controllerFile = "controllers/".$controller."Controller".".php";

    if(file_exists($controllerFile)){

        require_once($controllerFile);

        $controller = new $controller();

        if(method_exists($controller, $method)){

            $controller->{$method}($parameters);

        }else{

            require_once("controllers/errorController.php");

        }



    }else{

        require_once("controllers/errorController.php");

    }

?>