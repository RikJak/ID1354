<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-30
 * Time: 21:54
 */

namespace RecipesWebsite;


use Id1354fw\View\AbstractRequestHandler;
use RecipesWebsite\Controller\Controller;
use RecipesWebsite\Util\Constants;
class GetUser extends AbstractRequestHandler
{

    protected function doExecute()
    {

        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->addVariable(Constants::TASTY_JSON_DATA_VAR,
            $contr->getUsername());

        $this->session->set(Constants::TASTY_CONTR_KEY, $contr);
        return Constants::TASTY_JSON_VIEW;
    }
}