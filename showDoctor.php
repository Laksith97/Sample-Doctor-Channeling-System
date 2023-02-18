<html>
    <head>
        <title>Doctor Details:</title>

        <link rel="stylesheet" type="text/css" href="showDoctor.css">
    </head>
    <body>

        <?php
            include("connection.php");

            $idd= $_POST['dno'];

            $sql_user = "SELECT Dname, AVLTime, AVLPlace FROM doctorDetails WHERE id=$idd";
         
            $result = $conn->query($sql_user);
           
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {?>
                    
                    <div class="container">
                    <center>
                        <h2>Doctor Details</h2><hr>
                        <table>
                            <tr><td class="data">Name : <?php echo  $row["Dname"];?><br><br></td></tr>
                            <tr><td class="data">Available Date : <?php echo  $row["AVLTime"];?><br><br></td></tr>
                            <tr><td class="data">Available Place : <?php echo  $row["AVLPlace"];?><br><br></td></tr> 
                        </table>
                    </center>                
            <?php
                }
            } else {
                echo "Error: " . $sql_user . "<br>" . $conn->error;
            }
            mysqli_free_result($result);
        
            ?>

            <center>
                <p style="font-family:sans-serif; font-size:20px">Go to Home page here:<br></p> 
                <a class="sbs" href="home.html">Home Page</a>
            </center><br><br>  
        </div>

    </body>
</html>