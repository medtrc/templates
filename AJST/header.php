<?php 
include 'connexion.php'; ?>

<head>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/galerie.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<script src="./js/agenda.js"></script>
	<script type="text/javascript" src="js/JavaScript.js"></script>
</head>

<body>

	<header>
		<div id="logo"><h1 id="title">Association Jeunes Science Tunisie</h1>
			<small>Portail d'administration</small>
		<?php
			if(isset($_SESSION['type'])){
			  if ($_SESSION['type'] =='adminC' || $_SESSION['type'] =='adminS')
			  {
		?>
				<div id="deco">
					 <ul class="version">		
						<li><?php echo " " ;?></li>
						<li><a href="deconnexion.php">Deconnexion</a></li>
			        </ul>
		        </div>
			  <?php
			  }
			    						}
			  ?>
		
	</header>
	