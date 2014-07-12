	<head>
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div id="menuresponsivestyle">
			<div class="main clearfix" id="menuresponsive">
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="whoarewe.php">Qui sommes-nous?</a></li>
							<li><a href="./">Historique</a>
										<ul class="dl-submenu">
								            <li><a href="23nuit/" target="_blank">La 23<sup>ème</sup> nuit des étoiles</a></li>
				                            <li><a href="http://www.drakequation.tk/"  target="_blank">La 22<sup>ème</sup> nuit des étoiles</a></li>   
				                            <li><a href="21nuit/"  target="_blank">La 21<sup>ère</sup> nuit des étoiles</a></li>
										</ul>
							</li>		
                    <li><a href="event.php">L'évènement exposé</a></li>
                    <li><a href="contact.php">Contact</a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
				});
			});
		</script>
	</body>
</html>