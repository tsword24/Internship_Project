
<?php

session_start();
$host = "localhost";
error_reporting(0);
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);
$sql="SELECT * FROM teacher";
$result=mysqli_query($data, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .content {
            margin-left: 25%;
            padding: 20px;
            border: solid 2px;
            margin-top:70px;
            margin-right:50px;
        }

        .content h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th a {
            text-decoration: none;
            color: #333;
        }

        .table th a:hover {
            color: #007bff;
        }
    </style>

    
</head>
<body>
<?php
include("studenthome.php");
?>
   
    <div class="content">
        <h1>View Materials</h1>
        <table class="table">
  <tbody>
    <tr>
      <th><a href="first_year.php"  target="_blank">First year</a></th>
    </tr>
    <tr>
      <th><a href="second_year.php"  target="_blank">second year</a></th>
    </tr>
    <tr>
      <th><a href="Third_year.php"  target="_blank">Third year</a></th>
    </tr>
    <tr>
      <th><a href="Final_year.php"  target="_blank">Final year</a></th>
    </tr>
  </tbody>
</table>
    </div>
</body>
</html>