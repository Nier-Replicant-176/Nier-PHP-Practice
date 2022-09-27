<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Practice Nier-Replicant</title>
	<link rel="stylesheet" href="style.css" />
    
    <style>
      body {background-image: url('img/image.jpg');}
    </style>

</head>
<body>

	<h3><center>Испытания - это будущее, и оно начинается с Вас!</center></h3>

	<div class="flex-container">

		<div class="header">
				<?php include 'logo.inc.php' ?>
				<?php include 'menu.inc.php' ?>
		</div>

		<div class="about_me">

			<h1> <?php echo $p ?> </h1>

		  <div class="data">
			
			<div class="myImg">
				<?php include 'avatar.php'?>
			</div>

			<div>
            <?php include 'menu2.inc.php'?>
			</div>

			

			<div class="fullname">
				
				<p> Моё имя:
				<?php echo $name, ' ', $surname . '<br>';
					  echo 'Родной город:', ' ', $city; ?>
				</p>

				<p> Мой возраст:
				<?php echo $age; ?>
				лет </p>
				
<hr>
			
				<p>Мы научились создавать переменные</p>
				<p>Изучили простые операции с переменными</p>
				<p>Мы всё умеем и всё можем!</p>
				<p>PHP - это сила!</p>
			

			</div>
		</div>

<hr>

		<div class="knownledge">
			
			<p id="dem">Генератор паролей на PHP:<p>
				
			 <?php include 'knownledge.inc.php'; ?>
		
		</div>

<hr>

		<div class="article">
			
			<h2 id="ritus">Ritus Exorcismi</h2>

		 <p class="text">

		 	<?php echo $exo; ?>
			
		 </p>
		
		</div>
	
	</div>

<hr>

		<?php include 'footer.inc.php' ?>

</div>

</body>

</html>