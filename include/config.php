<?php
/*
START settings
*/

$GLOBALS['app_domain_url'] = 'http://yougapi.com'; //ex: http://yougapi.com
$GLOBALS['app_folder'] = '/products/facebook_login'; //ex: /products/facebook_login
$GLOBALS['app_name'] = 'Facebook login';

//database access
$GLOBALS['db_host'] = 'localhost';
$GLOBALS['db_name'] = 'dev';
$GLOBALS['db_user'] = 'root';
$GLOBALS['db_password'] = '';

//Facebook app data
$GLOBALS['fb_app_id'] = 'your_data_here';
$GLOBALS['fb_app_secret'] = 'your_data_here';

//email
$GLOBALS['email_from'] = 'your_data_here'; //used to send a reset password email
$GLOBALS['email_subject'] = 'Reset your password';

//admin user
$GLOBALS['admin_username'] = 'admin';
$GLOBALS['admin_password'] = 'admin';

//meta data
$GLOBALS['meta']['title'] = 'Facebook login';
$GLOBALS['meta']['description'] = '';
$GLOBALS['meta']['image'] = '';
$GLOBALS['meta']['fb_admins'] = '';
$GLOBALS['meta']['fb_app_id'] = '';

/*
System variables
*/

//system
$GLOBALS['require_session'] = 1; //no to be changed
$GLOBALS['demo_mode'] = 0; //possible values: 0 or 1
$GLOBALS['app_url'] = $GLOBALS['app_domain_url'].$GLOBALS['app_folder']; // not to be modified
$GLOBALS['system_code'] = 'fb_login';

//Fb
$GLOBALS['fb_ypbox_path'] = 'include/library/Fb_box'; //not to be modified
$GLOBALS['fb_scope'] = 'email';
$GLOBALS['fb_connect_redirect'] = './?connect=fb';
$GLOBALS['fb_logout_redirect'] = '';
$GLOBALS['fb_sdk_js_callback'] = '';
$GLOBALS['fb_sdk_lang'] = 'en_US';

//db tables
$GLOBALS['db_table']['users'] = 'fb_login_users';

?>