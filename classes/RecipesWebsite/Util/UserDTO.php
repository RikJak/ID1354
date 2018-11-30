<?php
/**
 * Created by PhpStorm.
 * UserDTO: Rikard
 * Date: 2018-11-30
 * Time: 17:02
 */

namespace RecipesWebsite\Util;


class UserDTO
{
    private $username;
    private $password;


    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}