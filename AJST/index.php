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
	<?php 
		
		if(isset($_SESSION['type'])){
			if ($_SESSION['type'] =='adminC' || $_SESSION['type'] =='adminS' ){
 			   	?>
 			   	<script type="text/javascript">disable_login();</script>
 			   	<?php
 			}	
 		}	
 		else{
				?>
				<nav id="login">
	<form  action="" method="post" name="authentification">
		<ul>
			<li><i class="fa fa-user"></i> Nom D'utilisateur :</li>
		 	<li><INPUT type="text" name="login" value=""></li>
		  	<li><i class="fa fa-lock"></i> Mot de passe :</li>
		  	<li><INPUT type="password" name="pswd"></li>
		  	<li class="floatright"><input type="submit"  name="connecter" value="connecter" id="loginbutton" />
		</ul>
	</form>
	<?php

if(isset($_POST['connecter']))
{
	$login=$_POST['login'];
	$mdp=$_POST['pswd'];
	$requette1=mysql_query("SELECT * FROM admin_club where login='$login' && pswd='$mdp' ");
	$requette2=mysql_query("SELECT * FROM admin_site where login='$login' && pswd='$mdp' ");
	$nb_lignes1=mysql_num_rows($requette1);
	$nb_lignes2=mysql_num_rows($requette2);
	if($nb_lignes1==1 || $nb_lignes2==1)
	{
		$_SESSION['login']=$login;

		if($nb_lignes1)
		{		
			$_SESSION['type']='adminC';
			header("location:index.php") ;
		}
		else if($nb_lignes2)
		{
			$_SESSION['type']='adminS';
			header("location:index.php") ;
		}
	}
	else
	{
		echo'<br><font color="#FF0000">Login ou mot de passe incorrecte';
	}
}
?>
</nav>	
 			   	<script type="text/javascript">
 			   	enable_login();			   
 			   	</script>
 			   	<?php
 			}
 			   	?>

	<nav id="contenu" <?php  if(!isset($_SESSION['type'])) echo 'style="margin-right: 220px;"' ; ?> >

		
		<?php
		
		$req1=mysql_query("SELECT * FROM articles where typeART='association'");
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
					if ($_SESSION['type'] =='adminS'){
 			   	?>
				<p>
				<a href="Ajoutarticle.php" class="ajout" > Ajouter un Article : <img src="images/ajout.png" alt="image non trouvée"></a>
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