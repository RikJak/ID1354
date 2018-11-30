<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-30
 * Time: 19:41
 */

namespace RecipesWebsite\Controller;

use RecipesWebsite\Model\userVerification;

class Controller{
    private $user;
    private $username;

    public function __construct()
    {
        $this->user = new userVerification();
    }

    public function logIn($username, $password){
        if($this->user->verifyUser($username,$password) ){
            echo "GREAT SUCCESS!";
            $this->username = $username;
        }
    }

    public function registerUser($username, $password){
        $this->user = new userVerification();
        $this->user->registerUser($username,$password);

        echo "USER REGISTERED";
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}