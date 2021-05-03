<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $title= $_GET['title'];
    function InsertData($title,$description,$img,$status){
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

        $sql = "INSERT INTO manage (title,description,image,status,created_at)
        VALUES ($title,$description,$img,$status,NOW())";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "<script>alert('Error');</script> ";
        }
        $conn->close();
    }

    function Selection(){

    }$
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $img = './images/'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $img);
        $status = $_POST['status'] == "enabled" ? 1 : 0;
        echo $title."<br>";
        echo $description."<br>";
        echo $img."<br>";
        echo $status."<br>";
        echo "<img src='$img'>";
    }