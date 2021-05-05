<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>front</title>
    <link rel="stylesheet" href="style.css">
    <style>
        th,td{
            border: 1px solid black;
            word-wrap: break-word;
           
        }
        #id_content{
            width: 100%;
            overflow: auto;
        }
        button:hover{
            background-color: rgb(236, 119, 231);
        }
    </style>
</head>

<body>
    
</body>
</html>
    <div id="id_content">
        <table width = 100% class="tb_content" style="border-collapse:collapse;overflow-x:auto;text-align:center">
            <tr>
                <th>ID</th>
                <th>Thumb</th>
                <th>Title</th>
            </tr>
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
                
                $sql = "SELECT id,image,title FROM manage";
                if($result = $mysqli->query($sql)){
                    if($result->num_rows > 0){
                        $id = 0;
                        while($row = $result->fetch_array()){
                            $id++;
                            echo "<tr>";
                                echo "<td width='30px'>" . $id . "</td>";
                                echo "<td width='250px'><a href='show.php?show_id=".$row['id']."'><img src='".$row['image']."' width='200' height='150'></a></td>";
                                echo "<td>" . $row['title'] . "</td>";  
                            echo "</tr>";
                        }
                        // Free result set
                        $result->free();
                    } else{
                        echo "No records matching your query were found.";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. ".$mysqli->error;
                }
                // Close connection
                $mysqli->close();
            ?>
        </table>
    </div>
<!------------------------------------------footer------------------------------------------------------------------>

<?php

?>