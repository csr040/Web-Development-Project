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
<?php require_once("functions.php"); ?>	

<html>
<head>
<title>

admin
</title>
<link href="sa.css" media ="all" rel="stylesheet" type="text/css" />
</head>
<body>
<div id ="header">
<h1>Admin </h1>
</div>

<?php 
 if(isset($_POST['submit'])){
	$name=$_POST["name"];

	$query="INSERT INTO directmess (name) VALUES('{$name}')";
	$result= mysqli_query($connection,$query);
	if($result){
		//success
		echo "successful";
		redirect_to("admin.php");
}

}

else{
	die("database query failed.".mysqli_error($connection));
}

?>
</body>
<?php
if(isset($connection)){
	
 mysqli_close($connection); 
}
?>