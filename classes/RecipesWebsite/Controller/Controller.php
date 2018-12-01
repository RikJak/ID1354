<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-30
 * Time: 19:41
 */

namespace RecipesWebsite\Controller;

use RecipesWebsite\Model\userVerification;
use RecipesWebsite\Model\CommentHandler;

class Controller{
    private $user;
    private $comments;
    private $username;

    public function __construct()
    {
        $this->user = new userVerification();
        $this->comments = new CommentHandler();
    }

    public function logIn($username, $password){
        if($this->user->verifyUser($username,$password) ){
            //echo "GREAT SUCCESS!";
            $this->username = $username;
            return true;
        }
        return false;
    }

    public function registerUser($username, $password){
        $this->user = new userVerification();
        $this->user->registerUser($username,$password);
    }

    public function postComments(Comment $message){
        if($this->postComments($message)){
            return true;
        }else{
            return false;
        }
    }

    public function getComments($page){
        return $this->comments->getComments($page);
    }
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}