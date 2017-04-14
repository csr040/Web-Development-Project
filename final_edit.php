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
if(isset($_POST['submit'])){
	$id=$_POST["id"];
	$username=($_POST["username"]);
	$hashed_password=($_POST["password"]);
	$query="UPDATE admins SET";
	$query.="username='{$username}',";
	$query.="hashed_password='{$hashed_password}' ";
	$query.="WHERE id ={$id}" ;
	$result=mysqli_query($connection,$query);
	if($result){
		echo "admin created.";
		redirect_to("admin.php");
	}else{
		echo "admin update is failed.";
	}
	
	}else{}
	?>