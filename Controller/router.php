<?php 
require ('Controller.php');

$controlleur = new Controller();

if(empty($_SERVER['QUERY_STRING'])){
    $controlleur->homecontroller();

}if(isset($_GET['liste'])){
   $controlleur->listecontroller();
    

}if(isset($_GET['article'])){
    $controlleur->articlecontroller($_GET['article']);
     
 
}