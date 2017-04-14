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
    $query2 .=  "FROM studentlife";
    $img_set = mysqli_query($connection, $query2);
    if (!$img_set) 
      die("Database query failed.".mysqli_error($connection));?>
  <h3>Student Life</h3>
 <?php while($row = mysqli_fetch_assoc($img_set) ){?>
 
                 <img src="<?php echo $row ["address"]?>" style="width: 970px; height: 1250px;">
        
	  <?php } ?>
	  
 


<?php
/*echo file_get_contents( "hostel.txt" );*/
$filename = "./studentlife.txt";

$fd = fopen($filename,"r");

$textFileContents = fread($fd,filesize($filename));

fclose($fd);

echo "$textFileContents";

?>

      
	 
								
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
	  
	 

<div class=footcont>

 <footer class="copy">
       <font size=3 > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;	  
										&nbsp;&nbsp;&copy 2016 IIIT VADODARA, Gandhinagar, Gujarat-382028 |</font>
		
		<a href="rk.html" title="Home">Home</a>|
                    <a href="contactus.html" title="Contact Us" >ContactUs</a>|
                    <a href="https://accounts.google.com/ServiceLogin?hl=en&passive=true&continue=https://www.google.co.in/%3Fgws_rd%3Dssl#identifier" title="Webmail" target="_blank">Webmail</a>|
                    <a href="https://www.google.com/maps/d/u/0/viewer?mid=z9_cN3Da9QvA.kqu7Eeg9LOsk"title="Direction" target="_blank">Direction </a>|	
		
		
		
		
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a id="facebook1" target="_blank" href="https://www.facebook.com/search/top/?q=iiit%20vadodara&ref=eyJxcyI6IkpUVkNKVEl5YVdscGRDVXlNSFpoWkc5a1lYSmhKVEl5SlRWRSIsImd2IjoiYmVlMDlmOTNmYTczMmNmYTU5YTFjYjZkOWY0NTBkMzg5MjQyNGU0OSJ9" alt="IIITV @Facebook" title="Like us on Facebook"><img src="facebook.jpg" width=25 height=25></a>&nbsp;&nbsp;
			<a id="twitter1" target="_blank" href="#"  alt="IIITV @Twitter" title="Tweet us on Twitter" ><img src="twiitericon.jpg"width=25 height=25></a>&nbsp;&nbsp;
			<a id="linkedin1" target="_blank" href="#" alt="IIITV @LinkedIn" title="Follow us on LinkedIn"><img src="link.jpg"width=25 height=25></a>

		</footer>
      </div>
  
      

     

      
      
      
     	  
  </body>
</html>
      <?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>
	  