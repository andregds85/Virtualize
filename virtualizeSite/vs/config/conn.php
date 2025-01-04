<?php

// Informações para conexão
$host = 'localhost';
$usuario = 'andre';
$senha = '102030';
$banco = 'foto';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";

$servername = "localhost";
$username = "andre";
$password = "102030";
$dbname = "foto";





try 
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}