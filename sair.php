<?php 
               
	require ("conexao.php");
	
	session_destroy();
	unset( $_SESSION );
	
	header('Location: /login/index.php?msg=2"');
	
?>
