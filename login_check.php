
<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

if ($data == false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE username='" . $name . "' AND password='" . $password . "'";
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "student") {
        $_SESSION['username']= $name;
        header("location:studenthome.php");
    } else if ($row["usertype"] == "Admin") {
        $_SESSION['username']=  $name;
        header("location:adminhome.php");
    }
    else if ($row["usertype"] == "teacher") {
        $_SESSION['username']=  $name;
        header("location:teacherhome.php");
    }  else {
        session_start();
        $message = "Enter a valid username and password";
        // echo "hello";
        // session_destroy();
        $_SESSION['warning'] = $message;
        header("location:login.php");
    }
}
?>
