<?php

namespace C\TopElagage\Model;

use PDO;

class Comments{

    function __construct(){
        try {
            $this-> db = new \PDO('mysql:host=localhost;dbname=top_elagage;charset=UTF8', 'root', 'Ventfraisventdumatin');
        } catch (PDOException $e) {
            echo "Une erreur est survenue";
            die();
        }
    }

    // Insertion des avis clients en base de donnée
    function comment($content, $published_at, $author){

        $query = $this -> db->prepare('
        INSERT INTO 
        comments(content, published_at, author)
        VALUES(?, ?, ?)
        ');

        $query->execute([$content, $published_at, $author]);
    }

    //Récupération des avis clients depuis la base de données
    function get_comments(){
        $query = $this -> db ->prepare('
        SELECT *
        FROM comments
        ');
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_ASSOC);

        return $comments;
    }

}