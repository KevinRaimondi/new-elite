<?php 
	require ("conexao.php");
	session_start();
	session_destroy();
	$usuario = $_POST['inputUsuario'];
	$senha = $_POST['inputPassword'];
	$query = mysqli_query($conn,"SELECT id, login, senha  FROM usuario WHERE login = '$usuario' AND senha = '$senha'");
	$dados = mysqli_fetch_assoc($query);
	$row = mysqli_num_rows($query);
	if ($row > 0){
		session_start();
		$_SESSION['id']    = $dados['id'];
		$_SESSION['login'] = $_POST['inputUsuario'];
		$_SESSION['senha'] = $_POST['inputPassword'];
		header('Location: /painel');
	}else{
		header('Location: /login/index.php?msg=1"');
	}
?>
