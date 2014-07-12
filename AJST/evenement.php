<?php 
session_start();
include 'connexion.php' ;
?>
<html>
<head>
	<title>Accueil</title>
	<script type="text/javascript" src="js/JavaScript.js"></script>
</head>

<body>


	<?php include("header.php") ;?>
	<?php include("menu.php") ;?>
	<nav id="contenu" <?php  if(!isset($_SESSION['type'])) echo 'style="margin-right: 220px;"' ; ?> >

		
		<?php
		
		$req1=mysql_query("SELECT * FROM articles where typeART='evenement'");
		while ($ligne=mysql_fetch_array($req1)) {

		 ?>
		 <div id="news">
			<h3><a href="affichevent.php?idArt=<?php echo $ligne[0];?>"> <?php echo $ligne[1]; ?> </a></h3>

			<p id="newsp"><?php echo $ligne[3]; ?> </p>

			<small class="float-right"><?php echo $ligne[8]; ?></small>
			</div>


		 <?php
		     }
			 ?>
			 <br>
<br>
 <?php 
 			   if(isset($_SESSION['type'])){
					if ($_SESSION['type'] =='adminS'){
 			   	?>
				<p>
				<a href="Ajoutarticle.php" class="ajout" > Ajouter un Evenement : <img src="images/ajout.png" alt="image non trouvée"></a>
				</p>
				<?php
				    }
					}
				?>
<br>

	</nav>

	<?php include("footer.php") ?>

</body>
</html>