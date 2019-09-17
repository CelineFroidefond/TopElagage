<?php

namespace C\TopElagage\Controller;
session_start();

class AdminController extends \C\Core\Controller{

    function admin_login(){
       if(isset($_POST["mail"]) && isset($_POST["password"])){
            $loginModel = new \C\TopElagage\Model\Login();
            $admin_infos = $loginModel->login(htmlspecialchars($_POST["mail"]));

            if($_POST['mail'] != $admin_infos['mail']){ 
                var_dump($admin_infos);
                echo "Erreur : Mail incorrect...";
            }else if($_POST['password'] != $admin_infos['password']){
                echo "Erreur : mot de passe incorrect";
            }else{
                $_SESSION['admin'] = ["identifiant" => $admin_infos["mail"], "mot_de_passe" =>$admin_infos["password"]];
                header("Location: ../public/admin/home"); 
                var_dump($_SESSION);
            }
       }
       $this->render("admin"); 
    }

    function admin_logout(){
        $loginModel = new \C\TopElagage\Model\Login();
        $loginModel-> logout();
        header("Location: ../admin");
    }
}
