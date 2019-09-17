<?php

namespace C\TopElagage\Controller;

class PagesController extends \C\Core\Controller{
    
    public function error404(){
        $this->render("404");
    }

    public function home(){
        $this->render("home");         
    }

    public function info(){
        $this->render("info");
    }

    public function admin_home(){
       /* if(isset($_SESSION)==true){*/
            $this->render("adminHome");
        /*}else{
            header("Location: ../admin");
        }*/
    }
}

?>