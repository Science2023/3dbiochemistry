<?php
$servername = "localhost"; // یا آدرس سرور دیتابیس شما
$dbusername = "root"; // نام کاربری دیتابیس
$dbpassword = ""; // رمز عبور
$dbname = "login-register"; // نام پایگاه داده شما

// اتصال به دیتابیس
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// بررسی اتصال
if (!$conn) {
    die("اتصال به پایگاه داده ناموفق: " . mysqli_connect_error());
}
?>
