<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0,url=manage.php">
    <title>Update</title>
</head>
<body>
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
        $sql = "SELECT image FROM manage WHERE id=".$_GET['update_id'];
        $result = $mysqli->query($sql);
        $row = $result->fetch_array();
        $image = $row['image'];

        $status = $_POST['status'] == "enabled" ? 1 : 0;
        //
        $sql = "UPDATE manage SET title='".$_POST['title']."',description='".$_POST['description']."',status='".$status."',update_at=NOW() WHERE id=".$_GET['update_id'];
        $mysqli->query($sql);

        if ($_FILES['image']['name']!=""){
            $sql = "UPDATE manage SET image='./images/".mt_rand().$_FILES['image']['name']."' WHERE id=".$_GET['update_id'];
            unlink($image);
            move_uploaded_file($_FILES['image']['tmp_name'],'./images/'.$_FILES['image']['name']);
        }
        if ($mysqli->query($sql) === TRUE) {
            echo "<script>alert('Record updated successfullyy');</script>";
        } else {
            echo "<script>alert('Error');</script> ";
        }

        $mysqli->close();
    ?>
</body>
</html>

