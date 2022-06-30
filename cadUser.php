<?php
	include('config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cla Dark Wizard</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="author" content="André Luiz @ZeroGC" />
</head>
<body>

	<?php
		include('navbar.php');
	?>

	<header>
		<div>
			<img class="logo" alt="logo" src="img/login.jpg"/>
		</div>
	</header>
	<main>
		<section>
			<h2>Realizar Cadastro:</h2>
			<form  method="post">
				<label>Membro:</label><br>
				<select name="id_jogo">
				<?php 
				$sql = MySql::conectar()->prepare("SELECT * FROM `membros` ORDER BY NICK;");

				$sql->execute();
				foreach ($sql as $key => $value) {
				?>
					<option value=<?php echo $value['ID_JOGO'] ?>><?php echo $value['NICK'] ?></option>
				
				<?php
				}
				?>
				</select><br><br>

				<label>Usuario:</label><br>
				<input type="text" name="usuario"><br><br>

				<label>Senha:</label><br>
				<input type="password" name="senha"><br><br>

				
				<label>Nível de Acesso:</label><br>
				<select name="id_jogo">
				<?php 
				$sql = MySql::conectar()->prepare("SELECT * FROM `nivel_acesso`;");

				$sql->execute();
				foreach ($sql as $key => $value) {
				?>
					<option value=<?php echo $value['ID_NIVEL'] ?>><?php echo $value['NIVEL'] ?></option>
				
				<?php
				}
				?>
				</select><br><br>

				<input name="acao" type="submit" value="Cadastrar">
				
			</form>
		</section>
	</main>


</body>
</html>