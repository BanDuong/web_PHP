<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <table width=100% >
            <tr>
                <th style="font-size: 30px;text-align:left">Edit</th>
                <th style="text-align: right" ><button style="background-color: rgb(80, 157, 209);color:white">Show</button><button>Back</button></th>
            </tr>
        </table> <hr>
    </div>
    <!---------------------------------------------------------------------------------------->
    <div class="edit_content">
        <form method="post" action="manage.php" enctype="multipart/form-data">
            <div>
                <label for="title">Title<?php for($i=0;$i<40;$i++) echo "&#160;"; ?></label> 
            <input type="text" placeholder="title" name="title"autofocus required><br>
            </div>
            <!---------------------------------------------------------------------------->
            <div>
                <label for="description">Description<?php for($i=0;$i<28;$i++) echo "&#160;"; ?></label>
                <input type="text" size="60px" name="description" placeholder="Description" required>
            </div>
            <!------------------------------------------------------------------------------>
            <div>
                <label for="image">Image<?php for($i=0;$i<37;$i++) echo "&#160;"; ?></label>
                <input type="file" name="image"><br>
                <?php for($i=0;$i<60;$i++) echo "&#160;"; ?>
                <img src="./images/lap1.jpg" width="250px" height="150px">
            </div>
            <!------------------------------------------------------------------------------>           
            <div>
                <label for="status">Status<?php for($i=0;$i<37;$i++) echo "&#160;"; ?></label>
                <select>
                    <option value="enabled">Enabled</option>
                    <option value="disabled">Disabled</option>
                </select>
            </div>
        </form>
    </div>
    <!---------------------------------------------------------------------------------------->
    <div>
        <br><?php for($i=0;$i<60;$i++) echo "&#160;"; ?><input type="submit" value="submit">
    </div>
    <!---------------------------------------------------------------------------------------->

    <!---------------------------------------------------------------------------------------->

</body>
</html>