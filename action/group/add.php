<?php
           $conn = new mysqli("localhost","root","","dheypt");

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO master_group VALUES (NULL,'".$_POST["nama"]."','".$_POST["status"]."')";

            // echo $sql;
            if (mysqli_query($conn, $sql)) {
               header("Location: ../../group.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
?>