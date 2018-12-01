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
    public function setUsername(){
        return $this->username;
    }
    public function setPassword(){
        return $this->password;
    }
    protected function doExecute()
    {
        $this->session->restart();
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        if($contr->login($_POST['username'], $_POST['password'])) {
            $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
            $this->session->set(Constants::TASTY_ISLOGGEDIN, true);
            $this->addVariable(Constants::TASTY_ISLOGGEDIN, true);
            $this->session->set(Constants::TASTY_CONTR_KEY,$contr);
            echo "You have successfully logged in!";
            return Constants::TASTY_LOGIN_VIEW;
        }
        echo "Only characters and numbers in username!";
        return Constants::TASTY_SIGNUPP_VIEW;
    }
}