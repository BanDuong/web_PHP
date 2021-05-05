<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1,url=manage.php">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>

<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "admin";
    $DBname = "mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $DBname);
    // Check connection
    if ($conn === false) {
        die("Connection failed: ".$conn->connect_error);
    }
    $sql = "DELETE FROM manage WHERE id=".$_GET['del_id'];
    $conn->query($sql);
    $sql = "ALTER TABLE manage AUTO_INCREMENT=1";

    if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Deleted successfully');</script>";
        } else {
            echo "<script>alert('Error');</script> ";
        }
    $conn->close();
?>