<!DOCTYPE html>
<html lang="en">
<head>
    <title>JC's Page</title>
    <link rel="icon" type="image/x-icon" href="../images/aonahara.ico">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <?php include('navigation.php') ?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webprogss211db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?> 

</body>
</html>