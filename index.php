<?php

require_once("config.php");


//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("ar");
//echo json_encode($search);

//Carrega um usuário usandod o login e a senha
$usuario = new Usuario();
$usuario->login("user", "123456");
?>