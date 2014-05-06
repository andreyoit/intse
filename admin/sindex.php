<!doctype= HTML>
<?php
?>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<style type="text/css">
			#admin {
				 position: relative;
				 margin-top: 50px;
				 margin-left: 400px;
				 color:#FFF;
				 font-family: arial;
			}
		</style>
		<header>
			<div class="header">
								<a href="#"><img class="logo" src="images/logo.png"></a>
				<h1 class="subtitle">Internal Systems</h1>
					
				<h4 class="slogin">Logged as: Administrator | <a href="/intse/logout.php">Logout</a> | <a href="../sindex.php">CMS Standard</a></h4><div class="admin">Administration</div>
			</div>
		</header>
		<div class="menu">
			<ul>
				<li><FORM METHOD="LINK" ACTION="pages/sections.php" target="frame"><button type="submit">Sezioni</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/comun.htm" target="frame"><button type="submit">Comunicazioni</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/mail.php" target="frame"><button type="submit">Posta Interna</button></form></li>
				<li><FORM METHOD="LINK" ACTION="pages/users.htm" target="frame"><button type="submit">Utenti</button></form></li>
				<!--<li><FORM METHOD="LINK" ACTION="pages/item.htm" target="frame"><button type="submit">Item</button></form></li>-->
				<li><FORM METHOD="LINK" ACTION="pages/setting.php" target="frame"><button type="submit">Impostazioni</button></form></li>
				<li><FORM METHOD="LINK" ACTION="exit.htm" target="frame"><button type="submit">Esci</button></form></li>
				</ul>
				<div class="version">
					<p>Version: 0.1.3 <a href=""> BETA</a></p>
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