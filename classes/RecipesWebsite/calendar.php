<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-12-01
 * Time: 23:19
 */

namespace RecipesWebsite;

use Id1354fw\View\AbstractRequestHandler;
use RecipesWebsite\Util\Constants;
class calendar extends AbstractRequestHandler
{
    protected function doExecute()
    {

        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->addVariable(Constants::TASTY_USERNAME_VAR, $this->session->get(Constants::TASTY_USERNAME_VAR));
        $this->addVariable(Constants::TASTY_ISLOGGEDIN, $this->session->get(Constants::TASTY_ISLOGGEDIN));
        return Constants::TASTY_CALENDAR_VIEW;
    }

}