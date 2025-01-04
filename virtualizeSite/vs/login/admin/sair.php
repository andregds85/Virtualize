<?php session_start();
$b=$_SESSION['usuario_logado']="";
session_destroy();

header('Location: ../../login');

?>




