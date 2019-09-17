<?php

namespace C\TopElagage\Controller;

class CommentsController extends \C\Core\Controller{

    function postComments(){
       //Récupération des reviews clients postés depuis la page home (model "Comments.php")
       if (isset($_POST["content"]) && isset($_POST["published_at"]) && isset($_POST["author"])){
        $commentsModel = new \C\TopElagage\Model\Comments();
        $commentsModel->comment(htmlspecialchars($_POST['content']), htmlspecialchars($_POST['published_at']), htmlspecialchars($_POST['author']));
        }
        $this->render("review");
    }

    function getComments(){
        //Affichage des reviews clients sur la page home
        
        $commentsModel =  new \C\TopElagage\Model\Comments();
        $comments = $commentsModel->get_comments();
        $this->render("home", ["comments" => $comments]);
    }

}