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
<form action="middle_visitingfaculty.php" method ="post" enctype="multipart/form-data">
<p>faculty_name:
<input type ="text" name="name" value=""/>
</p>
<p>Qualification:
<input type="text" name="qualification" value=""/>
</p>
<p> description:
<input type="text" name="description" value=""/>
</p>
<p>select photo:
<input type="file" name="myfile" />
</p>
<input value="Submit" name="submit" type="submit">
</form>
<br />
<a href="mentorinstitutefaculty.php">Cancel</a>



</body>
</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>