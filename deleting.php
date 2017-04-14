<?php session_start();
?>
<?php 
include_once("fix.php");
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
<!DOCTYPE html>

<html>
<head>
    <title>deleting</title>
</head>
<body>

    
    

	

<form action="delete_final.php" method ="post" >

<p> id:
<input type="int" name="id" value=""/>
</p>


<input type ="submit" name="submit" value="submit"/>
</form>

<br />
<a href="current_status.php">Cancel</a>



</body>
</html>