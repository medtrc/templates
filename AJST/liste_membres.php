<?php
session_start();
 include 'connexion.php'; ?>

<html>
<head>
	<title>Titre</title>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

</head>

<body>

    <?php include("header.php") ?>
	<?php include("menu.php") ?>


	<nav id="contenu">
		 	<h1 id="Titre"> <u>Membres</u> </h1>

<form name="FormM" action="" method="post" >
		<table id="utilisateur"  width="100%" >
			<tr>
				<td colspan="3">Section</td>
				<td colspan="2">
					<select  name="section">
					<option></option>
					<option value="Informatique">Informatique</option>
					<option value="Ecologie">Ecologie</option>
					<option value="Astronomie">Astronomie</option>
					<option value="Electronique">Electronique</option>
					</select>
				</td>
				<td colspan="3"><button name="afficher" type="submit"><i class="fa fa-hand-o-right"></i>Afficher</button></td>
			</tr>
			<tr>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Tel</th>
		<th>email</th>
		<th>Poste</th>
		<th>Date inscription</th>
		<?php 
		
 			   if(isset($_SESSION['type'])){
					if ($_SESSION['type'] =='adminC'){
 			   	?>
		<th colspan="3">Action</th>
		 <?php
			    }
			}
			    ?>

	</tr>
<?php

//suite au clique sur afficher
 
  if(isset($_POST['afficher']))
  {
  $section=$_POST['section'];
  $dr=mysql_query("select * from membres where section='$section' ")  or die ("*** Erreur dans la requ&ecirc;te ***<br>") ; 
  $nbr_lignes=mysql_num_rows($dr); 
  //si il y a aucun membre dans cette section
  if($nbr_lignes==0)
	{
	?>
	<tr>
	<td colspan="7" align="center">Aucun membre ajouter pour cette section </td>
	</tr>
	<?php
	} 
	//on affiche la liste des membres correspondantes
  else{
  	$couleurs=array('#CCC','#FFF');
  	$nbr=count($couleurs) ; 
		$i=0;
	  while($lignes=mysql_fetch_array($dr))
	  {
	  	echo '<tr style="background-color : '.$couleurs[ $i%$nbr].'" >';
	  ?>
		   <td><?php echo $lignes[1] ;?></td>
		   <td><?php echo $lignes[2] ;?></td>
		   <td><?php echo $lignes[3] ;?></td>
		   <td><?php echo $lignes[4] ;?></td>
  		   <td><?php echo $lignes[6] ;?></td>
  		   <td><?php echo $lignes[7] ;?></td>

 			   <?php 
 			   if(isset($_SESSION['type'])){
					if ($_SESSION['type'] =='adminC'){
 			   	?>
			   <th><a href="modif_membre.php?idM=<?php echo $lignes[0];?>"><img src="images/modif.png" /></a></th>
			   <th><a href="suppression.php?idM=<?php echo $lignes[0];?>"><img src="images/suppression.png" /></a></th>
			  <?php
			    }
			}
			    ?>
	  <?php
		$i++ ; 
		echo '</tr>';
        }
  }
}
  ?>
</table>
<br>
<br>
 <?php 
 			   if(isset($_SESSION['type'])){
					if ($_SESSION['type'] =='adminC'){
 			   	?>
				<p>
				<a href="inscription.php" class="ajout" > Ajouter un Membre : <img src="images/ajout.png" alt="image non trouvée"></a>
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
</form>

	</nav>


<?php include("footer.php") ?>

</body>

</html>