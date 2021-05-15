<?php



class Index extends controllers{

    public function __construct(){

        parent::__construct();

    }

    public function index(){

        $context = [];

        if(isset($_POST['upload'])){

            $file = fopen($_FILES['file']['tmp_name'], 'r');

            $nameFile   = $_FILES['file']['name'];

            $nameFile   = explode('.', $nameFile);

            $extensionFile = strtoupper($nameFile[1]);

            if($extensionFile == "CSV"){

                while (!feof($file)){
                    $row = fgets($file);

                    $field = explode(",", $row);

                   $category = ucfirst(strtolower($field[0]));

                    

                    if(!empty($field[1]) and !empty($field[2])){
			            $price = is_numeric(trim($field[1]));
                        $amount = is_numeric(trim($field[2]));

                        if($price == 1 and $amount ==1){
				
                            if(!array_key_exists($category, $context)){

                                if(!empty($field[1]) and !empty($field[2])){

                                    $context[$category] = $field[1]*$field[2];

                                }

                            }else{

                                $context[$category] += $field[1]*$field[2];

                            }

                        }

                    }

                        

                }//END WHILE

            }else{

                $context = [

                    'error' => 'True'

                ];

            }

        }     
        $this->views->getView($this, "index", $context); 

    }

}









?>