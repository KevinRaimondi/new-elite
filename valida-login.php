<?php 
	require ("conexao.php");
	$usuario = $_POST['inputUsuario'];
	$senha = $_POST['inputPassword'];
	$query = mysqli_query($conn,"SELECT * FROM usuario WHERE login = '$usuario' AND senha = '$senha'");
	$row = mysqli_num_rows($query);
	if ($row > 0){
		session_start();
		$_SESSION['usuario'] = $_POST['inputUsuario'];
		$_SESSION['senha'] = $_POST['inputPassword'];
		header('Location: /planos');
	}else{
		header('Location: /login/index.php?msg=1"');
	}
?>
