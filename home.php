<?php include ('ConnectDB/conn.php'); ?>

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
        <div class="container mt-5">
            <div class="row">
                    <div class="text-center text-primary">
                        <h2> <i class="fa-solid fa-circle-user" style="color: #63E6BE;"></i> เข้าสู่ระบบ</h2>
                    </div>
                    <br>
                    <div class="container d-flex justify-content-center">
                        <div class="border rounded p-5 " style="width:500px">
                            <form>
                                <div class="form-group">
                                    <label><b> <i class="fa-solid fa-envelope"></i> : อีเมล</b></label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="กรุณาใส่อีเมลของคุณ" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label><b><i class="fa-solid fa-key"></i> :
                                            รหัสผ่าน</b></label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="กรุณาใส่รหัสผ่านของคุณ" required>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-success" for="exampleCheck1">จดจำรหัสผ่าน</label>
                                </div>
                                <br><br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary rounded-pill"><i class="fa-solid fa-right-to-bracket" style="color: #63E6BE;"></i> เข้าสู่ระบบ</button>
                                </div>
                                <br><br><br>
                                <div class="text-center mt-3">
                                    <a href="Register/registerPage.php">ยังไม่มีบัญชี? สมัครสมาชิก</a>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
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