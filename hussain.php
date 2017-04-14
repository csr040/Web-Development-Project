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
<html>


<body>
<?php 

if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {


// Temporary file name stored on the server

$tmpName = $_FILES['image']['tmp_name'];


// Read the file

$fp = fopen($tmpName, 'r');

$data = fread($fp, filesize($tmpName));

$data = addslashes($data);

fclose($fp);



// Create the query and insert

// into our database.

$query = "INSERT INTO image ";

$query .= "(image) VALUES ('$data')";

$results = mysqli_query($query, $link);


// Print results

echo "deletion is success";


}

else {

die("database query failed.");

}


// Close our MySQL Link

mysqli_close($connection);
?>



<form action="hussain.php" method="post" enctype="multipart/form-data">
    <input name="MAX_FILE_SIZE" value="102400" type="hidden">
	<input name="image" accept="image/jpeg" type="file">
    <button>Upload</button>
</form>
</body>
	

</html>