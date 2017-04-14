<?php session_start();
?>


<?php $dbhost ="localhost";
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

    
                                                                                                     
      


    
                                                                                                     <!-- IMAGES SLIDES -->
      <div class="contant">     
      <div class="photo">
	  <?php
	   $query2  = "SELECT * "; 
    $query2 .=  "FROM home";
    $img_set = mysqli_query($connection, $query2);
    if (!$img_set) 
      die("Database query failed.".mysqli_error($connection));?>
          <div id="slides">
    <?php while($i=mysqli_fetch_assoc($img_set)){?>
      <img src="<?php echo $i["address"];?>" height="490" width="1020">
	  <?php } ?>
    </div>
          
        
      </div>
        </div>
		
		                                                                                             <!-- MOVING LINE -->
      
          <div class="alert">                                                                                   
          <marquee behavior="alternate">Institute invites applications for <a href="http://pgadmissions.iiitvadodara.ac.in" target="_blank"> MTech and PhD programs - Academic Year 2016-17. </a> </marquee>
      </div>

	  
 <div class="down-content">           
    <div class="about-box">
        <div class="about-header"><strong>News</strong>
        </div>
        <div class="about-content"> <ul><li>Shifted to new hostel<img src="New.gif"></li><br><hr>
		<li>IIITV opens admissions for post graduates[M.Tech and PHD]<img src="New.gif"></li><br><hr>
		<li>A to S is going to arrive to recruit hte students for internships</li><br><hr>
		<li>Mess contract is going to end.</li><br><hr>
        <li>Stone laying cermony is going tobe held at Vadodara in August </li><br><hr> 
		<li></li>Placements for third year students are starterd<img src="New.gif"><br><hr>
		<li></li>30 students from 2013 batch are selected for internships<br><hr>
		<li></li><br><hr></ul>
            
        </div>
    </div>
     
          
          
    
    <div class="vision-box">
        <div class="about-header"><strong>Events</strong>
        </div>
        <div class="about-content"> 
		 <ul>
		<li>Our annual cultural fest XERIC is to be conducted during sempember of coming year</li><br><hr>
		<li>Nabhayan "The festival of kites" is going to be conducted</li><br><hr>
		<li>Ventura the sports fest got a huge aplouse from the audience.</li><br><hr>
		<li>"Code rush" an coding chanllenge is decided to held in coming week</li><br><hr>
		<li>"CS Rampage" where all game freaks from gandhinagar competed in IIITV to get the title</li><br><hr>
		
		
		</ul>
            </div>
    </div>
    <div class="mission-box">
        <div class="about-header"><strong>Achievements</strong>
        </div>
        <div class="about-content"> <ul> 
		<li>Mr. Avi Aryan, B.Tech. 2nd year CSE student is selected for Google Summer of Code 2016.<img src="New.gif"></li><br><hr>
		<li>Few third year student got internships in famous reputated IITs like IIT-Bombay and IIT-Madras<img src="New.gif"></li><br><hr>
		<li> A event on IKOC got the title of Hackathon 2016</li><br><hr>
		<li> Huge aplouse is recieved from students and society for its first Sports Festival : Ventura 2016  </li><br><hr>
		<li>IIIT Vadodara sponcered for IEEE</li><br><hr>
		<li>Institute Invited Talks</li><br><hr></ul>
        </div>
    </div>
      </div>
	  
	  
	  
	  </div>
	  
	  
	  
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
