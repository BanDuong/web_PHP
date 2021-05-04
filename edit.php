<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <table width=100% >
            <tr>
                <th style="font-size: 30px;text-align:left">Edit</th>
                <th style="text-align: right" ><a href="manage.php"><button style="background-color: rgb(80, 157, 209);color:white">Back</button></a></th>
            </tr>
        </table> <hr>
    </div>
    <!---------------------------------------------------------------------------------------->
    <div class="edit_content">
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
            
            $sql = "SELECT title,description,image FROM manage WHERE id=".$_GET['edit_id'];
            $result = $mysqli->query($sql);
            $row = $result->fetch_array();
            /*----------------------------------------------------------------------------*/
            echo "<form method='post' action='update.php?update_id=".$_GET['edit_id']."' enctype='multipart/form-data'>";
                echo "<div>"; 
                    echo "<label for='title'>Title</label>";
                    for($i=0;$i<51;$i++) echo "&#160";
                    echo "<input type='text' name='title' autofocus required value='".$row['title']."'><br><br>";
                echo "</div>";
            /*---------------------------------------------------------------------------------*/
                echo "<div>";
                    echo "<label for='description'>Description</label>";
                    for($i=0;$i<36;$i++) echo "&#160;";
                    echo "<textarea name='description' rows='5px' cols='40px' placeholder='description' style='font-size:15px'>".$row['description']."</textarea>";
                echo "</div>";
            /*---------------------------------------------------------------------------------*/
                echo "<div>";
                    for($i=0;$i<61;$i++) echo "&#160;"; 
                    echo "<input type='file' name='image' accept='image/*'><br><br>";
                    for($i=0;$i<61;$i++) echo "&#160;";
                    echo "<img src='".$row['image']."' width='200' height='150'>";
                echo "</div>";
            /*---------------------------------------------------------------------------------*/
                echo "<div>";
                    echo "<br><label for='status'>Status</label>";
                    for($i=0;$i<47;$i++) echo "&#160;";
                    echo "<select name='status'>
                            <option value='enabled'>Enabled</option>
                            <option value='disabled'>Disabled</option>
                          </select>";
                echo "</div>";
             /*---------------------------------------------------------------------------------*/
                echo "<div>";
                    echo "<br>";
                    for($i=0;$i<61;$i++) echo "&#160;";
                    echo "<input type='submit' value='save'>";
                echo "</div>";
            echo "</form>";
            $mysqli->close();
        ?>
    </div>
</body>
</html>

