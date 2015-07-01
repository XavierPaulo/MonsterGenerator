<!--
	Author: Paulo Victor Xavier Dias da Silva;
	Author URI: https://github.com/pvxds; 
	Contact: xavierpaulovictor@gmail.com;
	Version: 1.0;
-->
<html>
	<head>
		<title>Status Maker</title>
		<?php include 'ClassMonster.php'; ?>
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="style.css"/>

		<?php 
			$enemy = new Monster(intval(rand(1,6)));
			$enemy->raceIt();
			$enemy->nameIt();
			$enemy->roll();
		?>
		<div class='print'>
			This monster's name is <spam class='id'><?php echo $enemy->getName(); ?></spam>. <br>
			Is a <spam class='id'><?php echo $enemy->getRace(); ?></spam> LVL <spam class='id'><?php echo $enemy->getRank(); ?></spam> and it's status are:
			<p>
				STR <?php echo $enemy->getSTR(); ?>;<br>
				DEF <?php echo $enemy->getDEF(); ?>;<br>
				AGI <?php echo $enemy->getAGI(); ?>;<br>
				VIT <?php echo $enemy->getVIT(); ?>;<br>
			</p>
		</div>
		<a href="Status%20Maker.php">Generate</a>
		
	</body>
</html>