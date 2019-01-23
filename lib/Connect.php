<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connect
 *
 * @author dennis.silva
 */
class Connect {

    //put your code here

    private $pdo;
    private $host = '196.168.10.10';
    private $base = 'prova_dennis';
    private $user = 'root';
    private $password = 'Redes21220';

    public function open() {
           try {
            $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->base, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }
    
    public function query($sql){
        return $this->pdo->execute($sql);
    }

}
