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
			<img class="logo" alt="logo" src="img/logo.jpg"/>
		</div>
	</header>
	<main>
		<section>
			<h2>Membros ativos:</h1>
			
				<table>
					<tr>
						<th>QQUANTIDADE</th>
						<th>ID CONVITE</th>
						<th>NOME</th>
						<th>NICK</th>
					</tr>

				<?php 
				$sql = MySql::conectar()->prepare("SELECT * FROM `membros` ORDER BY NICK;");

				$sql->execute();
				foreach ($sql as $key => $value) {
				?>
					<tr>
						<td></td>
						<td><?php echo $value['ID_JOGO'] ?></td>
						<td><?php echo $value['NOME'] ?></td>
						<td><?php echo $value['NICK'] ?></td>
					</tr>
				<?php
				}
				?>
				</table>
		</section>
	</main>


</body>
</html>