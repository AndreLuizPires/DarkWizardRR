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

				<?php 
					$sql = MySql::conectar()->prepare("SELECT * FROM `hist_guerra` INNER JOIN `membros` ON membros.ID_JOGO = hist_guerra.ID_PLAYER WHERE DATA = '20220606' GROUP BY DATA ORDER BY GUERRA, PONTOS_DIA DESC;");

					$sql->execute();
					foreach ($sql as $key => $value) {
				?>
					
				<b><label class="pGuerra">GUERRA: </label></b> <?php echo $value['GUERRA'] ?> </br>
				<b><label class="pGuerra">FASE: </label></b> <?php echo $value['FASE'] ?> </br>
				<b><label class="pGuerra">DATA: </label></b> <?php echo date_format (new DateTime($value['DATA']), 'd/m/Y') ?> </br></br>
				
				
				
				
			
				<?php
				}
				?>
				<table>
					<tr>
						<th>Rank</th>
						<th>Cod</th>
						<th>Nick</th>
						<th>Rep</th>
						<th>Atqs Possiveis</th>
						<th>Atqs Feitos</th>
						<th>Pontos</th>
						<th>Media p/ Sandalia</th>
						<th>Status Atqs</th>
					</tr>

					<?php 
					$sql = MySql::conectar()->prepare("SELECT * FROM `hist_guerra` LEFT JOIN `membros` ON membros.ID_JOGO = hist_guerra.ID_PLAYER ORDER BY GUERRA, PONTOS_DIA DESC;");

					$sql->execute();
					foreach ($sql as $key => $value) {
					?>
						<tr>
							<td></td>
							<td><?php echo $value['ID_PLAYER'] ?></td>
							<td><?php echo $value['NICK'] ?></td>
							<td><?php echo $value['REPUTACAO_DIA'] ?></td>
							<td><?php echo $value['MAX_ATK_DIA'] ?></td>
							<td><?php echo $value['SANDALIAS_USADAS_DIA'] ?></td>
							<td><?php echo $value['PONTOS_DIA'] ?></td>
							<td><?php echo $value['MEDIA_DIA'] ?></td>
							<td><?php echo $value['STATUS_ATK_DIA'] ?></td>
						</tr>
					<?php
					}
					?>
				</table>
		</section>
	</main>


</body>
</html>