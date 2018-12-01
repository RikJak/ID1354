<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-12-01
 * Time: 20:00
 */

namespace RecipesWebsite;
use Id1354fw\View\AbstractRequestHandler;
use RecipesWebsite\Util\Constants;
use RecipesWebsite\Controller\Controller;


class DeleteComment extends AbstractRequestHandler
{
    private $CommentID;
    public function setCommentID($ID){
        $this->CommentID = $ID;
    }

    protected function doExecute() {
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        //echo $this->CommentID;
        $contr->removeComment($this->CommentID);
        //echo $this->session->get(Constants::TASTY_LAST_PAGE);
        $this->session->set(Constants::TASTY_LAST_PAGE.'comments', $contr->getComments($this->session->get(Constants::TASTY_LAST_PAGE)));
        $this->addVariable(Constants::TASTY_ENTRIES_VAR,$this->session->get(Constants::TASTY_LAST_PAGE.'comments'));
        $this->addVariable(Constants::TASTY_USERNAME_VAR,$this->session->get(Constants::TASTY_USERNAME_VAR));
        $this->addVariable(Constants::TASTY_ISLOGGEDIN, $this->session->get(Constants::TASTY_ISLOGGEDIN));
        return $this->session->get(Constants::TASTY_LAST_PAGE);
    }
}