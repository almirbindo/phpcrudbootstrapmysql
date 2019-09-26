<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of config
 *
 * @author almir-bindo
 */

/** O nome do banco de dados */
define('DB_NAME', 'test');

/** Usuario do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema */
if(!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema */
if(!defined('BASEURL'))
    define('BASEURL', '/PHPCrudBootstrapMysql/');

/** caminho do arquivo de banc de dados */
if(!defined('DBAPI'))
    define('DBAPI', ABSPATH . 'inc/database.php');

