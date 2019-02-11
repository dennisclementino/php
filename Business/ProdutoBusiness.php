<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Interfaces/IBusiness.php';
include_once '../Model/ProdutoModel.php';
include_once '../Model/Entity/Produto.php';

/**
 * Description of ProdutoBusiness
 *
 * @author dennisclementino
 */
class ProdutoBusiness implements IBusiness {

    //put your code here

    public $produtoModel;

    public function __construct() {
        $this->produtoModel = new ProdutoModel();
    }

    public function delete() {
        try {
            $id = $_GET['id'];
            $this->produtoModel->delete(array('id'=>$id));
            
            $resutProduto = $this->produtoModel->listAll(null);
            $listProdutos = array();
            while ($row = $resutProduto->fetch(PDO::FETCH_ASSOC)) {
                $listProdutos[] = new Produto($row['id'], $row['nome'], $row['cod'], $row['descricao'], $row['valor']);
            }

            return $listProdutos;
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function edit() {
        try {
            $id = $_GET['id'];
            $resutProduto = $this->produtoModel->listBy(array('id'=>$id));
            $produto = null;
            while ($row = $resutProduto->fetch(PDO::FETCH_ASSOC)) {
                $produto = new Produto($row['id'], $row['nome'], $row['cod'], $row['descricao'], $row['valor']);
            }

            return $produto;
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function listAll() {
        try {
            $resutProduto = $this->produtoModel->listAll(null);
            $listProdutos = array();
            while ($row = $resutProduto->fetch(PDO::FETCH_ASSOC)) {
                $listProdutos[] = new Produto($row['id'], $row['nome'], $row['cod'], $row['descricao'], $row['valor']);
            }

            return $listProdutos;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function save() {
        try {
            
            $produto = new Produto($_POST['id'], $_POST['nome'], $_POST['cod'], $_POST['descricao'],$_POST['valor']);
            
            if($produto->getId()== ''){
                $this->produtoModel->save($produto->getObjArray());
            }else{
                $this->produtoModel->edit($produto->getObjArray());
            }
            
            $resutProduto = $this->produtoModel->listAll(null);
            $listProdutos = array();
            while ($row = $resutProduto->fetch(PDO::FETCH_ASSOC)) {
                $listProdutos[] = new Produto($row['id'], $row['nome'], $row['cod'], $row['descricao'], $row['valor']);
            }

            return $listProdutos;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}
