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
			<h2>Realizar Login:</h2>
			<form  method="post">
				<label>Usuario:</label><br>
				<input type="text" name="usuario"><br><br>
				<label>Senha:</label><br>
				<input type="password" name="senha"><br><br>
				<input name="acao" type="submit" value="Entrar">
			</form>
		</section>

		<section>
			<a class="CadUser" href="cadUser.php">Realizar cadastro</a>
		</section>
	</main>


</body>
</html>