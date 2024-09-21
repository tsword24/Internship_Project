<?php
session_start();
$host = "localhost";
error_reporting(0);
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);
$sql = "SELECT * FROM teacher";
$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content {
            margin-left: 25%;
            background-color: white;
        }
        /* ul{
           
            background-color:#99A3A4;
        } */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .content {
            margin: 2% 25%;
            padding: 20px;
            background-color: #fff;
            border:solid 2px;
            border-bottom:0px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
    </style>
</head>

<body>
    <?php
    include("teacherhome.php");
    ?>

    <div class="content">
        <h1 style="background-color:#B2BABB;padding:5px;">View Materials</h1>
        <ul style="background-color: white;">
            <?php
            $materialsFolder = "materials";
            $files = scandir($materialsFolder);
            foreach ($files as $file) {
                if ($file != "." && $file != "..") {
                    echo "<li><a href='$materialsFolder/$file'  style='color: black;background-color:#CCD1D1;padding:5px;'>$file</a></li>";

                }
            }
            ?>
        </ul>
    </div>
</body>

</html>