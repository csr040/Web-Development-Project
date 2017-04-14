<?php 
session_start();
?>
<?php 
include_once("functions.php");

?>
<?php		
		$dbhost ="localhost";
		$dbuser ="root";
		$dbpass = "iasofficer@1";
		$dbname ="project";
		$connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		if (mysqli_connect_errno()){
		die("database connection failed:" .
		  mysqli_connect_error() .
		  "(".mysqli_connect_errno() .")"
		  );

		}
	?>	
	
	<?php
	
	unset($_SESSION["id"]);
	unset($_SESSION["username"]);
	unset($_SESSION["password"]);
	redirect_to("rk.php");
	?>
	