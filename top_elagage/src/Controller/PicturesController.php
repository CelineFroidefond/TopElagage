<?php

namespace C\TopElagage\Controller;

class PicturesController extends \C\Core\Controller{

    function displayElagagePictures(){
        $picturesAdminModel = new \C\TopElagage\Model\Pictures();
        $pictures= $picturesAdminModel -> getPictures("elagage");
        $this->render("elagage", ["pictures" => $pictures]);
    }

    function displayAbattagePictures(){
        $picturesAdminModel = new \C\TopElagage\Model\Pictures();
        $pictures= $picturesAdminModel -> getPictures("abattage");
        $this->render("abattage", ["pictures" => $pictures]);
    }

    function displayDebPictures(){
        $picturesAdminModel = new \C\TopElagage\Model\Pictures();
        $pictures= $picturesAdminModel -> getPictures("debroussaillage");
        $this->render("debroussaillage", ["pictures" => $pictures]);
    }

    function displayEntretienPictures(){
        $picturesAdminModel = new \C\TopElagage\Model\Pictures();
        $pictures= $picturesAdminModel -> getPictures("entretien");
        $this->render("entretien", ["pictures" => $pictures]);
    }
}