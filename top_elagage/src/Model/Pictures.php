<?php

namespace C\TopElagage\Model;

use PDO;

class Pictures{

    function __construct(){
        try {
            $this-> db = new \PDO('mysql:host=localhost;dbname=top_elagage;charset=UTF8', 'root', 'Ventfraisventdumatin');
        } catch (PDOException $e) {
            echo "Une erreur est survenue";
            die();
        }
    }

    // Insertion des avis clients en base de donnée
    function setPictures($name, $category, $path){

        
            $query = $this -> db->prepare('
                INSERT INTO 
                pictures(name, category, path)
                VALUES(?, ?, ?)
            ');

        $query->execute([$name, $category, $path]);
        }
    

        // Récupération des photos en fonction de la catégorie (1 categorie/1 page)
    function getPictures($category){

        $query = $this -> db->prepare('
        SELECT
        path, 
        category,
        name
        FROM
        pictures
        WHERE
        category = ?
        ');

        $query -> execute([$category]);
        $pictures = $query-> fetchAll(PDO::FETCH_ASSOC);

        return $pictures;   
    }
    //Récupération de l'intégralité des images en base de donnée
    function getAllPictures(){
        $query = $this -> db->prepare('
        SELECT
        *
        FROM
        pictures
        ');
        $query -> execute();
        $pictures = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $pictures;  
    }

        //FONCTIONS ADMIN POUR EDITION DES PHOTOS

    //Récupération de la photo sélectionnée par l'admin
    function getPictureById($id){
        $query = $this-> db->prepare('
                SELECT
                *
                FROM
                pictures
                WHERE
                pictures.id = ?
                ');

        $query->execute([$id]);
        $picture = $query -> fetch();
        return $picture;
    }

    //Modification image avec les nouvelles données
    function update($id, $name, $category, $path){
        $query = $this -> db-> prepare('
                
                UPDATE
                    pictures
                SET
                    name = ?,
                    category = ?,
                    path = ?,
            
                WHERE
                    id = ?
            '
            );
            $query->execute([$name, $category, $path]);
    }

    function delete($id)
    {
        $query = $this->db -> prepare(' DELETE FROM pictures WHERE id=?');
        $query -> execute([$id]);
    }

}
