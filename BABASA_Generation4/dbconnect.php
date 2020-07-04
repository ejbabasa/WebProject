<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sys";

    $conn = new mysqli($server, $username, $password, $dbname);

    if ($conn->connect_error)
        die("Connection Failed");

    //echo "Database Connection Successful!";

    $sql = "INSERT INTO users (username, password) VALUES ('sampleusername', 'samplepassword')";

    if ($conn->query($sql)) {
        echo "Record successfully inserted";
    } else {
        echo $conn->error;
    }

?>