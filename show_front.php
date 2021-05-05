<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        button:hover{
            background-color: rgb(236, 119, 231);
        }
        #id_content{
            width: 100%;
            overflow: auto;
        }
    </style>
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
        
        $sql = "SELECT title,description,image FROM manage WHERE id=".$_GET['show_id'];
        $result = $mysqli->query($sql);
        $row = $result->fetch_array();

        echo "<div width=100%>";
            echo "<table width=100%>";
                echo "<tr>";
                    echo "<th style='text-align:left;font-size:40px'>".$row['title']."</th>";
                    echo "<th style='text-align:right'><a href='front.php'><button >Back</button></a></th>";
                echo "</tr>";
                
            echo "</table>";
        echo "</div id='id_content'>";
        echo "<hr>";
        /*-----------------------------------------------------------------------------------------------*/
        echo "<table>";
            echo "<tr>";
                echo "<th><img src='".$row['image']."' width='300' height='200'></th>";
                echo "<th><text name='description' placeholder='description' style='font-size:20px;'>".$row['description']."</text></th>";
            echo "</tr>";
        echo "</table>";     
        echo "<hr>";
        $mysqli->close();
    ?>
</body>
</html>

