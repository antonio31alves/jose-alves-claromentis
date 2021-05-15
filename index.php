<?php 
require_once("config/config.php");
$url = !empty($_GET['url']) ? $_GET['url'] : 'index/index';
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$parameters = "";

if(!empty($arrUrl[1])){
    if($arrUrl[1] != ""){
        $method = $arrUrl[1];
    }
}

if(!empty($arrUrl[2])){
    if($arrUrl[2] != ""){
       for($i=2; $i < count($arrUrl); $i++){
           $parameters .= $arrUrl[$i].',';
       }
       $parameters = trim($parameters, ',');
       //echo $parameters;
    }
}

require_once("libraries/core/autoload.php");
require_once("libraries/core/load.php");



?>