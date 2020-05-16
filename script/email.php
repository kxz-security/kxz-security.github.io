</DOCTYPE html>
<html>
	<head>
		<title>e-mail valide</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

		<body onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='Don't'; return true;">


			<h1>Email valide ?</h1>

<div class="centre">

			<form method="POST">
				<p><label for="email">Rentrez l'email ci-dessous :</label></p>
				<input maxlength='40' id="email" name="email" /><br>
				<p><input type="submit" name="Vérifiez l'email'" value="VERIFY"></p>
			</form>
<?php

if (isset($_POST['email']))
{
	$_POST['email'] = htmlspecialchars($_POST['email']);

if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email']))
{
	echo "<p>Ton adresse " . $_POST['email'] . " est bien valide √.</p>";
}
else
{
	echo "<p>Ton adresse " . $_POST['email'] . " n'est pas valide.</p>";
}

}

?>
	<a href=javascript:history.go(-1)>Return</a>
</div>
</body>
</html>
