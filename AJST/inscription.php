<?php include 'connexion.php'; ?>
<html>
<head>
	<title>Titre</title>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />
</head>

<body>

	
    <?php include("header.php") ?>
	<?php include("menu.php") ?>

	<nav id="contenu">

		<h1 id="Titre"> Inscription </h1>
<form action="" method="post" > 
		<table>
			<tr>
				<td id="table1"><i class="fa fa-user"></i> Nom</td id="table1">
				<td><INPUT type="text" Name="nomM" placeholder="Ecrire Votre Nom" value="<?php if(isset($_POST['nomM'])){echo $_POST['nomM'];}?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-user"></i> Prenom</td>
				<td><INPUT type="text" Name="prenomM" placeholder="Ecrire Votre Prenom" value="<?php if(isset($_POST['prenomM'])){echo $_POST['prenomM'];}?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-phone"></i> Telephone</td>
				<td><INPUT type="phone" pattern='[0-9]{8}' Name="num_tel" placeholder="Ecrire Votre Telephone" value="<?php if(isset($_POST['num_tel'])){echo $_POST['num_tel'];}?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-inbox"></i> E-mail</td>
				<td><INPUT type="mail" Name="email" placeholder="Ecrire Votre Mail" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-reply"></i> Section</td>
				<td>
					<select name="section">
					<option>Informatique</option>
					<option>Ecologie</option>
					<option>Astronomie</option>
					<option>Electronique</option>
					</select>
				</td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-male"></i> Poste</td>
				<td><INPUT type="text" Name="poste" placeholder="Ecrire Votre Poste" value="<?php if(isset($_POST['poste'])){echo $_POST['poste'];} ?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-calendar"></i> Date D'inscription</td>
				<td><INPUT type="date" Name="date_inscri" placeholder="YYYY-MM-DD" value="<?php if(isset($_POST['date_inscri'])){echo $_POST['date_inscri'];} ?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-user"></i> Nom Club :</td>
				<td><INPUT type="text" Name="nomC" placeholder="Ecrire le nom de votre club"  value="<?php if(isset($_POST['nomC'])){echo $_POST['nomC'];} ?>" required></td>
			</tr>
			<tr>
			<td></td>
			<td><button action="" type="submit" name="inscription"><i class="fa fa-hand-o-right"></i> Submit</button></td></tr>

		</table>
</form>
	</nav>
<?php
if(isset($_POST['inscription']))
{
$email=$_POST['email'];
$reqRow=mysql_query("SELECT * FROM membres where email='$email' ");
$row=mysql_fetch_array($reqRow);
if( $row==1 || empty($_POST['nomM'])  || empty($_POST['prenomM']) || empty($_POST['num_tel']) || empty($_POST['email']) || empty($_POST['poste']) )
{
		if(empty($_POST['nomM'])){
			echo'<font color="#FF0000">nom ne doit pas etre vide <br> ';
								}
		if(empty($_POST['prenomM'])){
			echo'<font color="#FF0000">prenom ne doit pas etre vide <br> ' ;
								}
		if(empty($_POST['num_tel'])){
			echo'<font color="#FF0000">numero téléphone ne doit pas etre vide <br> ';
								}
		if(empty($_POST['email'])){
			echo'<font color="#FF0000">email ne doit pas etre vide <br> ';
								}
		if(empty($_POST['poste'])){
			echo'<font color="#FF0000">poste ne doit pas etre vide <br> ';
								}
		if($row==1){
			echo'<font color="#FF0000"> email existe déja';
				}
}
else 
{
//recuperation des données envoyés en URL
$nomM=$_POST['nomM'];
$prenomM=$_POST['prenomM'];
$num_tel=$_POST['num_tel'];
$email=$_POST['email'];
$section=$_POST['section'];
$poste=$_POST['poste'];
$date_inscri=$_POST['date_inscri'];
$nomC=$_POST['nomC'] ; 

//execution de la requete mysql 
$req=mysql_query("INSERT into membres(idM,nomM,prenomM,num_tel,email,section,poste,date_Inscri,nomC)
							   values('NULL','$nomM','$prenomM','$num_tel','$email','$section','$poste','$date_inscri','$nomC') ") ; 
//si la requete le membre est ajouter on affiche un alert en JS
if($req)
{
	
?>
<!-- execution d un script JS -->
<script type="text/javascript" language="javascript">
window.alert("Un Nouveau Membre est Ajouté :) ");
document.location.href='./inscription.php';
</script>

<?php
}
}
}
?>

<?php include("footer.php") ?>
</body>

</html>