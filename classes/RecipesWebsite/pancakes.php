<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-12-01
 * Time: 17:37
 */
namespace RecipesWebsite;
use Id1354fw\View\AbstractRequestHandler;
use RecipesWebsite\Util\Constants;
use RecipesWebsite\Controller\Controller;


class pancakes extends AbstractRequestHandler {

    protected function doExecute() {

        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->session->set(Constants::TASTY_LAST_PAGE,Constants::TASTY_PANCAKES_VIEW);
        $this->addVariable(Constants::TASTY_USERNAME_VAR, $this->session->get(Constants::TASTY_USERNAME_VAR));//$this->session->get(Constants::TASTY_USERNAME_VAR));

        $this->addVariable(Constants::TASTY_ISLOGGEDIN, $this->session->get(Constants::TASTY_ISLOGGEDIN));
        if($this->session->get(Constants::TASTY_PANCAKES_VIEW.'comments')==null) {
            $this->session->set(Constants::TASTY_PANCAKES_VIEW . 'comments', $contr->getComments("pancakes"));
        }
        $this->addVariable(Constants::TASTY_ENTRIES_VAR,$this->session->get(Constants::TASTY_PANCAKES_VIEW.'comments'));



        //$this->addVariable(Constants::TASTY_ENTRIES_VAR,$contr->getComments("meatballs"));
        return Constants::TASTY_PANCAKES_VIEW;

    }

}
