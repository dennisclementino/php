<?php

include_once '../Business/ProdutoBusiness.php';

/**
 * Description of ProdutoController
 *
 * @author dennisclementino
 */
class ProdutoController extends ProdutoBusiness{
    
    public function listAll() {
        $listProdutos = parent::listAll();
        include_once '../View/produto/listAll.php';
    }
    
    public function newadd(){
        include_once '../View/produto/new.php';
    }
    
    public function save() {
        $listProdutos = parent::save();
        include_once '../View/produto/listAll.php';
    }
    
    public function edit() {
        $produtos = parent::edit();
        include_once '../View/produto/new.php';
    }
    
    public function delete() {
        $listProdutos = parent::delete();
        include_once '../View/produto/listAll.php';
    }
    
}
