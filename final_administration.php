
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
    $query2 .=  "FROM administration";
    $img_set = mysqli_query($connection, $query2);
    if (!$img_set) 
      die("Database query failed.".mysqli_error($connection));?> 
     

<h3>Director</h3>
 <?php
		  
		  
          while($row = mysqli_fetch_assoc($img_set) ){
              
            ?>

<div class="cell"><br><?php echo $row ["id"]?><br><img src=<?php echo $row ["address"]?> style="width: 72px; height: 84px; float: left;"><br><strong><?php echo $row ["name"]?></strong>
<br>	 <font color="#8A4B08"><?php echo $row ["qualification"]?></font><br>
		<font color="#8A4B08"><?php echo $row ["description"]?></font><br>
                                        
                                            
      
<br>


</div>




		  <?php }  ?>



		  
											  
											   <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>
	  
	 


     

      
      
      
     	  
  </body>
</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>