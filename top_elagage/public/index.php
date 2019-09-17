<?php

spl_autoload_register("c_autoload");
spl_autoload_register("cel_autoload");

function c_autoload($className){
    $prefix = "C\Core\\";

    if (strpos($className, $prefix) == 0) {

        // Retirer le prefixe de $className
        $className = str_replace("$prefix", "", $className);

        // Remplacer les \ par des /
        $className = str_replace("\\", "/", $className);

        $chemin = __DIR__ . "/../core/" . $className . ".php";


        if (file_exists($chemin)){
            require $chemin;
        }
    }
}

function cel_autoload($className){
    $prefix = "C\TopElagage\\";

    if (strpos($className, $prefix) == 0) {

        // Retirer le prefixe de $className
        $className = str_replace("$prefix", "", $className);

        // Remplacer les \ par des /
        $className = str_replace("\\", "/", $className);

        $chemin = __DIR__ . "/../src/" . $className . ".php";

        if (file_exists($chemin)){
            require $chemin;

        }
    }
}

$router = new C\Core\Router();
$router-> run();
