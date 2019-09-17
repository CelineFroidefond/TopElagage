<?php

namespace C\TopElagage\Model;
use PDO;
class Project{

    function __construct(){
        try {
            $this-> db = new \PDO('mysql:host=localhost;dbname=top_elagage;charset=UTF8', 'root', 'Ventfraisventdumatin');
        } catch (PDOException $e) {
            echo "Une erreur est survenue";
            die();
        }
    }

    //Récupération des données issues du formulaire de demande de devis
    function add_project($clientFirstName, $clientLastName, $clientMail, $clientPhone, $subject, $content){
        //Récupération des infos clients + projet pour demande de devis
        $query = $this -> db ->prepare('
            INSERT INTO
            projects(clientFirstName, clientLastName, clientMail, clientPhone, subject, content)
            VALUES(?,?,?,?,?,?)
            ');
        $query->execute([$clientFirstName, $clientLastName, $clientMail, $clientPhone, $subject, $content]);
    }

    //Récupération des demandes devis/projets clients depuis la base de données
    function get_projects(){
        $query = $this -> db ->prepare('
        SELECT *
        FROM projects
        ');
        $query->execute();
        $projects = $query->fetchAll(PDO::FETCH_ASSOC);

        return $projects;
    }

    

}