<?php 

class Article{
    
    function getarticle($id, $db){
        $query = $db->query('SELECT * FROM post WHERE p_id ='.$id);
        $article = $query->fetchAll(PDO::FETCH_OBJ); // retourne le resultat sous forme d'objet sans besoisn d'instancier de classe $table->entite 

        return $article;
    }
}

?>