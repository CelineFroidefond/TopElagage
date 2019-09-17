<?php

namespace C\TopElagage\Model;

use PDO;

class Login{

    function __construct(){
        try {
            $this-> db = new \PDO('mysql:host=localhost;dbname=top_elagage;charset=UTF8', 'root', 'Ventfraisventdumatin');
        } catch (PDOException $e) {
            echo "Une erreur est survenue";
            die();
        }
    }

    public function login($mail){        
            $query =  $this -> db -> prepare(
                '
                SELECT
                *
                FROM
                admin
                WHERE
                mail = ?
                '
            );

            $query -> execute([$mail]);
            $admin_infos = $query -> fetch(PDO::FETCH_ASSOC);  
            
            return $admin_infos;
    }
    
    public function logout(){
        session_destroy();
    }
}
    