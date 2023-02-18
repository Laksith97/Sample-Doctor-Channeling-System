<?php

    include("connection.php");

    $username = $_POST["username"];
    $password = $_POST["pw1"];

    $sql_user = "SELECT * FROM User WHERE Username='$username' AND PW='$password'" OR 
    die("Failed to query database " . $conn->error);

    $result = $conn->query($sql_user);

    $row = mysqli_fetch_array($result);

    if($row['Username'] == $username && $row['PW'] == $password) {
        echo "<br> Login success.. Welcome! " .  $row['Username'];
        //header("Location : home.php");
        //exit();
    }
    else {
        echo "Failed to login!";
    }

?>

<html>
    <head>
        <title></title>
    </head>
    <body>

        <p style="font-family:sans-serif; font-size:20px">Go to Home page here :<br></p>

        <div id="home">
            <a href="home.html"> Home </a>
        </div>
        
    </body>
</html> 