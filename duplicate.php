
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
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$query = "SELECT * FROM admins WHERE username='" . $username. "' and hashed_password = '". $password."'";
	$result = $connection->query($query);

while($row=mysqli_fetch_array($result)){
	$success="true";
}
if($success=="true"){
	redirect_to("admin.php");
}
else{
	echo "failed";
}
?>