<?php

    include("connection.php");
        
    $sql_user = "CREATE TABLE IF NOT EXISTS User (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        First_Name VARCHAR(30) NOT NULL,
        Last_Name VARCHAR(30) NOT NULL,
        Email VARCHAR(50),
        Username VARCHAR(15) NOT NULL UNIQUE,
        PW VARCHAR(10) NOT NULL
    )";

    if ($conn->query($sql_user) === TRUE) {
        echo "Table User created successfully <br>";
    } 
    else {
        echo "Error creating table: " . $conn->error;
    }

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["pw1"];

    $sql_user = "INSERT INTO User (First_Name, Last_Name, Email, Username, PW)
    VALUES ('$fname', '$lname', '$email', '$username', '$password')";
    
    if ($conn->query($sql_user) === TRUE) {
        echo "New record created successfully <br>";
    } 
    else {
        echo "Error: " . $sql_user . "<br>" . $conn->error;
    }

    $conn->close();

?>
