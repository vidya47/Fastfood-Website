<?php
 

    include("connection.php");
        
    $result = mysqli_query($link, "INSERT INTO `order` (name, email, details, 
                                                                    spice) 
                            VALUES ('$name', '$email', '$details', 
                                                 '$spice' ) ");


    header('Location: orderformsubmission.php/$_GET');


?>