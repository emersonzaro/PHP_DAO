<?php
require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM  tb_usuarios");
echo json_encode($usuarios);
**/


//Carrega um únuco usuário
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega lista de usuários pelo login
//$search = Usuario::search("Jo");
//echo json_encode($search);

//Carrega usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("Emerson", "1158");
//echo $usuario;

$usuario = new Usuario();

$usuario->setDeslogin("aluno123");
$usuario->setDessenha("qwert");

$usuario->insert();

echo $usuario;

?>
