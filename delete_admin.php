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
if(isset($_POST['submit'])){
$id=($_POST["id"]);
$query="DELETE FROM admins WHERE id={$id} LIMIT 1";
$result=mysqli_query($connection,$query);

if($result){
	echo "admin deleted";
	
	redirect_to("admin.php");
	
	
}}else{
	echo "admin deletion failed.";
}?>