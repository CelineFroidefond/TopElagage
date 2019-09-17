<?php

namespace C\TopElagage\Controller;
session_start();

class PicturesAdminController extends \C\Core\Controller{

    function PicturesAdmin(){
        
        if(isset($_POST["name"]) && isset($_POST["category"]) && isset($_POST["path"])){
            $picturesAdminModel = new \C\TopElagage\Model\Pictures();
            $new_pictures = $picturesAdminModel -> setPictures($_POST['name'], $_POST['category'], $_POST['path']);
        }
        if(isset($_SESSION['admin'])==true){
            $this->render("adminPictures");
        }else{
            header("Location: ../admin");
        }
    }

    
    function displayAllPictures(){
        $picturesAdminModel = new \C\TopElagage\Model\Pictures();
        $pictures= $picturesAdminModel -> getAllPictures();
        $this->render("adminPictures", ["pictures" => $pictures]);
    }

    public function editPictures(){

        $pictureModel = new \C\TopElagage\Model\Pictures();
        $picture = $pictureModel -> getPictureById($_GET['id_picture']);

        if(isset($_POST['name']) || isset($_POST['category']) || isset($_POST['path'])){
            $pictureModel = new \C\TopElagage\Model\Pictures();
            $pictureModel -> update($_GET['id_picture'], htmlspecialchars($_POST['name']), htmlspecialchars($_POST['category']), htmlspecialchars($_POST['path']));

            header('Location:\top_elagage/public/admin/pictures');
            exit();
        }

        $this->render("edit", [
            "picture" => $picture,
        ]);
    }

    //Suppression de l'image sélectionnée par l'admin
    public function deletePicture(){
        $pictureModel = new \C\TopElagage\Model\Pictures();
        $pictureModel -> delete($_GET['id_picture']);
        header('Location:\top_elagage/public/admin/pictures');
        exit();
    }
}


