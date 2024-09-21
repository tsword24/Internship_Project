<?php
include("adminhome.php");
?>
<?php
// session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

if ($data == false) {
    die("Connection error");
}
$sql="SELECT * FROM admission";
$result=mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .main
        {
            display: flex;
        }
        .main1
        {
            width: 25%;
        }
        table
        {
            border: 1px solid black;
        }
        th{
            padding: 20px;
            font-size: 20px;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 33%;
            margin-top:5%;
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #dee2e6;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #343a40;
            color: #fff;
            font-size: 18px;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e9ecef;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

   
    <div class="content">
        <h1>student data</h1>
        <table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Approval</th> 
      
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row=$result->fetch_assoc()) {
        if($row['response'] == 1){
    ?>
    <tr>
      <th scope="row">
      <?php echo $row["id"];
        ?>
      </th>
      <td>
      <?php echo $row["Roll"];
        ?>
        </td>
      <td>
      <?php echo $row["Name"];
        ?>
      </td>
      <td>
      <?php echo $row["Course"];
        ?>
      </td>
      <td>
      <form method="post"> 
      <input type="submit" name="allow"
              value="allow"/> 
        
      <input type="submit" name="deny"
              value="deny"/> 
  </form> 
      </td>
      
    </tr>
    <?php
    }
  }
    ?>

    <?php
      
      if(isset($_POST['allow'])) { 
          echo "This is Button1 that is selected"; 
          
    // while ($row=$result->fetch_assoc()) {
        
   
      } 
      if(isset($_POST['deny'])) { 
           $response = " UPDATE admission SET response = 0 where b is true ";
          // $res=mysqli_query($data, $response);
           $stmt = mysqli_prepare($data, $response); // $conn is your mysqli connection
           mysqli_stmt_bind_param($stmt, "b", $_POST['deny']); // "i" for integer value
          // mysqli_stmt_execute($stmt);
          // mysqli_stmt_close($stmt);
      } 
  ?> 
    
  
  </tbody>
</table>
    </div></div>
</body>
</html>