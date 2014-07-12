<?php include 'connexion.php' ?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Authentification</title>
</head>
<body>
<form  action="" method="post" name="authentification">
<table >
  <tr>
 	 <td><b>Login :</b></td>
 	 <td><input type="text" name="login" value=""></td>
  </tr>
  <tr>
  	<td><b>Mot de passe :</b></td>
  	<td><input type="password" name="pswd"></td>
  </tr>
  <tr>
  	<td><input type="submit"  name="connecter" value="connecter"/> </td>
  </tr>
</table>
</form>

<?php
session_start();
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
			header("location:acceuil_club.php");	
		}
		else if($nb_lignes2)
		{
			$_SESSION['type']='adminS';
			header("location:acceuil_site.php");
		}
	}
	else
	{
		echo'<font color="#FF0000">Login ou mot de passe incorrecte';
	}
}
?>
</body>
</html>