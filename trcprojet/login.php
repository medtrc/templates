<?php session_start(); include("connexion.php") ;?>
<html>
	<head>
		<title>Login Form TRC</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	</head>
	<body>

	<form  action="" method="post" name="authentification">
	  <header>Log In</header>

		<nav id="container">
		<?php

		if(isset($_POST['connecter']))
		{
			$login=$_POST['login'];
			$pswd=$_POST['pswd'];
			$requette1=mysql_query("SELECT * FROM admin where login='$login' && pswd='$pswd' ");
			$requette2=mysql_query("SELECT * FROM membres where mail='$login' && pass='$pswd' ");	
			$nb_lignes1=mysql_num_rows($requette1);
			$nb_lignes2=mysql_num_rows($requette2);

			if($nb_lignes1==1 || $nb_lignes2==1)
			{
				echo'<nav id="alert" class="success">you have successfully Logged In</nav>';	
			}
			else
			{
				echo'<nav id="alert" class="danger">Login or password Incorrect</nav>';
			}
		}
		?>			
		  <nav id="center">
			
				<ul>
					<li>E-mail :</li>
				 	<li><INPUT type="text" name="login" class="user"></li>
				  	<li>Mot de passe :</li>
				  	<li><INPUT type="password" name="pswd" class="lock"></li>
				</ul>
			
		   </nav>	
		</nav>

		<button type="submit" name="connecter">Login</button>
	</form>




	</body>
</html>
