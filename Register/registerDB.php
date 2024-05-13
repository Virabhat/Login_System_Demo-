<?php include ('../ConnectDB/conn.php') ?>

<?php

    session_start();

    $errors = array();

    if (isset($_POST['req_register'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if(empty($username)){
            array_push($errors,"กรุณาใส่ username");
        }

        if(empty($email)){
            array_push($errors,"กรุณาใส่ email");
        }

        if(empty($password_1)){
            array_push($errors,"กรุณาใส่รหัส");
        }

        if($password_1 != $password_2){
            array_push($errors, "รหัสผ่านไม่ถูกต้องเเละรูปเเบบไม่เข้ากัน");
        }


        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['username'] === $username){
                array_push($errors,"ชื่อผู้ใช้คนนี้บัญชีเเล้ว");
            }
            if($result['email'] === $email){
                array_push($errors, "อีเมลนี้มีผู้ใช้งานเเล้ว");
            }
        }

        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO user (username, email, password) VALUES('$username','$email','$password')";
            mysqli_query($conn, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success']  = "สวัสดีคุณ".$username."เข้าสู่ระบบเรียบร้อย" ;
            header('location: homePage.php');
        }

    }

    header('location:../homePage.php');

?>