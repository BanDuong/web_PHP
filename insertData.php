<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0,url=manage.php">
    <title></title>
</head>
<body>
    
</body>
</html>
<?php
        $title = $_POST['title'];
        $description = $_POST['description'];
        $img = './images/'.mt_rand().$_FILES['image']['name'];
        while(file_exists($img)){
            $img = './images/'.mt_rand().$_FILES['image']['name'];
        }
        move_uploaded_file($_FILES['image']['tmp_name'], $img);
        $status = $_POST['status'] == "enabled" ? 1 : 0;

        $servername = "127.0.0.1";
        $username = "root";
        $password = "admin";
        $DBname = "mydb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $DBname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO manage (title,description,image,status,create_at)
        VALUES ('$title','$description','$img','$status',NOW())";
    
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "<script>alert('Error');</script> ";
        }
        $conn->close();
?>