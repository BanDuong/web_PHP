<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        th,td{
            border: 1px solid black;
            word-wrap: break-word;
            width:350px;
        }
        #id_content{
            width: 100%;
            background-color: red;
            overflow-y: auto;
        }
        button:hover{
            background-color: rgb(236, 119, 231);
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
</head>
<body>
<!--------------------------------------------header--------------------------------------------------------------->

    <div>
        <table width=100% class="tb_header" >
            <td style="border: none"><h1>MANAGE</h1></td>
            <td style="text-align:end;border: none"><a href="new.php"><button style="cursor:pointer rgba(91, 83, 211, 0.867)">New</button></a></td>
        </table>
        <hr>
    </div>
<!--------------------------------------------content---------------------------------------------------------------->
    <div id="id_content">
        <table width = 100% class="tb_content" style="border-collapse:collapse;overflow-x:auto">
            <tr>
                <th>ID</th>
                <th>Thumb</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>ssssssssss</td>
                <td>a44444aaaaaaaaaaaaaaaaaaaaaaa</td>
                <td>ssssssssssssssssssssssssssssssssssssss</td>
                <td>ssssssssssssssssssssssssss</td>
                <td>sssssssssssssssssssssssssssssssssssssssssssssssss</td>
            </tr>
        </table>
    </div>
<!------------------------------------------footer------------------------------------------------------------------>

    <div>
        <table width=80% class="tb_footer">
            <tr >
                <th style="text-align:left;border: none">
                    <form>
                        <label>Page</label>
                        <select>
                            <option value="five">5</option>
                            <option value="ten">10</option>
                            <option value="fifty">50</option>
                            <option value="all">All</option>
                        </select>
                    </form>
                </th>
                <th style="border: none; text-align:left">
                    <table>
                        <tr><button><<</button></tr>
                        <tr><button>1</button></tr>
                        <tr><button>2</button></tr>
                        <tr><button>>></button></tr>
                    </table>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>