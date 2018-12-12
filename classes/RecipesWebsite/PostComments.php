<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-12-01
 * Time: 20:00
 */

namespace RecipesWebsite;
use Id1354fw\View\AbstractRequestHandler;
use RecipesWebsite\Util\Comment;
use RecipesWebsite\Util\Constants;
use RecipesWebsite\Controller\Controller;


class PostComments extends AbstractRequestHandler
{
    private $RecipeID ;
    private $comment;

    public function setRecipeID ($ID){
        $this->RecipeID = $ID;
    }
    public function setComment($comment){
        $this->comment = $comment;
    }



    protected function doExecute() {
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $message = new Comment($this->session->get(Constants::TASTY_USERNAME_VAR),$this->comment,$this->ID,$this->RecipeID);
        $contr->postComments($message);
        $this->session->set(Constants::TASTY_MEATBALL_VIEW.'comments',$contr->getComments(Constants::TASTY_LAST_PAGE));
        /*$this->addVariable(Constants::TASTY_ENTRIES_VAR,$contr->getComments($this->session->get(Constants::TASTY_LAST_PAGE)));
        $this->addVariable(Constants::TASTY_USERNAME_VAR,$this->session->get(Constants::TASTY_USERNAME_VAR));
        $this->addVariable(Constants::TASTY_ISLOGGEDIN, $this->session->get(Constants::TASTY_ISLOGGEDIN));
        //return $this->session->get(Constants::TASTY_LAST_PAGE);*/
    }
}