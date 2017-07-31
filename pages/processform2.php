<?php

//set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('EST');
//save the time the script the file executed to a file 
$db_file =  dirname(__FILE__) . '/db.txt';
file_put_contents($db_file, date('H:i:s'));

//redirect to the results page
header('HTTP/1.1 301 Moved Permanently');
header('Location: results.php');
die();

?>