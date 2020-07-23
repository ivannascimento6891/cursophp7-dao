<?php 

require_once("config.php");

$root = new usuarios();

$root->loadbyId(2);

echo $root;
/*$sql = new sql();

$sql->query("");

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
 ?>