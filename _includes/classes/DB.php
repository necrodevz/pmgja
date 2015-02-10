<?php

class DB {

private $host = 'localhost';
private $user = 'pmgjamaica';
private $password = 'pmgjamaica';
private $database = 'pmg_data';

private static $instance = NULL;

private function __constuct() {
    
}

public static function    getInstance() {
    if(!self::$instance) {
        self::$instance = new PDO('mysql:host=localhost;dbname=pmg_data;charset=utf8','pmgjamaica', 'pmgjamaica',array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 

    }
    return self::$instance;
}

private function __clone() {
}
}