<?php include ('../ConnectDB/conn.php') ?>

<?php

session_start();

if (isset($_POST['req_register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
}

$user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email";
$query = mysqli_query($conn,$user_check_query);
$result = mysqli_fetch_assoc($query);

if($result){
    if($result['username'] === $username){
        array_push($errors,"Username already exists");
    }
    if($result['email'] === $email) {
        array_push($erros, "Email already exists"); 
    }
}



$password = md5($password_1);
$sql = "INSERT INTO user (username, email, password) VALUES('$username','$email','$password')";
mysqli_query($conn, $sql);
header('location:../Register/registerSuccess.php');

?>