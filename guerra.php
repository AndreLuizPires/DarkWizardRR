<?php
	include('config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
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
			<img class="logo" alt="logo" src="img/logoWar.jpg"/>
		</div>
	</header>
	<main>
		<section>
			<h2>Acompanhamento Guerra:</h1>
			
				<table>
					<tr>
						<th>Rank</th>
						<th>Cod</th>
						<th>Guerra</th>
						<th>Fase</th>
						<th>Data</th>
						<th>Rep</th>
						<th>Atqs Possiveis</th>
						<th>Atqs Feitos</th>
						<th>Pontos</th>
						<th>Media p/ Sandalia</th>
					</tr>

					<?php 
					$sql = MySql::conectar()->prepare("SELECT * FROM `hist_guerra` ORDER BY GUERRA;");

					$sql->execute();
					foreach ($sql as $key => $value) {
					?>
						<tr>
							<td></td>
							<td><?php echo $value['ID_PLAYER'] ?></td>
							<td><?php echo $value['GUERRA'] ?></td>
							<td><?php echo $value['FASE'] ?></td>
							<td><?php echo $value['DATA'] ?></td>
							<td><?php echo $value['REPUTACAO_DIA'] ?></td>
							<td><?php echo $value['MAX_ATK_DIA'] ?></td>
							<td><?php echo $value['SANDALIAS_USADAS_DIA'] ?></td>
							<td><?php echo $value['PONTOS_DIA'] ?></td>
							<td><?php echo $value['MEDIA_DIA'] ?></td>
						</tr>
					<?php
					}
					?>
				</table>
		</section>
	</main>


</body>
</html>