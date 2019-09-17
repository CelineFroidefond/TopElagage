<?php

namespace C\Core;

class Controller{

    protected function render($viewName, $variables = []){
        
        $adminstr = "admin";
        extract($variables);
        ob_start();
        include "../views/$viewName.php";
        $content = ob_get_clean();
 
        // Affichage d'un layout différent pour les pages admin
        if (strpos($viewName, $adminstr) === false){
            require "../views/layout.php";
        }
        else{
            require "../views/layoutAdmin.php";
        }
    } 
}
        
    
