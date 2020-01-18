<?php

	require_once("config.php");
/*
	$sql = new Sql();

	$usuarios = $sql->select("select * from tb_usuarios");

	echo json_encode($usuarios);
*/
//Carrega um usuario
//	$root = new Usuarios();
//	$root->loadById(4);
//	echo $root;

//Carrega uma lista de usuarios
//	$lista = Usuarios :: getList();
//	echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//	$search = Usuarios::search("o");
//	echo json_encode($search);

//Carrega um usuario usando um login e a senha
//	$usuario = new Usuarios();
//	$usuario ->login("leandro","123456789");
//	echo $usuario;

//insert de um usuario novo
/*	$aluno = new Usuarios();
	$aluno->setDeslogin("lefe");
	$aluno->setDessenha("@ledfer");

	$aluno->insert();

	echo $aluno;
*/

//update usuarios
	$usuario = new Usuarios();

	$usuario->loadById(6);
	$usuario->update("professor","#@@#$!");

	echo $usuario;


?>