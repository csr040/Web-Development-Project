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
    $query2 .=  "FROM pabba";
    $img_set = mysqli_query($connection, $query2);
    if (!$img_set) 
      die("Database query failed.".mysqli_error($connection));?>
      <table border="1" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>faculty_id</th>
		  <th>faculty_photo</th>
          <th>faculty_Name</th>
          <th>faculty_qualification</th>
          <th>faculty_description</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
		  
		  
          while($row = mysqli_fetch_assoc($img_set) ){
              
            ?>
                "<tr>
              <td><?php echo $row ["id"]?></td>
			  <td><img src=<?php echo $row ["address"]?> height="100" width="150"></td>
              <td><?php echo $row ["name"]?></td>
              <td><?php echo $row ["qualification"]?></td>
              <td><?php echo $row ["description"]?></td>
              
            </tr>;
			
        
          <?php }
    ?>
	


</form>

</body>



</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>