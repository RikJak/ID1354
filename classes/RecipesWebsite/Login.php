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
      /*  $this->session->restart();
        //$this->session->invalidate();
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $success = $contr->logIn($this->username,$this->password);
        if($success) {
            echo true;
            $this->session->set(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
            $this->session->set(Constants::TASTY_ISLOGGEDIN, true);
            $this->addVariable(Constants::TASTY_ISLOGGEDIN, true);
            $this->session->set(Constants::TASTY_CONTR_KEY,$contr);
            $this->session->set(Constants::TASTY_USERNAME_VAR,$this->username);
            $this->addVariable(Constants::TASTY_USERNAME_VAR,$this->username);
           // return Constants::TASTY_FRONT_PAGE;
        } else if(!$success) {
            echo false;
            $this->addVariable(invalidLogIn, true);
        }*/
        return Constants::TASTY_LOGIN_VIEW;
    }
}