<?php include ('ConnectDB/conn.php'); ?>

<?php
    session_start();

    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "กรุณาเข้าสู่ระบบก่อน";
        header('location: loginPage.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: loginPage.php');
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login DEMO</title>
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar bg-dark body-tertiary">
            <div class="container">
                <h3 class="navbar-brand text-white text-center"> <i class="fa-solid fa-laptop"
                        style="color: #63E6BE;"></i>
                    LoginDEMO
                </h3>
            </div>
        </nav>
    </header>


    <main>

        <?php if(isset($_SESSION['success'])) : ?>
            <div class="text-success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <div class="container mt-5">
            <?php if (isset($_SESSION['username'])): ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?> </strong></p>
                <p><a href="homePage.php?logout='1'" style="color: red;"></a></p>
            <?php endif ?>
        </div>
    </main>


    <footer class="fixed-bottom">
        <footer class="text-center bg-body-tertiary">
            <div class="text-center p-3 bg-dark text-white">
                <i class="fa-solid fa-circle-info" style="color: #63E6BE;"></i> DEMO LOGIN TEST : ทดสอบระบบการล็อคอิน
            </div>
        </footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>