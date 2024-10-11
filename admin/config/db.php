<?php 
include_once 'config.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_SCHEMA, DB_PORT);

if($conn->connect_errno){
    echo "Erro Banco de dados: {$db->connect_error}";    
    exit();
   }
    <?php