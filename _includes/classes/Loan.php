<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Loan
 *
 * @author devroy
 */
class Loan {
    public $id; 
    public $user_id;
    public $amount;
    
    public function __construct($amount) {
        global $user_id;
        $this->user_id = $user_id;
        $this->amount = $amount;
    }

    public function save() {
        $stmt = DB::getInstance()->prepare("INSERT into loans (user_id, amount) VALUES (:user_id, :amount)");
        $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_INT);
        $stmt->bindParam(':amount', $this->amount, PDO::PARAM_INT);
        $stmt->execute();
    }
}
