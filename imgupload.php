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
<?php
if(isset($_POST['submit']))
{
	echo "CLICKED </br>" ;
	$fname=$_FILES['myfile']['name'] ;
	$ftmp=$_FILES['myfile']['tmp_name'] ;
	$store="photos/".$fname;
	if(move_uploaded_file($ftmp,$store));
	    echo "uploaded successfully";
	$query = "INSERT INTO home(";
	$query .= " address";
        $query .= ") VALUES (";
 	$query .= "  '{$store}' ";
	$query .= " ) ";
	$result = mysqli_query($connection,$query);
       if($result){
	   echo "page created."; }
       else{
           echo "failed.".mysqli_error($connection);}

}
?>

<html>

<body>


   <?php 
    $query2  = "SELECT * "; 
    $query2 .=  "FROM home ";
    $img_set = mysqli_query($connection, $query2);
    if (!$img_set) 
      die("Database query failed.".mysqli_error($connection));
    while($i = mysqli_fetch_assoc($img_set)){ ?>
       <img src="<?php echo $i["address"]; ?>" height="490" width="1020">

<?php } ?>


</form>

</body>



</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>