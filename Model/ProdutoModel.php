<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'GenericModel.php';
/**
 * Description of ProdutoModel
 *
 * @author dennisclementino
 */
class ProdutoModel extends GenericModel{
    //put your code here
    public function __construct() {
        parent::__construct('produto');
    }
    
}
