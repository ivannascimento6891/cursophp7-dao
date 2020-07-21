<?php 

require_once("config.php");

$sql = new sql();

$sql->query("");

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

 ?>