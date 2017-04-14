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
	
	$name=$_POST["name"];
	$qualification=$_POST["qualification"];
	$description=$_POST["description"];
	
	echo "CLICKED </br>" ;
	$fname=$_FILES['myfile']['name'] ;
	$ftmp=$_FILES['myfile']['tmp_name'] ;
	$store="photos/".$fname;
	
	if(move_uploaded_file($ftmp,$store));
	    echo "uploaded successfully";
		
	
	
	$query = "INSERT INTO pabba(";
	$query .= "  address,name,qualification,description";
        $query .= ") VALUES (";
 	$query .= " '{$store}','{$name}','{$qualification}','{$description}' ";
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
    $query2 .=  "FROM pabba ";
    $result = mysqli_query($connection, $query2);
    if (!$result) 
      die("Database query failed.".mysqli_error($connection));
  echo "<table border='5' width='100%' >";
    while($i = mysqli_fetch_assoc($result)){ 
	
	 echo  "<tr>";
        echo "<td>" . $i['name'] . "</td>"; 
        echo "<td>" . $i['qualification'] . "</td>";
		echo "<td>" . $i['description'] . "</td>";
       echo  <img src="< $i["address"]; " height="490" width="1020">
        echo "</tr>";
		
	   

} 
echo "</table>";
?>


</form>

</body>



</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>