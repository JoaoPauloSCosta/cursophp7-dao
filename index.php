<?php 

require_once("config.php");


//Carrega um usuário
/*
$paulo = new Usuario();
$paulo->loadById(4);

echo $paulo;
*/

//carrega uma lista de usuários

//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login

//$search = Usuario::search("joao");
//echo json_encode($search);


//Carrega um usuário, usando um login e uma senha

//$usuario=new Usuario();
//$usuario->login("joao","ruti");
//echo $usuario;

/*
//Criando um novo usuário
$aluno=new Usuario("aluno","@lun0");

$aluno->insert();
echo $aluno;
*/

//Alterar um usuário
/*
$usuario=new Usuario();
$usuario->loadById(6);
$usuario->update("professor","!@#$%¨&*");

echo $usuario;
*/


$usuario=new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;

 ?>