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

$usuario=new Usuario();
$usuario->login("joao","ruti");
echo $usuario;


 ?>