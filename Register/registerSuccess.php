<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Success</title>
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <script>
        window.addEventListener('load', function () {
            Swal.fire({
                title: 'ยินดีต้อนรับ!',
                text: 'คุณจะถูกเปลี่ยนเส้นทางในอีก 5 วินาที',
                icon: 'success',
                timer: 5000, // เวลาในการแสดง SweetAlert คือ 3 วินาที
                timerProgressBar: true,
                showConfirmButton: false // ไม่แสดงปุ่มยืนยัน
            }).then(function () {
                // เปลี่ยนเส้นทาง URL หลังจาก SweetAlert แสดงขึ้นเสร็จสิ้น
                window.location.href = 'http://127.0.0.1/Login_System_DEMO/home.php'; // เปลี่ยน URL เป็น URL ที่คุณต้องการเปลี่ยนไป
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
</body>

</html>