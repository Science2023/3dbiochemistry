<?php
session_start();

function saveFormDataToSession() {
    $_SESSION['form_data'] = $_POST;  // ذخیره اطلاعات فرم در session
}

$messages = []; // آرایه برای ذخیره پیام‌ها

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // گرفتن داده‌ها از فرم
    $fullname = trim($_POST['fullname']);
    $phonenumber = trim($_POST['phonenumber']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $usercode = trim($_POST['usercode']);
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];

    // بررسی فیلدهای خالی
    if (empty($fullname) || empty($phonenumber) || empty($username) || empty($password) || empty($usercode)) {
        $messages[] = ['type' => 'error', 'text' => "پر کردن همه فیلدها الزامی است", 'color' => 'red'];
        saveFormDataToSession();
    }

    // هش کردن رمز عبور
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    require_once "database.php";

    // بررسی تکراری بودن نام کاربری
    $sql_username_check = "SELECT * FROM students WHERE username = ?";
    $stmt = $conn->prepare($sql_username_check);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $username_check_result = $stmt->get_result();

    if ($username_check_result->num_rows > 0) {
        $messages[] = ['type' => 'error', 'text' => "این نام کاربری قبلاً ثبت شده است", 'color' => 'red'];
        saveFormDataToSession();
    }

    // بررسی کد کاربری و به‌روزرسانی اطلاعات
    $sql = "SELECT * FROM students WHERE usercode = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usercode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (empty($user['fullname']) || empty($user['phonenumber']) || empty($user['username']) || empty($user['password'])) {
            $device_info = json_encode([
                'user_agent' => $_SERVER['HTTP_USER_AGENT'],
                'platform' => $_SERVER['HTTP_USER_AGENT'],
            ]);

            $sql = "UPDATE students SET fullname = ?, phonenumber = ?, username = ?, password = ?, ip_address = ?, device_info = ? WHERE usercode = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssss", $fullname, $phonenumber, $username, $hashed_password, $ip_address, $device_info, $usercode);

            if ($stmt->execute()) {
                $messages[] = ['type' => 'success', 'text' => "ثبت نام با موفقیت انجام شد", 'color' => 'gold'];
                unset($_SESSION['form_data']); // پاک کردن اطلاعات از Session بعد از موفقیت
            } else {
                $messages[] = ['type' => 'error', 'text' => "خطا در تکمیل اطلاعات: " . $conn->error, 'color' => 'red'];
            }
        } else {
            $messages[] = ['type' => 'error', 'text' => "این کد کاربری قبلاً ثبت شده است", 'color' => 'red'];
            saveFormDataToSession();
        }
    } else {
        $messages[] = ['type' => 'error', 'text' => "این کد کاربری معتبر نمی‌باشد", 'color' => 'red'];
        saveFormDataToSession();
    }

    $stmt->close();
    $conn->close();

    $_SESSION['messages'] = $messages;


}

// نمایش پیام‌ها پس از رفرش
if (isset($_SESSION['messages'])) {
    $messages = $_SESSION['messages'];
    unset($_SESSION['messages']);
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    unset($_SESSION['form_data']); // پاک کردن داده‌های فرم هنگام رفرش
}
?>



<!DOCTYPE html>
<head>
    
    <script src="https://kit.fontawesome.com/541b203307.js" crossorigin="anonymous"></script>
    <link href="https://allfont.net/allfont.css?fonts=roboto-thin">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');


@font-face {
  font-family: "Iranian";
  src:url("Iransans")  format("woff"),
 
}

@font-face {
  font-family: "Yekan";
  src:url("https://rawcdn.githack.com/Science2023/scientist.github.io/ea382640dc9303089955465cb3eb1e37af9a301e/Yekan-.woff")  format("woff"),
  url("https://download1594.mediafire.com/6y1g8w2ko6zgKb9iGPrgxqoPncbq4aw7Q0m4wD1-ErxYZ3u3H0SPlT0ArRmEjTxflhuq9sUNhSvhEcWpTaY71-_ZttsJ/8zorgdg84b1avso/Yekan+%281%29+%283%29.otf") format("opentype")

}
@font-face {
  font-family: "Estedad";
  src:url("https://rawcdn.githack.com/Science2023/3dbiochemistry/fcc681ac4af6325218331d60123c7986df89927b/Estedad-Light.woff")  format("woff"),
  url("https://rawcdn.githack.com/Science2023/3dbiochemistry/fa02ea97084691c84105829a54937b6ea3de4608/Estedad-Light.woff2")  format("woff2"),


}
.loginform {
  position: fixed;
  top:0px;
  left:0px;
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    background-image: url('cold-adapted-enzymes.webp');
    z-index: 100000;
    display:flex;
    width: 100vw;
}


.loginform .colour {
    position: absolute;
    filter: blur(150px);
}

.loginform .colour:nth-child(1) {
    top: -350px;
    width: 600px;
    height: 600px;
    background: #bf4ad4;
}

.loginform .colour:nth-child(2) {
    left: 100px;
    width: 500px;
    height: 500px;
    bottom: -150px;
    background: #ffa500;
}

.loginform .colour:nth-child(3) {
    right: 100px;
    bottom: 50px;
    width: 300px;
    height: 300px;
    background: #2b67f3;
}

.loginbox {
    position: relative;
    width: 60vw;
    display:flex;
    justify-content:center
}

.loginbox .square {
    position: absolute;
    border-radius: 10px;
    backdrop-filter: blur(5px);
    background: rgba(255, 255, 255, 0.0);
    animation-delay: calc(-1s * var(--i));
    animation: animate 10s linear infinite;
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

@keyframes animate {

    0%,
    100% {
        transform: translateY(-40px);
    }

    50% {
        transform: translateY(40px);
    }
}

.loginbox .square:nth-child(1) {
    top: -30vw;
    left: -15vw;
    width: 40vw;
    height: 40vw;
}

.box .square:nth-child(2) {
    z-index: 2;
    top: 150px;
    left: -100px;
    width: 80px;
    height: 80px;
}

.loginbox .square:nth-child(3) {
    z-index: 2;
    width: 40vw;
    height: 40vw;
    right:-20vw;
    bottom: -40vw;
}

.loginbox .square:nth-child(4) {
    left: -15vw;
    width: 40vw;
    height: 40vw;

    bottom: -50vw;
    z-index: 1;
}

.loginbox .square:nth-child(5) {
    top: -50vw;
    right: -15vw;
    width: 40vw;
    height: 40vw;
}


@media all and (orientation: landscape) {
  .loginbox .square:nth-child(1) {
    top:-8vh;
    left: -30vh;
    width: 30vh;
    height: 30vh;
    z-index: 100;
}

.box .square:nth-child(2) {
    z-index: 2;
    top: 100px;
    right:10px;
    width: 30vh;
    height: 30vh;
}

.loginbox .square:nth-child(3) {
    z-index: 2;
    width: 30vh;
    height: 30vh;
    right: -15vh;
    bottom: -5vw;
}

.loginbox .square:nth-child(4) {
    left: -25vh;
    width: 30vh;
    height: 30vh;
    bottom: -10vh;
    z-index: 1;
}

.loginbox .square:nth-child(5) {
    top: -5vh;
    right: -15vw;
    width: 30vh;
    height: 30vh;
}


}
.logincontainer {
    width: 95%;
    height:40vh;
    margin:auto;
    position: relative;
    display: flex;
    border-radius: 10px;
    padding-bottom: 20px;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(5px);
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.form {
    width: 85%;
    height: 100%;
    padding: 20px;
    position: relative;
    align-items: center;
}

.form h2 {
    color: #fff;
    font-weight: 600;
    position: relative;
    letter-spacing: 1px;
    margin-bottom: 40px;
    color:#fff;
  font-size:2vh;
  width: 100%;
}
@media all and (orientation:landscape){
    .form h2 {

font-size:2vw;
}

}

.form h2::before {
    left: 0;
    width: 100%;
    height: 4px;
    content: "";
    bottom: -10px;
    background: #fff;
    position: absolute;
}

.form .input__box {
    width: 100%;
    margin-top: 10px;
    width:100%
}

.form .input__box input {
    width: 100%;
    height: fit-content;
    color: white;
    outline: none;
    font-size: 2vh;
    letter-spacing: 1px;
    border-radius: 35px;
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
.login-reg{
    background: transparent;
    color: white;
    border-radius: 50px;
    font-family: 'Yekan';
    padding-right: 10px;
    padding-left: 10px;
    border: none;
    cursor: pointer;
    font-size: 2vh;
}
@media all and (orientation:landscape){
    .form .input__box input {
    font-size:2vw;

}
.login-reg{
font-size: 2vw;
}
.logincontainer{
    height: 37vw;
}

}
.form .input__box button {
  cursor: pointer;
  display: flex;
    justify-content: center;
    width: fit-content;
    color: #fff;
    border: none;
    outline: none;
    font-size: 2vh;
    padding: 0px 80px;
    letter-spacing: 1px;
    border-radius: 50px;
    background: rgba(255, 255, 255, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
@media all and (orientation:landscape){
    .form .input__box button {
    font-size:2vw;

}}
input::placeholder {
    color: #fff;
}

#login {
    color: #666;
    cursor: pointer;
    background: #fff;
    font-weight: 600;
    margin-bottom: 20px;
    justify-content: center;
    display: flex;
}

.forget {
    color: #fff;
    margin-top: 5px;
}

.forget a {
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}

#log-reg-pages{
    position: absolute;
    bottom:0px;
    display: flex;
    justify-content: center;
    font-family: 'Yekan';
    left:5vw
 
}
input, textarea {
    pointer-events: auto;
    user-select: auto;
}
.messages{
    font-size:1.3vh
}
@media all and (orientation:landscape){
    .messages{
        font-size:1.5vw
    }
}

    </style>
</head>
<body>



<section class="loginform" id="loginform">
    <div class="container">
        <div class="loginbox">
        <div class="square" style="--i: 0"><img style="width:100%"src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/molecule-structure.png"></div>
            <div class="square" style="--i: 1"></div>
            <div class="square" style="--i: 2"><img style="width:100%"src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/cell-model.png"></div>
            <div class="square" style="--i: 3;overflow: hidden;"><img style="width:180%;height:80%;top: 10%;position: absolute;"src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/dnamodel.png"></div>
            <div class="square" style="--i: 4"><img style="width:100%"src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/human-insulin.png"></div>
            <div class="logincontainer">
                <div class="form" id="reg-form" style="display: grid;">
                    <form dir="ltr" method="POST" action="registration.php" >
                    <div id="messages" style="position:relative">
                    <?php if (!empty($messages)) : ?>
        <?php foreach ($messages as $message) : ?>
            <div class="messages" style="color: <?= htmlspecialchars($message['color']); ?>; font-family: Yekan; text-align: center;">
                <?= htmlspecialchars($message['text']); ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

                    <input type="hidden" id="device-id" name="device_id">

                        <div class="input__box" style="display: flex;align-items: center;margin-top:0">
                            <input type="text" class="form-control" id="fullname" dir="rtl" name="fullname" placeholder="نام و نام خانوادگی" value="<?= isset($_SESSION['form_data']['fullname']) ? htmlspecialchars($_SESSION['form_data']['fullname']) : '' ?>" style="font-family: Yekan; text-align:center;" required>
                        </div>
                        <div class="input__box" style="display: flex;align-items: center;">
                            <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="شماره موبایل" value="<?= isset($_SESSION['form_data']['phonenumber']) ? htmlspecialchars($_SESSION['form_data']['phonenumber']) : '' ?>" style="font-family: Yekan; text-align:center;" required>
                        </div>
                        <div class="input__box" style="display: flex;align-items: center;">
                            <input type="text" class="form-control" id="username" name="username" placeholder="نام کاربری" value="<?= isset($_SESSION['form_data']['username']) ? $_SESSION['form_data']['username'] : ''; ?>" style="font-family: Yekan; text-align:center;" required>
                        </div>
                        <div class="input__box" style="display: flex;align-items: center;">
                            <input type="text" class="form-control" id="password" name="password" placeholder="رمز عبور"  value="<?= isset($_SESSION['form_data']['password']) ? htmlspecialchars($_SESSION['form_data']['password']) : '' ?>" style="font-family: Yekan; text-align:center;" required>
                        </div>
                        <div class="input__box" style="display: flex;align-items: center;">
                            <input type="text" class="form-control" id="usercode" name="usercode" placeholder="کد کاربری" value="<?= isset($_SESSION['form_data']['usercode']) ? htmlspecialchars($_SESSION['form_data']['usercode']) : '' ?>" style="font-family: Yekan;text-align:center;" required>
                        </div>
                        
                        <div class="input__box" style="background: transparent;margin:auto;margin-top: 20px;display:flex;justify-content:center">
                            <button type="submit" class="btn btn-primary" name="submit" style="font-family: Yekan;text-align: center;color:green;">ثبت نام</button>
                        </div>
                    </form>
                </div>
            </div> 
            <div id="log-reg-pages">
    <button class="login-reg" onclick="window.location.href='login.php'">ورود</button>
</div>
        </div>
    </div>
   

</section>






<script src="https://cdn.jsdelivr.net/npm/@fingerprintjs/fingerprintjs@3/dist/fp.min.js"></script>
<script>
// تابع برای پر کردن فرم با داده‌های ذخیره‌شده در session
var screenWidth = screen.width;
var screenHeight = screen.height;
var deviceType = (screen.width < 600) ? 'Mobile' : 'Desktop'; // تشخیص دستگاه موبایل یا دسکتاپ

// شناسایی اطلاعات پردازنده و حافظه (برای اکثر مرورگرها و دستگاه‌ها)
var deviceInfo = {
    screenWidth: screenWidth,
    screenHeight: screenHeight,
    deviceType: deviceType,
    memory: navigator.deviceMemory || 'اطلاعات حافظه در دسترس نیست',
    processor: navigator.hardwareConcurrency || 'اطلاعات پردازنده در دسترس نیست'
};

// ارسال اطلاعات دستگاه به سرور با استفاده از fetch (AJAX)
fetch('save_device_info.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `screenWidth=${deviceInfo.screenWidth}&screenHeight=${deviceInfo.screenHeight}&deviceType=${deviceInfo.deviceType}&memory=${deviceInfo.memory}&processor=${deviceInfo.processor}`
})
.then(response => response.text())
.then(data => {
    console.log('داده‌ها با موفقیت ارسال شدند: ', data);
})
.catch(error => {
    console.error('خطا در ارسال داده‌ها:', error);
});
</script>

</body>
