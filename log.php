<?php
session_start();
$message="";
if(count($_POST)>0) {

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
}


$query = "SELECT * FROM admins WHERE username='" . $_POST["username"] . "' and hashed_password = '". $_POST["password"]."'";
$result=mysqli_query($connection,$query);
if($result){
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row[id];
$_SESSION["username"] = $row[username];
$_SESSION["password"] = $row[password];
} else {
	echo "Invalid Username or Password!";
	
?>
<br>
	<br>
	<br>
<a href="login.php">try to relogin</a>
<?php
unset($_SESSION["id"]);
}
}
if(isset($_SESSION["id"])) {
header("Location:admin.php");
}
?>

<?php
mysqli_close($connection);
?>