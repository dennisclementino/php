<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_GET["action"])) {

    if (isset($_GET["method"])) {

        $action = (string) $_GET['action'];
        $class = ucfirst(strtolower($action)) . "Controller";
        
        include_once $class . ".php";

        $method = (string) $_GET['method'];
        $obj = new $class();
        if (method_exists($obj, $method)) {
            call_user_func(array($obj, $method));
        }
    }
}