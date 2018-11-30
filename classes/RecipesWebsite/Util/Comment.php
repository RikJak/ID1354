<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-30
 * Time: 16:23
 */
namespace RecipesWebsite\Util;
class Comment{
    private $username;
    private $message;
    private $commentID;
    private $deleted;
    public function __construct($username,$message,$commentID){
        $this->username = $username;
        $this->message = $message;
        $this->commentID = $commentID;
        $this->deleted = false;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getMessage(){
        return $this->message;
    }
    public function getCommentID(){
        return $this->commentID;
    }
    public function isDeleted(){
        return $this->deleted;
    }
    public function setDeleted($deleted){
        $this->deleted= $deleted;
    }
    public function setCommentID($commentID){
        $this->commentID=$commentID;
    }
}