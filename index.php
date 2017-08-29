<?php 

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jor");
//echo json_encode($search);


//Carrega usuario, usando login e senha
//$usuario = new Usuario();
//$usuario->login("jose","12345678");
//echo $usuario;


//Criando um novo usuario
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;


$usuario = new Usuario();
$usuario->loadById(7);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;



 ?>