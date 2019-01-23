<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BussinessProduto
 *
 * @author dennis.silva
 */
include '../interface/IBussiness.php';
include '../class/Produto.php';
include '../model/ModelProduto.php';

class BussinessProduto implements IBussiness {

    private $produto;
    private $modelProduto;

    public function __construct() {
        $this->produto = new Produto();
        $this->modelProdudo = new ModelProduto();
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
