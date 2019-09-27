<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of functions
 *
 * @author almir-bindo
 */
require_once '../config.php';
require_once (DBAPI);

$customers = null;
$customer = null;

/** Listagem de Clientes */
function index(){
    global $customers;
    $customers = find_all('clients');
}