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
	<?php require_once("functions.php");?>
	
<!DOCTYPE html>

<?php 
include_once("fix.php");
?>
<form action="middle_administration.php" method ="post" enctype="multipart/form-data">
<p>insert data:
<input type ="text" name="name" value=""/>
</p>

<input value="Submit" name="submit" type="submit">
</form>
<br />
<a href="final_administration.php">Cancel</a>



</body>
</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>