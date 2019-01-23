<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author dennis.silva
 */
interface IModel {
    //put your code here
    
    public function salve();
    
    public function listAll();
    
    public function listId();
    
    public function delete();
    
    public function update();
    
}
