<?php session_start();
?>

<?php $dbhost ="localhost";
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
include_once("fix.php");
?>
<form action="imgupload.php" method="post" enctype="multipart/form-data">
<p><input type="file" name="myfile" /> </p>
<p><input type="submit" value="upload" name="submit" /> </p>



<?php
mysqli_close($connection);
?>