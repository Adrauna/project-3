<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Addy's First Web pg</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
//inject a required php file
require_once "nav.php";

//echo prints a string into our HTML
echo "<h1>Just Weird Shit</h1>";

//this line will be repeated throughout and act as our seperator    
echo '<br><hr><br>';
    
echo '<br><hr><br>';

// this will create an object
class User {
	public $name, $password;
	function save_user() {
		echo 'hi '.$this->name." | ".$this->password."<br>";
		
	}
}



?>
</body>
</html>