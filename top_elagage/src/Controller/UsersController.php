<?php

namespace C\TopElagage\Controller;

class UsersController extends C\Core\Controller{

    public function comment(){
        if (!empty($_POST["content"]) && !empty($_POST["publised_at"]) && !empty($_POST["author"])) {

                $reviewModel = new \C\TopElagage\Model\Review();
                $reviewModel->comment($_POST['content'], $_POST['published_at'],  $_POST['author']);
            }
        }

    public function show_comments(){
        $reviewModel = new \C\TopElagage\Model\Review();
        $comments = $reviewModel->get_comments();
    }
}
