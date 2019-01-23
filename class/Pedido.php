<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author dennis.silva
 */
class Pedido {
    //put your code here
    
    private $id;
    private $codigo;
    private $data;
    private $obs;
    
    public function getId() {
        return $this->id;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getData() {
        return $this->data;
    }

    public function getObs() {
        return $this->obs;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }
    
}
