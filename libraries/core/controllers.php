<?php



class controllers{

    public function __construct(){

        $this->views = new views();

        $this->loadModel();

    }



    public function loadModel(){//METHOD TO EXECUTE MODELS

        $model = get_class($this)."Model";

        $routeClass = "models/".$model.".php";

        if(file_exists($routeClass)){

            require_once($routeClass);

            $this->model = new $model();

        }

    }



}





?>