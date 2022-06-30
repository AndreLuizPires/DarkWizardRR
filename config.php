<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $autoload = function($class){
        include('classes/'.$class.'.php');     
    };  
    

    spl_autoload_register($autoload);
    
    //CONECTAR COM BANCO DE DADOS
    define('HOST','localhost');  //HOST
    define('USER','root'); //USUARIO
    define('PASSWORD',''); //SENHA
    define('DATABASE','dark_wizard'); //NOME DO BANCO DE DADOS

    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

?>