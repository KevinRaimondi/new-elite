<?php
session_start();
if(!empty($_SESSION['login_usu'])){
	echo "Olá ".$_SESSION['nome_usu'].", Bem vindo <br>";
	echo "<a href='sair.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");	
}