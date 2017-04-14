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
	
<?php 
include_once("fix.php");
?>
<div id="page">
<h2>Insert Administrator</h2>
<form action="middle_administration.php" method ="post" enctype="multipart/form-data">
<h3><p>name:
<input type ="text" name="name" value=""/></h3>
</p>
<h3><p>Qualification:
<input type="text" name="qualification" value=""/></h3>
</p>
<h3><p> description:
<input type="text" name="description" value=""/></h3>
</p>
<h3><p>select photo:
<input type="file" name="myfile" /></h3>
</p>
<input value="Submit" name="submit" type="submit">
</form>
<br />
<a href="final_administration.php">Cancel</a>

</div>

</body>
</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>