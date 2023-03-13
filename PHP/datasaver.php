<?php
if ($_SERVER("REQUEST_METHOD") == "POST") {
    $username = $_POST('uname');
    $emailaddress = $_POST('email');
    $rollnumber = $_POST('rollnum');
    $address = $_POST('address');

    print("All of the data accessed using php superglobals GET is listed below \n");
    print $username . "\n";
    print $_POST('email') . "\n";
    print $_POST('rollnum') . "\n";
    print $address . "\n";
}
