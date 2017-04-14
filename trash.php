
<form enctype="multipart/form-data" action="insert.php" method="post" name="changer">
<input name="MAX_FILE_SIZE" value="102400" type="hidden">
<input name="image" accept="image/jpeg" type="file">
<input value="Submit" type="submit">





<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
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
        
          while($row = mysqli_fetch_assoc($result) ){
              
            echo
                "<tr>
              <td>{$row ["id"]}</td>
			  <td><{$row ["address"]}></td>
              <td>{$row ["name"]}</td>
              <td>{$row ["qualification"]}</td>
              <td>{$row ["description"]}</td>
              
            </tr>\n";
        
          }
    ?>

	
	
	
 <?php 
    $query2  = "SELECT * "; 
    $query2 .=  "FROM pabba ";
    $result = mysqli_query($connection, $query2);
    if (!$result) 
      die("Database query failed.".mysqli_error($connection));
  echo "<table border='1' width='100%' >";
    while($i = mysqli_fetch_assoc($result)){ 
	
	 echo  "<tr>";
        echo "<td>" . $i['name'] . "</td>"; 
        echo "<td>" . $i['qualification'] . "</td>";
		echo "<td>" . $i['description'] . "</td>";
        echo "<td><img src='photos/".$i['address']."'></td>";
        echo "</tr>";
		
	   

} 
echo "</table>";
?>
