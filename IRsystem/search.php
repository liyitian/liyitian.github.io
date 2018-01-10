<!DOCTYPE HTML> 
<html>
<head>
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>

Welcome <?php echo $_POST["search"]; ?><br>
Your Current Path is: <?php echo $_POST["email"]; ?>

Information Retrieval System:

<form action ="search.php" method="post">

  <input type="text" name="search" placeholder="Search.."><br>
  <input type="submit">

</form>


<?php
	$searchword=$_POST["search"];

	set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
	include('Net/SSH2.php');

	$ssh = new Net_SSH2('user.palmetto.clemson.edu');
	if (!$ssh->login('yitianl', 'Lyt-0504')) {
	    exit('Login Failed');
	}
?><br>
<?php
	echo $ssh->exec('ls '.$searchword);
?><br>
<?php
	echo $ssh->exec('ls -la');
?>

</body>
</html>