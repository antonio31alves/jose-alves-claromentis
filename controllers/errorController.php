<?php



class errors extends controllers{

    public function __construct(){

        parent::__construct();

    }



    public function notFound(){//FUNCTION TO CALL THE VIEW FILE

        $this->views->getView($this, "error"); 

    }

}



$notFound = new errors();

$notFound->notFound();





?>