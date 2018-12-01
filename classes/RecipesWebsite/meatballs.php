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


class meatballs extends AbstractRequestHandler {

    protected function doExecute() {

        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->addVariable(Constants::TASTY_ENTRIES_VAR,$contr->getComments("meatballs"));
        return Constants::TASTY_MEATBALL_VIEW;

    }

}
