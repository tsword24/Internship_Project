<?php
include("teacherhome.php");
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
$name=$_SESSION['username'];
$fetch_sql = "SELECT * FROM user WHERE username='$name'";
$fetch_result = mysqli_query($data, $fetch_sql);
$row = mysqli_fetch_assoc($fetch_result);
if(isset($_POST['apply']))
{
    $s_email= $_POST['email'];
    $s_password= $_POST['password'];
    $s_phone= $_POST['phone'];

    $sql="UPDATE user set email='$s_email',phone='$s_phone',password='$s_password' where username='$name'";
    $result2=mysqli_query($data, $sql);
    if($result2)
    {
        echo "update succesfull";
    }
}
mysqli_close($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* General styling */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  background-color: #f4f4f4; /* Light gray background */
}

.content {
  width: 50%; /* Adjust width as needed */
  margin: 40px auto;
  padding: 20px;
  background-color: #fff; /* White background */
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow */
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="tel"],
button {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
}

button {
  background-color: #007bff; /* Blue background */
  color: #fff;
  cursor: pointer;
}

    </style>
    
</head>
<body>

    <div class="content">
        <h1>Update Information</h1>
        <div>
            <form action="#" method="POST">
                <div class="one">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo "{$row['email']}" ?> " required>
                </div>
                <div class="one">
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" value="<?php echo "{$row['phone']}" ?>" required>
                </div>
                <div class="one">
                    <label for="rollno">Password:</label>
                    <input type="text" name="password" value="<?php echo "{$row['password']}" ?>" required>
                </div>

                <button type="submit" name="apply">Update</button>
            </form>
        </div>
    </div>
  </div>
  
</body>
</html>