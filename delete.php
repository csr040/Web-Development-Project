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
<?php 
include_once("fix.php");
?>



<html>
<head>
<link href="sa.css" media ="all" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<div id="navigation">
&nbsp;
</div>
<div id="page">
<h2>
Delete Admin</h2>
<form action="delete_admin.php" method ="post">
<p>enter the id of admin you want to delete:
<input type="int" name="id" value=""  />
</p>

<input type="submit" name="submit" value="delete admin" />
</form>
<br />
<a href="admin.php">Cancel</a>
</div>
</div>
</body>
</html>



</html>





