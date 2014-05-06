<!doctype= HTML>
<?php

?>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<header>
			<div class="header">
				<a href="#"><img class="logo" src="images/logo.png"></a>
				<h1 class="subtitle">Internal Systems</h1>
				<h4 class="slogin">Logged as: <?php session_start(); $user= 'admin'; include 'config.php';
				 $query = "SELECT * FROM users WHERE username= '" . $user . "'"; mysql_query($query);
   $result = mysql_query($query);
echo $user; echo '(PL1)'
?> | <a href="/intse/logout.php">Logout</a></h4>
			</div>
		</header>
		<div class="menu">
			<ul>
				<li><FORM METHOD="LINK" ACTION="pages/product.php" target="frame"><button type="submit">Listini</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/comun.htm" target="frame"><button type="submit">Comunicazioni</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/mail.php" target="frame"><button type="submit">Posta Interna</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/contacts.php" target="frame"><button type="submit">Contatti</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/sell.php" target="frame"><button type="submit">Vendita</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/stats.php" target="frame"><button type="submit">Statistiche</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/setting.php" target="frame"><button type="submit">Impostazioni</button></form></li>
				<li><FORM METHOD="LINK" ACTION="exit.htm" target="frame"><button type="submit">Esci</button></form></li>
				</ul>
				<div class="version">
					<p>Version: <?php include '/scripts/version.php'; echo $version; ?> <a href=""> ALPHA</a></p>
				</div>
		</div>
		<div class="main">
			<center>
			<iframe id="frame" src="" width="99%" height="99%" frameborder="none"></iframe>
			</center>
		</div>
		<footer>
			<div class="footer">
			<p>Copyright &copy; IntSe CMS - ATech s.r.l.</p>
			</div>
		</footer>
	</body>
</html>