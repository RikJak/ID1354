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
    protected function doExecute()
    {
        $this->session->restart();
        //$this->session->invalidate();
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        if($contr->logIn($this->username,$this->password )) {

            $this->session->set(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
            $this->session->set(Constants::TASTY_ISLOGGEDIN, true);
            $this->addVariable(Constants::TASTY_ISLOGGEDIN, true);
            $this->session->set(Constants::TASTY_CONTR_KEY,$contr);
            $this->session->set(Constants::TASTY_USERNAME_VAR,$this->username);
            $this->addVariable(Constants::TASTY_USERNAME_VAR,$this->username);

            echo $this->session->get(Constants::TASTY_USERNAME_VAR);
            echo $this->session->get(Constants::TASTY_ISLOGGEDIN);
            return Constants::TASTY_FRONT_PAGE;
        }
        echo "Only characters and numbers in username!";
        return Constants::TASTY_LOGIN_VIEW;
    }
}