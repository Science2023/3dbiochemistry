<?php
session_start();

// حذف تمام متغیرهای جلسه
session_unset();

// خاتمه جلسه
session_destroy();

// هدایت به صفحه لاگین
header("Location:login.php");
exit();
?>
