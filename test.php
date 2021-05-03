<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="test.php" method="post" enctype="multipart/form-data">
        <label>here!</label><br>
        <select name="values">
            <option >value_1</option>
            <option >value_2</option>
            <option >value_3</option>
        </select>
        <input type="submit">
	</form>
    <?php
        $val = 1;
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $var = $_POST['values'];
            echo "value was choosed be: ".$var."<br>";
            $val = $val == 1 ? 100 : 0;
            echo $val;
        }
    ?>
    
</body>
</html>