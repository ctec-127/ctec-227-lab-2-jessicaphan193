<?php
    echo "Username: " . $_COOKIE['username'] . "<br>";
    echo "FirstName: " . $_COOKIE['firstname'] . "<br>";
    echo "LastName: " . $_COOKIE['lastname'] . "<br>";

    if (isset($_COOKIE["cookie"])){
        foreach ($_COOKIE["cookie"] as $key => $val){
            echo $key . ' is ' . $val . " <br>\n";
        }
    }
?>