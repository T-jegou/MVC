<?php 


class Database
{
    private static $db; // Le fait de déclarer des propriétés ou des méthodes comme statiques vous permet d'y accéder sans avoir besoin d'instancier la classe.
    private $chemin;
    
    

    public static function getdata(){
        $chemin = (dirname(__DIR__).DIRECTORY_SEPARATOR.'Data'. DIRECTORY_SEPARATOR . 'data.db'); // on definir le chemin par defaut quelque soit le dossier pour eivter quil ne retoure pqs la db

        if(self::$db === null){ // si cette variable est nul alors on effectue ca , et on utilise self:: car $db est static 
            $db = new PDO('sqlite:'.$chemin);
        }
        return $db;
    }
}

?> 