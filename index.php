<?php 

require_once("config.php");

$paulo = new Usuario();

$paulo->loadById(4);

echo $paulo;

 ?>