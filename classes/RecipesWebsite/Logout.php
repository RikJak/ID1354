<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-12-01
 * Time: 22:48
 */

namespace RecipesWebsite;


use RecipesWebsite\Util\Constants;
use Id1354fw\View\AbstractRequestHandler;

class Logout extends AbstractRequestHandler{

    protected function doExecute()
    {
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $contr->logout();

        $this->session->set(Constants::TASTY_ISLOGGEDIN,false);
        $this->addVariable(Constants::TASTY_ISLOGGEDIN, false);
        $this->session->set(Constants::TASTY_USERNAME_VAR,false);
        $this->session->set(Constants::TASTY_CONTR_KEY,$contr);


    }
}