<?php

//save the time the script the file executed to a file 

$db_file =  dirname(__FILE__) . '/db.txt';
file_put_contents($db_file, date('H:i:s'));

//get the time from the file
$time = file_get_contents($db_file);

?>

<!doctype html>
<html>
    <head>
    <title>Thank you for your order!</title>
    </head>
    <body>
        <h1>Thank you for your order!</h1>
        <p>We will contact you ASAP! Order placed time: <?php echo $time; ?>.</p>
    </body>


</html>