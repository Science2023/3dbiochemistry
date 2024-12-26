<?php
session_start();
$messages = []; // آرایه برای ذخیره پیام‌ها

// فعال کردن خطایابی
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["login"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $ip_address = $_SERVER['REMOTE_ADDR']; // دریافت آی‌پی دستگاه کاربر
    $user_agent = $_SERVER['HTTP_USER_AGENT']; // دریافت اطلاعات دستگاه (User-Agent)

    // چاپ اطلاعات برای دیباگ
    echo "IP فعلی: " . $ip_address . "<br>";
    echo "User-Agent فعلی: " . $user_agent . "<br>";

    require_once "database.php";

    // جستجو در دیتابیس برای نام کاربری
    $sql = "SELECT * FROM students WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user["password"])) {
            // مقایسه IP و اطلاعات دستگاه
            if ($user["ip_address"] === $ip_address && $user["device_info"] === $user_agent) {
                $_SESSION["user"] = "yes";
                header("Location: Chapter.php");
                exit;
            } else {
                $messages[] = ['type' => 'error', 'text' => "آی‌پی یا اطلاعات دستگاه شما با اطلاعات ثبت‌شده مطابقت ندارد", 'color' => 'red'];
                $_SESSION['form_data'] = $_POST;

            }
        } else {
            $messages[] = ['type' => 'error', 'text' => "رمز عبور صحیح نمی باشد", 'color' => 'red'];
            $_SESSION['form_data'] = $_POST;

        }
    } else {
        $messages[] = ['type' => 'error', 'text' => "نام کاربری صحیح نمی باشد", 'color' => 'red'];
        $_SESSION['form_data'] = $_POST;

    }

    $stmt->close();
    $conn->close();

    // ذخیره پیام‌ها در $_SESSION
    $_SESSION['messages'] = $messages;

    // رفرش صفحه
    header("Location: " . $_SERVER['PHP_SELF']);
    exit(); // جلوگیری از ادامه کد پس از رفرش صفحه
}

// نمایش پیام‌ها پس از رفرش
if (isset($_SESSION['messages'])) {
    $messages = $_SESSION['messages'];
    // حذف پیام‌ها از $_SESSION پس از نمایش
    unset($_SESSION['messages']);
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
    justify-content:center;
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
    color:blue;
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
    color: blue;
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
                <div class="form" id="log-form" style="display: grid;">
                    <form dir="ltr" method="POST" action="login.php">
                    <div id="messages" style="position:relative;">
    <?php if (!empty($messages)) : ?>
        <?php foreach ($messages as $message) : ?>
            <div class="messages" style="color: <?= htmlspecialchars($message['color']); ?>; font-family: Yekan; margin-top: 10px; text-align: center;">
                <?= htmlspecialchars($message['text']); ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
                        <div class="input__box" style="display: flex;align-items: center;">
                            <input type="text" id="username" name="username" placeholder="نام کاربری" style="font-family: Yekan; text-align:center;" required>
                        </div>
                        <div class="input__box" style="display: flex;align-items: center;">
                            <input type="password" id="password" name="password" placeholder="رمز عبور" style="font-family: Yekan;text-align:center;" required>
                        </div>
                        <div class="input__box" id="login" style="background: transparent;margin:auto;margin-top: 20px">
                            <button type="submit" name="login" style="font-family: Yekan;text-align: center;color:green">ورود</button>
                        </div>
                    </form>
                </div>
            </div>
             <div id="log-reg-pages">
    <button class="login-reg" onclick="window.location.href='registration.php'">ثبت نام</button>
</div>
        </div>
        
    </div>
   
</section>




<script>
  // تابعی برای پر کردن فیلدهای فرم با اطلاعات از Session
  function populateForm() {
    // فرض کنید اطلاعات در یک شیء به نام formData در Session ذخیره شده است
    const formData = <?php echo json_encode($_SESSION['form_data']); ?>;

    if (formData) {
      // پر کردن فیلدهای فرم با استفاده از اطلاعات formData
      document.getElementById('username').value = formData.username;
      document.getElementById('password').value = formData.password;
    }
  }

  // فراخوانی تابع پس از بارگذاری صفحه
  window.onload = populateForm;
</script>

</script>
</body>
