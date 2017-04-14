<?php 
function redirect_to($new_location){
	header("location:".$new_location);
	exit;
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