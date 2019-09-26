<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author almir-bindo
 */
mysqli_report(MYSQLI_REPORT_STRICT);

function open_database(){
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $ex) {
        echo $ex->getMessage();
        return null;
    }
}

function close_database($conn){
    try {
        mysqli_close($conn);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

function find($table = null, $id = null){
    $database = open_database();
    $found = null;
    try {
        if($id){
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if($result->num_rows > 0){
                $found = $result->fetch_assoc();
            }
        }
        else {
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);
            if($result->num_rows > 0){
                $found = $result->fetch_all(MYSQLI_ASSOC);
                
                /* Metodo Alternativo
                 * $found = array();
                 * while($row = $result->fetch_assoc()){
                 *  array_push($found, $row);
                 * }
                 */
            }
        }
        
    } catch (Exception $ex) {
        $_SESSION['message'] = $ex->getMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}