<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Interfaces/IModel.php'; 
include_once '../Lib/Connection.php';
/**
 * Description of GenericModel
 *
 * @author dennisclementino
 */
class GenericModel implements IModel {
    //put your code here
    
    private $conn;
    protected $table;

    public function __construct($table) {
        $this->conn = Connection::getInstance();
        $this->table = $table;
    }

    public function delete($data) {
         try{
            
            $sql = "DELETE FROM $this->table WHERE id = :id";
            
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
            $this->conn->commit();
            
            return $this->conn->lastInsertId();
        } catch (Exception $e){
            
            $this->conn->rollback();
            
            throw new Exception($e->getMessage());
        }
    }

    public function listAll($data) {
        try{
             $consulta = $this->conn->query("SELECT * FROM $this->table;");
             return $consulta;
        } catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function listBy($data) {
        
        $criteria = null;
        
        foreach ($data as $key => $value) {
            $criteria .= " AND ".$key." = ".$value;
        }
        
        $sql = "SELECT * FROM $this->table where 1=1 ".$criteria;
        
        try{
             $consulta = $this->conn->query($sql);
             return $consulta;
        } catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function save($data) {
        
        try{
            
            //Organizar dados
            $coluns = NULL;
            $values = NULL;
            $arrayData = array();
            foreach ($data as $key => $value){
                if($value !=''){
                    $values .= ":".$key.", ";
                    $coluns .= $key.", ";
                    $arrayData[":".$key] = $value;
                }
            }
            
            $coluns = substr($coluns, 0, -2);
            $values = substr($values, 0, -2);
            
            $sql = "INSERT INTO $this->table ($coluns) VALUES($values)";
            
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arrayData);
            $this->conn->commit();
            
            return $this->conn->lastInsertId();
        } catch (Exception $e){
            
            $this->conn->rollback();
            
            throw new Exception($e->getMessage());
        }
        
        
    }

    public function edit($data) {
        try{
            
            //Organizar dada
            $coluns = NULL;
            $values = NULL;
            $arrayData = array();
            foreach ($data as $key => $value){
                if($value !=''){
                    $coluns .= $key." = :".$key.", ";
                    $arrayData[":".$key] = $value;
                }
            }
            
            $coluns = substr($coluns, 0, -2);
            
            $sql = "UPDATE $this->table SET $coluns WHERE id = :id";
            
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arrayData);
            $this->conn->commit();
            
            return $this->conn->lastInsertId();
        } catch (Exception $e){
            
            $this->conn->rollback();
            
            throw new Exception($e->getMessage());
        }
        
    }

}
