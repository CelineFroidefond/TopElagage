<?php

namespace C\Core;

use C\topElagage\Controller\PagesController;

class Router{

    private $url;

    private $routes = [
        "/" => ["action" => "CommentsController@getComments",
                "nom" => "Accueil"],
        
        "info" => ["action" => "PagesController@info",
        "nom" => "Infos"],     

        "review" => ["action" => "CommentsController@postComments",
                     "nom" => "Avis client"],

        "elagage" => ["action" => "PicturesController@displayElagagePictures",
                "nom" => "Elagage"],

        "abattage" => ["action" => "PicturesController@displayAbattagePictures",
        "nom" => "Abattage"],

        "debroussaillage" => ["action" => "PicturesController@displayDebPictures",
                "nom" => "Debroussaillage"],

        "entretienparcsetjardins" => ["action" => "PicturesController@displayEntretienPictures",
                "nom" => "Entretien"],

        "contact" => ["action" => "ContactController@postProject",
                "nom" => "Envoyer projet pour devis"],

        "admin" => ["action" => "AdminController@admin_login",
                "nom" => "Connexion"],

        "admin/logout" =>  ["action" => "AdminController@admin_logout",
                "nom" => "Deconnexion"],       

        "admin/home" => ["action" => "PagesController@admin_home",
                "nom" => "Page d'accueil admin"],

        "admin/pictures" => ["action" => "PicturesAdminController@displayAllPictures",
                "nom" => "Afficher photos sur page admin"],

        "admin/pictures/edit" => ["action" => "PicturesAdminController@editPictures",
         "nom" => "Modifier photos"],

        "admin/pictures/delete" => ["action" => "PicturesAdminController@deletePicture",
         "nom" => "Supprimer photos"],

        "admin/devis" => ["action" => "ContactAdminController@ShowProjects",
                "nom" => "Afficher demandes de devis"],

        "" => ["action" => "PagesController@error404",
               "nom" => "error404"]

    ];


    function __construct(){
        $this->url = !isset($_GET["url"])?"/":$_GET["url"];
    }

    public function run(){
        foreach($this->routes as $path=>$route){
            if($path == $this->url){
                $action = explode('@', $route["action"]);
                $controllerName = "C\TopElagage\Controller\\" . $action[0];
                $methodName = $action[1];
                $controller = new $controllerName();
                $controller->$methodName();
                break;
            }
        }

        // Renvoie vers la methode error404 de PagesController si la route n'est pas trouvée dans l'URL
        if(!isset($action)){
            $controller = new \C\TopElagage\Controller\PagesController();
            $controller->error404();
        }

    }

}