<?php include'connexion.php' ?>
<html>
<head>
	<title>Ajouter Article</title>

</head>

<body>

	<?php include("header.php") ;?>
	<?php include("menu.php")   ;?>


	<nav id="contenu">
		<h1 id="Titre"> <u>Article</u> </h1>
<form action="" method="post">
		<table id="stat">
			<tr>
				<td>Nom</td>
				<td><INPUT type="text" name="nomArt" placeholder="Ecrire le nom de l'article" required></td>
			</tr>

			<tr>
				<td>Type</td>
				<td><select name="typeArt">
					<option></option>
					<option value="association">Association</option>
					<option value="club">Club</option>
						<option value="evenement">Evenement</option>
                    </td>
			</tr>


			<tr>
				<td>Sujet</td>
				<td><input type="text" name="sujet" placeholder="Ecrire Le sujet de L'article" required></td>
			</tr>

			<tr>
				<td>Contenu</td>
				<td><textarea type="text" name="contenu" placeholder="Ecrire Votre Message ici" required></textarea></td>
			</tr>

			<tr>
				<td>Auteur</td>
				<td><input type="text" name="auteur" placeholder="Ecrire L'auteur de cet article" required></td>
			</tr>

			<tr>
				<td>Club</td>
				<td><input type="text" name="club" placeholder="Ecrire votre club" required></td>
			</tr>

			<tr>
				<td>Section</td>
				<td><select name="section">
					<option></option>
					<option>Informatique</option>
					<option>Ecologie</option>
					<option>Astronomie</option>
					<option>Electronique</option>
					<option>Robotique</option>
					<option>Espace</option>
					</select>
                    </td>
			</tr>
           
			<tr>
				<td></td>
				<td><button action="" type="submit" name="envoyer"><i class="fa fa-hand-o-right"></i> Submit</button></td>
			</tr>


		</table>
</form>
	</nav>
    

<?php

if(isset($_POST['envoyer']))
{
$nom=$_POST['nomArt'];
$type=$_POST['typeArt'];
$contenu=$_POST['contenu'];
$sujet=$_POST['sujet'];
$auteur=$_POST['auteur'];
$club=$_POST['club'];
$section=$_POST['section'];
$date=date("Y-m-d");
$sql="INSERT INTO articles (idArt,nomArt,typeArt,contenu,sujet,auteur,club,section,dateArt) 
				  				VALUES  ('NULL','$nom','$type','$contenu','$sujet','$auteur','$club','$section','$date')" ;
$req=mysql_query($sql) or exit(mysql_error());

	if($req)
	{
		echo'<script language="javascript" type="text/javascript">alert("un nouveau article ajouté");</script>';
	}
}
?>
<?php include("footer.php") ?>
</body>

</html>