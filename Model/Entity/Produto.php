<?php

include_once '../Interfaces/IEntity.php';

/**
 * Description of Produto
 *
 * @author dennisclementino
 */
class Produto implements IEntity {

    private $id;
    private $nome;
    private $cod;
    private $descricao;
    private $valor;

    public function __construct($id, $nome, $cod, $descricao, $valor) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cod = $cod;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    //put your code here
    public function getObjArray() {
        return get_object_vars($this);
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCod() {
        return $this->cod;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

}
