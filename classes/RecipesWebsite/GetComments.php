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
class GetComments extends AbstractRequestHandler{
    private $Recipe ='meatballs';
    public function setRecipe($recipe){
        $this->Recipe = $recipe;
    }

    protected function doExecute()
    {

        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->session->set(Constants::TASTY_LAST_PAGE,Constants::TASTY_LOGIN_VIEW);
        $arr = $contr->getComments($this->Recipe);
        foreach ($arr as &$value) {
            $value = $value->jsonSerialize();
        }
        echo json_encode($arr);
        $this->addVariable(Constants::TASTY_JSON_DATA_VAR, json_encode($contr->getComments($this->Recipe)[0]->jsonSerialize()));
        $this->session->set(Constants::TASTY_CONTR_KEY, $contr);
        //return Constants::TASTY_JSON_VIEW;

    }
}