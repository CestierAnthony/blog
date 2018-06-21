<head>
	<style type="text/css">
		
#login{
margin-top: 15%;
	position: relative;
	width: 100px;
}
</style>
</head>

<body>
	<center>
<div id="login">

          <form action="admin.php?action=logIn" method="post" >
		<h1>Connexion</h1>

<p><input type="password" id="pass" name="pass" placeholder="Mot de passe"></p>
<input type="submit" value="Connexion">
</form>
<?php
if(isset($_SESSION['message'])){
	echo ($_SESSION['message']);
	
}
?>
</div>
</center>
</body>