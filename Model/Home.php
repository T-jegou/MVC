<?php 


class Home{

    public function nbarticle($db){

        $res = $db->query('SELECT COUNT(*) FROM post');
        $res = $res->fetchColumn();
        
        return $res;
    }
}

?>