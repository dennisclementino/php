<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author dennis.silva
 */
class Produto {
    //put your code here
    
    private $id;
    private $cod;
    private $nome;
    private $valor;
    
    public function getId() {
        return $this->id;
    }

    public function getCod() {
        return $this->cod;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }


    
}
