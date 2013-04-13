<?php
include_once('include/webzone.php');

$connect = $_GET['connect'];

if(session_is_live()) {
	echo '<script>window.location = "./home.php";</script>';
}

$jsOnReady = "$('#login').focus();";
$GLOBALS['require_session'] = 0;
$active_page = '';
notification();
include_once('include/presentation/header.php');

if($connect=='fb') {
	$f1 = new Fb_ypbox();
	$user_data = $f1->getUserData();
	$fb_user_id = $user_data['id'];
	
	if($fb_user_id!='') $result = get_users(array('fb_user_id'=>$fb_user_id));
	if(count($result)>0) {
		start_session(array('user_id'=>$result[0]['id'], 'login'=>$result[0]['login'], 'privilege'=>$result[0]['privilege']));
		echo '<script>window.location = "./";</script>';
	}
}

?>

<div class="container">
	
	<h2>Members access</h2><hr>
	
	<div class="row">
		<div class="span9">
			
			<?php
			if(count($user_data)==0) {
				echo '<p><a href="#" id="fb_box_fb_login_btn" class="facebook16">Connect with Facebook</a></p>';
			}
			?>
			
			<form id="login_form" name="login_form" class="form-stacked">
				<div id="login_notification"></div>
				<p><label>Username</label><input type="text" id="login" name="login"></p>
				<p><label>Password</label><input type="password" id="password" name="password"></p>
				<p><input type="submit" value="Login" id="login_btn" class="btn default"> - <a href="./reset_password.php">Forgot your password?</a></p>
			</form>
			
			<p><h2>Create a new account</h2><hr></p>
			<?php
			if(count($user_data)==0) {
				echo '<p><a href="#" id="fb_box_fb_login_btn" class="facebook16"> Join using Facebook</a></p><br>';
			}
			?>
			<?php
			if(count($user_data)>0 && $connect=='fb') {
				$f1 = new Fb_ypbox();
				$user_data = $f1->getUserData();
				$fb_image = '<img src="'.$user_data['picture'].'" style="vertical-align:middle; width:36px; margin-right:10px;">';
				echo '<p>'.$fb_image.''.$user_data['name'].' <small>(<a href="#" id="fb_box_fb_logout_btn">not you?</a>)</small></p>';
			}
			?>
			
			<form id="create_account_form" name="create_account_form" class="form-stacked">
				<input type="hidden" id="fb_user_id" name="fb_user_id" value="<?php echo $user_data['id']; ?>">
				<div id="create_account_notification"></div>
				<p><label>Username *</label><input type="text" id="login" name="login" value="<?php echo $user_data['username']; ?>"></p>
				<p><label>Password *</label><input type="password" id="password" name="password"></p>
				<p><label>Email *</label><input type="text" id="email" name="email" value="<?php echo $user_data['email']; ?>"></p>
				<p><label>First name</label><input type="text" id="first_name" name="first_name" value="<?php echo $user_data['last_name']; ?>"></p>
				<p><label>Last name</label><input type="text" id="last_name" name="last_name" value="<?php echo $user_data['first_name']; ?>"></p>
				<p><input type="submit" value="Create" id="create_account_btn" class="btn default"></p>
			</form>
			
		</div>
		
	</div>
</div>

<?
include_once('include/presentation/footer.php');
?>
