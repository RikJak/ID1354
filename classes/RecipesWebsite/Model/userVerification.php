<?php
/**
 * Created by PhpStorm.
 * UserDTO: Rikard
 * Date: 2018-11-30
 * Time: 17:01
 */

namespace RecipesWebsite\Model;


use RecipesWebsite\Integration\ServerAccess;
use RecipesWebsite\Util\UserDTO;

class userVerification
{
    private $dbHandler;

    public function __construct()
    {
        $this->dbHandler = new ServerAccess();
    }

    public function verifyUser($username,$password)
    {

        if (ctype_alnum($username) && ctype_alnum($password)) {

        $details = $this->dbHandler->getUser($username);
        if (password_verify($password, $details->getPassword())) {
            return true;
        }

    }
        return false;
    }

    public function registerUser($username,$password){

        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
        $user = new UserDTO($username,$hashedPassword);
        $this->dbHandler->setUser($user);
    }
}