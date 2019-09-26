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
