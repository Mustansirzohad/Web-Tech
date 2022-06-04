<?php
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $gender = $_POST["gender"];
    $emailaddress  = $_POST["email"];
    $mobilenumber   = $_POST["tel"];
    $place  = $_POST["address"];

    if(empty($firstname)) {
        echo nl2br("first name require .\n");
    }
    if(empty($lastname)) {
        echo nl2br("last name require .\n");
    }
    if(empty($gender)) {
        echo nl2br("gender not select .\n");
    }
    if(empty($emailaddress)) {
        echo nl2br("mail require .\n");
    }
    if(empty($mobilenumber)) {
        echo nl2br("tel no require .\n");
    }
    if(empty($place )) {
        echo nl2br("address require .\n");
    }
    else {
        echo nl2br("Registr success.\n");
    }
?>