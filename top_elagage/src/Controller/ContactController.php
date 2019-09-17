<?php

namespace C\TopElagage\Controller;

class ContactController extends \C\Core\Controller{

    function postProject(){
       
        if(isset($_POST['clientFirstName']) && isset($_POST['clientLastName']) && isset($_POST['clientMail']) && isset($_POST['clientPhone']) && isset($_POST['subject']) && isset($_POST['content'])){
            $projectModel = new \C\TopElagage\Model\Project();
            $project = $projectModel->add_project(htmlspecialchars($_POST['clientFirstName']), htmlspecialchars($_POST['clientLastName']), htmlspecialchars($_POST['clientMail']), htmlspecialchars($_POST['clientPhone']), htmlspecialchars($_POST['subject']), htmlspecialchars($_POST['content']));
            var_dump($projectModel);
        }
        $this->render("contact");
    }

}