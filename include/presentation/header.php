<?php
if($GLOBALS['require_session']==1 && !session_is_live()) {
	header('Location: '.$GLOBALS['app_url']);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<?php
    echo '<title>'.$GLOBALS['meta']['title'].'</title>'."\n";
    echo '<meta name="description" content="'.$GLOBALS['meta']['description'].'">'."\n";
    
	echo '<meta property="og:title" content="'.$GLOBALS['meta']['title'].'" />'."\n";
	echo '<meta property="og:type" content="website" />'."\n";
	echo '<meta property="og:url" content="'.currentPageURL().'" />'."\n";
	echo '<meta property="og:image" content="'.$GLOBALS['meta']['image'].'" />'."\n";
	echo '<meta property="fb:admins" content="'.$GLOBALS['meta']['fb_admins'].'" />'."\n";
	echo '<meta property="fb:app_id" content="'.$GLOBALS['meta']['fb_app_id'].'" />'."\n";
	?>
	
	<link href="include/css/bootstrap.min.css" rel="stylesheet">
	<link href="include/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="include/css/style.css" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>	
    <script src="include/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="include/js/script.js" type="text/javascript"></script>
    
	<script>
	$(document).ready(function() {
		<?php
		echo $jsOnReady;
		?>
	})
	</script>
	
</head>

<body>

<?php
if($GLOBALS['fb_app_id']!='') {
	$f1 = new Fb_ypbox();
	$f1->load_js_functions();
	$f1->loadJsSDK();	
}
?>

<div class="navbar navbar-inverse navbar-fixed-top">
  	<div class="navbar-inner">
    	<div class="container">
			
			<?php
			if(session_is_live()) {
			?>
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			<?php
			}
			?>
			
			<a class="brand" href="./"><?php echo $GLOBALS['app_name']; ?></a></a>
			
			<?php
			if(session_is_live()) {
				$session = get_session();
			?>
				<div class="nav-collapse collapse">
				
			        <ul class="nav">
			        	<?php
						if($active_page=='page1') echo '<li class="active"><a href="./page1.php">Page 1</a></li>';
						else echo '<li><a href="./page1.php">Page 1</a></li>';
						if($active_page=='page2') echo '<li class="active"><a href="./page2.php">Page 2</a></li>';
						else echo '<li><a href="./page2.php">Page 2</a></li>';
						if($active_page=='page3') echo '<li class="active"><a href="./page3.php">Page 3</a></li>';
						else echo '<li><a href="./page3.php">Page 3</a></li>';
						?>
			        </ul>
			        
					<ul class="nav pull-right">
						<?php
						if($GLOBALS['admin_username']==$session['login']) {
						?>
							<li><a href="./users.php">Manage users</a></li>
						<?php
						}
						?>
						<li class="dropdown">
						<a href="./account.php" class="dropdown-toggle" data-toggle="dropdown"><?php echo $session['login']; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
						    <?php
						    if($GLOBALS['admin_username']!=$session['login']) {
						    	echo '<li><a href="./account.php">My information</a></li>';
						    	echo '<li><a href="./change_password.php">Change password</a></li>';
						    	echo '<li class="divider"></li>';
						    }
						    ?>
						    <li><a href="./listeners/logout.php" id="logout_btn">Logout</a></li>
						</ul>
						</li>
					</ul>
				
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>

<br><br><br>

<?php
if($GLOBALS['demo_mode']) {
	echo '<div class="container"><div class="alert alert-error">Please note that some functions are disabled in this demo.
	Use <b>admin</b> // <b>admin</b> to access the admin section :)</div></div>';
}
?>