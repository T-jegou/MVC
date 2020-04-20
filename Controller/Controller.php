<?php 

require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Home.php');
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Liste.php');
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Article.php');
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Erreur.php');
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'Model'. DIRECTORY_SEPARATOR . 'Database.php');


/*
$db = Database::getdata();

    $query = $db->query('SELECT * FROM post');
    $articles = $query->fetchAll(); 
*/       

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