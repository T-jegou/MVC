<?php 

require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Home.php'); // Inclusion de tous les models
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Liste.php');
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Article.php');
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Database.php');

$controlleur = new Controller();

if(empty($_SERVER['QUERY_STRING'])){
    $controlleur->homecontroller();

}if(isset($_GET['liste'])){
   $controlleur->listecontroller();
    

}if(isset($_GET['article'])){
    $controlleur->articlecontroller($_GET['article']);
     
 
}

class Controller
{
    public function homecontroller(){
        $db = Database::getdata();
        $nbarticle = Home::nbarticle($db);
        
        require(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'home.php');
    }
    
    public function listecontroller(){
        $db = Database::getdata();
        $articles = Liste::getpost($db);  
              
        require(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'liste.php');
    }

    public function articlecontroller($id){
        $db = Database::getdata();
        $article = Article::getarticle($id, $db);

        require(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'article.php');
    }
}

?>