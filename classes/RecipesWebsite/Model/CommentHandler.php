<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-12-01
 * Time: 00:45
 */

namespace RecipesWebsite\Model;

use RecipesWebsite\Util\Comment;
use RecipesWebsite\Integration\ServerAccess;


class CommentHandler
{

    private $dbHandler;
    public function __construct()
    {
        $this->dbHandler = new ServerAccess();
    }

    public function postComment(Comment $comment){
        $comment->setMessage(htmlentities($comment, ENT_QUOTES));

        if($this->dbHandler->addComment($comment)){
            return true;
        }else{
            return false;
        }
    }

    public function getComments($page){
        $this->dbHandler->getComment($page);
    }
}