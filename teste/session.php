<?php
	session_start();
	if($_SESSION['login']=='ok'){
		echo "Area restrita";
	}
	
?>
