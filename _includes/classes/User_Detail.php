<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Detail
 *
 * @author devroy
 */
class User_Detail {
    public $id;
    public $user_id;
    public $trn;
    public $add_line_one;
    public $add_line_two;
    public $add_parish;
    public $add_post_code;
    public $employed = TRUE;
    public $comp_occ;
    public $comp_add_one;
    public $comp_add_two;
    public $comp_parish;
    public $comp_post_code;
    public $bank;
    public $bank_branch;
    public $bank_acc;
    
    public function __construct($trn, 
            $add_line_one, $add_line_two=null, $add_parish,
            $add_post_code=null, $comp_occ, $comp_add_one, $comp_add_two=null, 
            $comp_parish, $comp_post_code=null, $bank=null, $bank_branch=null, $bank_acc=null) {
        global $user_id;
        $this->user_id = $user_id;
        $this->trn = $trn;
        $this->add_line_one = $add_line_one;
        $this->add_line_two = $add_line_two;
        $this->add_parish = $add_parish;
        $this->add_post_code = $add_post_code;
        $this->comp_occ = $comp_occ;
        $this->comp_add_one = $comp_add_one;
        $this->comp_add_two = $comp_add_two;
        $this->comp_parish = $comp_parish;
        $this->comp_post_code = $comp_post_code;
        $this->bank = $bank;
        $this->bank_branch = $bank_branch;
        $this->bank_acc = $bank_acc;
    }
    
    public function save($id=null) {
        if ($id) {
            $query = "UPDATE users "
                    . "(user_id, trn, add_line_one, add_line_two, add_parish, add_post_code, employed, comp_occ, comp_add_one, comp_add_two, comp_parish, comp_post_code, bank, bank_branch, bank_acc)"
                    . " VALUES (:user_id, :trn, :add_line_one, :add_line_two, :add_parish, :add_post_code. :employed, :comp_occ, :comp_add_one, :comp_add_two, :comp_parish, :comp_post_code, :bank, :bank_branch, :bank_acc)"
                    . "WHERE `id` = :id";
            $stmt = DB::getInstance()->prepare($query);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->bindParam(':trn', $this->trn, PDO::PARAM_STR);
            $stmt->bindParam(':add_line_one', $this->add_line_one, PDO::PARAM_STR);
            $stmt->bindParam(':add_line_two', $this->add_line_two, PDO::PARAM_STR);
            $stmt->bindParam(':add_parish', $this->add_parish, PDO::PARAM_STR);
            $stmt->bindParam(':add_post_code', $this->add_post_code, PDO::PARAM_STR);
            $stmt->bindParam(':employed', $this->employed, PDO::PARAM_INT);
            $stmt->bindParam(':comp_occ', $this->comp_occ, PDO::PARAM_STR);
            $stmt->bindParam(':comp_add_one', $this->comp_add_one, PDO::PARAM_STR);
            $stmt->bindParam(':comp_add_two', $this->comp_add_two, PDO::PARAM_STR);
            $stmt->bindParam(':comp_parish', $this->comp_parish, PDO::PARAM_STR);
            $stmt->bindParam(':comp_post_code', $this->comp_post_code, PDO::PARAM_STR);
            $stmt->bindParam(':bank', $this->bank, PDO::PARAM_STR);
            $stmt->bindParam(':bank_branch', $this->bank_branch, PDO::PARAM_STR);
            $stmt->bindParam(':bank_acc', $this->bank_acc, PDO::PARAM_STR);
            $stmt->execute();
        } else {
            $query = "INSERT into user_details "
                . "(user_id, trn, add_line_one, add_line_two, add_parish, add_post_code, employed, comp_occ, comp_add_one, comp_add_two, comp_parish, comp_post_code, bank, bank_branch, bank_acc)"
                . " VALUES (:user_id, :trn, :add_line_one, :add_line_two, :add_parish, :add_post_code, :employed, :comp_occ, :comp_add_one, :comp_add_two, :comp_parish, :comp_post_code, :bank, :bank_branch, :bank_acc)";
            $stmt = DB::getInstance()->prepare($query);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_INT);
            $stmt->bindParam(':trn', $this->trn, PDO::PARAM_STR);
            $stmt->bindParam(':add_line_one', $this->add_line_one, PDO::PARAM_STR);
            $stmt->bindParam(':add_line_two', $this->add_line_two, PDO::PARAM_STR);
            $stmt->bindParam(':add_parish', $this->add_parish, PDO::PARAM_STR);
            $stmt->bindParam(':add_post_code', $this->add_post_code, PDO::PARAM_STR);
            $stmt->bindParam(':employed', $this->employed, PDO::PARAM_INT);
            $stmt->bindParam(':comp_occ', $this->comp_occ, PDO::PARAM_STR);
            $stmt->bindParam(':comp_add_one', $this->comp_add_one, PDO::PARAM_STR);
            $stmt->bindParam(':comp_add_two', $this->comp_add_two, PDO::PARAM_STR);
            $stmt->bindParam(':comp_parish', $this->comp_parish, PDO::PARAM_STR);
            $stmt->bindParam(':comp_post_code', $this->comp_post_code, PDO::PARAM_STR);
            $stmt->bindParam(':bank', $this->bank, PDO::PARAM_STR);
            $stmt->bindParam(':bank_branch', $this->bank_branch, PDO::PARAM_STR);
            $stmt->bindParam(':bank_acc', $this->bank_acc, PDO::PARAM_STR);
            $stmt->execute();
        }
    }
}
