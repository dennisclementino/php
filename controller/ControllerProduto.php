<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerProduto
 *
 * @author dennis.silva
 */

include '../bussiness/BussinessProduto.php';

class ControllerProduto extends BussinessProduto{
    //put your code here
    
    public function index(){
        $this->listAll();
        
        include '../view/produto.php';
        
    }
    
    
}
