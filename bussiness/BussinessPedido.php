<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of BussinessPedido
 *
 * @author dennis.silva
 */

include '../interface/IBussiness.php';

class BussinessPedido implements IBussiness {
    //put your code here 
    
    private $pedido;
    
    public function __construct() {
        $this->pedido = new Pedido();
    }

    public function delete() {
        
    }

    public function listAll() {
        
    }

    public function listId() {
        
    }

    public function salve() {
        
    }

    public function update() {
        
    }

}
