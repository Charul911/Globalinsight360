<?php 

$host = 'localhost';
$user = 'root';

$conn = mysqli_connect($host, $user);

if ($conn) {
    echo "Connection Successful!";
}else{
    echo "Connection failed!";
}

mysqli_select_db($conn,'project');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$article = $_POST['article'];

$query = "INSERT INTO userinfo(username, email, mobile, article)VALUES('$username','$email','$mobile','$article')";

mysqli_query($conn, $query);

header('location:index.php');

?>