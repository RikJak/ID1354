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
class Signup extends AbstractRequestHandler{
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
        if(ctype_alnum($this->username) and ctype_print($this->password) and !empty($this->username) and !empty($this->password) ){
            $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
            if($contr->registerUser($this->username, $this->password)){

                $this->session->set(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
                $this->session->set(Constants::TASTY_ISLOGGEDIN, true);
                $this->addVariable(Constants::TASTY_ISLOGGEDIN, true);
                $this->session->set(Constants::TASTY_CONTR_KEY,$contr);
                $this->session->set(Constants::TASTY_USERNAME_VAR,$this->username);
                $this->addVariable(Constants::TASTY_USERNAME_VAR,$this->username);
                $this->addVariable(creationSuccess,true);
                return Constants::TASTY_MY_PAGE;
            }


        }
        //echo "Only characters and numbers in username!";
        return Constants::TASTY_SIGNUPP_VIEW;
    }
}