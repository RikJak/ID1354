<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-12-11
 * Time: 11:19
 */
namespace RecipesWebsite;


use Id1354fw\View\AbstractRequestHandler;
use RecipesWebsite\Controller\Controller;
use RecipesWebsite\Util\Constants;
class LoginUser extends AbstractRequestHandler{
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
        $this->session->restart();
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
        }

    }
}