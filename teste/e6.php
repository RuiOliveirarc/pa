<?php
	session_start();

	if (isset($_POST["nome"])&& isset($_POST["ano"])) {

		if (is_numeric($_POST["ano"])) {

			$nome=$_POST["nome"];
			$ano=$_POST["ano"];

			//calcular idade
			$idade=date("Y")-$ano;
			echo 'Idade: '.$idade;
			echo "<br>";


			//verificar se ja tem idade para votar +18
			if ($idade>=18) {
				echo "Você tem idade para votar";
			}
			else{
				echo 'Você não tem idade para votar';
			}


			//se o nome for ana e nasceu em 2000 dar acesso a pagina reservada
			if ($nome=="Ana" && $ano=="2000") {
				
				$_SESSION['login']='ok';
				echo "<br>";
			echo "<a href='session.php'>entrar</a>";
			}
			else
			{
				$_SESSION['login']='error';
			}


		}
		else{
		echo 'ERROR!!!!';
		}
	}
	else{
		echo 'ERROR!!!!';
		}
?>