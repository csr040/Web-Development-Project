<?php 
function redirect_to($new_location){
	header("location:".$new_location);
	exit;
}
function mysql_prep($string){
	global $connection;
	$escaped_string=mysqli_real_escape_string($connection,$string);
		return $escaped_string;
}
function confirm_query($result_set){
	if(!$result_set){
		die("Database query failed.");
	}
}
function form_errors($errors=array()){
	  $output="";
	  if(!empty($errors)){
		  
		  $output.="</div class=\"error\">";
		  $output.="please fix the following errors:";
		  $output.="<ul>";
		  foreach ($errors as $key =>$error){
			  $output.="<li>;
			  $output.= htmlentities($error);
			  $output.=</li>";
			  
		  }
		  $output.="</ul>";
		  $output .="</div>";
		  
		  
	  }
	  return $output;
  }




function find_all_subjects(){
	global $connection;
	
	$query="SELECT * FROM subjects ORDER BY position ASC";
	$subject_set =mysqli_query($connection,$query);
	confirm_query($subject_set);
	return $subject_set;
	}
	
	
	function find_all_staff(){
	global $connection;
	
	$query="SELECT * FROM staff ORDER BY position ASC";
	$subject_set =mysqli_query($connection,$query);
	confirm_query($subject_set);
	return $subject_set;
	}
	
	
	
	
	
function find_pages_for_subjects($subject_id){
	global $connection;
	$safe_subject_id=mysqli_real_escape_string($connection,$subject_id);
$query="SELECT * FROM pages WHERE visible =1 AND subject_id={$safe_subject_id} ORDER BY position ASC";
	$page_set =mysqli_query($connection,$query);
	confirm_query($page_set);
	return $page_set;
	
}
function find_all_admins(){
	global $connection;
	$query="SELECT *";
	$query.="FROM admins";
	$query.="ORDER BY id ASC";
	$admin_set=mysqli_query($connection,$query);
	confirm_query($admin_set);
	return $admin_set;
	
	
}




function find_subject_by_id($subject_id) {
	global $connection;
	$safe_subject_id=mysqli_real_escape_string($connection,$subject_id);
	
	$query="SELECT * FROM subjects WHERE id={$safe_subject_id} LIMIT 1";
	$subject_set =mysqli_query($connection,$query);
	confirm_query($subject_set);
	if($subject=mysqli_fetch_assoc($subject_set)){
	return $subject;
}
else{
	return null;
}
	}
	
	function find_page_by_id($page_id) {
	global $connection;
	$safe_page_id=mysqli_real_escape_string($connection,$page_id);
	
	$query="SELECT * FROM pages WHERE id={$safe_page_id} LIMIT 1";
	$page_set =mysqli_query($connection,$query);
	confirm_query($page_set);
	if($page=mysqli_fetch_assoc($page_set)){
	return $page;
}
else{
	return null;
}
	}
	
	
function find_admin_by_id($id){
	
	global $connection;
	$safe_admin_id=mysqli_real_escape_string($connection,$id);
	$query="SELECT *";
	$query.="FROM admins";
	$query.="WHERE id={$safe_admin_id}";
	$query.="LIMIT 1";
	$admin_set=mysqli_query($connection,$query);
	confirm_query($admin_set);
	if($admin=mysqli_fetch_assoc($admin_set)){
		return $admin;
	}else{
		return null;
	}
	
}
function find_admin_by_username($username){
	global $connection;
	$safe_admin_id=mysqli_real_escape_string($connection,$username);
	
	$query="SELECT *";
	$query.="FROM admins";
	$query.="WHERE username='{$username}'";
	$query.="LIMIT 1";
	$admin_set=mysqli_query($connection,$query);
	confirm_query($admin_set);
	if($admin=mysqli_fetch_assoc($admin_set)){
		return $admin;
	}else{
		return null;
	}
}	
	
function find_selected_page(){
	global $current_subject;
	global $current_page;
	
	if(isset($_GET["subject"])){
	
	$current_subject=find_subject_by_id($_GET["subject"]);
	
	$current_page=null;
}
elseif(isset($_GET["page"])){
	
	$current_page=find_page_by_id($_GET["page"]);
	
	$current_subject=null;
	}
	else{
	
		$current_subject=null;
		$current_page=null;
	}
}
	
	
	
	
	
	
function navigation($subject_array,$page_array){
	$output="<ul class=\"subjects\">";
	$subject_set=find_all_subjects();

	while($subject = mysqli_fetch_assoc($subject_set)){
	
	$output.="<li";
	if($subject_array && $subject["id"] == $subject_array["id"]){
		$output.="class=\"selected\"";
	}
	$output.=">";
	$output.="<a href =\"manage_content.php?subject=";
	$output.=urlencode($subject["id"]);
	$output.="\">";
	$output.=htmlentities($subject ["menu_name"]); 
	$output.="</a>";
	 $page_set=find_pages_for_subjects($subject["id"]);

	$output.="<ul class =\"pages\">";
	
	while($page = mysqli_fetch_assoc($page_set)){
	
	$output.="<li";
	if($page_array && $page["id"]==$page_array["id"]){
		$output.="class=\"selected\"";
	}
	$output.= ">";
	$output.= "<a href=\"manage_content.php?page= ";
	$output.=urlencode($page["id"]);
	$output.="\">";
	$output.=htmlentities($page ["menu_name"]); 
	$output.="</a></li>";
	
	
	}
	
	
	mysqli_free_result($page_set);
	 
	$output.="</ul></li>";
}


mysqli_free_result($subject_set);

$output.="</ul>";
return $output;
}
function password_encryption($password){
	$hash_fomat ="$2y$10$";
	$salt_lenth =22;
	$salt=generate_salt($salt_length);
	$format_and_salt=$hash_format.$salt;
	$hash=crypt($password,$format_and_salt);
	return $hash;
	
}
function generate_salt($length){
	$unique_random_string=md5(uniqid(mt_rand(),true));
	$base64_string=base64_encode($unique_random_string);
	$modified_base64_string =str_replace('+','.',$base64_string);
	$salt=substr($modified_base64_string,0,$length);
	return $salt;
	
}
function password_check($password,$existing_hash){
	$hash =crypt($password,$existing_hash);
	if($hash === $existing_hash){
		return true;
	}else{
		return false;
	}
	
}
function attemp_login($username,$password){
	$admin=find_admin_by_username($username);
	if($admin){
		if(password_check($password,$admin["hashed_password"]))
	return $admin;}else{
		return false;
	}
		
		
	
		
		
	}


?>