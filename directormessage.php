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
    $query2  = "SELECT * "; 
    $query2 .=  "FROM image ";
    $img_set = mysqli_query($connection, $query2);
    if (!$img_set) 
      die("Database query failed.".mysqli_error($connection));
    while($i = mysqli_fetch_assoc($img_set)){ ?>
       <img src="<?php echo $i["address"]; ?>" height="150" width="250">

<?php } ?>
<br />
<?php
/*echo file_get_contents( "mulla.txt" );*/
$filename = "./mulla.txt";

$fd = fopen($filename,"r");

$textFileContents = fread($fd,filesize($filename));

fclose($fd);

echo "$textFileContents";

?>


</form>

</body>



</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>