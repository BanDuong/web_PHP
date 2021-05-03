<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my web</title>
</head>
<body>
    <?php

        function Create_DB($a,$b,$c){
            $conn = new mysqli($a,$b,$c);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            $sql = "CREATE DATABASE myDB";

            if ($conn->query($sql) === TRUE){
                echo "Database created successfully";
            }else{
                echo "Error creating database: " . $conn->error;
            }

            $conn->close();
            }
        }

        function Create_table($servername,$username,$password,$DBname){
            $conn = mysqli_connect($servername, $username, $password, $DBname);
            $sql = "CREATE TABLE MANAGE(
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255),
                description TEXT,
                image VARCHAR(255) NOT NULL,
                status INT NOT NULL,
                create_at DATETIME,
                update_at DATETIME
            )";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
        }   
        
        $servername = "127.0.0.1";
        $username = "root";
        $password = "admin";
        $DBname = "mydb";

        //Create_DB($servername,$username,$DBname);
        Create_table($servername,$username,$password,$DBname);

    ?>
</body>
</html>
