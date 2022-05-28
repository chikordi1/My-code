<?php
    
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Date = $_POST["dob"];
    $Gender = $_POST["gender"];
    $Country = $_POST["country"];

    $userdata = "./userdata.txt";
    $handle = fopen($userdata, "w");
    fwrite($handle, $Name . "\n" . $Email . "\n" . $Date. "\n" . $Gender. "\n" . $Country);
    fclose($handle);

    $handle = fopen($userdata, "r");
    $content = fread($handle, filesize($userdata));
    print_r($content);
    fclose($handle);
?>