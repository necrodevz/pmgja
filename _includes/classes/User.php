<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author devroy
 */
class User {
    public $id;
    public $fname;
    public $lname;
    public $email;
    public $user_id; 
    
    public function __construct($fname, $lname, $email) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
    }
    
    public function save($id=null) {
        if($id) {
            try {
            $stmt = DB::getInstance()->prepare("UPDATE users SET fname=:fname, lname=:lname, email=:email where id=:id");
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':fname', $this->fname, PDO::PARAM_STR);
            $stmt->bindParam(':lname', $this->lname, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();
            } catch (PDOException $err) {
                echo $err;
            }
        } else { 
            $stmt = DB::getInstance()->prepare("INSERT into users (fname, lname, email) VALUES (:fname, :lname, :email)");
            $stmt->bindParam(':fname', $this->fname, PDO::PARAM_STR);
            $stmt->bindParam(':lname', $this->lname, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();
            $this->user_id = DB::getInstance()->lastInsertId();
        }
    }
        
}