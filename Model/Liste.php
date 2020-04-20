<?php 

      

class Liste{
    
    function getpost($db){
        $query = $db->query('SELECT * FROM post');
        $articles = $query->fetchAll(PDO::FETCH_OBJ); // retourne le resultat sous forme d'objet sans besoisn d'instancier de classe $table->entite 

        return $articles;
    }
}

?>