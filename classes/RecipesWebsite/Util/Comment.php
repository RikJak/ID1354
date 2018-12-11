<?php
/**
 * Created by PhpStorm.
 * UserDTO: Rikard
 * Date: 2018-11-30
 * Time: 16:23
 */
namespace RecipesWebsite\Util;
class Comment {
    protected $username;
    protected $message;
    protected $commentID;
    protected $deleted;
    protected $recipeID;
    public function __construct($username,$message,$commentID,$recipeID){
        $this->username = $username;
        $this->message = $message;
        $this->commentID = $commentID;
        $this->deleted = false;
        $this->recipeID = $recipeID;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getMessage(){
        return $this->message;
    }

    public function setMessage($newMessage){
        $this->message = $newMessage;
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

    public function getRecipeID()
    {
        return $this->recipeID;
    }

    public function jsonSerialize() {
        return [
            'username' => $this->username,
            'message'=>$this->message,
            'commentID'=>$this->commentID,
            'recipeID'=>$this->recipeID
        ];
    }
}