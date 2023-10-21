<?php

    $data = $_POST;

    $NAME = $data['name'];
    $URN = $data['urn'];
    
    echo $NAME;
    echo $URN;

    $host = "localhost:3308";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "dev";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    echo "Connection was Successfull";

    $sql = "INSERT INTO hello values('$NAME','$URN')";
    if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
    }
    else{
        echo "Error: ". $sql ."\n". $conn->error;
    }
    $conn->close();
    
?>