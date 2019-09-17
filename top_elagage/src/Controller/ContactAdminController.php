<?php
namespace C\TopElagage\Controller;

class ContactAdminController extends \C\Core\Controller{

        function ShowProjects(){
            //Affichage des projets clients sur page Admin (demandes de devis)
            $projectModel = new \C\TopElagage\Model\Project();
            $projects= $projectModel -> get_projects();
            if(isset($_SESSION)==true){
                $this->render("adminDevis", ["projects" => $projects]);
            }else{
                header("Location: ../admin");
            }
    }

