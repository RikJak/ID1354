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
class Login extends AbstractRequestHandler{
    private $username;
    private $password;
    public function setUsername($username){
        $this->username = $username;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    public function setRemember(){

    }
    protected function doExecute()
    {

        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->session->set(Constants::TASTY_LAST_PAGE,Constants::TASTY_LOGIN_VIEW);
        $this->addVariable(Constants::TASTY_USERNAME_VAR, $this->session->get(Constants::TASTY_USERNAME_VAR));
        $this->addVariable(Constants::TASTY_ISLOGGEDIN, $this->session->get(Constants::TASTY_ISLOGGEDIN));

        return Constants::TASTY_LOGIN_VIEW;
    }
}