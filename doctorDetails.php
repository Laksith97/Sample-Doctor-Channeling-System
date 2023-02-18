<?php

    include("connection.php");

    $sql_user = "CREATE TABLE doctorDetails(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Dname VARCHAR(30) NOT NULL,
        AVLTime VARCHAR(30) NOT NULL,
        AVLPlace VARCHAR(50) NOT NULL)";

    if($conn->query($sql_user)===TRUE)
    {
        echo "Table was created successfully.";
    }
    else
    {
        echo "Error".$conn->error;
    }
    
    $sql_user = "INSERT INTO doctorDetails (Dname, AVLTime, AVLPlace)
    VALUES 
    ('Mr. Rathnayake', '2022/03/14 5.30 p.m.', 'Asiri Hospital, Matara'),
    ('Mr. Jayasekara', '2022/03/14 7.30 p.m.', 'Apolo Hospital, Matara'),
    ('Mr. Peris', '2022/03/16 4.30 p.m.', 'General Hospital, Matara'),
    ('Mrs. Fernando', '2022/03/15 6.00 p.m.', 'Ruhunu Hospital, Galle'),
    ('Mrs. Walpola', '2022/03/15 4.30 p.m.', 'Lanka Hospital, Colombo')";

    if ($conn->query($sql_user) === TRUE) {
        echo "New record created successfully!";
    }
    else {
        echo "Error: " . $sql_user . "<br>" . $conn->error;
    }

    $conn->close();

?>