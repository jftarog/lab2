<?php
    $servername = "localhost";
    $username = "webprogss211";
    $password = "webprogss211";
    $dbname = "webprogss211";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE jftarog_myguests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        website VARCHAR(100),
        comment TEXT,
        gender VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?> 