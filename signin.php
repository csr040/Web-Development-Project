<?php

$dbhost ="localhost";
$dbuser ="root";
$dbpass = "iasofficer@1";
$dbname ="project";
$connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = "SELECT * FROM admins WHERE user_name='" . $_POST["username"] . "' and hashed_password = '". $_POST["password"]."'";
        $result = mysqli_query($sql,$connection);
		$cc=mysql_num_rows($result);
if (!$result ){
	
            // invalid login information
            echo "Wrong username or password!";
            //show the loginform again.
            } else {
echo"sdsdsd";
			}
	
?>