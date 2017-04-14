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


<html>
<head>

<link href="sa.css" media ="all" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<div id="navigation">
&nbsp;
</div>
<div id="page">		
<h1>
Edit Admin:</h1>
<form action ="final_edit.php" method="post">
<p>id:
<input type="int" name="id" value="" />
</p>
<p>Username:
<input type="text" name="username" value="" />
</p>

<p>Password:
<input type="password" name="password" value=""/>
</p>
<input type="submit" name="submit" value="edit admin" />

</form>

<br />
<a href="admin.php">Cancel</a>
</div>
</div>
</body>
</html>
