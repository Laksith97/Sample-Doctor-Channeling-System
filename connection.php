<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo "Connected successfully <br>";
    }

    $sql_user = "CREATE DATABASE IF NOT EXISTS MedDb";

    $dbname = "MedDb";

    if($conn->query($sql_user)===TRUE)
    {
        echo "Database MedDb was created successfully!";
    }
    else
    {
        echo "Error creating database: " . $conn->error;
    }

    $conn = new mysqli($servername, $username, $password, $dbname);

    //$conn->close();

?>