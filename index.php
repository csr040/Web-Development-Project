<!DOCTYPE html>

<html>
<head>
    <title>Insert Image</title>
</head>
<body>
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    
		
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
		$fp = fopen($tmpName, 'r');

$data = fread($fp, filesize($tmpName));

$data = addslashes($data);

fclose($fp);
			
	
    $sql = "insert into image (image) values('$data')";
 
    $result = mysqli_query($connection,$sql);
 
    /*mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);
 
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Successfullly UPloaded';
    }else{
        $msg = 'Could not upload';
    }*/
	if(!$result){
	die("database query failed.");}
	else{
		echo "added successfully!";
	}
    mysqli_close($connection);
}
?>


<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload</button>
</form>
<?php
    echo $msg;
?>
</body>
</html>