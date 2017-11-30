<?php 
	require ("conexao.php");
	$usuario = $_POST['inputUsuario'];
	$senha = $_POST['inputPassword'];
	//$senha = md5($_POST['inputPassword']);
	$query = mysqli_query($conn,"SELECT * FROM usuario WHERE login_usu = '$usuario' AND senha_usu = '$senha'");
	$row = mysqli_num_rows($query);
	if ($row > 0){
		session_start();
		$_SESSION['usuario'] = $_POST['inputUsuario'];
		$_SESSION['senha'] = $_POST['inputPassword'];
		header('Location: dashboard.php');
	}else{
		header('Location: index.php?msg=1');
	}
?>
