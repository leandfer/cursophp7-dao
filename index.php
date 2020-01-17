<?php

	require_once("config.php");
/*
	$sql = new Sql();

	$usuarios = $sql->select("select * from tb_usuarios");

	echo json_encode($usuarios);
*/

	$root = new Usuarios();
	$root->loadById(4);

	//echo "<br>";
	echo $root;
?>