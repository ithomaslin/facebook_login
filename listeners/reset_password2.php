<?php
include('../include/webzone.php');

$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$login = $_POST['login'];
$token = $_POST['token'];

if($password==$confirm_password && $password!='') {
	
	$user = get_users(array('login'=>$login));
	$user_id = $user[0]['id'];
	$privilege = $user[0]['privilege'];
	$old_password = $user[0]['password'];
	
	$real_token = md5($login.$old_password);
	
	if($token==$real_token) {
		$s1 = new MySqlTable();
		$sql = "UPDATE ".$GLOBALS['db_table']['users']." SET password='".$s1->escape(md5($password))."' WHERE id='".$s1->escape($user_id)."'";
		$s1->executeQuery($sql);
		
		start_session(array('user_id'=>$user_id, 'login'=>$login, 'privilege'=>$privilege));
		
		echo 1;
	}
	else {
		echo 'Your token is incorrect';
	}
}
else {
	echo 'Please enter correctly your new password.';
}

/*

if($email!='') {
	
	if(check_email_address($email)) {
		
		$from = $GLOBALS['email_from'];
		$subject = $GLOBALS['email_subject'];
		
		$s1 = new MySqlTable();
		$sql = "SELECT * FROM ".$GLOBALS['db_table']['users']." WHERE email='".$s1->escape($email)."'";
		$result = $s1->customQuery($sql);
		
		if(count($result)>0) {
			
			$login = $result[0]['login'];
			
			$token = md5($login.$email);
			$reset_link = $GLOBALS['app_url'].'/reset_password2.php?token='.$token;
			
			$message = "Hi $login,<br><br>
			You have just requested a reset to your password. Please click on the link bellow to proceed:<br><br>
			<a href=\"$reset_link\">$reset_link</a>
			";
			sendMail($from, $email, $subject, $message);
			
			echo 1;
		}
		else {
			echo 'The specified email address is not associated with any account';
		}
		
	}
	else {
		echo 'The specified email address looks incorrect';
	}
	
}
*/

?>