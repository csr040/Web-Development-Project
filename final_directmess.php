 <?php 
	   $query="SELECT * FROM directmess";
	    $result=mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
	
}
      ?>
      <table border="1" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>faculty_id</th>
          <th>faculty_Name</th>
          <th>faculty_qualification</th>
          <th>faculty_description</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result) ){
              
            echo
                "<tr>
              <td>{$row ["id"]}</td>
              <td>{$row ["name"]}</td>
              <td>{$row ["qualification"]}</td>
              <td>{$row ["description"]}</td>
              
            </tr>\n";
        
          }
    ?>
	
	
	
	</body>
	
<?php
mysqli_close($connection);
?>
	