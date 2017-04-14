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
      


<div id="page">
<h2>Delete Administration</h2>	

<form action="final_delete_administration.php" method ="post" >

<h3><p> id:
<input type="int" name="id" value=""/></h3>
</p>


<input type ="submit" name="submit" value="submit"/>
</form>

<br />
<a href="final_administration.php">Cancel</a>



</body>
</html>