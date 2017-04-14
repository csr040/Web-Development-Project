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
 
 
 
 
 
 
 
 
 
 
 
 <div class="contact">
          <h3> Full Time Faculty </h3>
          <div class="box">
 
 
 
 
                                                               
                                                                                                <div id="content-content" class="content-content">
                                  
<div id="node-7" class="node odd full-node node-type-page">
  <div class="inner">
  
      
      
    
    <div class="content clearfix">
            <p><style type="text/css">
.table-people .cell {
    background-color: #f4F4F4;
    border: 1px dotted #38AFA9;
    float: left;
    margin: 5px;
    min-height: 16em;
    padding: 5px;
    width: 45%;
}
.img1 {
    background-color: white;
    border: 1px solid grey;
    float: left;
    margin: 5px;
    padding: 3px;
    max-height: 93px;
}

.table-people .cell hr {
  clear:both;
  border: 0;
  height: 1px;
  background-image: -webkit-linear-gradient(left, rgba(192,192,192,0), rgba(192,192,192,0.75), rgba(192,192,192,0));
  background-image: -moz-linear-gradient(left, rgba(192,192,192,0), rgba(192,192,192,0.75), rgba(192,192,192,0));
  background-image: -ms-linear-gradient(left, rgba(192,192,192,0), rgba(192,192,192,0.75), rgba(192,192,192,0));
  background-image: -o-linear-gradient(left, rgba(192,192,192,0), rgba(192,192,192,0.75), rgba(192,192,192,0)); 
}

.table-people p { margin: 0; padding: 0}	
div.buttons div {
  min-width: 80px;
  margin: 10px 10px;
  background-color: lightgrey;
  font-weight:bold;
  padding:5px 10px;
  float:left;
  text-align: center; display:inline-block;
}
div.buttons div:hover { background-color: grey; cursor: pointer; color:lightgrey;}	</style></p>

<?php 
    $query2  = "SELECT * "; 
    $query2 .=  "FROM pabba";
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

 
</div>
<!--<table border="0" cellpadding="1" cellspacing="1" style="width: 99%;">
	<tbody>
		<tr>
			<td>
				<hr />
				<p><strong><a href="faculty/past">Past faculty members</a></strong></p>
			</td>
		</tr>
	</tbody>
</table>--><!--<table border="0" cellpadding="1" cellspacing="1" style="width: 99%;">
	<tbody>
		<tr>
			<td>
				<hr />
				<p><strong><a href="faculty/past">Past faculty members</a></strong></p>
			</td>
		</tr>
	</tbody>
</table>--><p>&nbsp;</p>
    </div>
  
        
      </div><!-- /inner -->

  </div><!-- /node-7 -->
                                                                  </div><!-- /content-content -->
                                                              </div><!-- /content-inner-inner -->
                            </div><!-- /content-inner -->
                          </div><!-- /content-region-inner -->
                        </div><!-- /content-region -->

                                              </div><!-- /content-group-inner -->
                    </div><!-- /content-group -->

                                      </div><!-- /main-content-inner -->
                </div><!-- /main-content -->

                              </div><!-- /main-group-inner -->
            </div><!-- /main-group -->
          </div><!-- /main-inner -->
        </div><!-- /main -->
      </div><!-- /main-wrapper -->

	  
	  
	
      
      
      
     	  
  </body>
</html>
<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>
	  
	  