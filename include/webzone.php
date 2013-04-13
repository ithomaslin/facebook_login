<?php
session_start();

//error_reporting(E_ALL);
include('config.php');

//functions
include('functions/functions.php');
include('functions/app_functions.php');
include('functions/display_functions.php');
include('functions/Forms.php');
include('functions/session_functions.php');
include('functions/db_functions.php');

//db
include('db/db_class.php');

//FB
include('library/Fb_box/include/webzone.php');

?>