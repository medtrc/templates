<?php 
session_start();
include 'connexion.php' ;
?>
<html>
<head>
	<title>Articles</title>
	<?php include("header.php") ;?>
	<?php include("menu.php")   ;?>

	<nav id="contenu">
		<?php
		
		$req1=mysql_query("SELECT * FROM articles where typeART='club'");
		$i=0;
		while ($ligne=mysql_fetch_array($req1)) {

		 ?>
		 <div id="news">
			<h3><a href="article.php?idArt=<?php echo $ligne[0];?>"> <?php echo $ligne[1]; ?> </a></h3>

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
					if ($_SESSION['type'] =='adminC' || $_SESSION['type'] =='adminS'){
 			   	?>
				<p>
				<a href="Ajoutarticle.php" class="ajout" > Ajouter un Article : <img src="images/ajout.png" alt="image non trouvée"></a>
				</p>
				<?php
				    }
					}
				else
				{
				?>
				<p>
				<a href="index.php" > se connecter :</a>
				</p>
				<?php
				}
			    ?>
<br>
	</nav>
<?php include("footer.php") ?>
</body>

</html>