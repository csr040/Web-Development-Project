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
	<?php session_start();
?>
<?php 
include_once("fix.php");
?>
<p>Welcome to the operations area.</p>
<a href="home.php">add photos</a><br />
<a href="http://localhost/phpmyadmin/#PMAURL-3:sql.php?db=project&table=home&server=1&target=&token=7c128505ba887559e60a66b0923f2f2e">edit</a><br />