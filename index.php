<?php 

require_once("config.php");


//Carrega um usuario
//$root = new usuarios();
//$root->loadbyId(2);
//echo $root;

//Carrega uma lista de usuarios
//$lista = usuarios::getList();
///echo json_encode($lista);

//Carrega uma lista de usarios buscando pelo login
//$search = usuarios::search("Pe");
//echo json_encode($search);

//Carrega usuario usando login e senha
$usuarios = new usuarios();
$usuarios->login("Petra","12345");
echo $usuarios;

/*$sql = new sql();
$sql->query("");
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/
 ?>