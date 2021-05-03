<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <table width=100% >
            <tr>
                <th style="font-size: 30px;text-align:left">New</th>
                <th style="text-align: right" ><a href="manage.php"><button style="background-color: rgb(80, 157, 209);color:white">Back</button></a></th>
            </tr>
        </table> <hr>
    </div>
    <!---------------------------------------------------------------------------------------->
    <div class="edit_content">
        <form method="post" action=""  enctype="multipart/form-data">
            <div>
                <label for="title">Title<?php for($i=0;$i<40;$i++) echo "&#160;"; ?></label>
                <input type="text" placeholder="title" name="title" autofocus required><br><br>
            </div>
            <!------------------------------------------------------------------------------>
            <div>
                <label for="description">Description<?php for($i=0;$i<28;$i++) echo "&#160;"; ?></label>
                <textarea name="description" rows="5px" cols="40px" placeholder="description" required style="font-size:15px" ></textarea>
            </div>
            <!------------------------------------------------------------------------------>
            <div>
                <label for="image">Image<?php for($i=0;$i<37;$i++) echo "&#160;"; ?></label>
                <input type="file" name="image" accept="image/*" required><br>
                <?php for($i=0;$i<60;$i++) echo "&#160;"; ?>
            </div>
            <!------------------------------------------------------------------------------>           
            <div>
                <label for="status">Status<?php for($i=0;$i<37;$i++) echo "&#160;"; ?></label>
                <select name="status">
                    <option value="enabled">Enabled</option>
                    <option value="disabled">Disabled</option>
                </select>
            </div>
            <!--------------------------------------------------------------------------------->
            <div>
                <br><?php for($i=0;$i<61;$i++) echo "&#160;"; ?><input type="submit" value="submit">
            </div>
        </form>
    </div>
</body>
</html>
<!--------------------------------------server-------------------------------------------------------------->
<?php
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

        $sql = "INSERT INTO manage (title,description,image,status,create_at)
        VALUES ('$title','$description','$img','$status',NOW())";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "<script>alert('Error');</script> ";
        }
        $conn->close();
    }

    function Selection(){

    }
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
        InsertData($title,$description,$img,$status);
    }
?>