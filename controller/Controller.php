<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './ControllerPedido.php';
include './ControllerProduto.php';
include './ControllerProdutoPedido.php';


if (isset($_GET['controller'])) {

    $controller = $_GET['controller'];
    $action = $_GET['action'];

    if ($controller == 'produto' && $action=='list') {
        $produtoController = new ControllerProduto();
        
        $produtoController->listAll();
        
    }
}