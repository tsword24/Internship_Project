<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

$conn = new mysqli($host, $user, $password, $db); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST["username"];
$phone = $_POST['phone'];
$email = $_POST['username'];
$username = $_POST['name'];
$password = $_POST['password'];
$year = $_POST['year'];
$cgpa = $_POST['cgpa'];
$backlogs = $_POST['backlogs'];
$skills = $_POST['skills'];
$leetcode_profile = $_POST['leetcode_profile'];
$codechef_profile = $_POST['codechef_profile'];
$sql = "INSERT INTO user (username, phone, email, password, Year, NAME, CGPA, Backlogs, Skills, Leetcode_profile, Codechef_profile) 
        VALUES ('$email', '$phone', '$username', '$password', '$year', '$name', '$cgpa', '$backlogs', '$skills', '$leetcode_profile', '$codechef_profile')";
if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
