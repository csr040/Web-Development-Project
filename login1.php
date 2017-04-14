

<html>
<head>

<link href="sa.css" media ="all" rel="stylesheet" type="text/css" />
</head>
<body>



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


 
function redirect_to($new_location){
	header("location:".$new_location);
	exit;
}
$success="false";
	
	$query = "SELECT * FROM staff WHERE id=2";
	$result = $connection->query($query);

while($row=mysqli_fetch_array($result)){

echo"<img src='http://localhost/project/".$row["image"].".png3.'>"	;
echo "http://localhost/project/".$row["image"].".png";
}

?>

</body>
</html>