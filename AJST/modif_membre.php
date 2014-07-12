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

		<h1 id="Titre"> Modification </h1>
<form action="" method="post" > 

		<table>
<?php
  /*session_start();
  if($_SESSION['type']!='adminC')
  { 
 header("Location: index.php"); 
    exit; 
  }
  else {*/

  	//recuperation de l id du membre
$idM = $_GET['idM'];
//execution de la requete de selection
$requete=mysql_query("SELECT * FROM membres WHERE idM='$idM' ") or die ("*** Erreur dans la requ&ecirc;te ***<br>");
while($lignes=mysql_fetch_array($requete))
	  {
  ?>
			<tr>
				<td id="table1"><i class="fa fa-user"></i> Nom</td id="table1">
				<td><INPUT type="text" Name="nomM" value="<?php echo $lignes[1] ;?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-user"></i> Prenom</td>
				<td><INPUT type="text" Name="prenomM" value="<?php echo $lignes[2] ;?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-phone"></i> Telephone</td>
				<td><INPUT type="phone" pattern='[0-9]{8}' Name="num_tel" value="<?php echo $lignes[3] ;?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-inbox"></i> E-mail</td>
				<td><INPUT type="mail" Name="email"  value="<?php echo $lignes[4] ;?>" required></td>
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
				<td><INPUT type="text" Name="poste"  value="<?php echo $lignes[6] ;?>" required></td>
			</tr>
			<tr>
				<td id="table1"><i class="fa fa-calendar"></i> Date D'inscription</td>
				<td><INPUT type="date" Name="date_inscri"  value="<?php echo $lignes[7] ;?>" required></td>
			</tr>
			<tr>
			<td><button action="" type="submit" name="modifier"><i class="fa fa-hand-o-right"></i>Modifier</button></td>
			<td><button action="liste_membres.php" type="" name="annuler"><i class="fa fa-hand-o-right"></i>Annuler</button></td>
			</tr>

		</table>
			<?php 
	}
	/*si l utilisateur a cliquer sur  modifier */
	if(isset($_POST['modifier']))
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
else{
/*recuperation des donnees apartir du formulaire*/
$nomM=$_POST['nomM'];
$prenomM=$_POST['prenomM'];
$num_tel=$_POST['num_tel'];
$email=$_POST['email'];
$section=$_POST['section'];
$poste=$_POST['poste'];
$date_inscri=$_POST['date_inscri'];

/*requete de modification dun projet*/

$reqM=mysql_query("UPDATE  membres SET nomM='$nomM',prenomM='$prenomM',num_tel='$num_tel',email='$email',section='$section',poste='$poste',date_inscri='$date_inscri'  WHERE idM='$idM'");

/*si le membre a été bien modifier on affiche un msg et on rafraichir la page*/
if($reqM)
{
?>
<script type="text/javascript" language="javascript">
window.alert("le projet est bien modifier");
document.location.href='http://localhost/AJST/liste_membres.php';
</script>
<?php
}	
}
}
//}
	?>
</form>
	</nav>

	</nav>




</body>

</html>