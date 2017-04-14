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
include_once("fix.php");
?>

<?php 

$query="SELECT * FROM admins ";
$result=mysqli_query($connection,$query);

	if(!$result){
	die("database query failed.");
	
}

      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>user_id</th>
          <th>username</th>
          <th>password</th>
         
          
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result) ){
              
            echo
                "<tr>
              <td>{$row ["id"]}</td>
              <td>{$row ["username"]}</td>
              <td>{$row ["hashed_password"]}</td>
              
            </tr>\n";
        
          }
    ?>
	
	<a href="admin.php"> go to admin</a>
	
	
	
	
	</body>
	
<?php
mysqli_close($connection);
?>