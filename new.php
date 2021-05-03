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
        <form method="post" action="insertData.php" enctype="multipart/form-data">
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
