<!--
	Author: Paulo Victor Xavier Dias da Silva;
	Author URI: https://github.com/pvxds; 
	Contact: xavierpaulovictor@gmail.com;
	Version: 1.0;
-->
<html>
	<head>
		<title>MonsterGenerator</title>
		<?php include 'ClassMonster.php'; ?>
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<!-- Creating, naming, setting race and building monster's attributes -->
		<?php 
			$enemy = new Monster(intval(rand(1,6)));
			$enemy->raceIt();
			$enemy->nameIt();
			$enemy->roll();
		?>
		<!-- Printing monster's attributes -->
		<div class='print'>
			This monster's name is <spam class='id'><?php echo $enemy->getName(); ?></spam>. <br>
			Is a <spam class='id'><?php echo $enemy->getRace(); ?></spam> LVL <spam class='id'><?php echo $enemy->getRank(); ?></spam> and it's status:
			<p>
				STR <?php echo $enemy->getSTR(); ?>;<br>
				DEF <?php echo $enemy->getDEF(); ?>;<br>
				AGI <?php echo $enemy->getAGI(); ?>;<br>
				VIT <?php echo $enemy->getVIT(); ?>;<br>
			</p>
		</div>
		<a href="index.php">Generate</a>
		
	</body>
</html>