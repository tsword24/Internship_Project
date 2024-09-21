<?php

session_start();
$host = "localhost";
error_reporting(0);
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);
if (isset($_POST["apply"])) {
    $file = $_FILES['image']['name'];
    $user=$_SESSION['username'];
    $avail=$_POST['avail'];
    $file_name=$_POST['name1'];
    $year=$_POST['year'];
    $file_with_username = pathinfo($file, PATHINFO_FILENAME) . '-' . $user . '.' . pathinfo($file, PATHINFO_EXTENSION);
$dst = "./materials/" . $file; 
    $dst_db = "materials/" . $file;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst); 

    $sql = "INSERT into material(name,file,owner,avail,year) values ('$file_name','$dst_db','$user','$avail','$year')";
    $result = mysqli_query($data, $sql);

    if ($result) {
        header("location: add_material1.php");
        echo "uploaded succesfully";
        exit();  
    }
}
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
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .content {
            margin: 2% 25%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            text-align: left;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"],
        input[type="number"],
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
<?php
include("teacherhome.php");
?>
    <div class="content">
    <center>
    <form action="#" method="POST"  enctype="multipart/form-data">
    <h1>add your materials</h1>
   <table>
   <tr>
        <th>file name</th>
        <th><input type="text" name="name1" ></th>
    </tr>
    <tr>
        <th>Can everyone access this:</th>
        <th><select id="cars" name="avail">
  <option value="YES">YES</option>
  <option value="NO">NO</option>

</select></th>
    </tr>
    <tr>
        <th>
        Which year does the material belongs to:
        </th>
        <th><input type="number" name="year" class="form-control" min="1" max="4"></th>
    </tr>
    <tr>
        <th>Upload the pdf of the respective subject:</th>
        <th><input type="file" name="image" accept="application/pdf,application/vnd.ms-excel" ></th>
    </tr>
    <tr>
        <th> <button type="submit" name="apply" class="btn btn-primary">Submit</button></th>
    </tr>
    </form>
    </center>
   </table>
    </div>
</body>
</html>