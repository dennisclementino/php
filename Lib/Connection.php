<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conncetion
 *
 * @author dennisclementino
 */
class Connection {
    //put your code here
    
    public static $instance;
    
    private function __construct() {
       //
    }
    
    public static function getInstance(){
        
        if(!isset(self::$instance)){
        
            //Acesso para o banco local
            $host = 'localhost';
            $dbname = 'loja';
            $user= 'root';
            $password = 'root';
            
            self::$instance = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));            
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            
        }
        
        return self::$instance; 
        
    }
    
}
