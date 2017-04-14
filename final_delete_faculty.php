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

<html>
<head>
    <title>deleting</title>
</head>
<body>
<?php
 if(isset($_POST['submit'])){
	$id=$_POST["id"];


$query="DELETE FROM pabba WHERE id={$id} ";
$result= mysqli_query($connection, $query);
if($result){
	echo "deletion is success";
	redirect_to("final_faculty.php");
	
	
}
else{
	die("database query failed." .mysqli_error($connection));
	
}
 }
?>
</body>
</html>