<?php

// Informações para conexão
$host = 'localhost';
$usuario = 'andre';
$senha = '102030';
$banco = 'foto';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";

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