<?php



class views{

    function getView($controller, $view, $context=""){

        $controller = get_class($controller);

        if($controller == "Index"){

            $view = "views/".$view."View".".php";

        }else{

            $view = "views/".$controller."/".$view."View".".php";

        }

        require_once($view);

    }

}



?>