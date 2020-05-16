</DOCTYPE html>
<html>
	<head>
		<title>Valid Number</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

		<body onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='Don't'; return true;">


			<h1>Valid Number ?</h1>

<div class="centre">

			<form method="POST">
				<p><label for="numero">Put your Number :</label></p>
				<input maxlength='14' id="numero" name="numero" /><br>
				<p><input type="submit" name="Vérifiez le numéro" value="VERIFY"></p>
			</form>

		<?php

if (isset($_POST['numero']))
{
	$_POST['numero'] = htmlspecialchars($_POST['numero']);

if (preg_match('#^0[1-9]([-. ]?[0-9]{2}){4}$#', $_POST['numero'])) 
{
	echo '<p>Le numéro ' . $_POST['numero'] . ' est bien valable √</p>';
}
else
{
	echo '<p>Votre numéro ' . $_POST['numero'] . ' n\'est pas valable</p>';
}

}

?>
	<a href=javascript:history.go(-1)>Return</a>
</div>
	</body>
</html>
