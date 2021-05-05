<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0,url=manage.php">
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
    $mysqli = new mysqli($servername, $username, $password, $DBname);
    // Check connection
    if ($mysqli === false) {
        die("Connection failed: ".$mysqli->connect_error);
    }
    $sql = "SELECT image FROM manage WHERE id=".$_GET['del_id'];
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
    $image = $row['image'];
    unlink($image);

    $sql = "DELETE FROM manage WHERE id=".$_GET['del_id'];
    $mysqli->query($sql);
    $sql = "ALTER TABLE manage AUTO_INCREMENT=1";

    if ($mysqli->query($sql) === TRUE) {
            echo "<script>alert('Deleted successfully');</script>";
        } else {
            echo "<script>alert('Error');</script> ";
        }
    $mysqli->close();
?>