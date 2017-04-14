<?php 

session_start();
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
include_once("fix.php");
?>
	  
	  
<?php 
    $query2  = "SELECT * "; 
    $query2 .=  "FROM visitingfaculty";
    $img_set = mysqli_query($connection, $query2);
    if (!$img_set) 
      die("Database query failed.".mysqli_error($connection));?>
      <table border="1" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>id</th>
		  <th>photo</th>
          <th>Name</th>
          <th>qualification</th>
          <th>description</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
		  
		  
          while($row = mysqli_fetch_assoc($img_set) ){
              
            ?>
                <tr>
              <td><?php echo $row ["id"]?></td>
			  <td><img src=<?php echo $row ["address"]?> height="100" width="150"></td>
              <td><?php echo $row ["name"]?></td>
              <td><?php echo $row ["qualification"]?></td>
              <td><?php echo $row ["description"]?></td>
              
            </tr>
			
        
          <?php }
    ?>
		  <br />
	  


     

      
      
      
     	  
  </body>
</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>