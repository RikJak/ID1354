<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-30
 * Time: 20:10
 */

namespace RecipesWebsite;
use Id1354fw\View\AbstractRequestHandler;
use RecipesWebsite\Util\Constants;
class FirstPage extends AbstractRequestHandler
{
    protected function doExecute()
    {
        $this->session->restart();
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->addVariable(Constants::TASTY_USERNAME_VAR, $this->session->get(Constants::TASTY_USERNAME_VAR));
        $this->addVariable(Constants::TASTY_ISLOGGEDIN, $this->session->get(Constants::TASTY_ISLOGGEDIN));


        return Constants::TASTY_FRONT_PAGE;
    }

}