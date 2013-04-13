<?php
/*
START settings
*/

$GLOBALS['app_domain_url'] = 'http://http://mastermerit.j.layershift.co.uk'; //ex: http://yougapi.com
$GLOBALS['app_folder'] = ''; //ex: /products/facebook_login
$GLOBALS['app_name'] = 'Merit Master';

//database access
$GLOBALS['db_host'] = 'jdbc:mysql://mysql-mastermerit.j.layershift.co.uk/mastermerit';//host link
$GLOBALS['db_name'] = 'meritmaster';
$GLOBALS['db_user'] = 'mmview';
$GLOBALS['db_password'] = '7AmjYU2FY4THMJz4';

//Facebook app data
$GLOBALS['fb_app_id'] = '136007779917166';
$GLOBALS['fb_app_secret'] = 'c5ffdcc05a3d6b6cf3948dced53247fa';

//email
$GLOBALS['email_from'] = 'your_data_here'; //used to send a reset password email
$GLOBALS['email_subject'] = 'Reset your password';

//admin user
$GLOBALS['admin_username'] = 'admin';
$GLOBALS['admin_password'] = 'admin';

//meta data
$GLOBALS['meta']['title'] = 'Merit Master';
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
