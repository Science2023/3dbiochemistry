
<?php
session_start();

if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "yes") {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fa-IR">


<meta name="viewport" content="width=device-width, initial-scale=1">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preload"
    href="https://rawcdn.githack.com/Science2023/3dbiochemistry/fcc681ac4af6325218331d60123c7986df89927b/Estedad-Light.woff"
    as="font" type="font/woff" crossorigin>
  <link rel="preload"
    href="https://rawcdn.githack.com/Science2023/scientist.github.io/ea382640dc9303089955465cb3eb1e37af9a301e/Yekan-.woff"
    as="font" type="font/woff" crossorigin>
  <link rel="preload"
    href="https://rawcdn.githack.com/Science2023/3dbiochemistry/010b6dc24d5e33baad1fc1d6005686dfbc38beb6/Shabnam.woff2"
    as="font" type="font/woff2" crossorigin>

  <script src="https://kit.fontawesome.com/541b203307.js" crossorigin="anonymous"></script>
  <link href="https://allfont.net/allfont.css?fonts=roboto-thin">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">

  <style>
    button,
    textarea,
    button:active,
    button:focus {
      outline: none;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');


    @font-face {
      font-family: "Iranian";
      src: url("https://rawcdn.githack.com/Science2023/3dbiochemistry/c065b449096ea869cf626633f22ec986ffb81b6d/Iranian-Sans.woff") format("woff"),

    }

    @font-face {
      font-family: "Yekan";
      src: url("https://rawcdn.githack.com/Science2023/scientist.github.io/ea382640dc9303089955465cb3eb1e37af9a301e/Yekan-.woff") format("woff"),
        url("https://download1594.mediafire.com/6y1g8w2ko6zgKb9iGPrgxqoPncbq4aw7Q0m4wD1-ErxYZ3u3H0SPlT0ArRmEjTxflhuq9sUNhSvhEcWpTaY71-_ZttsJ/8zorgdg84b1avso/Yekan+%281%29+%283%29.otf") format("opentype")
    }

    @font-face {
      font-family: "Shabnam";
      src: url("https://rawcdn.githack.com/Science2023/3dbiochemistry/010b6dc24d5e33baad1fc1d6005686dfbc38beb6/Shabnam.woff2") format("woff2"),
        url("https://rawcdn.githack.com/Science2023/3dbiochemistry/86615c504ec8bb5e5ec8da70ba178061990e72c8/Shabnam.woff") format("woff"),
        url("https://rawcdn.githack.com/Science2023/3dbiochemistry/51d6ee24fbc92caae6acd74728e0b75bc974c5a3/Shabnam.otf") format("opentype"),

        url(" https://rawcdn.githack.com/Science2023/3dbiochemistry/86615c504ec8bb5e5ec8da70ba178061990e72c8/Shabnam.eot") format("eot"),

        url("https://rawcdn.githack.com/Science2023/3dbiochemistry/86615c504ec8bb5e5ec8da70ba178061990e72c8/Shabnam.ttf") format("truetype")
    }


    .text {
      transition: opacity 4s ease-in;
      position: relative;
      color: #fff;
      font-family: "Estedad";
      font-size: 1.7vh;
      padding-right: 12px;
      padding-left: 10px;
    }

    @media all and (orientation: landscape) {
      .text {
        font-size: 1.5vw;
        padding: 10px;
      }
    }

    .fadeIn {
      opacity: 1;

    }

    .fadeOut {
      opacity: 0;
    }

    .content {
      padding-right: 1vh;
      padding-left: 1vh;
      backdrop-filter: blur(15px);
      text-align: justify;
      font-family: 'Shabnam'


    }

    @media all and (orientation: landscape) {
      .content {
        padding: 10px;
      }
    }

    #content span {
      color: #ffffff
    }

    /*3d object*/
    .parent {
      position: relative;
      width: 60%;
      height: 60vw;
      margin: auto;
      border-radius: 20px;
    }

    @media all and (orientation: landscape) {
      .parent {
        position: relative;
        width: 20vw;
        height: 20vw;
        margin-left: 5px;



      }
    }

    .subtitr {
      position: relative;
      align-items: center;
      height: 50px;
      width: 100%;
      text-align: center;
      right: 5%;
      margin-bottom: 20px;
    }



    .h1 {
      position: sticky;
      top: 16.1vh;
      left: 30px;
      font-size: 1.8vh;
      font-family: 'yekan';
      text-align: center;
      display: flex;
      justify-content: center;
      margin-top: 10px;
      align-items: center;
      overflow: hidden;
      width: 100%;
      box-sizing: border-box;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      background: rgba(0, 0, 0, 0.4);
      z-index: 500;
    }



    #h1_two {
      color: rgb(226 218 227);
      z-index: 500;
      background: #88009030;
      border-bottom: 0.5px solid;
    }



    @media all and (orientation: landscape) {
      .h1 {
        position: sticky;
        display: flex;
        text-align: center;
        justify-content: center;
        font-size: 1.8vw;
        align-items: center;
        height: 6vh;
        top: 10vh;
        width: 100%;


      }
    }



    .koru-button {
      display: none;
    }




    .btnframe {
      flex: 0 0 auto;
      display: flex;
      font-family: 'Yekan';
      top: 5px;
      position: relative;
      justify-content: center;
      align-items: center;
      height: 70px;
      z-index: 0;
      width: 25vh;
      margin: 5px;

    }


    .light {
      position: absolute;
      top: 0px;
      left: 50%;
      display: flex;
      transform: translatex(-50%);
      width: 20px;
      height: 40px;
      border-radius: 5px;
      transition: 1s;
      transition-delay: 0.5;
      z-index: -2;

    }

    .link {
      position: relative;
      font-size: 14px;
      bottom: 15px;
      width: 90%;
      height: 10px;
      line-height: 0px;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(255, 255, 255, 0);
      box-shadow: 0 0px 15px rgba(0, 0, 0, 0.3);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 30px;
      padding-top: 10px;
      padding-bottom: 10px;
      text-decoration: none;
      overflow: hidden;
      color: rgb(255, 255, 255);
      z-index: 2;
      transition: 0.5s;
      backdrop-filter: blur(50px);
      -webkit-backdrop-filter: blur(50px);

      cursor: pointer;


    }

    .btnframe .link::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background: linear-gradient(to left, rgba(255, 255, 255, 0.2), transparent);
      transform: skewX(45deg) translate(0);
      transition: 0.8s;
      backdrop-filter: blur(50px);
      -webkit-backdrop-filter: blur(50px);
    }

    .link::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      padding: 1px;
      width: 100%;
      height: 95%;
      border-radius: 30px;

      transition: 0.8s;
      backdrop-filter: blur(50px);
      -webkit-backdrop-filter: blur(50px);
      z-index: -2;
    }

    .link.one::after {
      background: linear-gradient(5deg, rgb(0, 255, 0), transparent, rgb(0, 255, 0));
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .link.two::after {
      background: linear-gradient(5deg, rgb(255, 0, 255), transparent, rgb(255, 0, 255));
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .link.two::after {
      background: linear-gradient(5deg, rgb(162, 2, 255), transparent, rgb(217, 2, 255));
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .link.three::after {
      background: linear-gradient(5deg, #00d9fa, transparent, #00d5ff);
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .link.four::after {
      background: linear-gradient(5deg, #ff0000, transparent, #ff0000);
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .link.five::after {
      background: linear-gradient(5deg, #ff6831, transparent, #ff6831);
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .link.six::after {
      background: linear-gradient(5deg, #1eff45, transparent, #1eff45);
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .link.seven::after {
      background: linear-gradient(5deg, rgb(255, 1, 1), transparent, rgb(255, 1, 1));
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .link.eight::after {
      background: linear-gradient(5deg, rgb(162, 2, 255), transparent, rgb(217, 2, 255));
      -webkit-mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      mask:
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0)) content-box,
        linear-gradient(to right, rgb(255, 1, 1), rgb(51, 255, 0));
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }



    .btnframe.active .link::before {
      transform: skewX(45deg) translate(400px);
    }

    .btnframe.active .link {
      color: #ffffff;

    }

    #btnone {
      margin-left: 50vw;

    }

    #btnseven {
      margin-right: 50vw;

    }

    .btnframe.active .light

    /*lightup button*/
      {
      top: 5px;
      height: 30px;
      width: 80%;
      border-radius: 20px;
      z-index: 0;
    }

    @media all and (orientation:landscape) {
      .btnframe.active .light {
        top: 10px
      }
    }

    /* 2*/
    #one {
      background: rgb(0, 255, 55);
      box-shadow: 0 0 5px rgb(0, 255, 55), 0 0 15px rgb(0, 255, 55), 0 0 30px rgb(0, 255, 55),
        0 0 60px rgb(0, 255, 55);
    }

    #two {
      background: rgb(208, 0, 255);
      box-shadow: 0 0 5px rgb(208, 0, 255), 0 0 15px rgb(208, 0, 255), 0 0 30px rgb(208, 0, 255),
        0 0 60px rgb(208, 0, 255);
    }

    #three {
      background: #1ed2ff;
      box-shadow: 0 0 5px #1ed2ff, 0 0 15px #1ed2ff, 0 0 30px #1ed2ff,
        0 0 60px #1ed2ff;
    }

    #four {
      background: #ff0000;
      box-shadow: 0 0 5px #ff0000, 0 0 15px #ff0000, 0 0 30px #ff0000,
        0 0 60px #ff0000;
    }

    #five {
      background: #ff6831;
      box-shadow: 0 0 5px #ff6831, 0 0 15px #ff6831, 0 0 30px #ff6831,
        0 0 60px #ff6831;
    }

    #six {
      background: #6bff00;
      box-shadow: 0 0 5px #6bff00, 0 0 15px #6bff00, 0 0 30px #6bff00,
        0 0 60px #6bff00;
    }

    #seven {
      background: #ff1f71;
      box-shadow: 0 0 5px #ff1f71, 0 0 15px #ff1f71, 0 0 30px #ff1f71,
        0 0 60px #ff1f71;
    }

    .btn:nth-child(8)::before,
    /* 2*/
    .btn:nth-child(8)::after {
      background: #2db2ff;
      box-shadow: 0 0 5px #2db2ff, 0 0 15px #2db2ff, 0 0 30px #2db2ff,
        0 0 60px #2db2ff;
    }

    .btn:nth-child(9)::before,
    /* 3*/
    .btn:nth-child(9)::after {
      background: #1eff45;
      box-shadow: 0 0 5px #1eff45, 0 0 15px #1eff45, 0 0 30px #1eff45,
        0 0 60px #1eff45;
    }



    body {
      margin: 0;
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100%;
      flex-flow: column wrap;
      justify-content: center;
      align-items: center;
      background-image: url('cold-adapted-enzymes - Copy.webp');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center center;
    
    }
    body::-webkit-scrollbar {
      display: none;
    }


   



    .head {
      position: fixed;
      top: 0px;
      font-size: 20px;
      z-index: 1;
      color: white;
      height: 11vh;
      width: 100vw;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-flow: row-reverse wrap;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
      z-index: 3;

    }

    .head::-webkit-scrollbar {
      display: none;
    }

    .chapter {
      font-family: 'Yekan';
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 25%;
      text-align: center;
      right: 0%;
      font-size: 1.7vh;
      top: 0px;
      height: 11vh;
    }

    .timerframe {
      position: absolute;
      padding: 5px;
      margin: auto;
      width: 150px;
      height: 70%;
      box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.05);
      display: grid;
      justify-content: center;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }




    .timerbutton {
      position: relative;
      border-radius: 50px;
      line-height: 40%;
      height: 25px;
      width: 40px;
      color: rgb(255, 255, 255);
      font-family: 'Yekan';
      font-size: 10px;
      cursor: pointer;
      border: none;
      overflow: hidden;
      background: rgba(255, 255, 255, 0);
      box-shadow: 0 8px 32px 0 rgba(255, 255, 255, 0);
      backdrop-filter: blur(40px);
      -webkit-backdrop-filter: blur(40px);
      border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .timerbutton::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background: linear-gradient(to left, rgba(255, 255, 255, 0.3), transparent);
      transform: skewX(45deg) translate(0);
      transition: 0.5s;
      filter: blur(0px);
    }

    .timerbutton.active::before {
      transform: skewX(45deg) translate(200px);
    }

    .timerbutton.active {
      border: 1px solid #f6ff00;
      box-shadow: 0 0 1px #f6ff00, 0 0 2px #f6ff00, 0 0 4px #f6ff00,
        0 0 8px #f6ff00;
    }

    #minutes,
    #seconds {
      font-size: 15px;
    }

    .bigger {
      font-size: 15px;
    }

    .button {
      box-shadow: 0 9px #999;
    }

    .button:active {
      background-color: hotpink;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }

    .timertitle {
      font-size: 90%;
      position: relative;
      text-align: center;
      margin-top: 0px;
      font-family: 'Yekan';
    }

    .timer {
      position: relative;
      display: flex;
      justify-content: center;
      font-size: 10px;
      width: 100%;
      align-items: center;
      text-align: center;
      bottom: 35%;
      font-family: 'Poppins', sans-serif;

    }

    .timernumber {
      display: flex;
      justify-content: space-around;
      position: relative;
      margin-right: 10px;
      margin-left: 10px;



    }

    .logo {
      font-size: 70%;
      position: absolute;
      top: 2vh;
      left: 2%;
      width: 20%;
      text-align: center;
      display: grid;
      justify-content: center;
      align-items: center;
    }

    #logoimage {
      position: relative;
      top: 2vw;
      margin: auto;
      width: 15vw;
      margin-bottom: 3px;
    }

    .shadowfilter {
      -webkit-filter: drop-shadow(0px 12px 7px rgb(255, 221, 4));
      filter: drop-shadow(0px 2px 6px rgb(255, 242, 4));
    }

    #logospan {
      position: relative;
      margin-top: 2vw;
      width: 100%;
      font-size: 0.8vh;
      color: rgb(255, 255, 255);
      font-family: 'Poppins', sans-serif;
      letter-spacing: 0.6px;
    }

    .listbtn {
      display: flex;
      margin-left: 10px;
      margin-right: 10px;
      margin-top: 20px;
      position: relative;
      justify-content: center;
      align-items: center;
      top: 1px;
      width: 400px;
      height: 50px;
      z-index: 0;

    }

    .listlight {
      position: absolute;
      top: 4px;
      left: 50%;
      display: flex;
      transform: translatex(-50%);
      width: 20px;
      height: 40px;
      border-radius: 5px;
      transition: 0.5s;
      transition-delay: 0.5;
      z-index: -2;



    }


    .listlink {
      position: relative;
      font-size: 10px;
      top: -1px;
      width: 300px;
      height: 15%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(255, 255, 255, 0.08);
      box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 30px;
      padding: 10px;
      letter-spacing: 1px;
      text-decoration: none;
      overflow: hidden;
      color: #fff;
      font-weight: 400px;
      z-index: 2;
      transition: 0.5s;
      -webkit-backdrop-filter: blur(15px);
      backdrop-filter: blur(15px);
      cursor: pointer;

    }

    #listone {
      background: #c11dda;
      box-shadow: 0 0 5px #c11dda, 0 0 15px #c11dda, 0 0 30px #c11dda,
        0 0 60px#c11dda;
    }

    #listtwo {
      background: #ff1e1e;
      box-shadow: 0 0 5px #ff1e1e, 0 0 15px #ff1e1e, 0 0 30px #ff1e1e,
        0 0 60px #ff1e1e;
    }

    #listthree {
      background: #ff1f71;
      box-shadow: 0 0 5px #ff1f71, 0 0 15px #ff1f71, 0 0 30px #ff1f71,
        0 0 60px #ff1f71;
    }

    #listthree {
      background: #2db2ff;
      box-shadow: 0 0 5px #2db2ff, 0 0 15px #2db2ff, 0 0 30px #2db2ff,
        0 0 60px #2db2ff;
    }

    #listfour {
      background: #1eff45;
      box-shadow: 0 0 5px #1eff45, 0 0 15px #1eff45, 0 0 30px #1eff45,
        0 0 60px #1eff45;
    }

    .ultitr {
      position: relative;
      padding-right: 25%;
      list-style-type: none;
      text-align: center;
      justify-content: center;


    }

    li {
      position: relative;
      left: 15%;
    }

    .titrlight {
      position: absolute;
      top: 0px;
      left: 50%;
      display: flex;
      transform: translatex(-50%);
      width: 20px;
      height: 45px;
      border-radius: 5px;
      transition: 0.5s;
      transition-delay: 0.5;
      z-index: -2;
    }

    .sec {
      color: white;
      margin-bottom: 5px;
      font-size: 30px;
    }

    .btnbar {
      position: relative;
      display: flex;
      overflow-x: scroll;
      overflow-y: hidden;
      width: 100%;
      scroll-behavior: smooth;
    }



    .btnbar::-webkit-scrollbar {
      display: none;
    }

    .foot {
      position: fixed;
      bottom: 4%;
      left: 0px;
      right: 0px;
      display: flex;
      border-radius: 00px;
      height: 16%;
      width: 100%;
      text-align: center;
      z-index: 2;
      opacity: 1;
      justify-content: center;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.01);
      border-top: 0.5px solid rgba(255, 255, 255, 0.5);
    }

    .foot::before {

      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000000;
      opacity: .3;
      filter: blur(40px);
      z-index: -2;
    }





    #scrollindicator span {
      position: fixed;
      right: 20px;
      width: 24px;
      height: 24px;
      margin-left: -12px;
      border-left: 2px solid #fff;
      border-bottom: 2px solid #fff;
      -webkit-transform: rotate(225deg);
      transform: rotate(225deg);
      -webkit-animation: sdb05 1.5s infinite;
      animation: right 1.5s infinite;
      box-sizing: border-box;
      z-index: 5;
    }

    @-webkit-keyframes right {
      0% {
        -webkit-transform: rotate(225deg) translate(0, 0);
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      100% {
        -webkit-transform: rotate(225deg) translate(-10px, 20px);
        opacity: 1;
      }
    }

    @keyframes right {
      0% {
        transform: rotate(225deg) translate(0px, 0px);
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      100% {
        transform: rotate(225deg) translate(-10px, 10px);
        opacity: 1;
      }
    }

    #scrollindicator2 span {
      position: fixed;
      left: 30px;
      width: 24px;
      height: 24px;
      margin-left: -12px;
      border-left: 2px solid #fff;
      border-bottom: 2px solid #fff;
      -webkit-transform: rotate(225deg);
      transform: rotate(45deg);
      -webkit-animation: sdb05 1.5s infinite;
      animation: left 1.5s infinite;
      box-sizing: border-box;
      z-index: 5;
    }

    @-webkit-keyframes left {
      0% {
        -webkit-transform: rotate(-45deg) translate(0, 0);
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      100% {
        -webkit-transform: rotate(-45deg) translate(-10px, 20px);
        opacity: 1;
      }
    }

    @keyframes left {
      0% {
        transform: rotate(45deg) translate(0px, 0px);
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      100% {
        transform: rotate(45deg) translate(-10px, 10px);
        opacity: 1;
      }
    }


    .hide {
      opacity: 0;

    }

    .show {
      opacity: 1;
    }

    .frame {
      position: fixed;
      bottom: 7%;
      left: 4.5%;
      width: 79vw;
      height: 10px;
      background-color: rgba(255, 255, 255, 0.05);
      border-radius: 50px;
      border: 0.5px solid rgba(255, 255, 255, 0.5);
      z-index: 2;
    }

    .frame.hidden {
      opacity: 0;
      z-index: -2;
    }

    .pic {
      position: relative;
      width: 98%;
      box-shadow: 2px 10px #008aff white inset;
      border-radius: 5px;
      border: 1px solid rgba(255, 255, 255, 0.5);
      height: 100%;
    }

    .progressbar {
      position: absolute;
      max-width: 100%;
      width: 0%;
      border-radius: 50px;
      bottom: 0px;
      height: 100%;
      z-index: 1;
      background-image: linear-gradient(to right, rgb(255, 0, 247), white, yellow)
    }

    .progressbar::after {
      position: absolute;
      content: '';
      width: 100%;
      height: 80%;
      background-image: linear-gradient(to right, rgb(255, 0, 247), white, yellow);
      top: 0px;
      left: 0px;
      filter: blur(5px)
    }

    .progressbar::before {
      position: absolute;
      content: '';
      width: 100%;
      height: 80%;
      background-image: linear-gradient(to right, rgb(255, 0, 247), white, yellow);
      top: 0px;
      left: 0px;
      filter: blur(10px)
    }

    .frame span {
      color: rgb(255, 255, 255);
      position: absolute;
      display: block;
      padding: 0px;
      display: flex;
      justify-content: center;
      align-items: center;
      bottom: 20px;
      font-size: 11px;
      transform: translateX(-16px);
      background: rgba(255, 255, 255, 0);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(60px);
      -webkit-backdrop-filter: blur(60px);
      border: 1px solid rgb(255, 238, 2);
      width: 30px;
      height: 15px;
      text-align: center;
      line-height: 20px;
      border-radius: 4px;
    }

    .frame span::before {
      position: absolute;
      content: "";
      right: 10px;
      top: 15px;
      height: 0px;
      width: 0px;
      border: 7px solid transparent;
      border-bottom-width: 0px;
      border-right-width: 5px;
      border-left-width: 5px;
      border-top-color: rgb(255, 255, 255);
    }





    .container {
      display: none;

    }




    svg {
      position: sticky;
    }

    svg circle {
      stroke: rgba(255, 255, 255, 0.1);
      stroke-width: 2%;
      stroke-linecap: round;
      fill: transparent;
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    svg .progress-bar {
      stroke: rgb(255, 255, 255);
      transition: stroke-dashoffset 0 ease-in-out;
      filter: drop-shadow(2px 2px 3px rgba(20, 255, 63, 0.2));

    }

    svg .progress-bar::after {
      stroke: rgb(255, 255, 255);
      filter: blur(20px);
      content: '';
      position: absolute;
    }



    .bar {
      max-width: 100%;
      width: 0%;
      border-radius: 20px;
      bottom: 0px;
      height: 4px;
      background: linear-gradient(to left, #008aff, #00ffe7);
      animation: animate 5s linear infinite;
    }

    .wrap {
      position: relative;
      width: 90%;
      height: 50vh;
      text-align: center;
      box-sizing: border-box;
      justify-content: center;
      margin: auto;
      overflow: hidden;
      z-index: 2;
    }

    #child-div {
      position: fixed;
      top: 50px;
      /* Adjust as needed */
      left: 0;
      /* Adjust as needed to center horizontally */
      background-color: lightblue;
      padding: 10px;
      border: 1px solid black;
      z-index: 999;
      /* Ensure the child div is above other content */
    }

    .iframe {
      position: relative;
      box-sizing: border-box;
      border: none;
      width: 100%;
      height: 100%;
      margin: auto;
      zoom: 1;
      -moz-transform: scale(0.5);
      -moz-transform-origin: 0 0;
      -o-transform: scale(0.5);
      -o-transform-origin: 0 0;
      -webkit-transform: scale(1);
      -webkit-transform-origin: 0 0;

    }

    .koru-fullscreen {
      display: none;
    }

    .reload {
      height: 30px;
      width: 30px;
      border-radius: 5px;
      background-color: rgb(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
      margin: 10px;
      -webkit-backdrop-filter: blur(10px);
      position: absolute;
      left: 0px;
      top: 0px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .full {
      height: 30px;
      width: 30px;
      border-radius: 5px;
      background-color: rgb(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
      margin: 10px;
      -webkit-backdrop-filter: blur(10px);
      position: absolute;
      right: 0px;
      top: 0px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
    }


    p {
      z-index: -1;
    }

    @media all and (orientation: landscape) {
      .p {
        font-size: 4vw;
      }
    }


    .h1parrent {
      position: relative;
      scroll-margin-top: 15vh;
      top: 100px;
      padding: 0px;
      height: fit-content;
      box-sizing: border-box;
      width: 100%;
      border-radius: 10px 10px 10px 10px;
      text-align: justify;
      background: rgba(0, 0, 0, 0.3);
      text-justify: auto;
      top: 5px;
      width: 100%;
      position: relative;
      display: grid;
      margin: auto;
      color: white;
      text-align: justify;
      font-family: 'Shabnam';
      line-height: 250%;
      font-size: 13px;

    }

    .h2parrent {
      scroll-margin-top: 20vh;

    }

    .h3 {
      backdrop-filter: blur(5px);
      position: sticky;
      top: 26vh;
      height: 4vh;
      align-items: center;
      display: flex;
      z-index: 3;
      width: fit-content;
      padding: 2px;
      font-size: 1.5vh;
      border: 1px solid;
    }

    #h4parrent {
      backdrop-filter: blur(5px);
      position: sticky;
      top: 30vh;
      height: 4vh;
      align-items: center;
      display: flex;
      z-index: 3;
      width: fit-content;
      padding: 2px;
      font-size: 1.5vh
    }

    #h5parrent {
      backdrop-filter: blur(5px);
      position: sticky;
      top: 35vh;
      height: 4vh;
      align-items: center;
      display: flex;
      z-index: 3;
      width: fit-content;
      padding: 2px;
      font-size: 1.5vh
    }


    @media all and (orientation: landscape) {
      .h1parrent {
        font-size: 13px;
        scroll-margin-top: 8vh;

      }

      .h2parrent {
        scroll-margin-top: 13vh;

      }

      .h3 {
        top: 20vh;
        font-size: 1.5vw;
      }

      #h4parrent {
        top: 24vh;
        font-size: 1.5vw;

      }

      #h5parrent {
        top: 30vh;
        font-size: 1.5vw;
      }
    }

    .glass {
      width: 100%;
      position: relative;
      display: grid;
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
    }


    .title {
      color: white;
      position: relative;
      height: 60px;
      width: 100%;
      border-radius: 50px;
      font-size: 20px;
      text-align: center;
      padding-top: 15px;
      align-items: center;
      box-sizing: border-box;
      background: rgba(0, 0, 0, 0.4);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      border-radius: 10px;
      border: 0px solid rgba(255, 255, 255, 0.5);
    }

    .titr {
      padding-top: 22vw;
      position: relative;
      width: 98%;
      font-family: "Yekan";
      margin: auto;
    }

    .tableofcontents {
      width: 100%;
      box-sizing: border-box;
      background: rgba(0, 0, 0, 0.5);
    }

    .tableofcontents::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }

    /* Track */
    .tableofcontents::-webkit-scrollbar-track {
      box-shadow: inset 0 0 rgba(0, 0, 0, 0.5);
      border-radius: 10px;
    }

    /* Handle */
    .tableofcontents::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.5);
      border-radius: 50px;
    }

    /* Handle on hover */
    .tableofcontents::-webkit-scrollbar-thumb:hover {
      background: #d1ae14ca;
    }


    .table {
      position: relative;
      border-radius: 5px;
      margin: 2px;
      margin-bottom: 20px;
      top: 10px;
      padding: 5px;
      padding-bottom: 20px;
      background: rgba(0, 0, 0, 0.5);
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      box-sizing: border-box;

    }

    .maintitrintable {
      position: relative;
      cursor: pointer;
      font-family: 'Shabnam';
      text-decoration: none;
      text-align: center;
      display: block;
      font-size: medium;
      border: 1px solid;
      border-radius: 50px;
      width: 200px;
      margin: 20px;
      padding:5px;
    }

    .maintitrintable::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background: linear-gradient(to left, rgba(255, 255, 255, 0.25), transparent);
      transform: skewX(45deg) translate(0);
      transition: 0.5s;
      filter: blur(0px);
    }
    .maintitrinmap {
      position: relative;
      font-family: 'Shabnam';
      text-decoration: none;
      text-align: center;
      display: block;
      font-size: medium;
      border: 2px solid;
      border-radius: 50px;
      width: 200px;
      margin: 20px;
      padding: 10px;
    }
    .maintitrinmap::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background: linear-gradient(to left, rgba(255, 255, 255, 0.25), transparent);
      transform: skewX(45deg) translate(0);
      transition: 0.5s;
      filter: blur(0px);
    }
    .tableitems {
      overflow: hidden;
      cursor: pointer;
      font-family: 'Shabnam';
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;
      margin-top: 15px;
      padding: 5px;
      width: 98%;
      box-sizing: border-box;
      position: relative;
    }
    .tableitems::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right:20px;
      width:90%;
      height: 100%;
      transform: skewX(45deg) translate(0);
      filter: blur(0px);
    }
    .tableitems.one::before,.tableitemsinmaptitr.one::before{
      background: linear-gradient(to left, rgba(3, 255, 28, 0.3), transparent);

    }
    .tableitems.two::before , .tableitemsinmaptitr.two::before{
      background: linear-gradient(to left, rgba(247, 0, 255, 0.3), transparent);

    }

    .tableitems.three::before , .tableitemsinmaptitr.three::before{
      background: linear-gradient(to left, rgba(0, 234, 255, 0.3), transparent);

    }
    .tableitems.four::before, .tableitemsinmaptitr.four::before{
      background: linear-gradient(to left, rgba(255, 0, 0, 0.3), transparent);

    }
    .tableitems.five::before, .tableitemsinmaptitr.five::before{
      background: linear-gradient(to left, rgba(255, 119, 0, 0.3), transparent);

    }
    .tableitems.six::before, .tableitemsinmaptitr.six::before{
      background: linear-gradient(to left, rgba(132, 255, 0, 0.3), transparent);

    }  .tableitems.seven::before, .tableitemsinmaptitr.seven::before{
      background: linear-gradient(to left, rgba(255, 68, 0, 0.3), transparent);

    }

    .tableitems.one, .tableitemsinmaptitr.one  {
      box-shadow: 2px 2px 5px rgb(51, 255, 0);
    }

    .tableitems.two, .tableitemsinmaptitr.two {
      box-shadow: 2px 2px 5px rgb(255, 0, 251);
    }

    .tableitems.three, .tableitemsinmaptitr.three {
      box-shadow: 2px 2px 5px rgb(0, 217, 255);
    }

    .tableitems.four, .tableitemsinmaptitr.four {
      box-shadow: 2px 2px 5px rgb(255, 0, 0);
    }

    .tableitems.five, .tableitemsinmaptitr.five{
      box-shadow: 2px 2px 5px rgb(255, 145, 0);
    }

    .tableitems.six, .tableitemsinmaptitr.six {
      box-shadow: 2px 2px 5px rgb(128, 255, 0);
    }

    .tableitems.seven, .tableitemsinmaptitr.seven {
      box-shadow: 2px 2px 5px rgb(255, 60, 0);
    }
    .tableitemsinmap{
      display: flex;
      align-items: stretch;
      width: 280px;
      margin: 5px;
      font-size: smaller;
      height: 60px;


    }
.abstractborder{
 position: relative;
  width: 83vw;
  border-radius: 5px;
  display: flex;
  flex-wrap: wrap;
  padding-bottom: 20px;
  justify-content: center;
  border:2px solid ;
  box-sizing: border-box;
}
    .tableitemsinmaptitr {
      cursor: pointer;
      font-family: 'Shabnam';
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;
      margin-top: 15px;
      padding: 5px;
      width: 98%;
      box-sizing: border-box;
      text-decoration: none;
      display:flex;
      align-items: center;
      position: relative;
    }
    .tableitemsinmaptitr::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 90%;
      height: 100%;
      background: linear-gradient(to left, rgba(255, 255, 255, 0.25), transparent);
      transform: skewX(45deg) translate(0);
      transition: 0.5s;
      filter: blur(0px);
    }
    .abstract-imagecontainer img {
      width: 150px;
      cursor: pointer;
      border-radius: 10px;
      margin: 10px;
      transition: all 0.3s ease;
    }

    .zoom-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      overflow: auto;
      display: none;
      backdrop-filter: blur(50px);
    }
    .zoom-container::-webkit-scrollbar {
      width:10px;
      height: 10px;
    }


    /* Track */
    .zoom-container::-webkit-scrollbar-track {
      box-shadow: inset 0 0 rgba(0, 0, 0, 0.5);
      border-radius: 10px;
    }

    /* Handle */
    .zoom-container::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.5);
      border-radius: 50px;
    }

    /* Handle on hover */
    .zoom-container::-webkit-scrollbar-thumb:hover {
      background: #d1ae14ca;
    }
    @media all and (orientation: landscape) {
      .zoom-container {
        align-items: unset;

      }
    }

    .zoom-image {
      height:auto;
      width: 95%;
      cursor: pointer;
      position: relative;
      margin: auto;
      background: rgba(0,0,0,0.3);
      transform-origin: center center;
      /* نقطه مرجع زوم */
      transition: transform 0.3s ease-in-out;
      /* انیمیشن زوم */
    }

    @media all and (orientation: landscape) {

.zoom-image{
  width: 450px;
}
      #titrone {

        top: -100px
      }
    }

    .listsec {
      position: relative;
      top: 80px;
      width: 98%;
      font-family: "Yekan";
      font-size: 10px;



    }

    .blur::-webkit-scrollbar {
      display: none;
    }

    video {
      position: relative;
      opacity: 1;
      height: 40vw;
      border-radius: 10px;
    }

    @media all and (orientation: landscape) {

      video {
        height: 30vw;
      }
    }


    @media all and (orientation: landscape) {

      .fadeIn {
        opacity: 1;

      }

      .fadeOut {
        opacity: 0;
      }

      .head {
        display: grid;
        position: fixed;
        height: 100%;
        padding: 0px;
        width: 10%;
        right: 0px;
        font-size: 15px;
        justify-content: center;
        border-left: 1px solid rgba(255, 255, 255, 0.2);
        background: rgba(0, 0, 0, 0.3);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);

      }

      body {

        background-image: url('cold-adapted-enzymes.webp')
      }

      .listsec {
        position: relative;
        width: 89%;
        top: 5px;
        right: 5%;

      }

      .titr {
        position: relative;
        right: 12%;
        top: 5px;
        left: 0.2%;
        padding-top: 0px;
        margin: unset;

      }



      .timerframe {
        position: absolute;
        width: 95%;
        height: 30vh;
        font-size: 1.5vw;
        bottom: 30%;
        padding: 3px;
        right: 2%;
        box-sizing: border-box;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
        border-radius: 5px;
        background: rgba(255, 255, 255, 0.05);
        -webkit-backdrop-filter: blur(10px);
      }


      .timertitle {
        position: relative;
        font-size: 1.5vw;
        text-align: center;
        align-items: center;
      }

      .timerbutton {
        position: relative;
        width: 5vw;
        font-size: 1.4vw;
        height: 2.5vw;
        padding: 3px;
        text-align: center;
        justify-content: center;
        margin: auto;


      }

      .timer {
        display: grid;
        position: relative;
        top: 0px;
        justify-content: center;
        text-align: center;
        font-family: 'Poppins', sans-serif;

      }

      .timernumber {
        text-align: center;
        display: flex;
      }

      .chapter {
        position: absolute;
        top: 26vh;
        right: 0px;
        width: 100%;
        font-size: 1.7vw;
        margin-bottom: 5px;
      }

      .logoframe {
        position: absolute;
        top: 0px;
        margin: auto;
        width: 100%;
        height: fit-content
      }

      .logo {
        position: absolute;
        right: 0.2vw;
        height: 10vw;
        width: 95%;
        bottom: 50%;
        font-size: 1vw;
      }

      #logospan {
        position: relative;
        padding-top: 10px;
        top: 10px;
        width: 100%;
        font-size: 1vw;
        color: rgb(255, 255, 255);
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.4px;

      }

      #logoimage {
        position: absolute;
        top: 0px;
        width: 100%;
        margin-bottom: 10px;

      }


      .wrap {
        position: relative;
        width: 85%;
        height: 70vh;
        display: flex;
        justify-content: center;
        margin: auto;
        box-sizing: border-box;
        z-index: 2;
      }

      .iframe {
        width: 100%;
        position: relative;
        box-sizing: border-box;
        border: none;
        margin: auto;

      }


      .text {
        color: #fff;
        transition: opacity 2s ease-in;
        position: relative;
        width: 100%;
        top: 0px;
        padding: 0px;

      }

      .foot {
        bottom: 0;

        height: fit-content;
        border-right: 1px solid rgba(255, 255, 255, 0.2);
      }

      .frame {
        display: none;
      }

      .pic {

        width: 98%;
        box-shadow: 2px 10px #008aff white inset;

      }

      .btnbar {
        position: relative;
        height: 60px;
      }

      .btnframe {
        position: relative;
        align-items: center;
        top: 1px;
        height: 40px;

      }

      .link {
        position: relative;
        top: 5px;
        text-decoration: none;

      }

      .light {
        position: absolute;
        top: 5px;
      }

      .container {
        display: flex;
        position: absolute;
        height: 30%;
        width: 100%;
        flex-flow: row;
        bottom: -1px;
        justify-content: center;
        align-items: center;
        display: grid
      }

      .pct {
        position: fixed;
        left: 50%;
        top: 85%;

        transform: translate(-50%, -50%);
        align-items: center;

      }

      .progressbar {
        display: none;
      }

      #scrollindicator span {
        position: fixed;
        top: 30%;
        right: 20px;
        width: 24px;
        height: 24px;
        margin-left: -12px;
        border-left: 2px solid #fff;
        border-bottom: 2px solid #fff;
        -webkit-transform: rotate(225deg);
        transform: rotate(225deg);
        -webkit-animation: sdb05 1.5s infinite;
        animation: right 1.5s infinite;
        box-sizing: border-box;
        z-index: 5;
      }

      @-webkit-keyframes right {
        0% {
          -webkit-transform: rotate(225deg) translate(0, 0);
          opacity: 0;
        }

        50% {
          opacity: 1;
        }

        100% {
          -webkit-transform: rotate(225deg) translate(-10px, 20px);
          opacity: 1;
        }
      }

      @keyframes right {
        0% {
          transform: rotate(225deg) translate(0px, 0px);
          opacity: 0;
        }

        50% {
          opacity: 1;
        }

        100% {
          transform: rotate(225deg) translate(-10px, 10px);
          opacity: 1;
        }
      }

      #scrollindicator2 span {
        position: fixed;
        top: 30%;
        left: 30px;
        width: 24px;
        height: 24px;
        margin-left: -12px;
        border-left: 2px solid #fff;
        border-bottom: 2px solid #fff;
        -webkit-transform: rotate(225deg);
        transform: rotate(45deg);
        -webkit-animation: sdb05 1.5s infinite;
        animation: left 1.5s infinite;
        box-sizing: border-box;
        z-index: 5;
      }

      @-webkit-keyframes left {
        0% {
          -webkit-transform: rotate(-45deg) translate(0, 0);
          opacity: 0;
        }

        50% {
          opacity: 1;
        }

        100% {
          -webkit-transform: rotate(-45deg) translate(-10px, 20px);
          opacity: 1;
        }
      }

      @keyframes left {
        0% {
          transform: rotate(45deg) translate(0px, 0px);
          opacity: 0;
        }

        50% {
          opacity: 1;
        }

        100% {
          transform: rotate(45deg) translate(-10px, 10px);
          opacity: 1;
        }
      }

      .scrollindicator {
        position: fixed;
        width: 50px;
        height: 70px;
        right: 0;
        cursor: pointer;
        z-index: 5
      }

      .frame span {
        display: none;
      }

    }

    .model::-webkit-scrollbar {
      display: none;
    }




    .rotate {


      position: absolute;
      padding: 5px;
      width: 20px;
      height: 20px;
      background: #fff;
      border-radius: 30px;
      box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.06);
      opacity: 100%;
      transform: rotate(-360deg);
      left: 0px;
      top: 5px;
      cursor: pointer;
      transition: 0.2s ease;
      -webkit-transform: rotate(-360deg);
      transform: rotate(-360deg);
      z-index: 2;
    }

    .rotate:focus {
      -webkit-animation: rotate 1s ease-in-out backwards;
      animation: rotate 1s ease-in-out backwards;
    }

    .rotate:active {
      -webkit-animation: none;
      animation: none;
    }

    @keyframes rotate {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(-360deg);
        transform: rotate(-360deg);
      }
    }

    .b {
      position: absolute;
      border: none;
      background: rgba(255, 255, 255, 0);
      width: 180px;
      height: 15%;
      text-decoration: none;
    }

    .list {
      position: relative;
      justify-content: center;
    }

    .listframe {
      position: relative;
      top: 50px;
      bottom: 30px;
      padding: 10px;
      justify-content: center;
      height: fit-content;
      box-sizing: border-box;
      width: 100%;
      border-radius: 10px 10px 10px 10px;
      font-size: 16px;
      text-align: justify;
      background: rgba(255, 255, 255, 0);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      text-justify: auto;
      display: inline-block;
    }

    .scrollindicator {
      position: fixed;
      width: 50px;
      height: 70px;
      right: 0px;
      cursor: pointer;
      z-index: 2
    }

    .scrollindicator2 {
      width: 50px;
      height: 70px;
      display: flex;
      align-items: center;
      position: fixed;
      left: 0px;
      cursor: pointer;
      z-index: 2
    }

    #scrollindicator {
      position: fixed;
      display: flex;
      align-items: center;
      width: 30px;
      height: 50px;
      right: 0px;
      cursor: pointer;
      z-index: 2
    }

    #scrollindicator2 {
      width: 30px;
      height: 50px;
      position: fixed;
      left: 0px;
      cursor: pointer;
      z-index: 2
    }

    /*login form*/
    /*********************************************************************************************/
    /*********************************************************************************************/

    /*********************************************************************************************/

    /*********************************************************************************************/

    .loginform {
      position: fixed;
      top: 0px;
      min-height: 100vh;
      align-items: center;
      justify-content: center;
      background: linear-gradient(to bottom, #f7f7fe, #dff1ff);
      z-index: 100000;
      display: none;
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
      top: -120px;
      left: 10px;
      width: 20vw;
      height: 20vw;
    }

    .box .square:nth-child(2) {
      z-index: 2;
      top: 150px;
      left: -100px;
      width: 20vw;
      height: 20vw;
    }

    .loginbox .square:nth-child(3) {
      z-index: 2;
      width: 20vw;
      height: 20vw;
      right: 8px;
      bottom: -120px;
    }

    .loginbox .square:nth-child(4) {
      left: 100px;
      width: 20vw;
      height: 20vw;
      bottom: -120px;
      z-index: 1;
    }

    .loginbox .square:nth-child(5) {
      top: -120px;
      right: 2vw;
      width: 20vw;
      height: 20vw;
    }


    @media all and (orientation: landscape) {
      .loginbox .square:nth-child(1) {
        top: 40px;
        left: -90px;
        width: 100px;
        height: 100px;
      }

      .box .square:nth-child(2) {
        z-index: 2;
        top: 100px;
        right: 10px;
        width: 80px;
        height: 80px;
      }

      .loginbox .square:nth-child(3) {
        z-index: 2;
        width: 120px;
        height: 120px;
        right: -50px;
        bottom: 30px;
      }

      .loginbox .square:nth-child(4) {
        left: -30px;
        width: 100px;
        height: 100px;
        bottom: 10px;
        z-index: 1;
      }

      .loginbox .square:nth-child(5) {
        top: 10px;
        left: 390px;
        width: 120px;
        height: 120px;
      }

    }

    .logincontainer {
      width: 400px;
      display: flex;
      min-height: 400px;
      position: relative;
      border-radius: 10px;
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
      width: 100%;
      height: 100%;
      padding: 40px;
      position: relative;
    }

    .form h2 {
      color: #fff;
      font-weight: 600;
      position: relative;
      letter-spacing: 1px;
      margin-bottom: 40px;
      color: blue;
      font-size: 2vh;
      width: 100%;
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
      margin-top: 20px;
      width: 100%
    }

    .form .input__box input {
      width: 100%;
      color: blue;
      outline: none;
      font-size: 2vh;
      padding: 5px 20px;
      letter-spacing: 1px;
      border-radius: 35px;
      background: rgba(255, 255, 255, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.5);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      border-right: 1px solid rgba(255, 255, 255, 0.2);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .form .input__box button {
      cursor: pointer;
      width: 150px;
      height: 50px;
      color: #fff;
      border: none;
      outline: none;
      font-size: 2vh;
      padding: 5px 20px;
      letter-spacing: 1px;
      border-radius: 35px;
      background: rgba(255, 255, 255, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.5);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      border-right: 1px solid rgba(255, 255, 255, 0.2);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .form::placeholder {
      color: #fff;
    }

    #login {
      color: #666;
      cursor: pointer;
      background: #fff;
      max-width: 100px;
      font-weight: 600;
      margin-bottom: 20px;
    }



    #resttime {
      padding: 5px;
      width: 90%;
      height: fit-content;
      background: rgba(255, 255, 255, 0);
      display: grid;
      justify-content: center;
      backdrop-filter: blur(60px);
      position: absolute;
      color: #fff;
      top: 20vh;
      left: 5%;
      font-size: 100%;
      border-radius: 20px;
      box-sizing: border-box;
      font-family: "Yekan";
      border: 1px solid rgba(255, 255, 255, 1);
    }

    #restscreen {
      position: fixed;
      top: 0px;
      right: 0px;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(30px);
      z-index: 10000;
      visibility: hidden;
    }

    .OK {
      position: relative;
      cursor: pointer;
      justify-self: center;
      border-radius: 50px;
      background: rgba(255, 255, 255, 1);
      display: grid;
      justify-content: center;
      backdrop-filter: blur(10px);
      border: none;
      align-items: center;
      height: 40px;
      font-size: 20px;
      width: 30%;
    }

    .h2 {
      font-family: 'Yekan';
      margin: auto;
      text-align: center;
      position: sticky;
      color: white;
      font-size: 1.5vh;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      z-index: 19;
      top: 20vh;
      justify-content: center;
      display: flex;
      align-items: center;
      position: sticky;
      background: rgb(255, 255, 255, 0);


    }

    @media all and (orientation:landscape) {

      .h2 {
        font-size: 1.5vw;
        top: 15.2vh;
        width: 100%;
        height: 6vh;
        display: flex;
        align-items: center;
        justify-content: center;


      }
    }

    .circle-border {
      border: 2px solid white;
      border-radius: 50%;
      background: rgba(0, 0, 0, 0);
      color: white;
      width: 100px;
      height: 100px;
      text-align: center;
      line-height: 100px;
    }

    .circle {
      border-radius: 50%;
      border-image: white;
      background: rgba(0, 0, 0, 0);
      color: white;
      width: 100px;
      height: 100px;
      text-align: center;
      line-height: 100px;
    }

    /*******************************************Test tube progress bar*********************************************/
    #tubes {
      margin-inline: auto;
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center
    }

    @media all and (orientation:landscape) {

      #tube {
        --width: calc(1.42vw + 0.6rem);
        --skew: calc(0.2vw + 0.1rem);
        --tube-color: #fff;
        --anim-duration: 3s;
        width: var(--width);
        --percent: 0;
        aspect-ratio: 1/4.5;
        margin-top: var(--skew);
        border-top-left-radius: 50% var(--skew);
        border-top-right-radius: 50% var(--skew);
        border-bottom-left-radius: 50% var(--skew);
        border-bottom-right-radius: 50% var(--skew);
        display: grid;
        grid-template-rows: max-content auto max-content;
        position: relative;
        bottom: 5px;
        height: 65%;
      }

    }




    #tube::before {
      --blur: 4px;
      content: '';
      position: absolute;
      width: calc(100% + var(--width) * 0.25);
      z-index: -1;
      right: var(--blur);
      bottom: 0;
      height: calc(var(--skew) * 2);
      background: rgb(0 0 0 / .25);
      border-radius: inherit;
      filter: blur(var(--blur));
    }

    #tube>.cap {
      --cap-height: calc(var(--width) * .5);
      height: calc(var(--cap-height) + var(--skew));
      border-bottom-left-radius: inherit;
      border-bottom-right-radius: inherit;
      background-color: var(--tube-color);
      background-image: linear-gradient(to right, rgb(0 0 0 / .25), transparent 50%);
      position: relative;
      z-index: 2;
    }

    #tube>.cap::after {
      content: "";
      position: absolute;
      left: 0px;
      left: 0px;
      width: 100%;
      height: calc(var(--skew) * 2);
      background-color: var(--tube-color);
      background-image: linear-gradient(to left, rgb(0 0 0 / .25), transparent);
      border-radius: 50%;
      top: calc(var(--skew) * -1);
    }

    #tube>.base {
      border-bottom-left-radius: inherit;
      border-bottom-right-radius: inherit;
      background-color: var(--tube-color);
      background-image: linear-gradient(to right, rgb(0 0 0 / .25), transparent 50%);
      position: relative;
      display: grid;
      justify-items: center;
      text-align: center;
      padding-top: calc(var(--width) * 0.1 + var(--skew));
      padding-bottom: calc(var(--width) * .1);
      overflow: hidden;
    }


    #tube>.base>#text {
      color: black;
      font-family: sans-serif;
      line-height: 1;
      font-size: calc(var(--width) * .4);
      position: relative;
      font-weight: 620;
      bottom: 5px
    }

    .tube>.base>.text>* {
      position: absolute;
      font-size: .5em;
    }

    #tube>.base>.icon {
      width: 100%;
      color: var(--fill-color);
      background-color: rgb(0 0 0 / .1);
      padding-top: calc(var(--skew) + var(--width) * .1);
      padding-bottom: calc(var(--width) * .1);
      display: grid;
      place-content: center;
      margin-top: calc(var(--skew) * -.5);
      border-bottom-left-radius: 50% var(--skew);
      border-bottom-right-radius: 50% var(--skew);
      --mask-image: radial-gradient(ellipse 100% calc(var(--skew) * 2) at center top, transparent calc(50% - 1px), black calc(50% + 1px));
      -webkit-mask-image: var(--mask-image);
      mask-image: var(--mask-image);
      font-size: calc(var(--width) * .25);
    }


    #tube>.fill {
      margin-top: calc(var(--skew) * -1);
      position: relative;
      z-index: 1;
      --glas-gradient:
        linear-gradient(to right,
          rgba(255, 255, 255, 0.3),
          transparent 10% 15%,
          rgb(255 255 255 / .6) 20%,
          transparent 50% 90%,
          rgba(255, 255, 255, 0.3));
      background-image: var(--glas-gradient);
    }

    #tube>.fill::before {
      position: absolute;
      left: 0px;
      content: "";
      width: 100%;
      --fill-end: calc(var(--percent) * 1% + var(--skew));
      height: var(--fill-end);
      bottom: calc(var(--skew) * -1);
      border-bottom-left-radius: 50% var(--skew);
      border-bottom-right-radius: 50% var(--skew);
      background-image:
        var(--glas-gradient),
        radial-gradient(ellipse 100% calc(var(--skew) * 2) at center calc(100% - var(--skew)),
          rgb(255 255 255 /.125) calc(50% - 1px),
          transparent 50%),
        linear-gradient(to right,
          rgb(0 0 0 / .25),
          transparent 50% 70%,
          rgb(0 0 0 / .25)),
        linear-gradient(to top, rgb(229, 0, 250), white, yellow);

    }

    #tube>.fill::after {
      content: "";
      position: absolute;
      left: 0px;
      width: 100%;
      height: calc(var(--skew) * 2);
      background-color: yellow;
      border-radius: 50%;
      --fill-start: calc(var(--skew) * -1);
      --fill-end: calc(var(--percent) * 1% - var(--skew));
      bottom: var(--fill-end);

      background-image:
        var(--glas-gradient),
        linear-gradient(to left, rgb(0 0 0 / .25), transparent 50%);

    }



    .tubes {
      gap: calc(2vw + 0.2rem);
      /* (320,8)(1920,32) */
      ;
    }

    .tube {
      --width: ;
      /* (320,24)(1920,96) */
      ;
      --skew:
        /* (320,4)(1920,16) */
      ;
    }

    /****************************************************************************************note************************************************************************************************/
    .menubox {
      position: fixed;
      width: 98vw;
      height: 25vh;
      top: 12%;
      left: 5px;
      z-index: 3;
      display: none;
      border: 1px solid rgba(7, 255, 24, 0.5);
      border-radius: 10px;
      background: rgba(0, 0, 0, 0.3);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    .menubox.show {
      display: grid;
    }

    .menuicon {
      position: fixed;
      cursor: pointer;
      width: 3.5vh;
      height: 3.5vh;
      top: 1px;
      right: 1px;
      z-index: 1000;
      display: none;
      backdrop-filter: blur(50px);
      -webkit-backdrop-filter: blur(50px);
      border-radius: 4px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      background: rgba(0, 0, 0, 0.4);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    }

    .menuicon.active {
      border: 1px solid rgb(0, 255, 72);
      box-shadow: 0 0 3px #6bff00, 0 0 2px #6bff00, 0 0 4px #6bff00,
        0 0 8px #6bff00;
    }

    .menu {
      position: fixed;
      cursor: pointer;
      right: 10px;
      top: 12vh;
      width: 100px;
      height: 2%;
      background: rgb(255, 255, 255, 0);
      border: 1px solid rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 4px;
      z-index: 3;
      overflow: hidden;
    }

    #menuicon {
      position: relative;
      top: 0%;
      margin: auto;
      width: 85%;
      height: 85%;
      display: none;
      z-index: 5;
      border-radius: 100px;
    }


    @media all and (orientation:landscape) {

      .menubox {
        width: 89vw;
        top: 5px;
        border: 1px solid rgba(255, 255, 255, 1);


      }

      .menuicon {
        position: fixed;
        width: 1vw;
        height: 3vw;
        top: 2px;
        right: 10vw;
        z-index: 10;
        border-radius: 1px;
      }

      .menuicon.active {
        border: 1px solid rgb(0, 255, 72);
        box-shadow: 0 0 3px #6bff00, 0 0 2px #6bff00, 0 0 4px #6bff00,
          0 0 8px #6bff00;
      }

      .menu {
        position: fixed;
        left: 0px;
        top: 5vh;
        cursor: pointer;
        width: 0.2%;
        height: 50px;

      }

      #menuicon {
        position: relative;
        top: 0;
        margin: auto;
        width: 100%;
        height: 80%;
        z-index: 5;
      }

    }


    .menu.active {
      border: 1px solid rgb(255, 255, 0);
      box-shadow: 0 0 3px rgb(255, 255, 0), 0 0 2px rgb(255, 255, 0), 0 0 4px rgb(255, 255, 0),
        0 0 8px rgb(255, 255, 0) inset;
    }





    .voicebox {
      position: fixed;
      left: 0px;
      z-index: 3;
      width: 15px;
      height: 100px;
      top: 30%;
      left: 0px;
      background: #00ff15
    }

    @media all and (orientation: landscape) {
      .voicebox {
        top: 40%;
      }
    }

    #voice-icon2 {
      position: absolute;
      left: 0px;
      top: 0%;
      font-size: 15px;
      cursor: pointer;
      width: 30px;
      height: 30px;
      background: rgb(255, 255, 255, 0);
      border: none;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgb(255, 255, 255, 0.2);
      border-radius: 4px;
      z-index: 3;
      overflow: hidden;
    }





    #chaptertitrs {
      position: fixed;
      left: 70px;
      top: 25%;
      cursor: pointer;
      width: 80px;
      height: 55px;
      background: rgba(255, 255, 255, 0);
      border: 0.1px solid rgb(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 10px;
      z-index: 3;
      overflow: hidden;
      padding-bottom: 4px;

      rotate: 0 1 0 180deg;
      transition: all .5s ease-in-out;
      visibility: hidden;
      opacity: 0
    }

    @media all and (orientation: landscape) {
      #chaptertitrs {
        top: 78px;
      }
    }

    #chaptertitrs.show {
      visibility: visible;
      rotate: 0 1 0 360deg;
      z-index: 3;
      opacity: 1
    }

    #chaptertitrs.active {
      border: 1px solid rgb(255, 0, 230);
      box-shadow: 0 0 3px #ee00ff, 0 0 2px #ee00ff, 0 0 4px #ee00ff,
        0 0 8px #ee00ff;
    }

    #notemenu {
      position: fixed;
      margin: auto;
      top: 48vh;
      width: 99%;
      height: 88.5vh;
      background: rgba(0, 0, 0, 0.4);
      border: 1px solid rgb(246, 255, 0);
      border-radius: 10px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      z-index: -2;

      transition: all 0.5s ease-in-out;
      opacity: 0;
      overflow: scroll;
    }

    #notemenu::-webkit-scrollbar {
      display: none;
    }

    #notemenu.show {
      opacity: 1;
      top: 11vh;
    }

    .noteh1 {
      position: relative;
      text-align: center;
      top: 20px;
      color: yellow;
      font-size: 20px;
      border-bottom: 1px solid yellow;
      padding: 5px;
    }

    .card {
      position: relative;
      margin: auto;
      top: 40px;
      background-color: white;
      width: 90%;
      height: 320px;
      border-radius: 10px;
    }

    @media all and (orientation: landscape) {
      #notemenu {
        position: fixed;
        right: 10.3%;
        top: 11vh;
        width: 89.5%;
        height: 99.5vh;
        background: rgba(0, 0, 0, 0.4);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(30px);
        -webkit-backdrop-filter: blur(30px);
        z-index: 2;
        border: 1px solid rgb(246, 255, 0);
        border-radius: 10px;
        transition: all 0.5s ease-in-out;
        opacity: 0;
        overflow: scroll;
      }

      #notemenu.show {
        visibility: visible;
        top: 0
      }

      .noteh1 {
        position: relative;
        text-align: center;
        top: 30px;
        color: yellow;
        font-size: 20px;
        border-bottom: 1px solid yellow;
        padding: 5px;

      }
    }


    .notebtn {
      position: relative;
      background-color: blue;
      width: 100px;
      height: 40px;
      border-radius: 5px;
      color: white;
      font-family: 'Yekan';
      border: none;
      top: 230px;
      text-align: center;

    }

    #notes {
      position: relative;
      width: 70%;

    }

    #flashcardmenu {
      position: fixed;
      margin: auto;
      top: 48vh;
      width: 99%;
      height: 88.5vh;
      background: rgba(0, 0, 0, 0.4);
      border: 1px solid rgb(246, 255, 0);
      border-radius: 10px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      border-radius: 10px;
      transition: all 0.5s ease-in-out;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      visibility: hidden;
      z-index: 3;
      opacity: 0
    }

    #flashcardmenu::-webkit-scrollbar {
      display: none;
    }

    @media all and (orientation: landscape) {
      #flashcardmenu {
        position: fixed;
        right: 10.3%;
        top: 11vh;
        width: 89.5%;
        height: 99.5vh;
        background: rgba(0, 0, 0, 0.4);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(30px);
        -webkit-backdrop-filter: blur(30px);
        z-index: 2;
        border: 1px solid rgb(246, 255, 0);
        border-radius: 10px;
        transition: all 0.5s ease-in-out;
        visibility: hidden;
        overflow: scroll;
      }

      #flashcardmenu.show {
        visibility: visible;
        opacity: 1;
        z-index: 3;
        top: 0px
      }

      /********************flashcard************************/



    }

    :root {
      --time: .4s;
    }

    .card-container {
      display: grid;
      grid-template-columns: 1fr;
      margin-bottom: 20px;
    }

    .card-front,
    .card-back {
      display: flex;
      justify-content: center;
      align-items: center;
      grid-row-start: 1;
      grid-column-start: 1;
    }

    /* Flip inspired by: https://codepen.io/EightArmsHQ/pen/IzvCu */
    .card-back {
      background-color: #e0a800;
      width: 200px;
      height: 300px;
      border-radius: 15px;
      margin: auto;

      -webkit-transform: rotateY(-180deg);
      -webkit-transform-style: preserve-3d;
      -webkit-backface-visibility: hidden;

      -moz-transform: rotateY(-180deg);
      -moz-transform-style: preserve-3d;
      -moz-backface-visibility: hidden;

      -o-transition: all var(--time) ease-in-out;
      -ms-transition: all var(--time) ease-in-out;
      -moz-transition: all var(--time) ease-in-out;
      -webkit-transition: all var(--time) ease-in-out;
      transition: all var(--time) ease-in-out;
    }

    .card-front {
      background-color: #ffc107;
      width: 200px;
      height: 300px;
      border-radius: 15px;
      margin: auto;

      -webkit-transform: rotateX(0deg) rotateY(0deg);
      -webkit-transform-style: preserve-3d;
      -webkit-backface-visibility: hidden;

      -moz-transform: rotateX(0deg) rotateY(0deg);
      -moz-transform-style: preserve-3d;
      -moz-backface-visibility: hidden;

      -o-transition: all var(--time) ease-in-out;
      -ms-transition: all var(--time) ease-in-out;
      -moz-transition: all var(--time) ease-in-out;
      -webkit-transition: all var(--time) ease-in-out;
      transition: all var(--time) ease-in-out;
    }

    .flip .card-front {
      -webkit-transform: rotateY(180deg);
      -moz-transform: rotateY(180deg);

      -moz-box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
      -webkit-box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
      box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
    }

    .flip .card-back {
      z-index: 1000;

      -webkit-transform: rotateX(0deg) rotateY(0deg);
      -moz-transform: rotateX(0deg) rotateY(0deg);
    }

    form {
      padding-bottom: 10px;
    }

    .button-container button {
      margin: 10px;
    }

    small {
      width: 200px;
      margin: auto;
      padding-left: 10px;
    }

    .red-shadow {
      text-shadow: -1px 1px 15px #DC3545;
    }

    div p {
      text-align: center;
    }

    .row-container {
      /*   display: flex; */
      justify-content: space-evenly;
    }

    @media only screen and (max-width: 600px) {
      .row-container {
        flex-direction: column;
        justify-content: space-around;
      }
    }

    /*********************************************************/


    #musicmenu {
      position: fixed;
      margin: auto;
      top: 48vh;
      width: 100%;
      height: 83vh;
      background: rgba(0, 0, 0, 0);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      transition: all 0.5s ease-in-out;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      visibility: hidden;
      z-index: 3;
      opacity: 0
    }

    section {
      z-index: 2;
      transition: all 0.7s ease-in-out;

    }

    #musicmenu::-webkit-scrollbar {
      display: none;
    }

    section.hidden {
      z-index: -1
    }

    #musicmenu.show {
      visibility: visible;
      z-index: 3;
      opacity: 1;
      top: 11.2vh
    }

    .musich1 {
      position: relative;
      text-align: center;
      top: 50px;
      color: yellow;
      font-size: 15px;
      border-bottom: 1px solid yellow;
      padding: 5px;
      font-family: 'Yekan';
      visibility: inherit;

    }

    .chaptermaph1 {
      text-align: center;
      color: yellow;
      font-size: 15px;
      font-family: 'Yekan';
      visibility: inherit;
      display: flex;
      justify-content: center;
      top: 0px;
      margin: auto;
      position: sticky;
      z-index: 1000;
      width: 100%;
      height: 5vh;
     
    box-sizing: border-box;
      backdrop-filter: blur(5px);
    }

    @media all and (orientation:landscape) {
      .chaptermaph1 {
        height: 9vh;
        font-size: 2vw;

      }

    
    }
    .chaptermapframe{
      width: 100%;
       position: relative;
        display: grid;
        justify-content: center;
        padding: 10px;
        backdrop-filter: blur(25px);
        box-sizing: border-box;

    }



    @media all and (orientation: landscape) {
      #musicmenu {
        position: fixed;
        top: 11vh;
        width: 86.5%;
        height: 99.5vh;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        z-index: 2;
        transition: all 0.5s ease-in-out;
        visibility: hidden;
        overflow: scroll;
      }

      #musicmenu.show {
        visibility: visible;
        top: 0px
      }

      .musich1 {
        position: relative;
        text-align: center;
        top: 30px;
        color: yellow;
        font-size: 15px;
        border-bottom: 1px solid yellow;
        padding: 5px;
      }
    }


    #repeatBtn {
      padding: 0px;
      width: 10px;
      font-size: 16px;
      cursor: pointer;
      color: rgba(255, 255, 255, 0.3);
      bottom: 7px;
    }

    #repeatBtn.active {
      color: rgb(255, 255, 255);

    }

    /* Customize slider appearance */
    .slider {
      -webkit-appearance: none;
      background: #ddd;
      height: 2px;
      width: 50px;
      margin: 10px;
      position: absolute;
      top: -3px;
      margin-left: 20px;
    }

    @media all and (orientation:landscape) {
      .slider {
        -webkit-appearance: none;
        background: #ddd;
        height: 2px;
        width: 60px;
        margin: auto;
        position: relative;
        top: -3px;

      }
    }

    .slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      background: #2196F3;
      height: 10px;
      width: 10px;
      border-radius: 50%;
    }

    .slider::-moz-range-thumb {
      background: #2196F3;
      height: 10px;
      width: 10px;
      border-radius: 50%;
    }


    .progress-bar-thumb {
      position: absolute;
      top: 86px;
      left: 48%;
      height: 10px;
      width: 10px;
      border-radius: 50%;
      background-color: #fff;
      cursor: pointer;
    }

    /* Style the voice icon button */
    #voice-icon {
      padding: 0px;
      width: 10px;
      font-size: 16px;
      cursor: pointer;
      bottom: 7px;
    }

    #voice-icon.muted {
      color: rgba(255, 255, 255, 0.5)
    }



    /******************************musicplayer******************************/
    .songplayer {
      position: relative;
      top: 50px;
      margin: auto;
      width: 100%;
      height: 75%;

      display: grid;
      overflow: visible;
    }

    .songplayer::-webkit-scrollbar {
      display: none;
    }

    @media all and (orientation: landscape) {

      .songplayer {
        position: relative;

        height: 64%;
        top: 15vh;
        margin-bottom: 50px;


      }
    }

    #progressSlider {
      width: 95%;
      height: 2px;
      position: relative;
      cursor: pointer;
      margin: auto;
      background-color: transparent;
    }

    .musicslider {
      position: absolute;
      margin: auto;
      top: -30px;
      z-index: 10;
      width: 100%;
      height: 100%;
      -webkit-appearance: none;
      appearance: none;
      background-color: rgb(255, 255, 255);
    }

    /* Thumb styles */
    .musicslider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 10px;
      height: 10px;
      background-color: rgb(255, 255, 255);
      border-radius: 50%;
      cursor: pointer;
    }

    .musicslider::-moz-range-thumb {
      width: 10px;
      height: 10px;
      background-color: rgb(255, 255, 255);
      border-radius: 50%;
      cursor: pointer;
    }




    .duration-wrapper {
      position: relative;
      top: -25px;
      display: flex;
      justify-content: space-between;
      color: white;

    }

    .controlplayer {
      position: absolute;
      bottom: 3vh;
      width: 100%;
      height: 80px;
      justify-content: center;
    }

    @media all and (orientation:landscape) {
      .controlplayer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 50px;
        justify-content: center;

      }

    }

    .player-controls {
      position: relative;
      width: 100%;
      text-align: center;
      bottom: -15px;
      justify-content: center;
      text-align: center;
      display: flex;

    }

    @media all and (orientation:landscape) {
      .player-controls {
        position: relative;
        width: 100%;
        text-align: center;
        justify-content: center;
        bottom: 5px;
        text-align: center;
        display: flex;

      }

      .duration-wrapper {
        position: relative;
        bottom: 60px;
        display: flex;
        justify-content: space-between;
        color: white;

      }

    }

    .fas {
      position: relative;
      font-size: 30px;
      color: rgb(255, 255, 255);
      user-select: none;
      cursor: pointer;
      margin: 20px;
      margin-top: auto;
      left: 0%;


    }

    .fas:hover {
      filter: brightness(80%);
    }

    .fa {
      position: relative;
      font-size: 30px;
      color: rgb(255, 255, 255);
      user-select: none;
      cursor: pointer;
      margin: 20px;
      margin-top: auto;

    }

    .main-button {
      font-size: 40px;
      position: relative;
      top: 3px;
    }



    @media screen and (max-width: 400px) {


      .container {
        width: 80vw;
        height: 400px;
      }

      .img-container {
        left: 62px;
        width: 60%;
        height: 40%;
      }

      .img-container img {
        width: 100%;
        height: 100%;
      }

      .fas {
        right: 40px;
        width: 20px;
      }






      .circle {
        height: 300px;
        width: 300px;
        left: -90px;
        top: 10px;
      }

      .circle2 {
        height: 180px;
        width: 180px;
        left: 270px;
        top: 450px;
      }

      #progressBar {
        margin: 90px 10px;
        height: 3px;
        width: 90%;
      }


    }

    listen {
      font-size: 20px;
      position: absolute;
      top: 240px;
      left: 50%;
    }



    #notetext {
      position: absolute;
      border: 1px solid #00b3ff;
      background-color: #fff;
      width: 93%;
      left: 0px;
      height: 200px;
      border-radius: 10px;
      font-family: "Yekan";
    }

    #notetext:focus {
      border: 1px solid blue
    }

    label {
      display: block;
      font-weight: 500;
      margin-block-start: var(--gap);
    }

    #input {
      height: 100px;
      background: white
    }


    #menuframe {
      position: fixed;
      width: 140px;
      height: 65px;
      align-items: center;
      font-size: 1.5vw;
      top: 15%;
      left: 70px;
      padding: 2px;
      box-sizing: border-box;
      border-radius: 50px;
      z-index: 3;

    }



    @media all and (orientation: landscape) {
      #menuframe {
        top: 8px;
        z-index: 3;
      }
    }

    #note {
      position: fixed;
      left: 70px;
      top: 12.5%;
      cursor: pointer;
      width: 80px;
      height: 55px;
      background: rgba(255, 255, 255, 0);
      border: 0.1px solid rgb(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 10px;
      z-index: 3;
      overflow: hidden;
      padding-bottom: 4px;

      rotate: 0 1 0 180deg;
      transition: all .5s ease-in-out;
      visibility: hidden;
      opacity: 0
    }

    @media all and (orientation: landscape) {
      #note {
        top: 15px;
      }
    }

    #note.show {
      visibility: visible;
      rotate: 0 1 0 360deg;
      z-index: 3;
      opacity: 1
    }

    #note.active {
      border: 1px solid rgb(255, 0, 230);
      box-shadow: 0 0 3px #ee00ff, 0 0 2px #ee00ff, 0 0 4px #ee00ff,
        0 0 8px #ee00ff;
    }

    #flashcard {
      position: fixed;
      left: 160px;
      top: 12.5%;
      cursor: pointer;
      width: 80px;
      height: 55px;
      background: rgba(255, 255, 255, 0);
      border: 1px solid rgb(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 10px;
      z-index: -100;
      overflow: hidden;
      padding-bottom: 4px;

      rotate: 0 1 0 180deg;
      transition: all .5s ease-in-out;
      opacity: 0
    }

    @media all and (orientation: landscape) {
      #flashcard {
        top: 15px;
      }
    }

    #flashcard.show {
      opacity: 1;
      rotate: 0 1 0 360deg;
      z-index: 3;
    }

    #flashcard.active {
      border: 1px solid rgb(255, 0, 230);
      box-shadow: 0 0 3px #ee00ff, 0 0 2px #ee00ff, 0 0 4px #ee00ff,
        0 0 8px #ee00ff;
    }

    #music {
      position: fixed;
      left: 250px;
      top: 12.5%;
      width: 80px;
      height: 55px;
      cursor: pointer;
      background: rgba(255, 255, 255, 0);
      border: 0.5px solid rgb(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 10px;
      z-index: 3;
      overflow: visible;
      padding-top: 30px;
      padding-bottom: 4px;
      rotate: 0 1 0 180deg;
      transition: all .5s ease-in-out;
      visibility: hidden;
      opacity: 0
    }

    @media all and (orientation: landscape) {
      #music {
        top: 15px;
      }
    }

    #music.show {
      visibility: visible;
      rotate: 0 1 0 360deg;
      z-index: 3;
      opacity: 1
    }

    #music.active {
      border: 1px solid rgb(255, 0, 230);
      box-shadow: 0 0 3px #ee00ff, 0 0 2px #ee00ff, 0 0 4px #ee00ff,
        0 0 8px #ee00ff;
    }

    #voiceicon2 {
      position: fixed;
      left: 0px;
      top: 12vh;
      width: 100px;
      height: 15px;
      cursor: pointer;
      background: rgba(255, 255, 255, 0);
      border: 1px solid rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 10px;
      z-index: 10;
      overflow: visible;
      padding-top: 10px;
      padding-bottom: 4px;
      visibility: visible;
      opacity: 1
    }

    #voiceicon2.show {
      visibility: visible;
      rotate: 0 1 0 360deg;
      z-index: 3;
      opacity: 1
    }

    .voice2 {
      position: absolute;
      bottom: 1px;
      left: 4%;
      width: 15%;
      height: 100%;
    }

    @media all and (orientation: landscape) {
      #voiceicon2 {
        position: fixed;
        left: 0px;
        top: 35%;
        width: 15px;
        height: 100px;
        cursor: pointer;
        background: rgba(255, 255, 255, 0);
        border: 1px solid rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 10px;
        z-index: 3;
        overflow: visible;
        padding-top: 10px;
        padding-bottom: 4px;
        visibility: visible;
        opacity: 1
      }

      .voice2 {
        position: absolute;
        bottom: 5px;
        left: 0%;
        width: 100%;
        height: 15%;
      }
    }

    #scrollToTop {
      position: relative;
      aspect-ratio: 1;
      right: 0px;
      display: grid;
      place-items: center;
      cursor: pointer;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: 10;
      overflow: hidden;
      border-radius: 5px;

    }

    #scrollimg {
      position: relative;
      width: 50%;
      margin: auto;
      height: 50%
    }

    @media all and (orientation: landscape) {
      #scrollimg {
        height: 60%;
      }
    }

    #scrollToEnd {
      position: relative;
      aspect-ratio: 1;
      right: 0px;
      display: grid;
      place-items: center;
      cursor: pointer;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: 10;
      overflow: hidden;
      margin-bottom: 0;
   
      border-radius: 5px;

    }

    @media all and (orientation: landscape) {
      #scrollToEnd {}
    }

    #up_down {
      width: 99.5%;
      position: fixed;
      bottom: -1%;
      justify-content: space-around;
      z-index: 3;
      display: flex;
      flex-direction: row-reverse;
      place-items: center;
      background: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(5px);
      margin: auto;
      -webkit-backdrop-filter: blur(5px);
      height: 6%;
      padding: 2px;

    }
  
    #chaptermap {
      overflow: overlay;
      position: fixed;
      margin: auto;
      top: 11.3%;
      width: 100%;
      height: 83.5vh;
      background: rgba(0, 0, 0, 0.5);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      transition: all 0.5s ease-in-out;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      visibility: hidden;
      z-index: 3;
      opacity: 1
    }


    #chaptermap.show {
      visibility: visible;

    }
    #chaptermap::-webkit-scrollbar {
      width: 10px;
      height: 0;
    }

    /* Track */
    #chaptermap::-webkit-scrollbar-track {
      box-shadow: inset 0 0 rgba(0, 0, 0, 0.5);
      border-radius: 10px;
      background: black;
    }

    /* Handle */
    #chaptermap::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.5);
      border-radius: 50px;
    }

    /* Handle on hover */
    #chaptermap::-webkit-scrollbar-thumb:hover {
      background: #ffffff;
    }

    #list {
      position: fixed;
      right: 0px;
      width: 300px;
      height: 83%;
      overflow: hidden;
      background-color: rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 5px;
      top: 11%;
      z-index: 999;
      visibility: hidden;
      font-family: 'Shabnam'

    }

    /* width */
    #list::-webkit-scrollbar {
      width: 5px;
    }

    /* Track */
    #list::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px rgba(255, 255, 255, 0.5);
      border-radius: 100px;
    }

    /* Handle */
    #list::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.5);
      border-radius: 100px;
    }


    /* width */
    .listcontent::-webkit-scrollbar {
      width: 5px;
    }

    /* Track */
    .listcontent::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px rgba(255, 255, 255, 0.5);
      border-radius: 100px;
    }

    /* Handle */
    .listcontent::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.5);
      border-radius: 100px;
    }
    .listcontent::-webkit-scrollbar-thumb:hover {
      background: #ffffff;
    }


    #list.show {
      visibility: visible;

    }

    @media all and (orientation: landscape) {
      #list {
        top: -1px;
        z-index: 999;
        height: 100%;

      }
    }

    @media all and (orientation: landscape) {
      #up_down {
        right: 10vw;
        display: grid;
        height: 100%;
        bottom: 0px;
        padding: 1px;
        padding-top: 4px;
        box-sizing: border-box;

      }
    }

    @media all and (orientation: landscape) {
      #chaptermap {
        top: 0%;
        height: 100vh;

      }
    }

    @media (max-width:2000px) and (orientation: landscape) {
      #up_down {
        width: 2%;
      }

      #list {
        right: 12%;
      }

      .titr {
        width: 87.5%;
      }

      .foot {
        width: 88%;
      }

      #chaptermap {
        width: 88%;
      }

      #musicmenu {
        width: 88%;
      }
 
    }

    @media (max-width:1500px) and (orientation: landscape) {
      #up_down {
        width: 2.5%;
      }

      #list {
        right: 12.5%;


      }

      .titr {
        width: 87%;
      }

      .foot {
        width: 87.5%;
      }

      #chaptermap {
        width: 87.5%;
      }

      #muscimenu {
        width: 87.5%;
      }
   
    }

    @media (max-width:1200px) and (orientation: landscape) {
      #up_down {
        width: 3%;
      }

      #list {
        right: 13%;


      }

      .titr {
        width: 86.5%;
      }

      .foot {
        width: 87%;
      }

      #chaptermap {
        width: 87%;
      }

      #musicmenu {
        width: 88%;
      }
    }

    @media (max-width:1100px) and (orientation: landscape) {
      #up_down {
        width: 3.5%;
      }

      #list {
        right: 13.5%;


      }

      .titr {
        width: 86%;
      }

      .foot {
        width: 86.5%;
      }

      #chaptermap {
        width: 86.5%;
      }

      #musicmenu {
        width: 86.5%;
      }

    }

    @media (max-width:800px) and (orientation: landscape) {
      #up_down {
        width: 4%;
      }

      #list {
        right: 14%;


      }

      .titr {
        width: 85.5%;
      }

      .foot {
        width: 86%;
      }

      #chaptermap {
        width: 86%;
      }

      #musicmenu {
        width: 86%;
      }
   
    }


    .pagehandling {
      background: rgba(0, 0, 0, 0.5);
      height: 50%;
      aspect-ratio: 1;
      display: grid;
      padding: 2px;
      align-items: center;
      overflow: hidden;
      position: relative;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      cursor: pointer;
      bottom: 10%;
      border-radius: 5px;
      border: 1px solid rgba(255, 255, 255, 0.5);
    }
    .pagehandling.active::before {
      transform: translate(200px);
      transition: 2s;
    }
    
    .pagehandling::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0px;
      width: 50%;
      height: 100%;
      transition:0.5s;
      background: linear-gradient(to left, rgba(255, 255, 255, 0.3), transparent);
      filter: blur(0px);
    }

    @media all and (orientation: landscape) {
      .pagehandling {
        aspect-ratio: 1;
        height: unset;
        width: 70%;
        display: grid;
        padding: 2px;
        align-items: center;
        position: relative;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        margin-bottom: 10px;
        cursor: pointer;
        margin-right: unset;
      }

    }

    #showmusic.active {
      border: 1px solid #f6ff00;
      box-shadow: 0 0 3px #f6ff00, 0 0 2px #f6ff00, 0 0 4px #f6ff00,
        0 0 8px #f6ff00;
    }

    #showmap.active {
      border: 1px solid #f6ff00;
      box-shadow: 0 0 3px #f6ff00, 0 0 2px #f6ff00, 0 0 4px #f6ff00,
        0 0 8px #f6ff00;
    }

    #showlist.active {
      border: 1px solid #f6ff00;
      box-shadow: 0 0 3px #f6ff00, 0 0 2px #f6ff00, 0 0 4px #f6ff00,
        0 0 8px #f6ff00;
    }

    #showexams.active {
      border: 1px solid #f6ff00;
      box-shadow: 0 0 3px #f6ff00, 0 0 2px #f6ff00, 0 0 4px #f6ff00,
        0 0 8px #f6ff00;
    }


    #examtab {
      overflow: hidden;
      z-index: 100;
      position: fixed;
      border-radius: 5px;
      width: 100%;
      justify-content: space-evenly;
      display: none;
      color: white;
      height: 5%;
      backdrop-filter: blur(5px);
      top: 12%
    }

    /* width */

    @media all and (orientation: landscape) {
      #examtab {
        top: 0px;
        width: 87%;
        height: 10%;
      }
    }

    /* Style the buttons inside the tab */
    #examtab button {
      background-color: inherit;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 5px;
      transition: 0.3s;
      font-size: 13px;
      border-radius: 5px;
      color: white;
      font-family: 'Shabnam'
    }



    /* Create an active/current tablink class */
    #examtab button.active {
      background: rgba(255, 255, 255, 0.4)
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      backdrop-filter: blur(10px);
      color: white;
      height: 77%;
      position: fixed;
      z-index: 101;
      top: 17%;
      background-color: transparent;
      font-family: 'Shabnam';
      width: 100%;
    }

    @media all and (orientation: landscape) {
      .tabcontent {
        height: 100%;
        top: 10%;

      }
    }

    @media (max-width:2000px) and (orientation: landscape) {

      .tabcontent {
        width: 88%;
      }


    }

    @media (max-width:1500px) and (orientation: landscape) {


      .tabcontent {
        width: 87.5%;
      }
    }

    @media (max-width:1200px) and (orientation: landscape) {


      .tabcontent {
        width: 87%;
      }
    }

    @media (max-width:1100px) and (orientation: landscape) {


      .tabcontent {
        width: 86.5%;
      }
    }

    @media (max-width:800px) and (orientation: landscape) {


      .tabcontent {
        width: 86%;
      }
    }

    .examlist {
      overflow-x: scroll;
      z-index: 100000;
      position: fixed;
      border-radius: 5px;
      width: 100%;
      top: 0px;
      justify-content: space-evenly;
      display: flex;
      color: white;
      height: 40px;
      backdrop-filter: blur(5px);
      margin-top: 5px;
      left: 0px;
    }

    .examlist::-webkit-scrollbar {
      width: 5px;
    }

    /* Track */
    .examlist::-webkit-scrollbar-track {
      background: rgba(0, 0, 0, 0.2);
    }

    /* Handle */
    .examlist::-webkit-scrollbar-thumb {
      background: rgba(0, 0, 0, 0.4);
    }

    /* Handle on hover */
    .examlist::-webkit-scrollbar-thumb:hover {
      background: rgba(255, 255, 255, 0.2);
    }

    /* Style the buttons inside the tab */
    .examlist button {
      background-color: inherit;
      border: none;
      outline: none;
      cursor: pointer;
      transition: 0.3s;
      font-size: 10px;
      border-radius: 100px;
      color: white;
      font-family: 'Shabnam';
      white-space: nowrap;
      height: 20px;
      margin-right: 20px;
    }

    /* Change background color of buttons on hover */


    /* Create an active/current tablink class */
    .examlist button.active {
      background: rgba(255, 255, 255, 0.4)
    }


    /* Style the tab content */
    .exam {
      display: none;
      backdrop-filter: blur(10px);
      color: white;
      width: 100%;
      height: 60%;
      position: fixed;
      z-index: 100000;
      top: 34%;
      background-color: transparent;
      backdrop-filter: blur(5px);
      font-family: 'Shabnam';

    }

    @media all and (orientation: landscape) {
      .exam {
        height: 78%;
        top: 22%;

      }
    }

    @media (max-width:2000px) and (orientation: landscape) {

      .exam {
        width: 88%;
      }

      .btnframe {
        width: 20vw;
      }

      .h1parrent {
        font-size: 15px;
      }

      .tableitems {
        font-size: 15px;

      }

    }

    @media (max-width:1500px) and (orientation: landscape) {


      .exam {
        width: 87.5%;

      }

      .btnframe {
        width: 20vw;
      }

      .h1parrent {
        font-size: 14px;
      }

      .tableitems {
        font-size: 14px;

      }

    }

    @media (max-width:1200px) and (orientation: landscape) {


      .exam {
        width: 87%;
      }

      .btnframe {
        width: 25vw;
      }

      .h1parrent {
        font-size: 13px;
      }

      .tableitems {
        font-size: 13px;

      }

    }

    @media (max-width:1100px) and (orientation: landscape) {


      .exam {
        width: 86.5%;
      }

    }

    @media (max-width:800px) and (orientation: landscape) {


      .exam {
        width: 86%;
      }
    }

    #Master2 {
      overflow-x: scroll;
      z-index: 100000;
      position: fixed;
      border-radius: 5px;
      width: 100%;
      top: 23px;
      justify-content: space-evenly;
      display: none;
      color: white;
      height: 40px;
      backdrop-filter: blur(5px);
      margin-top: 5px;
      left: 0px;
    }



    .central-circle {
      width: 1vh;
      height: 1vh;

      background-color: #00ff24;
      border-radius: 50%;
      position: absolute;
    }

    .propagating-circle1 {

      background: rgb(0, 0, 0, 0);
      border: 2px solid #0fff28;
      border-radius: 50%;
      position: absolute;
      animation: propagate 2s linear infinite;
    }

    .propagating-circle3 {

      background: rgb(0, 0, 0, 0);
      border: 2px solid #0fff28;
      border-radius: 50%;
      position: absolute;
      animation: propagate 2s linear infinite;
      animation-delay: 1s;


    }

    @keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes propagate {
      0% {
        width: 0;
        height: 0;
        opacity: 1;
      }

      100% {
        width: 3vh;
        height: 3vh;
        opacity: 0;
      }
    }


    .voice2 {
      position: absolute;
      bottom: 5px;
      left: 0%;
      width: 100%;
      height: 15%;
    }


    #musicpics {
      position: relative;
      overflow-x: scroll;
      overflow-y: hidden;
      height: 60%;
      width: 100%;
      display: flex;
    }

    #musicpics::-webkit-scrollbar {
      display: none;
    }

    .musicpic {
      cursor: pointer;
      position: relative;
      flex: 0 0 auto;
      -ms-flex: 0 0 auto;
      /* IE 10 */
      top: 5px;
      left: 0px;
      border-radius: 100%;
      margin: 20px;
      height: 80%;
      aspect-ratio: 1/1;
      overflow: hidden;
      border-image: 4px rgb(255, 255, 255, 0.1);
    }

    @media all and (orientation: landscape) {
      .musicpic {
        flex: 0 0 auto;
        -ms-flex: 0 0 auto;
        /* IE 10 */
        height: 90%;
        aspect-ratio: 1/1;
        margin: 5px;

      }
    }

    .musicpic.active {
      box-shadow: 0 0 3px #ee00ff, 0 0 2px #ee00ff, 0 0 4px #ee00ff,
        0 0 8px #ee00ff;
    }

    #TotalNotes {
      color: white;
      position: relative;
      top: 10px;

    }

    .maintitr {
      height: 5vh;
      width: 100%;
      box-sizing: border-box;
      background: rgba(0, 0, 0, 0.6);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      font-family: 'yekan';
      font-size: 3vh;
      color: rgb(255, 255, 255);
      text-align: center;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      display: flex;
      align-items: center;
      justify-content: center;
      position: sticky;
      top: 11.2vh;
      z-index: 3;
      border-radius: 5px;
      border: 2px solid
    }

    @media all and (orientation: landscape) {

      .maintitr {
        width: 100%;
        top: 0px;
        font-size: 2vw;

      }
    }

    @media (min-width:1200px) and (orientation:landscape) {
      .maintitr {
        height: 8vh;
      }

      .h1 {
        top: 8vh
      }
      .h2{
        top:14vh
      }
    }

    @media (max-width:1200px) and (orientation:landscape) {
      .maintitr {
        height: 10vh;
      }

      .h1 {
        top: 10vh
      }
      .h2{
        top:16vh
      }
    }



    .soundplayer {
      margin: 20px;
      display: flex;
      align-items: center;
      background-color: rgba(255, 255, 255, 0.1);
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ff02d7;
      box-shadow: rgb(234 0 255) 0px 0px 10px;
    }

    .play-pause-btn {
      cursor: pointer;
      margin-right: 10px;
      position: relative;
      top: 6px;
    }

    .play-pause-icon {
      fill: #fff;
    }

    .controls {
      display: flex;
      align-items: center;
      width: 100%;
    }

    .lessonslider {
      position: relative;
      width: 100%;
      height: 5px;
      background: rgba(0, 0, 0, 0.2);
      margin: 0 10px;
      cursor: pointer;

    }

    .progress {
      position: absolute;
      width: 0;
      height: 100%;
      background: #fff;
    }

    .time {
      color: #fff;
    }

    .image-container {
      position: relative;
      width: 85vw;
      margin: auto;
    }

    .main-image {
      width: 90%;
      display: block;
      cursor: pointer;
      margin: auto;
    }

    .magnifier-view {
      display: none;
      /* Hidden by default */
      position: fixed;
      transform: translateY(-50%);
      width: 95%;
      left: 2.5%;
      height: 100%;
      overflow: scroll;
      /* Enable scrollbars */
      z-index: 100;
      backdrop-filter: blur(5px);

    }

    /* width */
    .magnifier-view::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }

    /* Track */
    .magnifier-view::-webkit-scrollbar-track {
      box-shadow: inset 0 0 rgba(0, 0, 0, 0.5);
      border-radius: 10px;
    }

    /* Handle */
    .magnifier-view::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.5);
      border-radius: 50px;
    }

    /* Handle on hover */
    .magnifier-view::-webkit-scrollbar-thumb:hover {
      background: #b30000;
    }

    .magnified-image {
      position: relative;
      /* Ensure it stays within the scrollable area */
      width: 300%;
      margin: auto;
    }

    @media all and (orientation: landscape) {
      .image-container {
        width: 75vw;
      }

      .main-image {
        width: 55%;

      }

    }

    .speed-btn {

      border: 1px solid #ffffff75;
      border-radius: 5px;
      margin: 2px;
      margin-right: 10px;
      padding-right: 3px;
      padding-left: 3px;
      width: 30px;
      height: 30px;
      text-align: center;
      font-size: x-small;
      cursor: pointer;
    }

    .showanswer {
      margin-right: 10px;
      border: 1px solid #ffffff6e;
      border-radius: 5px;
      padding-right: 5px;
      padding-left: 5px;
      position: relative;
      top: -2px;
      margin-left: 10px;
      height: fit-content;
      cursor: pointer;
      float: right;
      font-size: x-small;
    }

    .answer {
      visibility: hidden;
      position: relative;
      color: #ff0000;
      font-weight: bold;
      margin-left: 10px;
    }

    .fillblank {
      margin-right: 10px;
      border: 1px solid #ffffff6e;
      border-radius: 5px;
      padding-right: 5px;
      padding-left: 5px;
      position: relative;
      top: -2px;
      margin-left: 10px;
      height: fit-content;
      cursor: pointer;
      float: right;
      font-size: x-small;
    }

    .blankanswer {
      visibility: hidden;
      position: absolute;
      color: #ff0000;
      font-weight: bold;
      margin-left: 10px;
    }
  </style>

  <title>3D Biochemistry</title>

</head>

<body onselectstart="return false" ondragstart="return false" onpaste="return false" onCopy="return false"
  onCut="return false" onDrop="return false" autocomplete=off>


  <br><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>





  <div id="musicmenu">
    <h1 class="musich1">موزیک سه بعدی( با هندزفری گوش بدهید)</h1>
    <div class="songplayer">

      <div id="musicpics" style="  scroll-behavior: smooth;
        ">
        <div id="scrollindicator">
          <span id="scrollright" tabindex="0" onclick="musicscrollright()" class="scrollindicator"
            cursor="pointer"></span>
        </div>
        <div id="scrollindicator2" class="scrollindicator2">
          <span id="scrollright" tabindex="0" onclick="musicscrollleft()" cursor="pointer"></span>
        </div>

        <div class="musicpic" onclick="musicpicclick1()">
          <img src="https://thumbs.dreamstime.com/b/heavy-rain-tropical-rainforest-55108490.jpg"
            style="position:absolute;width:100%;height:100%;top:0px;left:0px;">
        </div>
        <div class="musicpic" onclick="musicpicclick2()"><img
            src="difference-between-spring-water-and-mineral-water-featured.webp"
            style="position:absolute;width:100%;height:100%;top:0px;left:0px;"></div>

        <div class="musicpic" onclick="musicpicclick3()"><img src="water.jpg"
            style="position:absolute;width:100%;height:100%;top:0px;left:0px;"></div>

        <div class="musicpic" onclick="musicpicclick4()"><img
            src="the-colors-of-spring-bird-fountain-in-flower-garden-crista-forest.jpg"
            style="position:absolute;width:100%;height:100%;top:0px;left:0px;"></div>

      </div>
      <div class="controlplayer">
        <div id="progressSlider">
          <input type="range" min="0" max="100" value="0" class="musicslider" id="myRange">
        </div>

        <div class="duration-wrapper">
          <span id="current-time" style="position:absolute;top:5px;left:22px">00:00</span>
          <span id="duration" style="position:absolute;top:5px;right:22px">00:00</span>
        </div>
        <audio onplay="audiotime()" id="audiotrack">
          <source src="3D-Sounds-Thunder-and-Rain-Sounds-of-Nature-SoftGozar.com.mp3" type="audio/mpeg">
        </audio>
        <div id="tracklist">
          <audio class=" natureaudio " data-src="3D-Sounds-Thunder-and-Rain-Sounds-of-Nature-SoftGozar.com.mp3"></audio>
          <audio class="natureaudio "
            data-src="https://github.com/Mybook2021/scientist.github.io/raw/main/3d_Mountain_Stream_Radion.ir.mp3"></audio>
          <audio class="natureaudio " data-src="3d AAB-JOB.mp3"> </audio>
          <audio class="natureaudio " data-src="bird&spring.mp3"> </audio>
        </div>

        <div class="player-controls">
          <i class="fa fa-redo" id="repeatBtn" onclick="toggleRepeat()"
            style="display:block;position:relative;top:-1px"> </i>
          <button id="previousbtn" onclick="previous()" style="display:block;background:transparent;border:none"><img
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/previous.png" alt="previous"
              style="position:relative;left:0;top:0;width:30px;height:30px;"></button>
          <button id="playbtn" onclick="playAudio()" style="display:block;background:transparent;border:none"><img
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/play.png" alt="Play"
              style="position:relative;left:0;top:0;width:50px;height:50px;"></button>
          <button id="pausebtn" onclick="pauseAudio()" style="display:none;background:transparent;border:none"><img
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/pause.png" alt="pause"
              style="position:relative;left:0;top:0;width:50px;height:50px;"></button>

          <button id="nextbtn" onclick="next()" style="display:block;background:transparent;border:none;"><img
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/next.png" alt="next"
              style="position:relative;right:0;top:0;width:30px;height:30px;"></button>

          <div class="fa fa-volume-up" onclick="toggleMute()" id="voice-icon"
            style="display:block;position:relative;top:-1px;right:10px"><input type="range" min="0" max="100"
              value="100" class="slider" id="volume-slider"></div>
        </div>

      </div>


    </div>
  </div>



  <section class="loginform" id="loginform">
    <div class="colour"></div>
    <div class="colour"></div>
    <div class="colour"></div>
    <div class="loginbox">
      <div class="square" style="--i: 0"><img style="width:100%" src="molecule-structure-6625223-5522658.png"></div>
      <div class="square" style="--i: 1"></div>
      <div class="square" style="--i: 2"><img style="width:100%" src="cell-dish-flipcard.png"></div>
      <div class="square" style="--i: 3;overflow: hidden;"><img style="width:180%"
          src="pngtree-3d-modeling-dna-horizontal-map-three-dimensional-pink-and-white-png-image_8649321 (1).png"></div>
      <div class="square" style="--i: 4"><img style="width:100%"
          src="171-1713827_human-insulin-hexamer-3d-ribbons-human-insulin-protein.png"></div>
     
      </div>

    </div>
  </section>
  <div id="restscreen">
    <div id="resttime" dir="rtl">
      لطفا چند دقیقه استراحت کنید!
      <br>
      <br> توجه:
      1-لطفا فضای مجازی را چک نکنید <br>
      2-حرکت کششی انجام دهید و نفس های عمیق بکشید<br>
      3-کمی در فضای باز قدم بزنید</h3>
      <br>
      <button onclick="exitrest()" class="OK">OK</button>
    </div>
  </div>

  <div class="head" id="head" dir="rtl">
    <div class="logoframe" style="display: grid;">
      <div class="logo"><img class="shadowfilter" id="logoimage"
          src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/Picture1.png"><span id="logospan">Ali
          Ghorbani<br>3D Biochemistry</span></div>
    </div>
    <div class="chapter">
      <p>فصل ۱ <br><span style="display:inline-block;color:yellow">مبانی بیوشیمی</span></p>
    </div>
    <div class="timerframe">
      <div class="timertitle" style="color:yellow;">تایمر مطالعه</div>
      <div class="timer">

        <button onclick="toggleTimer()" id="timerbutton1" class="timerbutton">شروع</button>
        <div class="timernumber" dir="ltr" style="padding-top: 3px;">
            <label id="minutes">00</label><span class="bigger">:</span><label id="seconds">00</label>
        </div>
        <button onclick="resetTimer()" id="timerbutton2" class="timerbutton">ریست</button>
      </div>
    </div>

    <div class="container" overflow="hidden">
      <div id="tube" style=" --fill-color: #a541ac">
        <i class="cap"></i><i class="fill"></i>
        <div class="base">
          <span id="text" style="position:relative;bottom:0px;left:1px">0<sup>%</sup></span>
          <div class="icon"></div>
        </div>

      </div>
      <span style="display:inline-block;position:absolute;
    bottom: 0%;
    text-align: center;
   width: 100%;
   font-size:1.1vw;font-family: 'Yekan';">درصد پیشرفت </span>
    </div>
  </div>
  <div class="menuicon" onclick="openmenu()">
    <img id="menuicon" src="969160-200.png">
  </div>


  <div id="up_down">
    <form  id="logoutForm" method="POST" action="logout.php" style="position:absolute" > </form>

    <div class="pagehandling" type="submit" onclick="document.getElementById('logoutForm').submit();">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/exit.png"
        style="position: relative;width: 100%;height: 100%;margin:auto;"></div>

   
   
    <div class="pagehandling" onclick="refresh()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"
        style="position: relative;width: 100%;height: 100%;margin:auto;">
    </div>

    <div class="pagehandling" id="showlist" onclick="showlist()" id="showlist">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/list.png"
        style="position: relative;width: 100%;height: 100%;margin:auto;">
    </div>
    <div class="pagehandling" onclick="rotatescreen()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/rotate2.png"
        style="position: relative;width: 100%;height: 100%;margin:auto;">
    </div>
    <div id="showmusic" class="pagehandling" onclick="showmusic()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/music.png"
        style="position: relative;width: 100%;height: 100%;margin:auto;">

    </div>
    <div id="showmap" class="pagehandling" onclick="showmap()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/map.png"
        style="position: relative;width: 100%;height: 95%;margin:auto;bottom: 1pxz;">

    </div>
    <div id="showexams" class="pagehandling" onclick="showexams()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/tick.png"
        style="position: relative;width: 100%;height: 95%;margin:auto;bottom: 1pxz;">

    </div>

    <div id="scrollToTop" class="pagehandling" onclick="scrollToTop()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/top.png" id="scrollimg">
    </div>
    <div id="up"  class="pagehandling" onclick="scrollup()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/Up.png" id="scrollimg" >
    </div>
    <div id="down" class="pagehandling" onclick="scrolldown()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/down.png"  id="scrollimg" >
    </div>


    <div id="scrollToEnd" class="pagehandling" onclick="scrollToEnd()">
      <img src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/end.png" id="scrollimg">
    </div>
  </div>
  </div>

  <div id="examtab">
    <button class="tablinks" onclick="examslist(event, 'Nationalexams')">آزمون های داخلی</button>
    <button class="tablinks" onclick="examslist(event, 'Internationalexams')">آزمون های خارجی</button>
  </div>

  <div id="tabcontentbackground" class="tabcontent"></div>

  <div id="Nationalexams" class="tabcontent">
    <div class="examlist">
      <button class="subtablinks" onclick="exam(event, 'Exam1')">آزمون شماره 1 </button>
      <button class="subtablinks" onclick="exam(event, 'Exam2')">آزمون شماره 2</button>
      <button class="subtablinks" onclick="exam(event, 'Exam3')">آزمون شماره 3 </button>

    </div>
  </div>


  <div id="Exam1" class="exam">
    <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
      src="https://raw.githack.com/Science2023/3dbiochemistry/main/test.html" style="width: 100%;height: 100%;
      border: none;"></iframe>
  </div>


  <div id="Exam2" class="exam">
    <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
      src="https://raw.githack.com/Science2023/3dbiochemistry/main/test.html" style="width: 100%;height: 100%;
      border: none;"></iframe>
  </div>
  <div id="Exam3" class="exam">
    <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
      src="https://raw.githack.com/Science2023/3dbiochemistry/main/test.html" style="width: 100%;height: 100%;
    border: none;"></iframe>
  </div>





  <div id="Nationalexams" class="tabcontent">

    <div
      style="width: 49%;right:0px; display: flex;position: absolute;font-size: x-small; gap: 5px;border: 1px solid white;top:2px;justify-content: space-between;margin-left: 5px;border-radius: 100px;align-items: center;"
      dir="rtl">
      <div
        style="background: rgba(0,0,0,0.4);padding: 5px;border-radius: 100px;    border-left: 5px solid white;border-right: 5px solid white;width: 50%;text-align: center;">
        وزارت علوم</div>
      <div style="position: relative;width: 50%;justify-content: space-around;display: flex;">
        <div style="padding: 5px;" onclick="Master1()">ارشد </div>
        <div style="padding: 5px;" onclick="PhD1()">دکترا</div>
      </div>
    </div>
    <div
      style="width: 49%;left:0px; display: flex;position: absolute;font-size:  x-small; gap: 5px;;top:2px;justify-content: space-between;border: 1px solid white;border-radius: 100px;align-items: center;"
      dir="rtl">
      <div
        style="background: rgba(0,0,0,0.4);padding: 5px;border-radius: 100px;    border-left: 5px solid white;border-right: 5px solid white;width: 50%;text-align: center;">
        وزارت بهداشت</div>
      <div style="position: relative;width: 50%;justify-content: space-around;display: flex;">
        <div style="padding: 5px;" onclick="Master2(event, 'Master2')"> ارشد</div>
        <div style="padding: 5px;" onclick="PhD2(event, 'PhD2')">دکترا</div>


      </div>
    </div>
    <div class="examlist" id="Master2">
      <button class="sub-subtablinks" onclick="exam(event, 'Dietary')"> مجموعه علوم تغذیه </button>
      <button class="sub-subtablinks" onclick="exam(event, 'Medical1')"> مجموعه علوم آزمایشگاهی 1 </button>
      <button class="sub-subtablinks" onclick="exam(event, 'Medical2')"> مجموعه علوم آزمایشگاهی 2 </button>
    </div>
    <div id="Dietary" style="top:50px" class="exam">
      <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" src="https:www.google.com" style="width: 100%;height: 100%;
    border: none;"></iframe>
    </div>

  </div>


  <div id="Internationalexams" class="tabcontent">
    <p>Tokyo is the capital of Japan.</p>
  </div>




  <div id="list" dir="rtl">
    <div class="listtitr" style="width: 100%;height: fit-content;backdrop-filter: blur(10px);position: absolute;z-index: 1;">
    <p style="text-align: center;position: sticky;top:0px;color:yellow;z-index: 5;margin:10px;padding-top: 10px;padding-bottom: 10px;border:2px solid;border-radius: 5px;">
      فهرست مطالب فصل </p></div>
<div  class="listcontent" style="overflow: scroll;position: absolute;
height: 100%;
top: 0;
margin-top:65px;
backdrop-filter: blur(10px);">
    <div class="tableofcontents">
      <div class="table">
        <a class="maintitrintable"
          style="padding: 10px; color:#00ff15;width: 100%;box-shadow: 0 0 5px #00ff15, 0 0 5px #00ff15, 0 0 5px #00ff15, 0 0 10px #00ff15, 0 0 50px #00ff15;"
          href="#titrone">مقدمه ای بر علم بیوشیمی </a>

        <a class="tableitems one" style=";color:#00ff15;" href="#history">■ تاریخچه </a><br>
        <a class="tableitems one" style=";color:#00ff15;" href="#interdisciplinary">■ بیوشیمی علمی بین رشته ای</a><br>
        <a class="tableitems one" style=";color:#00ff15" href="#livethings">■ ویژگی های موجودات زنده</a>

      </div>
      <div class="table">

        <a class="maintitrintable"
          style="padding: 10px;color:#ff00f7;width: 100%;box-shadow: 0 0 5px #ff00f7, 0 0 5px #ff00f7, 0 0 5px #ff00f7, 0 0 10px #ff00f7, 0 0 50px #ff00f7; "
          href="#titrtwo">مبانی شیمیایی</a>

        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#organic-inorganic">■ انواع مواد (آلی
          و معدنی) </a><br>


        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#orbitals">■ ساختار الکترونی ،
          اوربیتال ها و زوایای پیوندی عناصر مهم بیولوژیک</a><br>

        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#biomolecules">■ بیومولکول ها</a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#isomers">■ ایزومرها </a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#representations">■ انواع نمایش مولکول
          ها </a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#organic">■ نامگذاری ترکیبات آلی
        </a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#molecularweight">■ وزن مولکولی، جرم
          مولکولی و واحدهای آنها </a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#molarity">■ مول ،غلظت و مولاریته
        </a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#solutions">■ محلول ها و رقیق سازی
        </a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#redox">■ واکنش های
          اکسایش-کاهش</a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#equation">■ تعادل و اصل لوشاتلیه
        </a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#acidbase">■ اسیدها و بازها</a><br>
        <a class="tableitems two" style=";color:#ff00f7;font-weight: bold;" href="#suffixes&prefixes">■ پیشوندها و
          پسوندهای مهم </a><br>

      </div>
      <div class="table">
        <a class="maintitrintable"
          style="padding: 10px;color:#00d5ff;width: 100%;box-shadow: 0 0 5px #00d5ff, 0 0 5px #00d5ff, 0 0 5px #00d5ff, 0 0 10px #00d5ff, 0 0 50px #00d5ff;"
          href="#titrthree">مبانی فیزیکی</a>
        <a class="tableitems three" style=";color:#00d5ff;" href="#dynamic">■ موجودات زنده: در حالت ثابت پویا (نه در
          تعادل
          با محیط) </a><br>
        <a class="tableitems three" style=";color:#00d5ff;" href="#matter&energy"> ■ موجودات زنده: تغییر شکل ماده و
          انرژی
          دریافتی از محیط
        </a><br>
        <a class="tableitems three" style=";color:#00d5ff;" href=" #firstrule">■ قانون اول ترمودینامیک(بقای انرژی در طی
          تغییرات شیمیایی و فیزیکی)
        </a><br>
        <a class="tableitems three" style=";color:#00fff6;" href="#secoundrule">■ قانون دوم ترمودینامیک(تمایل فرایندهای
          طبیعی به افزایش انتروپی )</a><br>
        <a class="tableitems three" style=";color:#00fff6;" href="#order">■ ایجاد و حفظ نظم (کاهش انتروپی) نیازمند کار و
          انرژی </a><br>
        <a class="tableitems three" style=";color:#00fff6;" href="#energycoupling">■ ارتباط واکنش ها در بیولوژی با جفت
          شدن
          انرژی واکنش ها</a><br>
        <a class="tableitems three" style=";color:#00fff6;" href="#gibsfreeenergy">■ ثابت تعادل (Keq) وانرژی آزاد
          استاندارد (°ΔG) :
          دو روش سنجش میزان خودبخودی بودن واکنش
          تعیین
          جهت پیشرفت واکنش </a><br>
      
        <a class="tableitems three" style=";color:#00fff6;" href="#enzymes">■ آنزیم ها(کاتالیزورهای زیستی): تسریع انجام
          واکنش های بیوشیمیایی</a><br>
        <a class="tableitems three" style=";color:#00fff6;" href="#metabolism_regulation">■ تنظیم متابولیسم:رسیدن به
          تعادل
          و صرفه جویی</a><br>
      </div>
      <div class="table">
        <a class="maintitrintable"
          style="padding: 10px;color:#ff0000;width: 100%;box-shadow: 0 0 5px #ff0000, 0 0 5px #ff0000, 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 50px #ff0000;"
          href="#titrfour">مبانی ژنتیکی</a>
        <a class="tableitems four" style=";color: #ff0000;" href="#geneticscontinuity">■ تداوم ژنتیک:وظیفه مولکول های
          DNA</a><br>
        <a class="tableitems four" style=";color: #ff0000;" href="#dnasequence">■ توالی خطی DNA: کد کننده پروتئین
          ها</a><br>

      </div>

      <div class="table">
        <a class="maintitrintable"
          style="padding: 10px;color:#ff6831;;width: 100%;box-shadow: 0 0 5px #ff6831, 0 0 5px #ff6831, 0 0 5px #ff6831, 0 0 10px #ff6831, 0 0 50px #ff6831;"
          href="#titrfive">مبانی سلولی</a>
        <a class="tableitems five" style=";color:#ff6831;" href="#cell">■ سلول: واحد ساختاری و عملکردی همه موجودات
          زنده</a><br>
        <a class="tableitems five" style=";color:#ff6831;" href="#celltypes">■ انواع سلول ها از نظر ساختار:باکتری ها،
          آرکی ها و یوکاریوت ها</a><br>

        <a class="tableitems five" style=";color:#ff6831;" href="#energyresource">■ انواع سلول ها از نظر منبع انرژی و
          منبع کربن</a><br>

        <a class="tableitems five" style=";color:#ff6831;" href="#bactervsarchi">■ شباهت ها و تفاوت های باکتری ها و آرکی
          ها</a><br>
        <a class="tableitems five" style=";color:#ff6831;" href="#eucaryotes">■ سلول های یوکاریوتی:دارای اندامک های
          غشایی(امکان جداسازی برای مطالعه)</a><br>
        <a class="tableitems five" style=";color:#ff6831;" href="#cytoplasm">■ سیتوپلاسم:سازماندهی توسط سیتواسکلتون و
          بسیار پویا</a><br>
        <a class="tableitems five" style=";color:#ff6831;" href="#invitro">■مطالعات In vitro(آزمایشگاهی): احتمال چشم
          پوشی
          از برهمکنش های مهم بین مولکولی</a><br>
      </div>
      <div class="table">
        <a class="maintitrintable"
          style="padding: 10px;color:#6bff00;width: 100%;box-shadow: 0 0 5px #6bff00, 0 0 5px #6bff00, 0 0 5px #6bff00, 0 0 10px #6bff00, 0 0 50px #6bff00;"
          href="#titrsix"> مبانی تکاملی و منشأ حیات</a>
        <a class="tableitems six" style=";color:#6bff00;" href="#evolutiontheories">■ نظریه های تکاملی</a><br>

        <a class="tableitems six" style=";color:#6bff00;" href="#firstbiomolecules">■ تکامل شیمیایی:ظهور بیومولکول های
          اولیه</a><br>
        <a class="tableitems six" style=";color:#6bff00;" href="#firstgenes">■ ژن ها و آنزیم های اولیه: احتمالا از جنس
          RNA </a><br>

        <a class="tableitems six" style=";color:#6bff00;" href="#eucaryticcells">■ ظهور سلول های یوکاریوتی</a><br>

        <a class="tableitems six" style=";color:#6bff00;" href="#genomics">■ مطالعه ژنوم(ژنومیکس): اختصاص هر ژن به یک
          فرایند خاص سلولی</a><br>
        <a class="tableitems six" style=";color:#6bff00;" href="#genomicsinmed">■ اهمیت مقایسه ژنومیک در پزشکی</a><br>
      </div>

      <div class="table">
        <a class="maintitrintable"
          style="padding: 10px;color:#ff1f71;;width: 100%;box-shadow: 0 0 5px #ff1f71, 0 0 5px #ff1f71, 0 0 5px #ff1f71, 0 0 10px #ff1f71, 0 0 50px #ff1f71;"
          href="#titrseven">مباحث مهم ریاضی</a>
        <a class="tableitems seven" style=";color:#ff1f71;" href="#equation&graph">■ معادله و نمودار</a><br>

        <a class="tableitems seven" style="color:#ff1f71" href="#fracture">■ کسر و قوانین آن</a><br>

        <a class="tableitems seven" style="color:#ff1f71" href="#exponent">■ توان و قوانین آن </a><br>

        <a class="tableitems seven" style="color:#ff1f71" href="#exponentialnotation">■ نماد علمی</a><br>
        <a class="tableitems seven" style="color:#ff1f71;" href="#logarithm">■ لگاریتم و قوانین آن</a><br>

        <a class="tableitems seven" style="color:#ff1f71;" href="#prefix">■ پیشوندهای مهم ریاضی</a><br>
      </div><br><br>


    </div>
</div>
  </div>

  <div id="chaptermap" dir="rtl">
    <h1 class="chaptermaph1" >خلاصه فصل(روی تیترهای فرعی کلیک کنید)</h1>

    <div class="chaptermapframe" >
      <div class="abstractborder"  style="color: #00ff15;" >

        <a class="maintitrinmap"style=" color:#00ff15;box-shadow: 0 0 5px #00ff15, 0 0 5px #00ff15, 0 0 5px #00ff15, 0 0 10px #00ff15, 0 0 50px #00ff15;">
          مقدمه ای بر علم بیوشیمی </a>
        <div style="width:98% ;justify-content: center;display: flex;flex-wrap: wrap;">
          <div class="tableitemsinmap"  >
            <a class="tableitemsinmaptitr one" style=";color:#00ff15;" >■ تاریخچه </a><br>
            <div class="abstract-imagecontainer"
            style="display: none;">

            <img src="history.png"
              class="zoomable"><br>
          </div>
          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr one" style="color:#00ff15;" >■ بیوشیمی علمی بین رشته
              ای</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="interdiciplinary.png"
                class="zoomable"><br>
            </div>
          </div>
          <div  class="tableitemsinmap">

            <a class="tableitemsinmaptitr one" style=";color:#00ff15" >■ ویژگی های موجودات زنده</a><br>
            <div class="abstract-imagecontainer"style="display: none;"></div>

          </div>
          <div class="zoom-container" id="zoom-container">
            <img src="" alt="magnified" id="zoom-image" class="zoom-image">
          </div>

        </div>
      </div>

    </div>
    <div class="chaptermapframe" >
      <div class="abstractborder"  style="color: #e800ff;" >

        <a class="maintitrinmap"
          style=" color:#e800ff;box-shadow: 0 0 5px #ff00f7, 0 0 5px #ff00f7, 0 0 5px #ff00f7, 0 0 10px #ff00f7, 0 0 50px #ff00f7;">
         مبانی شیمیایی</a>
        <div style="width:98% ;justify-content: center;display: flex;flex-wrap: wrap;">
          <div class="tableitemsinmap"  >
            <a class="tableitemsinmaptitr two" style=";color:#e800ff;" >■ انواع مواد(آلی و معدنی) </a><br>
            <div style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr two" style=";color:#e800ff;" >■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="electronstructure.webp"
                class="zoomable"><br>
            </div>
          </div>
          <div  class="tableitemsinmap">

            <a class="tableitemsinmaptitr two" style=";color:#e800ff" href="#livethings">■ بیومولکول ها</a><br>
            <div class="abstract-imagecontainer"style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr two" style=";color:#e800ff;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr two" style=";color:#e800ff;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr two" style=";color:#e800ff;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div>
          <div class="zoom-container" id="zoom-container">
            <img src="" alt="magnified" id="zoom-image" class="zoom-image">
          </div>

        </div>
      </div>

    </div>
    <div class="chaptermapframe" >
      <div class="abstractborder"  style="color: #1ed2ff;" >

        <a class="maintitrinmap"
          style=" color:#1ed2ff;box-shadow: 0 0 5px #1ed2ff, 0 0 5px #1ed2ff, 0 0 5px #1ed2ff, 0 0 10px #1ed2ff, 0 0 50px #1ed2ff;">
         مبانی فیزیکی</a>
        <div style="width:98% ;justify-content: center;display: flex;flex-wrap: wrap;">
          <div class="tableitemsinmap"  >
            <a class="tableitemsinmaptitr three" style=";color:#1ed2ff;" >■ انواع مواد(آلی و معدنی) </a><br>
            <div style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr three" style=";color:#1ed2ff;" >■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="electronstructure.webp"
                class="zoomable"><br>
            </div>
          </div>
          <div  class="tableitemsinmap">

            <a class="tableitemsinmaptitr three" style=";color:#1ed2ff" href="#livethings">■ بیومولکول ها</a><br>
            <div class="abstract-imagecontainer"style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr three" style=";color:#1ed2ff;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr three" style=";color:#1ed2ff;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr three" style=";color:#1ed2ff;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div>
          <div class="zoom-container" id="zoom-container">
            <img src="" alt="magnified" id="zoom-image" class="zoom-image">
          </div>

        </div>
      </div>

    </div>
    <div class="chaptermapframe" >
      <div class="abstractborder"  style="color: #ff0000;" >

        <a class="maintitrinmap"
          style=" color:#ff0000;box-shadow: 0 0 5px #ff0000, 0 0 5px #ff0000, 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 50px #ff0000;">
         مبانی ژنتیکی</a>
        <div style="width:98% ;justify-content: center;display: flex;flex-wrap: wrap;">
          <div class="tableitemsinmap"  >
            <a class="tableitemsinmaptitr four" style=";color:#ff0000;" >■ انواع مواد(آلی و معدنی) </a><br>
            <div style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr four" style=";color:#ff0000;" >■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="electronstructure.webp"
                class="zoomable"><br>
            </div>
          </div>
          <div  class="tableitemsinmap">

            <a class="tableitemsinmaptitr four" style=";color:#ff0000" href="#livethings">■ بیومولکول ها</a><br>
            <div class="abstract-imagecontainer"style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr four" style=";color:#ff0000;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr four" style=";color:#ff0000;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr four" style=";color:#ff0000;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div>
          <div class="zoom-container" id="zoom-container">
            <img src="" alt="magnified" id="zoom-image" class="zoom-image">
          </div>

        </div>
      </div>

    </div>
    <div class="chaptermapframe" >
      <div class="abstractborder"  style="color: #ff6831;" >

        <a class="maintitrinmap"
          style=" color:#ff6831;box-shadow: 0 0 5px #ff6831, 0 0 5px #ff6831, 0 0 5px #ff6831, 0 0 10px #ff6831, 0 0 50px #ff6831;">
         مبانی سلولی</a>
        <div style="width:98% ;justify-content: center;display: flex;flex-wrap: wrap;">
          <div class="tableitemsinmap"  >
            <a class="tableitemsinmaptitr five" style=";color:#ff6831;" >■ انواع مواد(آلی و معدنی) </a><br>
            <div style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr five" style=";color:#ff6831;" >■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="electronstructure.webp"
                class="zoomable"><br>
            </div>
          </div>
          <div  class="tableitemsinmap">

            <a class="tableitemsinmaptitr five" style=";color:#ff6831" href="#livethings">■ بیومولکول ها</a><br>
            <div class="abstract-imagecontainer"style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr five" style=";color:#ff6831;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr five" style=";color:#ff6831;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr five" style=";color:#ff6831;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div>
          <div class="zoom-container" id="zoom-container">
            <img src="" alt="magnified" id="zoom-image" class="zoom-image">
          </div>

        </div>
      </div>

    </div>
    <div class="chaptermapframe" >
      <div class="abstractborder"  style="color: #6bff00;" >

        <a class="maintitrinmap"
          style=" color:#6bff00;box-shadow: 0 0 5px #6bff00, 0 0 5px #6bff00, 0 0 5px #6bff00, 0 0 10px #6bff00, 0 0 50px #6bff00;">
         مبانی تکاملی</a>
        <div style="width:98% ;justify-content: center;display: flex;flex-wrap: wrap;">
          <div class="tableitemsinmap"  >
            <a class="tableitemsinmaptitr six" style=";color:#6bff00;" >■ انواع مواد(آلی و معدنی) </a><br>
            <div style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr six" style=";color:#6bff00;" >■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="electronstructure.webp"
                class="zoomable"><br>
            </div>
          </div>
          <div  class="tableitemsinmap">

            <a class="tableitemsinmaptitr six" style=";color:#6bff00" href="#livethings">■ بیومولکول ها</a><br>
            <div class="abstract-imagecontainer"style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr six" style=";color:#6bff00;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr six" style=";color:#6bff00;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr six" style=";color:#6bff00;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div>
          <div class="zoom-container" id="zoom-container">
            <img src="" alt="magnified" id="zoom-image" class="zoom-image">
          </div>

        </div>
      </div>

    </div>
    <div class="chaptermapframe" >
      <div class="abstractborder"  style="color: #ff1f71;" >

        <a class="maintitrinmap"
          style=" color:#ff1f71;box-shadow: 0 0 5px #ff1f71, 0 0 5px #ff1f71, 0 0 5px #ff1f71, 0 0 10px #ff1f71, 0 0 50px #ff1f71;">
         مباحث مهم ریاضی</a>
        <div style="width:98% ;justify-content: center;display: flex;flex-wrap: wrap;">
          <div class="tableitemsinmap"  >
            <a class="tableitemsinmaptitr seven" style=";color:#ff1f71;" >■ انواع مواد(آلی و معدنی) </a><br>
            <div style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr seven" style=";color:#ff1f71;" >■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="electronstructure.webp"
                class="zoomable"><br>
            </div>
          </div>
          <div  class="tableitemsinmap">

            <a class="tableitemsinmaptitr seven" style=";color:#ff1f71" href="#livethings">■ بیومولکول ها</a><br>
            <div class="abstract-imagecontainer"style="display: none;"></div>

          </div>
          <div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr seven" style=";color:#ff1f71;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr seven" style=";color:#ff1f71;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div><div  class="tableitemsinmap" >

            <a class="tableitemsinmaptitr seven" style=";color:#ff1f71;" href="#interdisciplinary">■ ساختار الکترونی، اوربیتال ها و زوایای پیوند عناصر مهم بیولوژی</a><br>
            <div class="abstract-imagecontainer"
              style="display: none;">

              <img src="abstract.png"
                class="zoomable"><br>
            </div>
          </div>
          <div class="zoom-container" id="zoom-container">
            <img src="" alt="magnified" id="zoom-image" class="zoom-image">
          </div>

        </div>
      </div>

    </div>
</div>


  <section class="titr zero" id="titr zero" dir="rtl" style="padding-bottom: 22vw;">
    <div class="maintitr" Style="z-index: 1000;color: #fff;
    "> تیترهای فصل در یک نگاه
      <a style="width: 100%;position: absolute;height:100% ;" href="#titrzero"></a>

    </div>
    <div class="border" style="border-radius: 5px;">

      <div class="h1parrent">

        <div class="content" id="content"
          style="padding-bottom: 25px;display: flex;flex-wrap: wrap;justify-content: center; ">

          <div class="table" style="color:#00ff15">
            <a class="maintitrintable"
              style="color:#00ff15; box-shadow: 0 0 5px #00ff15, 0 0 5px #00ff15, 0 0 5px #00ff15, 0 0 10px #00ff15, 0 0 50px #00ff15;"
              href="#titrone">مقدمه ای بر علم بیوشیمی </a><br>
            <a class="maintitrintable"
              style="color:#ff00f7;box-shadow: 0 0 5px #ff00f7, 0 0 5px #ff00f7, 0 0 5px #ff00f7, 0 0 10px #ff00f7, 0 0 50px #ff00f7;"
              href="#titrtwo">مبانی شیمیایی</a><br>
            <a class="maintitrintable"
              style="color:#00d5ff;box-shadow: 0 0 5px #00d5ff, 0 0 5px #00d5ff, 0 0 5px #00d5ff, 0 0 10px #00d5ff, 0 0 50px #00d5ff;"
              href="#titrthree">مبانی فیزیکی</a><br>
            <a class="maintitrintable"
              style="color:#ff0000;box-shadow: 0 0 5px #ff0000, 0 0 5px #ff0000, 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 50px #ff0000;"
              href="#titrfour">مبانی ژنتیکی</a><br>
            <a class="maintitrintable"
              style="color:#ff6831;box-shadow: 0 0 5px #ff6831, 0 0 5px #ff6831, 0 0 5px #ff6831, 0 0 10px #ff6831, 0 0 50px #ff6831;"
              href="#titrfive">مبانی سلولی</a><br>
            <a class="maintitrintable"
              style="color:#6bff00;box-shadow: 0 0 5px #6bff00, 0 0 5px #6bff00, 0 0 5px #6bff00, 0 0 10px #6bff00, 0 0 50px #6bff00;"
              href="#titrsix"> مبانی تکاملی و منشأ حیات</a><br>
            <a class="maintitrintable"
              style="color:#ff1f71;box-shadow: 0 0 5px #ff1f71, 0 0 5px #ff1f71, 0 0 5px #ff1f71, 0 0 10px #ff1f71, 0 0 50px #ff1f71;"
              href="#titrseven">مباحث مهم ریاضی</a><br>

          </div>
        </div>
      </div>
  </section>

  <section class="titr one" id="titrone" dir="rtl">
    <div class="maintitr" Style="z-index: 1000;color: #00ff26;  ;
    "> مقدمه‌ای بر علم بیوشیمی
      <a style="width: 100%;position: absolute;height:100% ;" href="#titrone"></a>

    </div>
    <div class="border" style="border-radius: 5px;">


      <div class="h1parrent">

        <div class="content" id="content" style="background: rgba(0, 0, 0, 0.5);">
          <div Style="width:100%;position: relative;">
            <div id="titr1"
              style="position: relative;width: 95%;height:fit-content;margin: auto;top: 10px;text-align: right;padding: 5px;">

              <a class="tableitems one" style="color:#3aff00;" href="#history">■ تاریخچه </a><br>
              <a class="tableitems one" style="color:#3aff00;" href="#interdisciplinary">■ بیوشیمی علمی بین رشته ای
              </a><br>

              <a class="tableitems one" style="color:#3aff00" href="#livethings">■ ویژگی های موجودات زنده </a><br>
            </div><br>
          </div>
        </div>
      </div>
      <div class="h1parrent" id="history">
        <div class="h1" style="color:rgb(31, 252, 2);"> تاریخچه
          <a style="width: 100%;position: absolute;height:100% ;" href="#history"></a>

        </div>
        <div class="content" id="content">

          <span style="display:inline-block;color:#3aff00">●</span>بیشتر یافته ها در نیم قرن اخیر<br>

          <span style="display:inline-block;color:#3aff00">● فرضیه ویتالیسم: </span> ماده آلی فقط در موجود زنده ساخته می
          شود و
          از قوانین شیمی و فیزیک تبعیت نمی کند<br>
          <span style="display:inline-block;color:#3aff00">● فردریک ولر: </span>سنتز اوره(ماده آلی) از آمونیوم
          سیانات(ماده غیر آلی) ← نتیجه: رد فرضیه ویتالیسم<br>
          <span style="display:inline-block;color:#3aff00">● هانس بوکنر: </span>تخمیر قند به اتانول توسط عصاره مخمر کشته
          شده ← شروع آزمایشات
          In vitro <br>
          <span style="display:inline-block;color:#3aff00">● نکته:</span>in vitro به معنای انجام آزمایش های زیستی خارج
          از بدن موجود زنده و در محیط آزمایشگاهی مثل محیط کشت سلولی و یا لوله آزمایش و in vivo یعنی انجام آزمایش های
          بیولوژیک بر روی موجود زنده<br>
          <span style="display:inline-block;color:#3aff00">● جیمز سومنر: </span>کریستالیزاسیون آنزیم اورئاز ← نتیجه
          گیری: ساختار
          آنزیم ها با قوانین شیمی قابل تحلیل است<br>
          <span style="display:inline-block;color:#3aff00">● رابرت هوک: </span>مشاهده ی سلول زیر میکروسکوپ<br>
          <span style="display:inline-block;color:#3aff00">● والتر فلمینگ: </span>کشف کروموزوم<br>
          <span style="display:inline-block;color:#3aff00">● مندل: </span>معرفی ژن به عنوان واحد اطلاعات ژنتیکی<br>
          <span style="display:inline-block;color:#3aff00">● فردریک میشر: </span>استخراج ماده اسیدی از هسته سلول(نوکلئیک
          اسید)<br>
          <span style="display:inline-block;color:#3aff00">● واتسون و کریک: </span>شناسایی ساختار دابل هلیکس DNA ← در هم
          تنیدن علوم
          بیوشیمی،زیست سلولی و ژنتیک<br>
          <span style="display:inline-block;color:#3aff00">●اختراع ابزارهای دقیق مطالعه سلول:</span>میکروسکوپ
          الکترونی، دستگاه اشعه X ،
          NMR و ...<br>
        </div>
      </div>


      <br>

      <div class="h1parrent" id="interdisciplinary">
        <div class="h1" style="color:rgb(31, 252, 2); "> بیوشیمی علمی بین رشته‌ای
          <a style="width: 100%;position: absolute;height:100% ;" href="#interdisciplinary"></a>

        </div>
        <div class="content" id="content" style="text-align: right;">

          <span style="display:inline-block;color:#3aff00"> اشتراکات بیوشیمی با علوم دیگر:</span><br>
          <span style="display:inline-block;color:#3aff00"> ●شیمی آلی: </span>توضیح ویژگی های بیومولکول ها<br>
          <span style="display:inline-block;color:#3aff00"> ●شیمی فیزیک: </span>ترمودینامیک، ویژگی های آب، ویژگی های
          الکتریکی واکنش های
          اکسایش-کاهش<br>
          <span style="display:inline-block;color:#3aff00"> ●بیوفیزیک: </span>ابزارهای فیزیکی برای مطالعه ساختار و
          عملکرد
          بیومولکول ها<br>
          <span style="display:inline-block;color:#3aff00"> ●علوم پزشکی: </span>درک مولکولی بیماری ها<br>
          <span style="display:inline-block;color:#3aff00"> ●تغذیه: </span>تحلیل متابولیسم با توضیح نیازهای غذایی برای
          سلامت بدن<br>
          <span style="display:inline-block;color:#3aff00"> ●میکروبیولوژی: </span>مطالعه ی ارگانیسم های تک سلولی به
          عنوان
          مدل های ساده برای بررسی مسیرهای متابولیک و مکانیسم های تنظیمی<br>
          <span style="display:inline-block;color:#3aff00"> ●فیزیولوژی:</span>بررسی فرایندهای حیاتی در سطوح بالاتر مثل
          بافت، دستگاه و ارگانیسم<br>
          <span style="display:inline-block;color:#3aff00"> ●زیست سلولی: </span>تشریح تقسیم کار متابولیکی و مکانیکی در
          سلول<br>
          <span style="display:inline-block;color:#3aff00"> ●ژنتیک: </span>توضیح مکانیسم هایی که به سلول ها و ارگانیسم
          های خاص ویژگی های خاص
          بیوشیمیایی می دهد.<br>
          <span style="display:inline-block;color:#3aff00"> انحصارات بیوشیمی:</span><br>
          <span style="display:inline-block;color:#3aff00"> ●</span>تمرکز بر ساختارها و واکنش های بیومولکول ها به خصوص
          آنزیم ها<br>
          <span style="display:inline-block;color:#3aff00"> ●</span>تشریح مسیرهای متابولیکی و کنترل آن ها<br>
          <span style="display:inline-block;color:#3aff00"> ●</span>مطالعه اصول فرایندهای حیاتی قابل درک توسط قوانین
          شیمی
          و فیزیک<br>
        </div>
      </div>


      <div class="h1parrent" id="livethings">
        <div class="h1" style="color:rgb(31, 252, 2);"> ویژگی های موجودات زنده
          <a style="width: 100%;position: absolute;height:100% ;" href="#livethings"></a>

        </div>
        <div class="content" id="content">


          <span style="display:inline-block;color:#3aff00">●</span>پیچیدگی و نظم بسیار بالا<br>
          <span style="display:inline-block;color:#3aff00">●</span>هماهنگی ساختار و عملکرد از سطح مولکولی تا سطح
          اندام<br>
          <span style="display:inline-block;color:#3aff00">●</span>دریافت و تبدیل انرژی به شکل قابل استفاده سلول برای
          حفظ نظم ساختاری<br>
          <span style="display:inline-block;color:#3aff00">●</span>حامل های مخصوص انرژی مثل ATP و NADH<br>
          <span style="display:inline-block;color:#3aff00">● منبع اصلی انرژی:</span> خورشید( خورشید ← فتوسنتزکنندگان ←
          گیاهخواران ←
          گوشتخواران)<br>
          <span style="display:inline-block;color:#3aff00">●</span> مصرف انرژی برای حفظ نظم و فعالیت درونی (حالت ثابت
          پویا) و عدم تعادل با محیط (اگر به تعادل برسد نظم درونی خود را از دست می دهد) <br>
          <span style="display:inline-block;color:#3aff00">●نکته:</span>حالت ثابت پویا یعنی اینکه مثلا عمر گلبول های
          قرمز ما به صورت میانگین 120 روز است و گلبول های قرمز دائما در حال تولید و مرگ هستند این یعنی پویایی .اما تعداد
          آن ها در بدن تقریبا ثابت است<br>
          <span style="display:inline-block;color:#3aff00">●</span>خودهمانندسازی با دقت بالا اما گاهی دارای خطا
          (جهش)<br>
          <span style="display:inline-block;color:#3aff00">● نکته: </span> جهش پیش نیاز انتخاب طبیعی است یعنی جهش باعث
          ایجاد تنوع در صفات
          جانداران
          می شود و افرادی که صفات سازگارتر با محیط دارند امکان بقای بیشتری پیدا میکنند و ژن آنها به نسل بعد منتقل می
          شود(انتخاب
          طبیعی) یعنی طبیعت آنها را برای بقا انتخاب میکند.درواقع اگر جهش نبود صفت جدیدی به وجود نمی آمد و در نتیجه اگر
          شرایط محیطی تغییر می‌کرد، امکان داشت گونه‌ها از بین بروند چون صفت سازگاری برای تطابق با شرایط جدید وجود
          نداشت<br>
          <span style="display:inline-block;color:#3aff00">● سطوح مختلف حیات:</span>

          <div class="content" id="content" style="margin-top: 15px;">

            <div class="image-container" id="imagecontainer">
              <img src="life level.webp" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="life level.webp" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">

          </div>
          <span style="display:inline-block;color:#3aff00">● جمعیت:</span> مجموع افراد یک گونه که در یک محیط زندگی
          میکنند و قادر به تولید مثل با یکدیگرند<br>
          <span style="display:inline-block;color:#3aff00">● اجتماع:</span> مجموع چند جمعیت از گونه های مختلف که در یک
          محیط زندگی میکنند و از نظر تغذیه و ... بر یکدیگر اثر دارند<br>
          <span style="display:inline-block;color:#3aff00">● اکوسیستم:</span> مجموعه‌ای از موجودات زنده (گیاهان،
          جانوران، میکروارگانیسم‌ها) و عوامل غیر زنده (مانند هوا، خاک، آب و نور خورشید) گفته می‌شود که در یک محیط خاص با
          یکدیگر تعامل دارند و شامل تولید کنندگان،مصرف کنندگان ، تجزیه کنندگان و عوامل غیر زنده مانند آب و خاک و هوا
          هستند<br>
          <span style="display:inline-block;color:#3aff00">● بیوم:</span>مجموعه ای از اکوسیستم های مشابه با شرایط
          اقلیمی، گیاهان، و جانوران خاص که به دو دسته کلی بیوم های خشکی(مثل بیوم جنگل های بارانی گرمسیری و بیوم
          بیابانی) و آبی(مثل بیوم آب های شیرین و بیوم آب های شور) تقسیم می شوند<br>
          <span style="display:inline-block;color:#3aff00">● بیوسفر یا زیست کُره ( Bio یعنی حیات و sphere یعنی
            کُره):</span>
          بخشی از زمین که شامل
          تمام موجودات زنده است و محیط‌هایی را که این موجودات در آن زندگی و با یکدیگر تعامل می‌کنند، در بر می‌گیرد. این
          بخش شامل قسمت‌هایی از جو، اقیانوس‌ها، و سطح زمین می‌شود که برای پشتیبانی از زندگی مناسب هستند. بیوسفر، محیطی
          پیچیده و پویا از موجودات زنده و غیر زنده است که در آن فرآیندهایی مانند گردش مواد و انرژی به‌طور مداوم صورت
          می‌گیرد و به حفظ حیات کمک می‌کند.

          بیوسفر تنها یک قسمت محدود از سیاره زمین را در بر می‌گیرد، اما شامل انواع مختلفی از اکوسیستم‌ها، مانند جنگل‌ها،
          دریاها، بیابان‌ها و ... است که همه این اکوسیستم‌ها به شکل شبکه‌ای به هم متصل هستند.<br>
        </div>
      </div>
    </div>


  </section>

  <section class=" titr two" id="titrtwo" style="box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );" dir="rtl">
    <div class="maintitr" id="maintitr" style="z-index: 1000;color:#ff00f7; "> مبانی شیمیایی
      <a style="width: 100%;position: absolute;height:100% ;" href="#titrtwo"></a>
    </div>

    <div class="border" style="border-radius: 5px;">
      <div class="h1parrent">

        <div class="content" id="content" style="background: rgba(0, 0, 0, 0.5);">
          <div Style="width:100%;position: relative;">
            <div id="titr2"
              style="font-weight: bold;position: relative;width: 95%;height:fit-content;margin: auto;top: 10px;text-align: right;padding: 5px;">

              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#organic-inorganic">■ انواع مواد
                (آلی
                و معدنی) </a><br>

              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#orbitals">■ ساختار الکترونی ،
                اوربیتال ها و زوایای پیوندی عناصر مهم بیولوژیک</a><br>

              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#biomolecules">■ بیومولکول
                ها</a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#isomers">■ ایزومرها </a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#representations">■ انواع نمایش
                مولکول ها </a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#organic">■ نامگذاری ترکیبات آلی
              </a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#molecularweight">■ وزن مولکولی،
                جرم
                مولکولی و واحدهای آنها </a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#molarity">■ مول ،غلظت و مولاریته
              </a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#solutions">■ محلول ها و رقیق
                سازی
              </a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#redox">■ واکنش های اکسایش-کاهش
              </a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#equation">■ تعادل و اصل لوشاتلیه
              </a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#acidbase">■ اسیدها و
                بازها</a><br>
              <a class="tableitems two" style="color:#ff00f7;font-weight: bold;" href="#suffixes&prefixes">■ پیشوندها و
                پسوندهای مهم </a><br>
            </div><br>
          </div>
        </div>
      </div>
      <div class="h1parrent" id="organic-inorganic">
        <div class="h1" id="h1" style="color:#ff00f7"> انواع مواد (آلی و معدنی)
          <a style="width: 100%;position: absolute;height:100% ;" href="#organic-inorganic"></a>
        </div>
        <div class="content" id="content">
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● ماده آلی یا ارگانیک(organic) : </span>

          به مواد کربن داری که معمولا دارای پیوند کربن به هیدروژن(C-H) هستند ماده آلی گفته می شود
          <br>

          <br>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">●</span>
          واژه "ارگانیک" یعنی مرتبط با ارگان های بدن موجود زنده ← چون تصور میکردند این مواد فقط در بدن موجود زنده ساخته
          می شود ، اما معنای آن در حوزه‌های مختلف علمی و صنعتی متفاوت شده است ← در شیمی: ترکیبات کربن دار اغلب دارای
          پیوند کربن - هیدروژن
          <br>
          <div class="content" id="content" style="margin-top: 15px;">

            <div class="image-container" id="imagecontainer">
              <img src="organic.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="organic.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">

          </div>

          <p style="width: 100%;color:#ff00f7;border-bottom: 1px solid;">مواد آروماتیک و پدیده رزونانس</p>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● نکته بسیار مهم:</span>حلقه های آروماتیک
          (چه نوع هیدروکربنی و چه هتروسیکلیک) هم به عنوان ترکیب مستقل وجود دارند و هم می توانند در ساختار مولکول های
          دیگر
          به عنوان گروه عاملی مشارکت داشته باشند. مثل بنزن که یک ترکیب مستقل است وبه شکل حلقه ی فنیل در آمینواسیدهای
          فنیل آلانین و تیروزین وجود دارد<br>

          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="benzen.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <div class="content" id="content" style="margin-top: 15px;">

            <img src="benzen.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="soundplayer" data-src="resonance.m4a" dir="ltr" style="display: grid;">
            <div
              style=" text-align: center; top: -10px;position: relative;align-items: center; height: 15px;font-size: x-small;">
              انواع مواد و پدیده رزونانس در مواد آروماتیک </div>
            <div style="display: flex;">
              <div class="play-pause-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                  <path class="play-pause-icon" d="M18 12L0 24V0" />
                </svg>
              </div>
              <div class="speed-btn">1X</div>
              <div class="controls">
                <span class="current-time time">0:00</span>
                <div class="lessonslider">
                  <div class="progress"></div>
                </div>
                <span class="total-time time">0:00</span>
              </div>
              <audio></audio>
            </div>
          </div>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● بیومولکول ها یا مولکول های
            زیستی:</span>
          دسته ای از مواد آلی هستند که در موجودات زنده یافت می شوند و نقش حیاتی در
          فرایندهای زیستی دارند.
          <br>
          <div class="content" id="content" style="margin-top: 15px;">

            <div class="image-container" id="imagecontainer">
              <img src="biomolecules.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="biomolecules.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">

          </div>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● نکته بسیار مهم:</span>
          همه بیومولکول ها جزء مواد آلی هستند اما همه مواد آلی بیومولکول نیستند (مثل پلاستیک ها و سوخت
          های فسیلی)

          <br>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● ماده معدنی:</span>
          ماده ای که آلی نباشه بهش میگیم معدنی.البته تو انگلیسی بهش میگن
          "inorganic"یا غیر آلی یعنی اسمشو از همون
          "organic" گرفتن
          ما با کلاسیم کلمه جدا براش در نظر گرفتیم 😂
          <br>
          ی جوک یادم افتاد:
          به یکی میگن تو زبان شما به گوساله چی میگن؟ میگه ما کلمه ای براش نداریم
          میپرسن پس چکار میکنید؟ میگه هیچی وایمیسیم بزرگ بشه بهش بگیم گاو 😂😂😂😂
          <br>

        </div>
      </div>



      <div class="h1parrent" id="orbitals">
        <div class="h1" style="color:#ff00f7"> ساختار الکترونی ، اوربیتال ها و زوایای پیوندی عناصر مهم بیولوژیک
          <a style="width: 100%;position: absolute;height:100% ;" href="#orbitals"></a>
        </div>


        <div class="content" id="content">
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● الکترون های لایه ظرفیت(یا
            والانس):</span>
          بیرونی ترین لایه الکترونی عناصر که در پیوندهای شیمیایی مشارکت میکنند . به
          همین دلیل اشتراک این الکترون ها پیوند کووالانسی نام دارد(کو:پیشوند به معنای مشترک)<br>

          <div class="soundplayer" data-src="valence.m4a" dir="ltr" style="display: grid;">
            <div
              style=" text-align: center; top: -10px;position: relative;align-items: center; height: 15px;font-size: x-small;">
              لایه الکترونی ظرفیت </div>
            <div style="display: flex;">
              <div class="play-pause-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                  <path class="play-pause-icon" d="M18 12L0 24V0" />
                </svg>
              </div>
              <div class="speed-btn">1X</div>
              <div class="controls">
                <span class="current-time time">0:00</span>
                <div class="lessonslider">
                  <div class="progress"></div>
                </div>
                <span class="total-time time">0:00</span>
              </div>
              <audio></audio>
            </div>
          </div>

          <div class="soundplayer" data-src="octet rule.m4a" dir="ltr" style="display: grid;">
            <div
              style="text-align: center; top: -10px; position: relative; align-items: center; height: 15px; font-size: x-small;">
              قانون اوکتت(هشت تایی شدن)
            </div>
            <div class="soundcontrol" style="display: flex;">
              <div class="play-pause-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                  <path class="play-pause-icon" d="M18 12L0 24V0" />
                </svg>
              </div>

              <div class="speed-btn">1X</div>

              <div class="controls">
                <span class="current-time time">0:00</span>
                <div class="lessonslider">
                  <div class="progress"></div>
                </div>
                <span class="total-time time">0:00</span>
              </div>
              <audio src="octet rule.m4a"></audio>
            </div>
          </div>


          <div class="content" id="content" style="margin-top: 15px;">

            <div class="image-container" id="imagecontainer">
              <img src="Carbon.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="Carbon.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">

          </div>

          <div class="soundplayer" data-src="carbon octete.m4a" dir="ltr" style="display: grid;">
            <div
              style=" text-align: center; top: -10px;position: relative;align-items: center; height: 15px;font-size: x-small;">
              توضیح جدول کربن</div>
            <div style="display: flex;">
              <div class="play-pause-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                  <path class="play-pause-icon" d="M18 12L0 24V0" />
                </svg>
              </div>
              <div class="controls">
                <span class="current-time time">0:00</span>
                <div class="lessonslider">
                  <div class="progress"></div>
                </div>
                <span class="total-time time">0:00</span>
              </div>
              <audio></audio>
            </div>
          </div>
          <div class="content" id="content" style="margin-top: 15px;">

            <div class="image-container" id="imagecontainer">
              <img src="nitrogen.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="nitrogen.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">

          </div>
          <div class="soundplayer" data-src="nitrogen octete.m4a" dir="ltr" style="display: grid;">
            <div
              style=" text-align: center; top: -10px;position: relative;align-items: center; height: 15px;font-size: x-small;">
              توضیح جدول نیتروژن</div>
            <div style="display: flex;">
              <div class="play-pause-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                  <path class="play-pause-icon" d="M18 12L0 24V0" />
                </svg>
              </div>
              <div class="controls">
                <span class="current-time time">0:00</span>
                <div class="lessonslider">
                  <div class="progress"></div>
                </div>
                <span class="total-time time">0:00</span>
              </div>
              <audio></audio>
            </div>
          </div>

          <div class="content" id="content" style="margin-top: 15px;">

            <div class="image-container" id="imagecontainer">
              <img src="Oxygen.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="Oxygen.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:5px;right:12px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">


          </div>

          <div class="soundplayer" data-src="Oxygen.m4a" dir="ltr" style="display: grid;">
            <div
              style=" text-align: center; top: -10px;position: relative;align-items: center; height: 15px;font-size: x-small;">
              توضیح جدول نیتروژن</div>
            <div style="display: flex;">
              <div class="play-pause-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                  <path class="play-pause-icon" d="M18 12L0 24V0" />
                </svg>
              </div>
              <div class="controls">
                <span class="current-time time">0:00</span>
                <div class="lessonslider">
                  <div class="progress"></div>
                </div>
                <span class="total-time time">0:00</span>
              </div>
              <audio></audio>
            </div>
          </div>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● اوربیتال:</span>

          به معنای مدار است که از مدل های قدیمی اتمی مثل مدل بور گرفته شده و تصور میکردند الکترون در
          مسیر مشخصی دور هسته میچرخه اما زهی خیال باطل...مدل جدید مکانیک کوانتومی طبق معادله موجی داداشمون شرودینگر
          میگه ما فقط میتونیم احتمال حضور
          الکترون در یک نقطه رو مشخص کنیم و بخشی از فضای اطراف هسته اتم که احتمال حضور
          الکترون توش خیلی بالاست میگن اوربیتال که به مجموع اوربیتال های یک اتم ابر الکترونی گفته میشه.این کلمه ابر
          یعنی
          الکترون میتونه هرجایی از این
          ابر باشه در هر لحظه و در واقع احتمال حضور الکترون توی کل نقاط تشکیل دهنده ابر توزیع شده مثل اینکه ی نفر به
          صورت رندوم هر روز یا میره رستوران یا پارک یا باشگاه پس احتمال حضورش تو هر کدوم هست چون رندومه و نمیتونیم
          با
          قطعیت بگیم هر روز کجاست اما میدونیم احتمال داره تو هر کدوم از این سه تا باشه پس مکان و مسیر دقیق الکترون
          مشخص نیست ولی میدونیم
          احتمال حضورش تو قسمتی از فضای اطراف هسته خیلی بالاست که بهش میگن اوربیتال . با حل معادله شرودینگر عددهایی
          بدست
          میاد که سطح انرژی و اندازه اوربیتال، شکل اوربیتال و جهت گیری فضایی اوربیتال هارو مشخص میکنه .
          <br>
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="orbitalsp.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● زیر لایه S:</span>

          یک اوربیتال کروی<br>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● زیر لایه p:</span>

          سه اوربیتال دمبلی انگار سه تا دمبل بر هم عمود هستن و به نقاط وسط دمبل ها که احتمال حضور
          الکترون
          در اونجا صفره میگن گره و احتمال حضور الکترون در سر دمبل ها بالاتر است<br>
          نکته:هرچقد فاصله از هسته بیشتر میشه انرژی الکترون ها بیشتر و اوربیتال ها بزرگتر میشه(شکل زیر)<br>
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="orbitalsize.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● نکته:</span>
          دقت کنید اطراف هسته شکل کروی و یا دمبلی وجود ندارد و این اشکال فقط نشان دهنده
          مکان هایی هستن که احتمال حضور الکترون در اونها بالاست و مجموعه این نقاط این شکل هارو پدید میارن.به شکل های
          زیر
          دقت کنید<br>

          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="sorbitaldot.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <span style="display:inline-block; color:#e100ff;font-weight: bold;">● نکته:</span>

          دقت کنید این نقطه ها الکترون نیستند بلکه نقاطی هستند که احتمال حضور الکترون در آنجا بالا است یعنی
          هرچقد تراکم نقاط در مکانی بیشتر باشد احتمال حضور الکترون بیشتر است و مجموع این نقاط شکل های اوربیتال
          ها(کروی، دمبلی و...)را پدید می آورد
          <br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">● اوربیتال های هیبریدی یا مولکولی
            :</span>
          حالا وقتی یک اتم میخواد با یک اتم دیگه پیوند بده اوربیتال های لایه آخر جوری تغییر
          میکنه که محکم ترین پیوند تشکیل بشه و الکترون ها همدیگرو دفع نکنن. یعنی الکترون های هر اتم اول فقط دور یک
          هسته
          حضور داشتن حالا دور دو تا هسته همزمان
          حضور دارن که باعث میشه مثل یک طناب که دور دو تا چیز میپیچی الکترون هم هسته دو اتم رو کنار هم نگه داره و
          پیوند
          تشکیل بشه .حالا
          به این اوربیتال های جدید که حاصل مخلوط شدن یا هیبرید
          شدن چند تا اوربیتاله میگن اوربیتال هیبریدی
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="hybrid types.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>

          <br>
          <div class="soundplayer" data-src="1.m4a" dir="ltr">
            <div class="play-pause-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                <path class="play-pause-icon" d="M18 12L0 24V0" />
              </svg>
            </div>
            <div class="controls">
              <span class="current-time time">0:00</span>
              <div class="lessonslider">
                <div class="progress"></div>
              </div>
              <span class="total-time time">0:00</span>
            </div>
            <audio></audio>
          </div>

          <span
            style="color:#e100ff;font-weight: bold;display: flex; border-bottom: 1px solid; text-align: center;justify-content: center;">
            انواع هم پوشانی اوربیتال ها در پیوندها</span>

          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="sigmapibond.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>

          </div><br>
          <span
            style="color:#e100ff;font-weight: bold;display: flex; border-bottom: 1px solid; text-align: center;justify-content: center;">
            انواع هندسه های مولکولی و زوایای پیوندی عناصر کربن، نیتروژن و اکسیژن
          </span>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">● نکته:</span>
          در اشکال سه بعدی زیر فقط اتم مورد نظر به صورت رنگی نشان داده شده و بقیه اتم ها به صورت سفید نمایش داده
          شده
          <br><br><br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">●هیبریداسیون sp<sup>3</sup>:</span> همه
          پیوندها یگانه
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="sp3.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div> <br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">● هیبریداسیون sp<sup>2</sup>: </span>
          یک پیوند دوگانه و بقیه پیوندها یگانه

          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="sp2.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div> <br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">● هیبریداسیون sp<sup></sup>: </span>
          دو پیوند دوگانه(فقط در کربن وجود دارد)

          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="sp.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <span
            style="color:#e100ff;font-weight: bold;display: flex; border-bottom: 1px solid; text-align: center;justify-content: center;">
            مهم ترین اوربیتال های هیبریدی در بیوشیمی</span>



          <span style="display:inline-block;color:#e100ff;font-weight: bold;"> ۱-اوربیتال های هیبریدی sp<sup>3</sup>
          </span>
          در کربن با آرایش چهاروجهی که مشخص کننده شکل سه بعدی بیومولکول هایی مثل
          قندهاست

          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
              data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/methane.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
              </image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
              </image>

            </div>
          </div>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">●</span>

          در پیوند یگانه کربن-کربن: هر کربن یک ساختار چهار
          وجهی (مثل اتان)
          <br>


          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
              data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/ethane.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
              </image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
              </image>

            </div> <br>
          </div>
          <span style="display:inline-block;color:#e100ff;font-weight: bold">● نکته:</span>در مولکول های آلی مثل گلوکز
          هر کربن با چهار
          پیوند
          یگانه
          دارای ساختار چهار وجهی است <br>
          <br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">● مولکول
            گلوکز:</span>دقت کنید
          .هر اتم کربن(آبی) دارای ساختار چهار وجهی با چهار اتم متصل به آن است و به همین دلیل کونفورماسیون های قایق و
          صندلی در گلوکز شکل میگیرد</p><br>

          <div class="wrap" id="wrap" style="position: relative;">

            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
              data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/Glucose-chair.html">
            </iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
              </image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
              </image>

            </div>
          </div>
          <style>
            @media all and (orientation: portrait) {
              #glucose {
                height: fit-content
              }
            }
          </style><br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;"> ۲-اوربیتال های sp<sup>2</sup> </span>
          با آرایش سه ضلعی مسطح که اگر دو اتم با این ارایش به هم متصل شوند(با پیوند
          دوگانه مثل اتان و یا با پیوند رزونانسی مثل پیوند پپتیدی) انگار دو مثلث از روبرو به هم میچسبند و تشکیل ساختار
          صفحه ای می دهند یعنی اتم ها در یک سطح قرار می گیرند<br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold">● دو نوع مهم هیبریداسیون sp<sup>2</sup>
            در بیوشیمی:</span>
          <br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold"> الف )</span>

          پیوند پپتیدی کربن-نیتروژن به علت خاصیت رزونانسی تشکیل صفحات پپتیدی می دهد که باعث محدودیت چرخش پیوند
          پپتیدی و پایداری آن می شود که در تعیین ساختار سه بعدی پروتئین ها نقش دارد <br>
          نکته:در هنگام برقراری پیوند پپتیدی ساختار sp<sup>3</sup> نیتروژن(هرم با قاعده سه ضلعی) با تبدیل جفت الکترون
          غیر پیوندی به یک پیوند
          پای با خاصیت رزونانسی استثنائا به ساختار sp<sup>2</sup> با ارایش سه ضلعی مسطح (شبیه آرایش کربن با یک پیوند
          دوگانه)تبدیل
          می شود و با اتصال به کربن با ساختار sp<sup>2</sup> تشکیل صفحه پپتیدی
          می دهد<br>
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="peptidebond.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
              </image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
              </image>

            </div>
          </div>
          <span style="display:inline-block;color:#e100ff;font-weight: bold"> ب ) </span>

          پیوند دوگانه کربن-کربن (مثل اتِن و اسیدهای چرب غیر اشباع) تشکیل یک صفحه می دهد (عامل ایجاد دو ایزومر سیس و
          ترانس)
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="doublebond.html">
            </iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
              </image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
              </image>

            </div>
          </div>

          <span style="display:inline-block;color:#e100ff;font-weight: bold;">● نکته بسیار مهم:</span>اتم های متصل با
          پیوند یگانه میتوانند
          حول پیوند یگانه بچرخند اما
          در پیوند دوگانه اتم ها محدودیت چرخش دارند ← استثنا: وجود گروه‌های بسیار بزرگ یا باردار روی دو اتم متصل با
          پیوند یگانه ←
          محدودیت چرخش <br>
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" width="640" height="480" id="iframe" frameborder="0" allow="autoplay;"
              data-src="https://sketchfab.com/models/c9c477288c12452d9f479bac7f784a05/embed"> </iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
              </image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
              </image>

            </div>

          </div>
        </div>
      </div>
      <div class="h1parrent" id="biomolecules">
        <div class="h1" id="h1" style="color:#ff00f7"> بیومولکول ها
          <a style="width: 100%;position: absolute;height:100% ;" href="#biomolecules"></a>
        </div>

        <div class="h2parrent" id="functionalgroups">
          <div class="h2" style="z-index: 400;color:#ff00f7"> عناصر موجود در بیومولکول ها
            <a style="width: 100%;position: absolute;height:100% ;" href="#elements"></a>

          </div>

          <div class="content" id="content">
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">●نکته:</span>
            کربن، هیدروژن،اکسیژن، نیتروژن، فسفر، کلسیم و گوگرد تشکیل دهنده حدود 90 درصد وزن خشک بدن انسان(یعنی بدون در
            نظر
            گرفتن آب) و 70 درصد وزن اکثر موجودات زنده از آب تشکیل شده<br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● هیدروکربن ها:</span> کربن +
            هیدروژن<br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● کربوهیدرات ها:</span> کربن+ هیدروژن +
            اکسیژن<br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● لیپیدها:</span> کربن+هیدروژن + اکسیژن
            در برخی فسفر(مثل فسفولیپیدها) + در برخی نیتروژن <br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● نوکلئیک اسیدها:</span> کربن + هیدروژن
            + اکسیژن +
            نیتروژن(در
            بازهای آلی) + فسفر (در گروه فسفات)<br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● پروتئین ها:</span> کربن + هیدروژن +
            اکسیژن + در برخی
            سولفور یا
            همان (در آمینواسیدهای متیونین و سیستئین ) + در
            برخی سلنیم (در آمینواسید سلنوسیستئین)<br>

            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● دو نکته مهم:</span><br>

            ۱- عناصر فلزی دیگری در برخی پروتئین ها یافت می شوند که جزء ساختار اصلی پروتئین نیستند اما برای
            عملکرد پروتئین ضروری هستند و بعد از سنتز پروتئین با فرایندهای مختلفی به آن ها افزوده می شوند.مثل آهن، مس،
            روی،منیزیم،منگنز،کبالت،
            نیکل، مولیبدن و وانادیم
            <br>
            ۲- فلزات دیگری نیز در برخی قسمت های خاص به صورت یون آزاد یافت می شوند. مثل کلسیم در استخوان،سدیم و پتاسیم
            در سلول و مایع بین سلولی و...
            <br>
            نیازی به حفظ کردن این عناصر نیست فقط برای داشتن یک دید کلی از عناصر به کار رفته در بیومولکول ها براتون آوردم


            <span style="display:inline-block; color:#e100ff;font-weight: bold">● کربن: </span>مهمترین عنصر موجودات زنده
            شامل بیش از نصف وزن
            خشک سلول‌ها ،
            توانایی
            تشکیل پیوندهای یگانه (با اتم های مختلف مثل هیدروژن و یا کربن دیگر)، دوگانه (با اکسیژن و نیتروژن) و سه گانه
            (با
            یک کربن دیگر) ، تشکیل زنجیره‌های خطی ، زنجیره‌های منشعب و ساختارهای حلقوی ، تنوع پیوندی با خود و دیگر
            عناصر ← دلیل اصلی انتخاب ترکیبات کربن به عنوان ماشین سلولی (عدم توانایی عناصر دیگر برای تشکیل مولکول‌های
            متنوع
            از نظر حجم ، شکل و ترکیب مثل کربن) ، بیشتر بیومولکول‌ها مشتقات هیدروکربن‌ها (جایگزینی اتم‌های هیدروژن با
            گروه‌های عاملی دارای خواص شیمیایی: ایجاد خانواده‌های مختلف ترکیبات ارگانیک) ← مثال
            <span style="display:inline-block;color:#e100ff;font-weight: bold">الکل ها: </span>
            دارای یک یا چند گروه هیدروکسیل ،
            <span style="display:inline-block;color:#e100ff;font-weight: bold">آمین ها: </span>
            دارای گروه های آمینی ،
            <span style="display:inline-block;color:#e100ff;font-weight: bold"> آلدهیدها و
              کتون‌ها: </span>دارای گروه‌های کربونیل ،
            <span style="display:inline-block;color:#e100ff;font-weight: bold"> کربوکسیلیک اسیدها: </span>
            دارای گروه‌های کربوکسیل <br><span style="display:inline-block;color:#e100ff;font-weight: bold">● نکته:
            </span>بسیاری بیومولکول‌ها دارای دو یا چند گروه عاملی ← ویژگی های شیمیایی هر ترکیب وابسته به ویژگی‌های
            شیمیایی
            گروه‌های عاملی و موقعیت فضایی آنها
          </div>
        </div>
        <div class="h2parrent" id="functionalgroups">
          <div class="h2" style="z-index: 400;color:#ff00f7"> گروه های عاملی
            <a style="width: 100%;position: absolute;height:100% ;" href="#functionalgroups"></a>

          </div>

          <div class="content" id="content">

            <div
              style="width:98%;position: relative;display:flex;flex-wrap: wrap;margin:auto;justify-content:center;text-align: right;border:1px solid rgb(255,255,255,0.2);  border-radius: 5px;align-items: center;">

              <div
                style="display: grid;text-align: center;width: 260px;border-radius: 5px;border: 1px solid rgb(255,255,255,0.5);height:120px;margin: 2px;">
                <img loading="lazy" style="margin:auto;width:130px ;height:fit-content;float: left;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/hydroxyl.png">

                <div class="description">
                  هیدروکسیل(گروه الکلی): هیدروژن + اکسیژن (نامگذاری با افزودن پسوند -ول)
                </div>
              </div>
              <br>
              <div
                style="display: grid;text-align: center;width: 260px;border-radius: 5px;border: 1px solid rgb(255,255,255,0.5);height:120px;margin: 2px;">

                <img loading="lazy" style="margin:auto;width:130px ;height:fit-content;float: left;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/Enol.png">

                <div class="description">
                  انول: اِن(پسوند آلکِن ها) + -ول(پسوند الکل ها)
                </div>
              </div>

              <br>
              <div
                style="display: grid;text-align: center;width: 260px;border-radius: 5px;border: 1px solid rgb(255,255,255,0.5);height:120px;margin: 2px;">

                <img loading="lazy" style="margin:auto;width:130px ;height:50px;float: left;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/sulfhydryl.png">

                <div class="description">سولفیدریل:<br>سولفور(گوگرد)+هیدروژن</div>
              </div>
              <br>
              <div
                style="display: grid;text-align: center;width: 260px;border-radius: 5px;border: 1px solid rgb(255,255,255,0.5);height:120px;margin: 2px;">

                <img loading="lazy" style="margin:auto;width:130px ;height:50px;float: left;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/disulfid.png">

                <div class="description">
                  دی سولفید:اتصال دو اتم گوگرد از دو مولکول یا از قسمت های مختلف یک مولکول مانند پروتئین ها</div>
              </div>

            </div>
            <br>

            <div
              style="width:98%;position: relative;display:flex;flex-wrap: wrap;margin:auto;justify-content:  center;text-align: center; border-radius: 5px;align-items: center;">

              <div
                style="width:260px;height:260px;align-items: center;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">

                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:50px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/ether.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">اتِر </div>
                </div>
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto;height: 60px;font-size: 10px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/ether2.png">
                  شبیه یک ظرف "عطر" گرد با دو تا دسته
                </div>
              </div>

              <br>
              <div
                style="width:260px;height:260px;align-items: center;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">

                <div style="display: grid;margin: 10px;">
                  <img loading="lazy" style="margin:auto ;height:80px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/carbonyl.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">کربونیل </div>
                </div>
                <div style="width:fit-content;display: grid;justify-content: center;text-align: center;margin: 10px;">
                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/carbonyll.png">
                  "کربن" کنار رود "نیل" آفتاب میگیره
                </div>
              </div>
              <br>


              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:77px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/aldehyde.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">الدهید </div>
                </div>
                <div
                  style="width:fit-content;display: grid;justify-content: center;text-align: right;margin: 5px;font-size: 9px;">

                  <img loading="lazy" style="width:100px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/aldehyde2.png">
                  کربن کنار رود نیل (کربونیل)از هیدروژن میپرسه شما "اهل دهید"(الدهید)"!؟
                </div>
              </div>

              <br>
              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:100px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/ketone.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">کِتون </div>
                </div>
                <div
                  style="width:fit-content;display: grid;justify-content: center;text-align: right;margin: 5px;font-size: 8px;">

                  <img loading="lazy" style="width:110px;margin: auto;border-radius: 5px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/ketone2.png">
                  کربن کنار رود نیل دستکش "کتونی" پوشیده و با دوتا رفیقش (R) عکس گرفته
                </div>
              </div>
              <br>


              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: end;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:80px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/carboxyl.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">کربوکسیل </div>
                </div>
                <div
                  style="width:fit-content;display: grid;justify-content: center;text-align: right;margin: 5px;font-size: 8px;">

                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/carboxyl2.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';"> "کربن" کنار رود نیل با زوج
                    "هیدروکسیل" آشنا میشه </div>


                </div>
              </div>

              <br>

              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:80px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/carboxylate.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">کربوکسیلات </div>
                </div>
                <div
                  style="width:fit-content;display: grid;justify-content: end;text-align: right;margin: 5px;font-size: 10px;">

                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/carboxylate2.png"><br>
                  "کربن" زوج "هیدروکسیل" رو با "لات" بازی از هم جدا میکنه
                </div>
              </div>
              <br>
              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">

                <div style="display: grid;margin: 10px;">
                  <img loading="lazy" style="margin:auto ;height:60px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/ester.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">استر </div>
                </div>
                <div style="width:fit-content;display: grid;justify-content: center;text-align: right;margin: 10px;">
                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/ester2.png">
                  کربن و اکسیژن با هم رفتن کنار رود نیل "استراحت" کنن
                </div>
              </div>
              <br>

              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:60px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/anhydride.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">انیدرید </div>
                </div>
                <div
                  style="width:fit-content;display: grid;justify-content: center;text-align: center;font-size: 10px;">

                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/anhydride2.png">
                  دو تا کربن نیاز به مطالعه دارن (need read) اکسیژن رو بردن کنار نیل بهشون درس بده
                </div>
              </div>

              <br>

              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:80px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/acetyl.png">
                  <div class="description" style="font-size: small;font-family: 'Yekan';">اسِتیل </div>
                </div>
                <div style="width:fit-content;display: grid;justify-content: center;text-align: right;font-size: 10px;">

                  <img loading="lazy" style="height:170px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/acetyl2.png">
                  ی عصای سه پایه از جنس "اِستیل" که ی گروه کربونیل تو دسته عصا هست
                </div>
              </div>
              <br>


              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:100px;float: left;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/imidazol.png">
                  ایمیدازول
                </div>
                <div
                  style="width:fit-content;display: grid;justify-content: center;text-align: center;font-size: 10px;">

                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/imidazol2.png"><br>
                  به این امامزاده زل بزن(ایمیدازول) تا حاجتتو بگیری!
                </div>
              </div>
              <br>

              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:60px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/amine.png">
                  آمین
                </div>
                <div style="width:fit-content;display: grid;justify-content: center;text-align: right;margin: 10px;">

                  <img loading="lazy" style="height:100px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/amine2.png">
                  اگر میخوای دلت نورانی بشه باید (N) دستاتو بلند کنی و "آمین" بگی!
                </div>
              </div>
              <br>

              <div
                style="width:260px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">

                  <img loading="lazy" style="height:100px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/imine.png">
                  ایمین
                </div>
                <div style="width:70%;justify-content: center;text-align: center;">
                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/imine2.png"><br>
                  کربن میره کنار رود نیل(کربونیل) و تو آسمان به جای خورشید نور هدایت (NH)میبینه و ایمان میاره!
                </div>
              </div>

              <br>

              <div
                style="width:280px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">

                <div style="display: grid;">
                  <img loading="lazy" style="margin:auto ;height:80px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/guanidinum.png">
                  گوانیدینیوم
                </div>

                <div style="width:100%;display: grid;justify-content: center;text-align: center;font-size: 10px;">
                  <img loading="lazy" style="height:150px;margin:auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/guanidinum2.png">
                  کربن میخواد "گواهینامه دینی" بگیره کنار رود نیل دعا میکنه و نور هدایت (NH2) از آسمون میخوره به دستاش

                </div>
              </div>
              <p style="text-align: right;position: relative;">
                نکته: ساختار اصلی گوانیدینیوم کربن متصل به سه نیتروژن (یک پیوند دوگانه و دوپیوند یگانه) است و به جای
                هیدروژن ها هر گروه دیگری(R) می تواند جایگزین شود
              </p>
              <br>
            </div>
            <div
              style="width:98%;position: relative;display:flex;flex-wrap: wrap;margin:auto;justify-content:  center;text-align: center; border-radius: 5px;align-items: center;">

              <div
                style="width:280px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;">
                  <img loading="lazy" style="height:60px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/amide.png">
                  آمید (کربوکسامید:کربوکسیل+آمین)
                </div>
                <div style="width:70%;justify-content: center;text-align: center;font-size: 10px;">
                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/amide2.png"><br>
                  کربن کنار رود نیل با یک نور هدایت(NH2) آشنا میشه و به زندگی "امید" پیدا میکنه
                </div>
              </div>

              <br>

              <div
                style="width:330px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;font-size: 10px;">

                  <img loading="lazy" style="height:75px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/phosphoanhydride.png">
                  فسفوانیدرید
                </div>
                <div style="width:70%;justify-content: center;text-align: center;font-size: 10px;">
                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/phosphoanhydride2.png"><br>
                  دو تا فسفات نیاز به مطالعه(need read)دارن و چون پولدارن سه تا اکسیژن گرفتن که بهشون درس بده و دو تا
                  اکسیژن خشن منفی هم نگهبانی بده
                </div>
              </div>

              <br>

              <div
                style="width:280px;height:260px;align-items: baseline;margin: 2px; display: grid;place-items:center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <img loading="lazy" style="height:100px;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/mixed-anhydride.png">
                انیدرید مخلوط یا آسیل فسفات(کربوکسیلات+فسفات)
              </div>

              <div
                style="width:330px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;font-size: 10px;">

                  <img loading="lazy" style="height:75px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/phenyl.png">
                  فنیل
                </div>
                <div style="width:70%;justify-content: center;text-align: center;font-size: 10px;">
                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/phenyl2.png"><br>
                  "فندک ایل" قاجار شش ضلعی بوده
                </div>
              </div>
              <br>

              <div
                style="width:330px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;font-size: 10px;">

                  <img loading="lazy" style="height:75px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/phenol.png">
                  فنول:فنیل + الکل(هیدروکسیل)
                </div>
                <div style="width:70%;justify-content: center;text-align: center;font-size: 10px;">
                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/phenol2.png"><br>
                  فندک الکلی شش ضلعی
                </div>
              </div>
              <br>
              <div
                style="width:330px;height:260px;align-items: baseline;margin: 2px; display: flex;justify-content: center;text-align: center;border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.5 );">
                <div style="display: grid;font-size: 10px;">

                  <img loading="lazy" style="height:120px;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/indole.png">
                  ایندول
                </div>
                <div style="width:70%;justify-content: center;text-align: center;font-size: 10px;">
                  <img loading="lazy" style="height:120px;margin: auto;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/indole2.png"><br>
                  "این دُوَل" غربی تابلوهاشون دوتاییه و نوک تابلو نوشته اینه هاش(NH)
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="h2parrent" id="reactions">
          <div class="h2" id="h2" style="color:#ff00f7">برهمکنش های شیمیایی در بیومولکول ها
            <a style="width: 100%;position: absolute;height:100% ;" href="#reactions"></a>

          </div>
          <div class="content" id="content">

            <span style="display:inline-block;color:#e100ff;font-weight: bold"> ● پیوند کوالانسی:</span> اشتراک الکترون
            های لایه ظرفیت اتم ها
            <br><span style="display:inline-block;color:#e100ff;font-weight: bold"> پیوند یگانه(اشتراک یک جفت
              الکترون):</span>اتم های متصل با
            پیوند یگانه در
            صورت نداشتن محدودیت فضایی (مثل گروه های بزرگ) حول پیوند می چرخند
            <br>


            <span style="display:inline-block;color:#e100ff;font-weight: bold">● پیوند دوگانه( اشتراک دو جفت
              الکترون):</span> کوتاه تر و قوی
            تر
            از پیوند
            یگانه
            و دارای محدودیت چرخش<br>

            <span style="display:inline-block;color:#e100ff;font-weight: bold">● پیوند سه گانه( اشتراک سه جفت
              الکترون):</span> کوتاه ترین و
            قوی ترین پیوند<br>
            <span style="display:inline-block;color:#e100ff;font-weight: bold">● نکته بسیار مهم:</span>
            در برخی مولکول ها دو پیوند یگانه و دو گانه مجاور هم می توانند با هم جابجا شوند و در عمل هر
            کدام از پیوندها بین پیوند یگانه و دو گانه محسوب می شوند که به این پدیده رزونانس گفته می شود: مثل پیوند های
            حلقه بنزنی و پیوند پپتیدی
            <br>
            <span style="display:inline-block;color:#e100ff;font-weight: bold">● الکترونگاتیویتی:</span>
            تمایل هر اتم درگیر در پیوند به کشیدن الکترون های پیوندی به سمت خود.بازه الکترونگاتیویتی عناصر از0.3 تا حدود
            4 است.یعنی الکترونگاتیوترین عنصر الکترونگاتیویتی 4 دارد<br>
            <span style="display:inline-block;color:#e100ff;font-weight: bold">● نکته:</span>
            نکته:هر چقد اختلاف الکترونگاتیویتی بین دو اتم درگیر در پیوند کمتر باشد پیوند کوالانسی تر(غیر قطبی تر) و
            هرچه اختلاف الکترونگاتیویتی بیشتر باشد پیوند یونی تر (قطبی تر)خواهد شد
            <br>
            <span style="display:inline-block;color:#e100ff;font-weight: bold">● نکته:</span>
            پیوند کوالانسی می تواند قطبی(جذب بیشتر الکترون اشتراکی توسط یک اتم) و غیر قطبی(تمایل برابر دو اتم در
            جذب الکترون) باشد که به ترتیب باعث ایجاد مولکول های قطبی و غیر قطبی میشوند
            <div class="wrap" id="wrap" style="position: relative;">
              <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/polar vs nonpolar.html"></iframe>
              <div class="reload" onclick=reload()>
                <image style="width:80%;height: 80%"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
              </div>
              <div class="full">
                <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
                <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

              </div>
            </div>


            <div style="width:90%;display: grid;justify-content: center;text-align: center;margin:auto;">
              <img loading="lazy" style="height:250px;width:100%;margin: auto;" class="pic" src="covalentbonds.jpg">
            </div>
            <span style="display:inline-block;color:#e100ff;font-weight:bold">● یونی یا الکتروستاتیک یا پل نمکی:
            </span> نیروی جاذبه بین گروه های باردار مثبت و منفی از یک بیومولکول یا بین دو بیومولکول مختلف

            <br>مثال: پیوند یونی بین آمینواسیدهای مثبت و منفی(مثل لیزین و آسپارتات) در ساختار سوم پروتئین ها<br>
            <span style="display:inline-block;color:#e100ff;font-weight:bold">● نکته:</span> پیوند یونی بر خلاف پیوند
            هیدروژنی از فاصله های
            دورتر هم عمل میکند
            ← نتیجه: تسهیل اتصال مولکول‌های باردار و یون‌ها به پروتئین‌ها و نوکلئیک اسیدها
            <br>
            <div class="wrap" id="wrap" style="position: relative;">
              <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/ionic bond.html"></iframe>
              <div class="reload" onclick=reload()>
                <image style="width:80%;height: 80%"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
              </div>
              <div class="full">
                <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
                <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

              </div>
            </div>


            <br>


            <span style="display:inline-block;color:#e100ff;font-weight:bold">● یون:</span>اتم یا مولکولی که مجموع تعداد
            الکترون ها کمتر یا
            بیشتر از تعداد
            پروتون هاست یعنی یک الکترون به صورت کامل به اتم یا مولکول اضافه یا کم شده(به اتم یا مولکول دیگر منتقل شده)
            و
            یون یا بار منفی دارد
            یا بار مثبت <br>
            <span style="display:inline-block;color:#e100ff;font-weight:bold">● دو قطبی :</span>مولکولی که ابر الکترونی
            اطراف مولکول به علت
            اختلاف
            الکترونگاتیویتی بین اتم های متصل با پیوند کوالانسی به یک طرف جابجا شده
            و باعث ایجاد دو قطب با بارهای جزئی مثبت و منفی شده است اما اختلاف الکترونگاتیویتی در حدی نیست که الکترون
            به
            صورت کامل منتقل شده باشد و بارهای جزئی مثبت و منفی با +δ و -δ(دلتا مثبت و دلتا منفی)نشان داده می شود.مثال:
            مولکول آب<br>
            <span style="display:inline-block;color:#e100ff;font-weight:bold">● زویتریون (Zwitterion):</span> نوع خاصی
            از یون های چند اتمی که
            دارای حداقل دو
            گروه عاملی باردار(مثل کربوکسیلات و آمین مثبت) هستند
            . و یک قسمت از مولکول دارای بار مثبت و یک قسمت دارای بار منفی است ← مثال:آمینواسیدها در pH ایزوالکتریک
            <br>
            <span
              style="color:#e100ff;font-weight: bold;display: flex; border-bottom: 1px solid; text-align: center;justify-content: center;">
              واندروالسی</span>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● </span>
            نیروی جاذبه ضعیف بین اتم ها یا مولکول های دو قطبی دائمی یا لحظه ای(در مولکول های غیر قطبی) <br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● انواع نیروهای واندروالسی : </span>

            نیروهای یون-دو قطبی ، دوقطبی-دوقطبی ،دوقطبی-دوقطبی القایی،دوقطبی القایی-دوقطبی القایی(نیروهای
            لاندون)<br>
            <span style="display:inline-block;color:#e100ff;font-weight:bold">● نکته:</span>با اینکه نیروهای واندروالسی
            ضعیف هستند اما
            در پروتئین ها چون تعداد زیادی برهمکنش واندروالسی وجود دارد اثر جمعی آنها باعث ایجاد نیروی قوی می
            شود که ساختار و عملکرد پروتئین را تحت تاثیر قرار می دهد <br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● برهم کنش‌های یون-دو قطبی:</span>
            نیروی جاذبه بین یک یون و یک
            دو قطبی ← مثال:
            برهم کنش مولکول های آب و یون ها در فرایند آبپوشی یون هاهنگام انحلال در آب<br>
            <div class="wrap" id="wrap" style="text-align: justify;position: relative;">
              <iframe class="iframe" loading="lazy" id="iframe" tabindex="0"
                data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/ion-dipole.html">
              </iframe>
              <div class="reload" onclick=reload()>
                <image style="width:80%;height: 80%"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
              </div>
              <div class="full" onclick=full()>
                <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
                <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

              </div>
            </div>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● برهم کنش‌های دو قطبی-دو قطبی:</span>
            نیروی بین دو مولکول قطبی دارای پیوندهای کوالانسی قطبی<br>
            مثال:نیروهای دوقطبی-دوقطبی بین مولکول های استون <br>

            <div class="wrap" id="wrap" style="text-align: justify;position: relative;">
              <iframe class="iframe" loading="lazy" id="iframe" tabindex="0"
                data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/acetone.html">
              </iframe>
              <div class="reload" onclick=reload()>
                <image style="width:80%;height: 80%"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
              </div>
              <div class="full" onclick=full()>
                <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
                <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

              </div>
            </div>

            <br>
            <span style="display:inline-block;color:#e100ff;font-weight: bold;">● نکته:</span>
            پیوند هیدروژنی نوع خاصی از نیروهای دوقطبی-دوقطبی بین هیدروژن متصل به یک اتم الکترونگاتیو با پیوند کوالانسی
            (N،O و Fمثل )و یک اتم الکترونگاتیو دیگر<br>
            <span style="display:inline-block;color:#e100ff;font-weight: bold;"> مثال۱: </span>
            پیوندهای هیدروژنی ساختار بتا-شیت(صفحه بتا) پروتئین ها<br>

            <div class="wrap" id="wrap" style="text-align: justify;position: relative;">
              <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/Hydrogenbond1.html">
              </iframe>
              <div class="reload" onclick=reload()>
                <image style="width:80%;height: 80%"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
              </div>
              <div class="full">

                <image class="fullpng" id="full1" style="width:80%;height: 80%;visibility: visible;position:absolute;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
                <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>
              </div>
            </div>
            <span style="display:inline-block;color:#e100ff;font-weight: bold;"> مثال۲: </span>

            پیوند هیدروژنی بین مولکول های آب<br>
            <div class="wrap" id="wrap" style="text-align: justify;position: relative;">
              <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/hyrogen bond-water.html">
              </iframe>
              <div class="reload" onclick=reload()>
                <image style="width:80%;height: 80%"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
              </div>
              <div class="full">

                <image class="fullpng" id="full1" style="width:80%;height: 80%;visibility: visible;position:absolute;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
                <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>
              </div>
            </div>
            <div
              style="display: flex;justify-content: center;position: relative;width: 80vw;height: fit-content;margin:auto">
              <img id="water" src="Hydrogen bond.gif" alt="Computer man">
              <style>
                @media all and (orientation: landscape) {
                  #water {
                    width: 70%
                  }
                }

                @media all and (orientation: portrait) {
                  #water {
                    width: 100%
                  }
                }
              </style>
            </div>
            <span style="display:inline-block;color:#e100ff;font-weight: bold;">● </span>
            هر مولکول آب حداکثر با چهار مولکول آب دیگر پیوند هیدروژنی برقرار می کند و این پیوند ها در آب مایع مثل
            تصویر
            بالا دائما شکسته شده و مجددا با همان مولکول یا مولکول دیگر برقرار می ظود

            <br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● نیروهای لاندون:</span>
            نیروی جاذبه بین دوقطبی های لحظه ای ایجاد شده در اثر دافعه الکترون های اتم های مجاور یکدیگر.مثال:جاذبه ی
            بین زنجیره های کربنی اسیدهای چرب و دم غیر قطبی فسفولیپیدها در غشاها<br>
            <div class="wrap" id="wrap" style="text-align: justify;position: relative;">
              <iframe class="iframe" width="640" height="480" id="iframe" frameborder="0" allow="autoplay;"
                data-src="https://sketchfab.com/models/e4cc1963c90941b4b8f8dc71b85d8421/embed"> </iframe>
              <div class="reload" onclick=reload()>
                <image style="width:80%;height: 80%"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
              </div>
              <div class="full">
                <image class="fullpng" id="full1" style="width:80%;height: 80%;visibility: visible;position:absolute;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
                <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>
              </div>
            </div>
            <span
              style="color:#e100ff;font-weight: bold;display: flex; border-bottom: 1px solid; text-align: center;justify-content: center;">
              اثر آبگریزی</span>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● </span>
            مولکول های آب خالص دارای شبکه منظمی از پیوندهای هیدروژنی هستند. حضور مولکول های آبگریز(مثل چربی ها) در
            آب
            باعث اختلال در این شبکه می شود و مولکول های آب برای کاهش این اختلال به صورت
            یک لایه اطراف مولکول های آبگریز را می گیرند و مولکول های آبگریز به صورت خوشه ای در یک نقطه تجمع پیدا
            میکنند.<br>
            <span style="display:inline-block; color:#e100ff;font-weight: bold;">● مثال های زیستی:</span>

            ۱-تجمع فسفولیپیدها در غشاهای دولایه برای دور کردن دم های غیرقطبی از آب ۲-فولدینگ پروتئین
            ها
            در محیط آبی برای دفن کردن گروه های آبگریز در داخل ساختار پروتئین و بیرون قرار گرفتن گروه های آبدوست

          </div>


        </div><br>

        <div class="h2parrent" id="commonmolecules">
          <div class="h2" style="z-index: 400;color:#ff00f7"> مولکول‌های کوچک مشترک در سلول‌ها
            <a style="width: 100%;position: absolute;height:100% ;" href="#commonmolecules"></a>

          </div>
          <div class="content" id="content">
            <span style="display:inline-block;color:#e100ff;font-weight: bold;">●</span>
            هزاران مولکول ارگانیک کوچک محلول در محیط آبی همه سلول‌ها با غلظت‌های متفاوت از نانومولار تا بیش از ۱۰ میلی
            مولار ، متابولیت‌های مرکزی مسیرهای اصلی همه سلول‌ها شامل آمینو اسیدهای رایج ، نوکلئوتیدها ، قندها و مشتقات
            فسفوریله آنها و مونو ،دی و تری کربوکسیلیک اسیدها های مولکول های قطبی یا باردار و بیشتر آنها محلول در آب به
            دام افتاده در سلول به دلیل نفوذ ناپذیر بودن غشا به آنها ← ترانسپورترهای خاص غشایی :جابجایی برخی مولکول‌ها
            به
            داخل و بیرون سلول یا بین بخش‌های مختلف سلول‌های یوکاریوتی وجود ترکیبات مشترک در سلول‌های زنده ← حفاظت
            تکاملی
            مسیرهای متابولیک از سلول‌های اجدادی تا سلول‌های امروزی ← برخی بیومولکول‌های کوچک مخصوص سلول‌های
            ارگانیسم‌های
            خاص ← مثال: متابولیت‌های ثانویه در گیاهان آوندی شامل ترکیبات با رایحه و رنگ خاص و ترکیباتی مثل مورفین
            کینین ، نیکوتین و کافئین (دارای اثرات فیزیولوژیک روی انسان اما با هدف متفاوت در گیاهان) <br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● متابولیت: </span>مولکول های کوچک مثل
            آمینواسیدها،
            نوکلئوتیدها یا نوکلئیک اسیدهای کوچک، قندها یا کربوهیدرات های کوچک ، لیپیدها ، پپتیدها ، ویتامین ها و مواد
            معدنی که حد واسط یا فراورده نهایی متابولیسم(سوخت و ساز سلولی) یا حاصل از تجزیه ی غذاها، داروها ، مواد
            شیمیایی یا بافت های بدن(مثل اسیدهای چرب حاصل از تجزیه بافت چربی، کراتینین حاصل از تجزیه کراتین فسفات بافت
            ماهیچه ای و...) هستند<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● متابولوم: </span> مجموعه تمام
            مولکول‌های کوچک (متابولیت ها)
            در
            یک سلول تحت شرایط خاص(مثل دوره خاصی از زندگی سلول یا در حضور سیگنال های خاص خارجی مثل یک هورمون)<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● متابولومیکس:</span>مطالعه ویژگی‌های
            سیستماتیک متابولوم
            تحت شرایط بسیار خاص (مثل مصرف یک دارو یا وجود یک سیگنال بیولوژیک مثل انسولین)<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● متابولیسم:</span>مجموعه واکنش های
            شیمیایی در محیط سلول جهت
            انجام تمام فرایندهای حیاتی سلول مثل تولید انرژی ، رشد و ترمیم، سنتز مولکول ها و دفع مواد زائد<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">●</span>
            متابولیسم شامل دو بخش <span style="display:inline-block;color:#ff00f7;font-weight: bold">کاتابولیسم</span>
            (تجزیه مولکول های
            پیچیده و بزرگ به مولکول های ساده تر با تولید انرژی )
            و <span style="display:inline-block;color:#ff00f7;font-weight: bold">آنابولیسم</span> (سنتز مولکول های
            پیچیده تر از مولکول های
            ساده با مصرف انرژی) <br>
            کدگذاری: اینطوری به ذهنت بسپار که کاتابولیسم مواد رو کات میکنه و میشکنه 😊
          </div>
        </div>

        <div class="h2parrent" id="macromolecules">
          <div class="h2" style="z-index: 400;color:#ff00f7">ماکرومولکول های زیستی
            <a style="width: 100%;position: absolute;height:100% ;" href="#macromolecules"></a>
          </div>
          <div class="content" id="content">
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">●</span>
            بسیاری از مولکول‌های زیستی ← ماکرومولکول: مولکول های با وزن مولکولی بالای ۵۰۰۰ ، متشکل از پیش سازهای نسبتا
            ساده مثل آمینواسیدها و نوکلئوتیدها<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● نکته مهم:</span>چهار نوع ماکرومولکول
            زیستی داریم:
            پروتئین ها نوکلئیک اسیدها(RNA , DNA) کربوهیدرات ها(مثل نشاسته و گلیکوژن ) و لیپیدها که سه نوع اول پلیمر
            هستند اما لیپیدها ماکرومولکول های غیر پلیمری هستند یعنی از واحدهای مشابه یا یکسان ساخته نمی شوند<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● نکته:</span>سنتز ماکرو مولکول‌ها ←
            انرژی خواه‌ ترین فعالیت
            سلول‌ها <br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● نکته: </span> تجمع برخی ماکرومولکول‌ها
            ← تشکیل کمپلکس‌های
            سوپرا مولکولی ← ایجاد واحدهای عملکردی مثل ریبوزوم<br><br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● پروتئین‌ها:</span>
            پلیمرهای بلند آمینواسیدها ، تشکیل بخش عمده جرم سلول (به جز آب) ، برخی فعالیت کاتالیتیک (آنزیم‌ها) و دیگر
            پروتئین‌ها با
            نقش‌های ساختاری ، گیرنده‌های سیگنال یا ترانسپورترها (انتقال مواد به داخلی و بیرون سلول) ، متنوع‌ترین
            بیومولکول از
            نظر عملکردی <br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● پروتئوم:</span> مجموع تمام پروتئین‌های
            موجود در یک سلول<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● پروتئومیکس:</span> مطالعه نظام مند
            ویژگی های پروتئوم تحت
            شرایط خاص <br><br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● نوکلئیک اسیدها (DNA و RNA):</span>
            پلیمرهای نوکلئوتیدها ، ذخیره و انتقال اطلاعات ژنتیکی، مولکول‌های RNA دارای نقش‌های
            ساختاری و کاتالیتیک در کمپلکس‌های سوپرامولکولی(ریبوزوم ها) <br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● ژنوم: </span> توالی کامل DNA سلول (یا
            توالی RNA در RNA
            ویروس‌ها)<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● ژنومیکس: </span>مطالعه ویژگی‌های
            ساختاری ، عملکردی ، تکاملی
            و
            نقشه برداری ژنوم‌ موجوادات زنده شامل ژن‌ها و مناطق تنظیمی (توالی های غیر ژنی)<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● ژنتیکس(تو فارسی میگیم ژنتیک):
            </span>علم مطالعه‌ی وراثت و
            تغییرات ژنتیکی در موجودات زنده و بررسی نحوه انتقال ویژگی‌ها از نسلی به نسل دیگر و تأثیر ژن‌ها
            بر صفات فیزیکی و بیولوژیکی<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● تفاوت ژنومیکس و ژنتیک:</span> ژنومیکس
            یعنی مطالعه و تجزیه و
            تحلیل داده‌های ژنتیکی ، اما ژنتیک
            یعنی مطالعه‌ی چگونگی وراثت این ژن ها و نحوه‌ی تأثیر آن ها بر بروز صفات و بیماری ها در یک موجود زنده<br><br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● پلی ساکاریدها: </span>پلیمرهای قندهای
            ساده مثل گلوکز ، سه
            عملکرد اصلی: ذخایر سوختی ، اجزای ساختاری محکم دیواره‌های سلولی (در باکتری‌ها و گیاهان) ، و عناصر شناسایی
            خارج سلولی (اتصال به
            پروتئین‌های سطحی سلول‌های دیگر) <br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● الیگوساکاریدها:</span>پلمیرهای کوتاه‌تر
            قندها،اتصال به
            پروتئین‌ها یا لیپیدهای سطحی سلول‌ها ، عملکرد به عنوان سیگنال‌های سلولی<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● گلیکوم: </span> مجموع تمامی کربوهیدرات
            ها در یک سلول، بافت
            یا
            ارگانیزم<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● گلیکومیکس: </span>مطالعه و تجزیه و
            تحلیل گلیکوم و بررسی
            ساختار، عملکرد و
            تغییرات کربوهیدرات ها و نقش‌های بیولوژیکی آنها در فرآیندهای مختلف بیولوژیکی و بیماری‌ها<br><br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● لیپیدها: </span>
            مشتقات هیدروکربنی نامحلول در آب ، اجزای ساختاری غشاها ، ذخایر
            سوختی ، رنگیزه‌ها، سیگنال‌های درون سلولی و... <br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● لیپیدوم: </span>مجموعه کامل لیپید ها و
            مولکول
            های دارای لیپید(مولکول های متصل به لیپیدها) یک سلول<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● لیپیدومیکس: </span> مطالعه‌ی جامع و
            سیستماتیک لیپیدها و
            متابولیت‌های مربوط به آنها در سلول‌ها، بافت‌ها و ارگانیزم‌ها<br><br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● پروتئین‌ها، پلی نوکلئوتیدها و پلی
              ساکاریدها: </span>تعداد
            زیاد زیرواحدهای
            مونومر ← با وزن مولکولی بالا ( از ۵۰۰۰ تا بیش از یک میلیون برای پروتئین‌ها ، چند میلیارد برای DNA و چند
            میلیون برای پلی ساکارید‌هایی مثل نشاسته)<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● مولکول‌های لیپیدی: </span>بسیار کوچکتر
            ،عدم
            طبقه‌ بندی به عنوان ماکرومولکول← توانایی اتصال غیر کوالانسی به ساختارهای بسیار بزرگ مثل غشاهای سلولی(متشکل
            از توده‌های عظیم غیر کوالانسی مولکول‌های لیپیدی و پروتئینی)<br>
            <span style="display:inline-block;color:#ff00f7;font-weight: bold">● ماکرومولکول‌های اطلاعاتی: </span>
            پروتئین ها و نوکلئیک اسید
            ها به دلیل توالی
            های زیر واحدی غنی از اطلاعات (برخی الیگوساکاریدها دارای عملکرد اطلاعاتی)
          </div>
        </div>
      </div>


    </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="isomers">
      <div class="h1" style="color:#ff00f7"> ایزومرها
        <a style="width: 100%;position: absolute;height:100% ;" href="#isomers"></a>
      </div>

      <div class="content" id="content">
        <br>
        <span
          style="color:#e100ff;font-weight: bold;display: flex; border-bottom: 1px solid; text-align: center;justify-content: center;">
          مفاهیم اولیه</span><br>

        <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● ایزومر:</span> ترکیبات با فرمول
        مولکولی(نوع و تعداد اتم های هر
        عنصر) یکسان اما
        با فرمول ساختاری(اتصالات بین اتم ها) متفاوت<br>
        <span style="display:inline-block;color:#e100ff;font-weight: bold;">● کونفورماسیون: </span>حالت های مختلف یک
        مولکول با چرخش اتم ها
        حول
        پیوند
        یگانه
        ← تبدیل خودبخودی بدون نیاز به شکستن پیوند و غیر قابل جداسازی
        ←مثال:
        کونفورماسیون های صندلی و قایق در گلوکز
        ← البته در صورت نبود مانع فضایی برای چرخش ← وجود مانع فضایی: ایجاد ایزومر کونفورماسیونی مثل
        ایزومرهای سین
        وآنتی در نوکلئوتیدها

        <video style="margin: auto;display: flex;width: fit-content" tabindex="0" controls>
          <source
            src="https://github.com/Science2023/3dbiochemistry/raw/main/Chair%20and%20Boat%20Conformations%20of%20Cylcohexane.mp4"
            type="video/mp4">
        </video>

        <p style="color: white;text-align: center;">تبدیل خودبخودی کونفورماسیون های صندلی و قایق </p><br>

        <span style="display:inline-block;color:#e100ff;font-weight: bold;">● کونفیگوراسیون:</span> حالت های مختلف ترتیب
        فضایی اتصال اتم ها
        مثل گلوکز و گالاکتوز ، یا ایزومر های سیس و ترانس ← تبدیل توسط آنزیم(غیر خودبخودی) ← نیاز به شکستن پیوند ← واکنش
        های بیومولکول ها دارای اختصاصیت فضایی نسبت به یک کونفیگوراسیون خاص<br>
        <span style="display:inline-block;color:#e100ff;font-weight: bold;">● کونفیگوراسیون نسبی:</span> بیان آرایش اتم
        ها در دو مولکول
        ایزومری نسبت به هم مثل سیس و ترانس<br>
        <span style="display:inline-block;color:#e100ff;font-weight: bold;">● کونفیگوراسیون مطلق:</span> اختصاص یک
        کونفیگوراسیون خاص به هر
        اتم بدون مقایسه با موقعیت آن در ایزومر دیگر مثل سیستم های نامگذاری D/L و R/S<br>
        <span style="display:inline-block;color:#e100ff;font-weight: bold;">● کایرالیته:</span>اتصال کربن به چهار اتم یا
        گروه مختلف ← جهت
        گیری های فضایی متفاوت چهار گروه<br>
        <span style="display:inline-block;color:#e100ff;font-weight: bold;">● دو عامل ایجاد کونفیگوراسیون های مختلف:
        </span>۱-پیوند دوگانه و
        محدودیت چرخش حول پیوند ۲-مرکز کایرال

        <div class="wrap" id="wrap" style="position: relative;">
          <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
            data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/chiral.html">
          </iframe>
          <div class="reload" onclick=reload()>
            <image style="width:80%;height: 80%"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
          </div>
          <div class="full">
            <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
            </image>
            <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
            </image>

          </div>
        </div>
        <p style="color: white;text-align: center;"> کربن کایرال(آبی): متصل به چهار گروه متفاوت و دارای دو
          ایزومر
          آینه ای</p>
        <br>
        <span style="display:inline-block;color:#e100ff;font-weight: bold;">● انواع ایزومرها </span><br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="isomertypes.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="isomertypes.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div><br>
      </div>
      <div class="h2parrent" id="structural">

        <div class="h2" style="z-index: 400;color:#ff00f7"> ایزومرهای ساختاری
          <a style="width: 100%;position: absolute;height:100% ;" href="#structural"></a>
        </div>

        <div class="content" id="content">

          <span style="display:inline-block;color:#e100ff;font-weight: bold;">●</span> تفاوت در چینش اتم ها، یعنی فقط
          نوع و تعداد اتم ها در
          آنها برابر است<br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">●</span>یعنی مثلا دو مولکول که با هم
          ایزومر ساختاری هستند تعداد
          برابری کربن ، هیدروژن و اکسیژن دارند<br>
          <span style="display:inline-block;color:#e100ff;font-weight: bold;">●</span>مثال: قند فروکتوز ایزومر ساختاری
          قندهای گلوکز و
          گالاکتوز است. چون همه آنها ۶ کربن ، ۱۲ هیدروژن و ۶ اکسیژن
          دارند
          (دقت کنید که گلوکز و گالاکتوز اپیمر(نوعی ایزومر فضایی با اختلاف در یک کرین کایرال) یکدیگر هستند اما هر کدام از
          آنها ایزومر ساختاری فروکتوز هستند)<br>

          <div style="width:90%;display: grid;justify-content: center;text-align: center;margin:auto;">
            <img loading="lazy" style="height:200px;width:200px;margin: auto;" class="pic" src="FGG.png">
          </div>
          <br>
        </div>
      </div>
      <div class="h2parrent" id="spatial">

        <div class="h2" style="z-index: 400;color:#ff00f7;"> ایزومرهای فضایی
          <a style="width: 100%;position: absolute;height:100% ;" href="#spatial"></a>
        </div>

        <div class="content" id="content">

          <span style="display:inline-block;color:#e100ff;font-weight: bold;">●</span>

          تفاوت فقط درجهت گیری فضایی اتم ها.یعنی هراتم در دو ایزومر فضایی به اتم های یکسانی متصل است اما جهت
          اتصال آنها در دو ایزمر با هم فرق دارد
        </div>

        <div class="h3parrent" id="enantioers" style="scroll-margin-top: 26vh;">

          <div class="h3" style="color:#ff00f7;font-weight: bold;"> انانتیومر( ایزومر آینه ای یا نوری)
            <a style="width: 100%;position: absolute;height:100% ;" href="#enantioers"></a>

          </div>

          <div class="content" id="content">

            <div class="wrap" id="wrap" style="position: relative;">
              <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/chiral.html">
              </iframe>
              <div class="reload" onclick=reload()>
                <image style="width:80%;height: 80%"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
              </div>
              <div class="full">
                <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                </image>
                <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                </image>

              </div>
            </div>
            <p style="margin:auto;">دو انانتیومر مولکول متان با یک کربن کایرال</p>

            <span style="display:inline-block;color:#e100ff">●</span> دارای مرکز کایرال<br>
            <span style="display:inline-block;color:#e100ff">●</span> فرمول محاسبه تعداد ایزومرها با استفاده از تعداد
            کربن های کایرال
            (n):۲<sup>n</sup><br>
            <span style="display:inline-block;color:#e100ff">●مثال:</span> گلوکز خطی با ۴ کربن کایرال دارای
            ۲<sup>۴</sup>
            یا ۱۶ ایزومر است که از این تعداد ۲ ایزومر آن آینه ای یا انانتیومر (L-گلوکز و D-گلوکز) و ۱۴ ایزومر آن
            غیر آینه ای یا دیاسترومر (مانوز،گالاکتوز و...) هستند<br><br>


          </div>
        </div><br>
        <div class="h3parrent" id="diasteromer" style="scroll-margin-top: 26vh;">
          <div class="h3" style="color:#ff00f7;font-weight: bold;">دیاسترومر
            <a style="width: 100%;position: absolute;height:100% ;" href="#diasteromer"></a>

          </div>

          <div class="content" id="content">

            <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● کونفورماسیونی: </span> حاصل
            محدودیت چرخش حول پیوند یگانه به علت دافعه گروه های بزرگ<br>
            <span style="display:inline-block;color:#e100ff;font-weight: bold;">●مثال:</span>

            ایزومرهای سین و آنتی در نوکلئوزیدها<br>
            <div style="width:90%;display: grid;justify-content: center;text-align: center;margin:auto;">
              <img loading="lazy" style="height:150px;width:250px;margin: auto;" class="pic" src="syn-anti.jpg">
            </div>
            <p style="margin: auto;">ایزومرهای سین و آنتی آدنوزین </p><br>
            <div style="border-bottom:1px dashed   rgb(255,255,255,0.4);width: 100%;">
              <div class="wrap" id="wrap" style="position: relative;">
                <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                  data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/anti-syn.html">
                </iframe>
                <div class="reload" onclick=reload()>
                  <image style="width:80%;height: 80%"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
                </div>
                <div class="full">
                  <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                  </image>
                  <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                  </image>

                </div>
              </div>
            </div>

            <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● کونفیگوراسیونی: </span>نیازمند شکستن و
            تغییر پیوندها برای
            تبدیل به یکدیگر<br>
            <div style="background: rgb(0,0,0,0.3);padding: 5px;">

              <span style="display:inline-block;color:#ff00f7;font-weight: bold;">۱- سیس و ترانس : </span> حاصل محدودیت
              چرخش حول پیوند دوگانه
              ←

              اگر گروه های یکسان در یک سمت باشند کونفیگوراسیون سیس و اگر در دو سوی مخالف باشند کونفیگوراسیون
              ترانس خواهد بود

              <div class="wrap" id="wrap" style="position: relative;">
                <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                  data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/cis-trans.html">
                </iframe>
                <div class="reload" onclick=reload()>
                  <image style="width:80%;height: 80%"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
                </div>
                <div class="full">
                  <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                  </image>
                  <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                  </image>

                </div>
              </div>
              <span style="display:inline-block;color:#e100ff;font-weight: bold;">●مثال:</span>
              اسیدهای چرب سیس و ترانس (گروه های دو سمت پیوند دوگانه را با الگوی بالا مقایسه کنید)
              <div class="wrap" id="wrap" style="position: relative;">
                <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                  data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/cis-fattyacid.html">
                </iframe>
                <div class="reload" onclick=reload()>
                  <image style="width:80%;height: 80%"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
                </div>
                <div class="full">
                  <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                  </image>
                  <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                  </image>
                </div>
              </div>
              <span style="display:inline-block;color:#e100ff;font-weight: bold;">●</span>

              در اسیدهای چرب سیس چون هر دو گروه بزرگ(زنجیره کربنی) در یک سمت پیوند دوگانه قرار میگیرند مولکول
              دچار شکستگی شده و چون مولکول ها به راحتی نمی توانند کنار هم قرار بگیرند در دمای اتاق مایع هستند

              <div class="wrap" id="wrap" style="position: relative;">
                <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                  data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/trans-fattyacid.html">
                </iframe>
                <div class="reload" onclick=reload()>
                  <image style="width:80%;height: 80%"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
                </div>
                <div class="full">
                  <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                  </image>
                  <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                  </image>

                </div>
              </div>
              <span style="display:inline-block;color:#e100ff;font-weight: bold;">●</span>

              در اسیدهای چرب ترانس چون دو گروه بزرگ(زنجیره کربنی) در دو سمت مخالف پیوند دوگانه قرار میگیرند مولکول
              تقریبا به صورت صاف بوده و چون مولکول ها به راحتی می توانند کنار هم قرار بگیرند در دمای اتاق جامد هستند

            </div><br>
            <div style="background: rgb(0,0,0,0.3);padding: 5px;">
              <span style="display:inline-block;color:#ff00f7;font-weight: bold;">۲- اپیمرها(تفاوت فقط در یک مرکز
                کایرال)</span><br>
              <span style="display:inline-block;color:#ff00f7;font-weight: bold;"> ●آنومرها(نوع خاصی اپیمر):</span>
              تفاوت در کربن آنومری
              کربوهیدرات های حلقوی ←
              مثال:گلوکز آلفا و بتا <br>
              <div style="width:90%;display: grid;justify-content: center;text-align: center;margin:auto;">
                <img loading="lazy" style="height:140px;width:100%;margin: auto;" class="pic"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/anomers.png">
              </div>


              <div class="wrap" id="wrap" style="position: relative;">
                <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                  data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/alpha-glucose.html">
                </iframe>
                <div class="reload" onclick=reload()>
                  <image style="width:80%;height: 80%"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
                </div>
                <div class="full">
                  <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                  </image>
                  <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                  </image>

                </div>
              </div>
              <p>گلوکز α:گروه -OH متصل به کربن آنومری به سمت پایین قرار گرفته</p>
              <div class="wrap" id="wrap" style="position: relative;">
                <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                  data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/beta-glucose.html">
                </iframe>
                <div class="reload" onclick=reload()>
                  <image style="width:80%;height: 80%"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
                </div>
                <div class="full">
                  <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                  </image>
                  <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                  </image>

                </div>
              </div>
              <p>گلوکز β:گروه -OH متصل به کربن آنومری به سمت بالا قرار گرفته</p>

              <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● قندهای اپیمر:</span> تفاوت جهت فضایی
              یک گروه -OH ← مثال:
              قندهای گلوکز و گالاکتوز و مانوز<br>
              <div style="width:90%;display: grid;justify-content: center;text-align: center;margin:auto;">
                <img loading="lazy" style="height:200px;width:300px;margin: auto;" class="pic"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/epimers.png">
              </div>
              <span style="display:inline-block;color:#ff00f7;font-weight: bold;">●</span>
              قبلا گفتیم که اتم های متصل با پیوند یگانه می توانند حول پیوند بچرخند
              یعنی کربن ها در قند های بالا می توانند بچرخند. پس چطور قندهای اپیمر صرفا در جهت گروه -OH با هم
              تفاوت دارند؟
              یعنی چرا با چرخش کربن ها و تغییر جهت -OH متصل به آنها نمی توانند به صورت خود به خودی به یکدیگر
              تبدیل شوند؟ به شکل سه بعدی زیر دقت کنید
              <div class="wrap" id="wrap" style="position: relative;">
                <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                  data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/epimers.html">
                </iframe>
                <div class="reload" onclick=reload()>
                  <image style="width:80%;height: 80%"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
                </div>
                <div class="full">
                  <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                  </image>
                  <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                  </image>

                </div>
              </div>
              <span style="display:inline-block;color:#ff00f7;font-weight: bold;">●نکته بسیار مهم:</span>

              برای بررسی جهت -OH متصل به کربن ها در قندها باید به شکل سه بعدی آنها دقت شود
              و از جهتی به کربن نگاه کنیم که

              که گروه های راست و چپ متصل به هر کربن جلوتر از کربن قرار گرفته باشند یعنی اگر بذاریم روی صفحه کربن روی
              صفحه قرار بگیره و گروه های چپ و راستش بالای صفحه قرار بگیرن(عکس بالا را با شکل سه بعدی مقایسه کنید)
            </div><br>
            <div style="background: rgb(0,0,0,0.3);padding: 5px;">
              <span style="display:inline-block;font-size:x-small;">۳-ترئو و اریترو(مقایسه ترکیبات دارای دو مرکز
                کایرال):</span> اگر
              دو گروه مشابه در یک سمت مرکز کایرال باشند
              کونفیگوراسیون اریترو و اگر در دو سمت مخالف باشند کونفیگوراسیون ترئو بوجود می آید
              ← مثال:قندهای ترئوز و اریتروز<br>
              <div style="width:90%;display: grid;justify-content: center;text-align: center;margin:auto;">
                <img loading="lazy" style="height:140px;width:100%;margin: auto;" class="pic"
                  src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/erythro-threo.jpg">
              </div>

              <div class="wrap" id="wrap" style="position: relative;">
                <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
                  data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/erythrose-threose.html">
                </iframe>
                <div class="reload" onclick=reload()>
                  <image style="width:80%;height: 80%"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
                </div>
                <div class="full">
                  <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png">
                  </image>
                  <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                    src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png">
                  </image>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="h2parrent" id="specificity">
        <div class="h2" style="z-index: 400;color:#ff00f7"> اختصاصیت فضایی ایزومرها در واکنش های بیوشیمیایی
          <a style="width: 100%;position: absolute;height:100% ;" href="#specificity"></a>

        </div>

        <div class="content" id="content">
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">●</span>
          مکمل بودن بیومولکول‌ها از نظر فضایی هنگام برهم کنش ← مثال:
          مکمل بودن ساختار فضایی سوبسترا ها و آنزیم‌ها ، هورمون ها و گیرنده‌ها ، آنتی ژن‌ها و آنتی
          بادی‌ها<br>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● نکته:</span>
          از بین همه کونفورماسیون ها و کونفیگوراسیون های مختلف(انواع ایزومرها)
          در هر بیومولکول فقط یک نوع خاص در سلول های زنده وجود دارد ←
          مثال: فقط ایزومر L آمینو اسیدها در پروتئین ها وجود دارد و یا فقط
          ، ایزومر D گلوکز به عنوان سوخت سلول و یا در سنتز پلیمرهای گلوکز مصرف می شود<br>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● نکته:</span>
          در سنتز آزمایشگاهی ترکیبات کایرال مثل آمینواسید ها مخلوطی از هر دو نوع ایزومر ( LوD مثلا)تولید می شود
          اما در سلول‌های زنده فقط یک نوع(مثلا ایزومر L در آمینواسیدها) از هر بیومولکول تولید می شود ← دلیل: کایرال بودن
          آنزیم سنتز کننده و اختصاصیت فضایی آن با یک نوع ایزومر سوبسترا<br>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● اختصاصیت فضایی:</span>

          توانایی تشخیص بین استریو ایزومرها یکی از ویژگی‌های آنزیم‌ها و دیگر پروتئین‌ها
          و برهم کنش‌های بیوشیمیایی ← مکمل بودن محل اتصال یک پروتئین برای یک ایزومر
          ترکیب کایرال و مکمل نبودن آن برای ایزومر دیگر
          (مثل مناسب نبودن دستکش دست چپ برای دست راست) مثال: شیرین کننده مصنوعی L-آسپارتیل L-فینیل آلانین متیل
          استر (آسپارتام) و ایزومر دیگر آن L-آسپارتیل D-فنیل آلانین متیل
          استر با مزه تلخ ، داروی S-سیتالوپرام با اثر درمانی و ایزومر R-سیتالوپرام بدون اثر درمانی
        </div>
      </div>
      <div class="h2parrent" id="opticalactivity">
        <div class="h2" style="z-index: 400;color:#ff00f7">فعالیت نوری (تحقیقات لویی پاستور)
          <a style="width: 100%;position: absolute;height:100% ;" href="#opticalactivity"></a>

        </div>

        <div class="content" id="content">
          <div style="width: 100%;display: flex;">
            <img loading="lazy" style="height:250px;width:200px;margin: auto; border-radius:10px"
              data-src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/louis-pasteur.jpg"
              src="louis-pasteur.jpg">
          </div>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">●
            لویی پاستور(زیست شناس، میکروبیولوژیست و شیمی دان):</span> آشنایی با پدیده فعالیت نوری در حین تحقیق روی رسوب
          بلورهای جمع شده در بشکه‌های شراب ( نوعی تارتاریک اسید
          به نام پاراتارتاریک اسید یا راسمیک اسید) ← جداسازی دو نوع کریستال با شباهت ساختاری اما تصویر آینه‌ای
          یکدیگر توسط پنس ریز ← هر دو دارای
          ویژگی‌های شیمیایی یکسان اما یک نوع باعث چرخش نور پلاریزه صفحه‌ای به سمت چپ(levorotatory یا l)
          و نوع دیگر باعث چرخش نور پلاریزه به سمت راست (dextrorotatory یا d) و محلول حاصل از ترکیب مول های یکسان دو
          انانتیومر(محلول راسمیک)
          بدون فعالیت نورانی<br>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● تفسیر لویی پاستور:</span>
          در مولکول های ایزومری ← عناصر و نسبت ترکیب آنها
          یکسان اما آرایش اتم‌ها متفاوت ، آرایش مولکولی دو نوع تارتاریک اسید ← غیر قرینه هستند یعنی دو ایزومر آینه ای
          نمی توانند با چرخاندن روی هم منطبق شوند
          اما کاملاً مشابه یکدیگر هستند <br>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">●تایید تفسیر لویی پاستور با مطالعات
            کریستالوگرافی:</span>
          تارتاریک اسید
          چپ گرد و راست گرد ← تصویر آینه‌ای یکدیگر در سطح مولکولی و هر کدام
          دارای کونفیکوراسیون مطلق خاص ، استفاده از همین روش برای آمینو
          اسید آلانین ← نتیجه: آلانین دارای دو انانتیومر ( D و L) ← فقط ایزومر L در پروتئین‌ها<br>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">●نکته:</span>
          وقتی میگوییم دو ایزومر آینه ای غیر قرینه هستند و نمی توانند بر هم منطبق شوند یعنی اینکه مثلا شما جلوی آینه
          وایسی تصویر دست
          راست شما در آینه میشه دست چپ تصویر شما پس تصویر آینه ای شما اگر از آینه بیاد بیرون(ترسیدی خخخ) نمیتونه عین شما
          باشه و جای شمارو بگیره چون حتی قلبش سمت راست قفسه سینه است پس قرینه شما نیست. قرینه وقتیه که با چرخوندن عین هم
          بشن .یا
          مثلا دست راست و چپ شما انانتیومر هم هستن و شما هرچقد دست راستتو بچرخونی نمیشه مثل دست چپ. افتاد؟؟؟
          <br>
          <video style="margin: auto;display: flex;width: fit-content" tabindex="0" controls>
            <source src="https://github.com/user-attachments/assets/d562e064-c299-470e-ab74-b6120e9a5e3f

              " type="video/mp4">

          </video>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">●نکته بسیار مهم:</span>
          راست گرد (d) یا چپ گرد(l) بودن مولکول از نظر فعالیت نوری نباید با نامگذاری D و L اشتباه
          شود یعنی ارتباطی بین ایزومری D/L و راست گرد/چپ گرد بودن وجود ندارد
          یعنی ممکن است مولکولی در کونفیگوراسیون D راست گرد باشد و مولکول دیگر در کونفیگوراسیونD چپ گرد باشد
          .ضمنا راست گرد یا چپ گرد بودن از لحاظ فعالیت نوری هم با علامت +و - وهم با علامت d و l (حروف کوچک)نشان
          داده می شود اما در تعیین کونفیگوراسیون مطلق از حروف بزرگ (Lو D) استفاده میکنیم

        </div>
      </div>

      <div class="h2parrent" id="nomenclature">
        <div class="h2" style="z-index: 400;color:#ff00f7">
          روش های
          تعیین کونفیگوراسیون کربن های کایرال
          <a style="width: 100%;position: absolute;height:100% ;" href="#nomenclature"></a>

        </div>

        <div class="content" id="content">

          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● سیستم D/L (برای بیان کونفیگوراسیون مطلق
            قندهای ساده و
            آمینواسیدها):
          </span><br>
          برای توضیحات این روش به فصل آمینواسیدها و قندها مراجعه کنید
          <br>
          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● سیستم R/S( برای بیان کونفیگوراسیون مطلق
            تمام ترکیبات کایرال
            ):
          </span>
          مناسب نامگذاری کونفیگوراسیون های مولکول های دارای بیش از یک مرکز کایرال و مشخص کردن کونفیگوراسیون کربن کایرال
          بدون مقایسه با ایزومر یا مولکول دیگر<br>
          روش نامگذاری:<br>
          ۱-هر گروه متصل به کربن کایرال دارای یک اولویت قراردادی(مثل امتیاز)
          <br>

          ۲-قرار دادن مولکول به صورتی که پایین ترین اولویت (هیدروژن) در دورترین نقطه از ناظر قرار بگیرد
          <br>

          ۳-تعیین جهت چرخش(ساعت گرد یا پادساعت گرد) سه گروه باقی مانده از اولویت بالاتر به پایین تر
          ترتیب اولویت ها:<br>
          -OCH3 > -OH > NH2 > -COOH > CHO > CH2OH > CH3 > H<br>
          کاهش اولویت به صورت ساعت گرد:کونفیگوراسیون R<br>
          کاهش اولویت به صورت پادساعت گرد:کونفیگوراسیون S<br>
          -OCH3: گروه متوکسی: با حذف هیدروژن از گروه OH متانول

          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
              data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/r-s system.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>



        </div>
      </div>
    </div>
    </div>
    </div>



    <div class="h1parrent" id="representations">
      <div class="h1" id="h1" style="color:#ff00f7"> انواع نمایش مولکول‌ها
        <a style="width: 100%;position: absolute;height:100% ;" href="#representations"></a>

      </div>
      <div class="content" id="content">

        <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● فرمول مولکولی: </span>نوع و تعداد اتم های
        هر عنصر در یک ترکیب
        مثال:
        C<sub>4</sub>H<sub>10</sub>(بوتان)<br>
        <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● فرمول فشرده: </span> (اطلاعات فرمول
        مولکولی) + ترتیب اتصال اتم
        ها
        مثال:CH<sub>3</sub>CH<sub>2</sub>CH<sub>2</sub>CH<sub>3</sub> ←فشرده تر:
        CH<sub>3</sub>(CH<sub>2</sub>)<sub>2</sub>CH<sub>3</sub><br>
      </div>
      <div class="h2parrent" id="2Dmodels">
        <div class="h2" style="z-index: 400;color:#ff00f7">مدل های دو بعدی
          <a style="width: 100%;position: absolute;height:100% ;" href="#2Dmodels"></a>

        </div>

        <div class="content" id="content">




          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● فرمول ساختاری ساده: </span><br>


          <div style="width:50%;display: grid;justify-content: center;text-align: center;margin:auto;">
            <img loading="lazy" style="height:200px;width:200px;margin: auto;" class="pic"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/glucose1.jpg">
            <div class="description"
              style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
              فرمول ساختاری گلوکز
            </div>
          </div>




          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● فرمول اسکلتی یا خطی یا پیوند-خط:
          </span>فرمول ساختاری بدون نماد
          اتم کربن ← شکستگی
          و
          انتهای خطوط: نشانه اتم کربن <br>



          <div style="width:90%;display: grid;justify-content: center;text-align: center;margin:auto;">
            <img loading="lazy" style="height:100%;width:100%;margin: auto;" class="pic"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/vita.jpg">
            <div class="description"
              style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
              ساختار خط-پیوند ویتامین A </div>
          </div>



          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● مدل فیشر(کربوهیدرات های خطی):</span>گروه
          آلدهیدی یا کتونی در
          بالا قرار می
          گیرد:<br>



          <div style="width:90%;display: grid;justify-content: center;text-align: center;margin:auto;">
            <img loading="lazy" style="height:280px;width:160px;margin: auto;" class="pic"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/glucose fisher.jpg">
            <div class="description"
              style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
              ساختار فیشر گلوکز خطی </div>
          </div>






          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● مدل هاورث (کربوهیدرات های
            حلقوی)</span><br>


          <div style="width:50%;display: grid;justify-content: center;text-align: center;margin:auto;">
            <img loading="lazy" style="height:150px;width:160px;margin: auto;" class="pic"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/glucose haworth.jpg">
            <div class="description"
              style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
              ساختار هاورث گلوکز حلقوی </div>
          </div><br>



          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● مدل چشم انداز (پرسپکتیو) یا گُوِه و خط
            چین: </span>وارد
          شدن پیوند به
          صفحه(دور شدن از ناظر) /گُوِه : خارج شدن پیوند از صفحه (نزدیک شدن به ناظر) / خط ساده:پیوند روی صفحه<br>

          <span style="display:inline-block;color:#ff00f7;font-weight: bold;"> نکته:</span>گُوِه وسیله ای فلزی است که
          برای
          شکافتن چوب استفاده
          می شود و در مدل چشم
          انداز برای نمایش نزدیک شدن پیوند به چشم ناظر از خطی شبیه گُوِه استفاده می شود<br>

          <div style="width:50%;display: grid;justify-content: center;text-align: center;margin:auto;">
            <img loading="lazy" style="height:150px;width:250px;margin: auto;" class="pic"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/perspective.jpg">
            <div class="description"
              style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
              مدل چشم انداز گلوکز:دقت کنید هر کربن در مرکز یک چهاروجهی قرار گرفته به همین دلیل این آرایش پدید آمده است
            </div>
          </div>
        </div>
      </div>
      <div class="h2parrent" id="2Dmodels">
        <div class="h2" style="z-index: 400;color:#ff00f7">مدل های سه بعدی
          <a style="width: 100%;position: absolute;height:100% ;" href="#2Dmodels"></a>

        </div>

        <div class="content" id="content">

          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● مدل گوی و میله :</span>گوی ها نماد اتم
          ها
          و میله ها نماد
          پیوندها و زوایای بین
          میله
          ها نشانگر زوایای پیوندی<br>




          <div class="wrap" id="wrap" style="position: relative;">

            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
              data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/Glucose.html">
            </iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div><br>

          </div>
          <div class="description"
            style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
            مدل گوی و میله مولکول گلوکز </div><br>


          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● مدل فضا پر کن: </span>نزدیک ترین مدل به
          شکل واقعی مولکول ها
          نمایش اتم ها به شکل
          کره
          و نمایش پیوندها با فرو رفتگی اتم ها در یکدیگر ، و شعاع اتم ها نسبت به یکدیگر متناسب با شعاع واندروالسی آنها و
          حجم مدل نشانگر فضای اشغال شده توسط مولکول
          <br>
          <div class="wrap" id="wrap" style="position: relative;">

            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
              data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/spacefill.html">
            </iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div><br>
          </div> <br>
          <div class="description"
            style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
            مدل فضا پر کن مولکول گلوکز
          </div><br>




          <span style="display:inline-block;color:#ff00f7;font-weight: bold;">● مدل ربانی(پروتئین ها): </span>نمایش
          ساختارهای ثانویه آلفا هلیکس
          به شکل ربان پیچ
          خورده و بتا شیت به شکل ربان فلشی( جهت فلش: جهش بتا شیت)



          <div class="wrap" id="wrap" style="position: relative;">

            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0"
              data-src="https://raw.githack.com/Science2023/3dbiochemistry/main/ribbon.html">
            </iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div><br>
          </div> <br>
          <div class="description"
            style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
            مدل ربانی دُمین انگشت روی در برخی پروتئین ها </div><br>
        </div>
      </div>
    </div>
    </div>
    <div class="h1parrent" id="organic">
      <div class="h1" id="h1" style="color:#ff00f7"> نامگذاری ترکیبات آلی
        <a style="width: 100%;position: absolute;height:100% ;" href="#organic"></a>

      </div>
      <div class="content" id="content">
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● آلکان های راست زنجیر:</span>
        با متان: ۱ کربن، اتان:۲ کربن، پروپان: ۳ کربن ، بوتان: ۴ کربن و از ترکیب ۵ کربنه به بعد
        اعداد یونانی(پنتان،هگزان،هپتان و...)<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● آلکن های راست زنجیر:</span>
        متِن،اتِن(اتیلِن)، پروپِن و...<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● آلکین های راست زنجیر:</span>
        مِتین، اتین(استیلن) ،پروپین و...<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نکته: </span>

        دو روش نامگذاری ترکیبات دو کربنه دارای پیوند دوگانه یا سه گانه :<br>
        با پیوند دوگانه: اتِن = اتیلن، با
        پیوند سه گانه: اتین = استیلن<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نکته: </span>
        اگر در یک ترکیب آلی فقط یک کربن داشته باشیم و آن هم متعلق به گروه عاملی باشد علاوه بر نامگذاری با نام متان می
        توان از
        پیشوند"فرم" در نامگذاری آنها استفاده کرد و اگر علاوه بر کربن گروه عاملی یک کربن دیگر هم داشته باشیم از پیشوند
        "اَسِت" استفاده میکنیم<br>
        مثال دسته اول: متانوئیک اسید یا فرمیک اسید، متانالدهید یا
        فرمالدهید<br>
        مثال دسته دوم: اتانوئیک اسید یا استیک اسید، اتانالدهید یا استالدهید <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● آلکیل: </span>

        رادیکال حاصل از حذف یک هیدروژن از آلکان ها(آلکان ← آلکیل)<br>
        مثال:متان← کم کردن یک هیدروژن← متیل ، استیلِن ← کم کردن هیدروژن← استیل
        (مثل استیل-کوآ در مسیر تجزیه گلوکز)<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● آسیل: </span>
        رادیکال حاصل از حذف گروه OH از اسید چرب
        (اسید ← آسیل)<br>
        (RCOOH ← RCO ( R:زنجیره کربنی)) مثال: آسیل-کوآ ←
        در مسیر اکسیداسیون اسیدهای چرب<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● آریل: </span>
        رادیکال حاصل از حذف یک هیدروژن از ترکیبات آروماتیک مثل حلقه بنزن(آروماتیک ← آریل)<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● رادیکال یا رادیکال آزاد: </span>

        اتم،مولکول یا یون با الکترون ظرفیتی جفت نشده ← بسیار واکنش پذیر<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نکته: </span>
        در ترکیبات آلی حرف R نماد عمومی یک گروه رادیکال است و برای نمایش هر نوع ترکیب آلی ،گروه عاملی مخصوص آن
        ترکیب متصل به R نشان داده می شود. مثال: R-OH نماد عمومی الکل های یک عاملی، R-COOH نماد عمومی کربوکسیلیک
        اسیدها<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نامگذاری قندها: </span>
        عدد کربن قند + پسوند اوز مثال:تریوز یعنی قند سه کربنه ، پنتوز یعنی قند پنج کربنه، هگزوز یعنی
        قند شش کربنه<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نامگذاری کربوکسیلیک اسیدها: </span>

        افزودن پسوند"ویک اسید" به آخر نام مولکول. مثال: اسید کربوکسیلیک یک کربنه متان+ویک
        اسید=متانویک اسید <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نکته: </span>
        با آزاد شدن هیدروژن متصل به گروه کربوکسیلیک اسید یون منفی کربوکسیلات آن با پسوند "ات" بدست می آید. مثال:
        متانوات<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نامگذاری آلدهیدها: </span>

        نام آلکان با تعداد کربن برابر با ترکیب +پسوند"الدهید" مثال: متانالدهید، اتانالدهید <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نامگذاری کتون ها: </span>

        نام آلکان با تعداد کربن برابر + پسوند"ون" مثال:پروپانون(ساده ترین کتون)<br>
        <br>


      </div>
    </div>
    </div>
    </div>

    <div class="h1parrent" id="molecularweight">
      <div class="h1" id="h1" style="color:#ff00f7"> جرم اتمی، جرم مولکولی نسبی، و جرم مولکولی
        <a style="width: 100%;position: absolute;height:100% ;" href="#molecularweight"></a>

      </div>
      <div class="content" id="content">
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> سه روش معادل هم برای بیان جرم مواد
          شیمیایی</span><br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● واحد جرم اتمی(u) :</span> هم برای اتم ها و
        هم مولکول ها،
        یک دوازدهم جرم یک اتم کربن ۱۲ <br>
        مثال: جرم اتمی هیدروژن 1u، جرم مولکولی آب 18u<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نکته : </span>
        واحد جرم اتمی (u)در بیان جرم پیک‌های مشاهده شده در اسپکترومتری جرمی استفاده می‌شود<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نکته : </span>
        در بخش مفهوم مول دلیل ابداع این واحد رو مطالعه خواهید کرد
        <p style="color:#ff00f7;border-bottom:1px solid #ff00f7;text-align: center;font-weight: bold;"> جرم مولکول ها
        </p>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● جرم مولکولی نسبی (M<sub>r</sub>): </span>

        نسبت جرم یک مولکول بر حسب گرم به یک دوازدهم جرم اتم کربن (دقیقا مثل جرم اتمی اما این فقط برای مولکول ها استفاده
        میشه)۱۲ ← چون
        یک واحد نسبیه و حاصل تقسیم دو عدد با واحد یکسانه که هر دو بر حسب گرم هستند واحدها با هم ساده میشن و جرم
        مولکولی نسبی واحد ندارد<br>
        مثال:جرم مولکولی نسبی آب 18 است<br>

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● جرم مولکولی (m):</span>

        مجموع جرم های اتمی اتم های سازنده یک مولکول است و واحد آن دالتون است (Da) ← یک دالتون برابر
        است با یک دوازدهم جرم یک اتم کربن ۱۲( دقیقا مثل u) <br>
        مثال: جرم مولکولی آب برابر 18 دالتون است که برابر مجموع جرم اتمی دو هیدروژن (2) و یک اکسیژن(16) است و
        M<sub>r</sub>=18 جرم مولکولی نسبی آب است
        m=18000 دالتون یا 18 کیلودالتون <br>


        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نکته بسیار مهم : </span>همه این واحدها
        برای هر مولکول از نظر
        مقدار عددی برابر هستند مثلا جرم مولکولی یک مولکول هیدورژن H <sub>2</sub> برابر 2u ، جرم مولکولی نسبی آن برابر 2
        و
        جرم مولکولی آن برابر 2 دالتون است

      </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="molarity">
      <div class="h1" id="h1" style="color:#ff00f7"> مول ، غلظت ، مولاریته و عدد آووگادرو
        <a style="width: 100%;position: absolute;height:100% ;" href="#molarity"></a>

      </div>
      <div class="content" id="content">
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>●واحد جرم اتمی(u) :</span>

        برای بیان جرم اتم‌ها و مولکول ها و مقایسه جرم اتم عنصرهای مختلف اومدن دیدن خب سخته جرم یک اتم رو برحسب گرم
        بیان کنیم گفتن
        چکار کنیم؟ خب همه اتم ها از پروتون و نوترون تشکیل شدن(الکترون هم که وزنش خیییییییلی کمه آدم حسابش نمیکنن) گفتن
        میایم جرم اتم عنصرهای مختلف رو بر حسب مقایسه اونا با یک معیار بیان کنیم و «واحد جرم اتمی»
        معرفی شد که به علت
        پایداری و فراوانی اتم کربن ۱۲ این عنصر
        به عنوان استاندارد و معیار برای مقایسه اتم‌های دیگر تعیین شد و یک دوازدهم جرم اتم کربن ۱۲ برابر با یک «واحد جرم
        اتمی » یا 1u
        تعریف شد ← حالا چرا یک دوازدهم؟ چون کربن ۱۲ ،شش پروتون و شش نوترون داره.یک دوازدهم جرم کربن ۱۲ تقریبا برابر میشه
        با جرم یک پروتون یا یک
        نوترون. پس میشه تقریبا گفت که واحد جرم اتمی جرم اتم هارو بر اساس تعداد نوترون ها و پروتون هاشون بیان میکنه که
        راحت تره.

        <br>
        مثال:<br>

        هیدروژن فقط یک پروتون ← ۱u
        <br>

        کربن ۱۲ دارای ۶ پروتون ۶ نوترون ← ۱۲u
        <br>

        اکسیژن دارای ۸ پروتون و ۸ نوترون ← ۱۶u
        <br>


        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● مفهوم مول:</span>
        کلمه «مول» در زبان لاتین به معنای «توده» است.
        دانشمندا دیدن در محاسبات آزمایشگاهی و نسبت مواد در واکنش ها از جرم یک اتم که نمیشه استفاده کرد
        (خب معلومه چون خیلی ریزه) ←
        پس برای راحتی محاسبات دانشمندا اومدن گفتن هر اتمی هر جرمی بر حسب واحد جرم اتمی یا u داره همون عدد رو با واحد
        گرم
        براش در نظر بگیریم و بهش بگیم یک مول از اون عنصر. چون وقتی عدد واحد جرم اتمی رو با گرم بیان می کنیم وقتی میخوایم
        مثلا دو تا اتم یا مولکول از یک ماده رو با یک اتم یا مولکول از ی ماده دیگه ترکیب کنیم ما که نمیتونیم اتم هارو
        دونه دونه بشماریم میایم دو مول از ماده اول و یک مول از ماده دوم برمیداریم و چون جرم هر مول از هر ماده با عدد جرم
        اتمیش
        برابره خیالمون راحته به هر دو مولکول از ماده اول یک مولکول از ماده دوم میچسبه.


        مثلا ما که نمیتونیم بگیم برای تولید آب 2u هیدروژن ( که میشه دو تا اتم هیدروژن) و 16u
        اکسیژن(یک اتم اکسیژن) ترکیب کنیم پس همین عدد هارو بر حسب گرم بیان میکنیم تا وقتی اینا رو ریختیم رو هم به
        هراکسیژن دو تا هیدروژن برسه.پس 2 گرم هیدروژن (دو مول هیدروژن)رو با
        16 گرم اکسیژن(یک مول اکسیژن) مخلوط میکنیم میشه یک مول آب یا 18 گرم آب <br>
        خلاصه:
        عدد جرم اتمی(حاصل از مقایسه با جرم یک دوازدهم کربن 12) ← جابجایی واحد جرم اتمی (u)با گرم ← جرم مولی
        <br>
        مثلا برای سه تا مثال بالا
        <br>
        جرم اتمی هیدروژن :1u ← جرم مولی هیدروژن :1 گرم
        <br>

        جرم اتمی کربن :12u ← جرم مولی کربن :12 گرم
        <br>

        جرم اتمی اکسیژن :16u ← جرم مولی اکسیژن :16 گرم
        <br>

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●نکته:</span>حالا که فهمیدیم هر مول ماده ی
        وزن خاصی داره که بهش
        میگیم جرم مولی وقتی ی مقدار از اون ماده رو به ما دادن جرمشو تقسیم بر جرم مولی میکنیم که ببینیم چند موله<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● مولاریته(M):</span>
        تعداد مول ماده تقسیم بر حجم محلول بر حسب لیتر یعنی میخوایم ببینیم در هر لیتر از محلول چند مول از اون ماده وجود
        داره و واحدش مول بر لیتر هست که بهش میگیم مولار<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● نکته: </span>مقدار غلظت هر ماده بر حسب
        مولار رو با [ ] نشون
        میدیم
        .مثال [<sup>+</sup>H]=غلظت یون هیدروژن بر حسب مولار<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● داستان عدد آوودگادرو (N<sub>A</sub> ) :
        </span>خب حالا دانشمندا
        گفتن ببینیم هر مول
        از یک اتم یا مولکول یا یون چند تا ازون ذره توش هست. خب جرم یک مول از هر عنصر(جرم مولی) رو داشتن ،جرم اتمی هر
        عنصر رو هم داشتن.اومدن جرم مولی هر
        عنصر بر حسب گرم رو به جرم یک اتم اون عنصر بر حسب گرم تقسیم کردن ی عددی بدست اومد
        که تعداد اتم‌های موجود در یک مول از اون عنصر را نشون میده که به افتخار داداشمون
        آوودگادرو اسمشو گذاشتن عدد آووگادرو.
        ی مثال ساده بزنم قشنگ شیفهم بشی:فرض کن ی مدل سیب داریم که همه یک اندازه و یک وزن هستند(مثل اتم های یک عنصر) و
        وزن هر سیب رو داریم(مثل جرم اتمی عناصر) حالا فرض کن هر تن یا هزار کیلو از این سیب رو بگیم یک کامیون سیب (مثل یک
        مول از یک ماده).حالا یک کامیون سیب چند
        تا سیب میشه ؟آفرین ،یک تن که میشه هزار کیلوگرم رو بر حسب گرم مینویسیم(مثل جرم مولی ) و تقسیم بر
        وزن هر سیب
        میکنیم تا تعداد سیب موجود در یک تن بدست بیاد.
        <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>● خلاصه مراحل:</span><br>
        1-تعیین یک دوازدهم جرم اتم کربن-12 به عنوان معیار و مقایسه اتم های دیگه با اون و تعیین واحد جرم اتمی (u) مثلا
        جرم اتمی هیدروژن: 1u<br>
        2-در نظر گرفتن مقدار عددی واحد جرم اتمی بر حسب گرم به عنوان جرم مولی هر عنصر . مثلا چون جرم اتمی هیدروژن 1u شد
        جرم مولی هیدروژن هم 1 گرم بر مول در نظر گرفته شد<br>
        3-تقسیم جرم مولی هر عنصر به جرم اتمی اون عنصر بر حسب گرم و بدست آمدن عدد آووگادرو.مثلا جرم مولی هیدروژن 1 (گرم
        بر مول)
        تقسیم بر 10 × 1.66054<sup>24</sup>
        گرم که برابر میشه با 6.022 ×10<sup>23</sup> که همون عدد آووگادرو
        است
      </div>
    </div>
    <div>
    </div>
    <div class="h1parrent" id="solutions">
      <div class="h1" id="h1" style="color:#ff00f7"> محلول ها و رقیق سازی

        <a style="width: 100%;position: absolute;height:100% ;" href="#solutions"></a>

      </div>
      <div class="content" id="content">
        <p style="color:#ff00f7;border-bottom:1px solid #ff00f7;text-align: center;font-weight: bold;">محلول سازی</p>

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>
        فرض کنید 10 گرم از یک ماده به شما دادن که جرم مولیش 5 گرم بر مول هست و از شما خواستن که 500 میلی لیتر (یا همون
        سی سی) محلول 3 مولار از این ماده بسازی.<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● مراحل:</span><br>
        ۱-فرمول مولاریته رو مینویسیم:<br>
        ۲-داده هامونو جاگذاری میکنیم تا مجهول بدست بیاد
        <img src="Molarity.png" alt="Image to magnify" class="main-image" id="mainImage">

        ۳-پس ما برای ساخت 500 میلی لیتر محلول 3 مولار از این ماده نیاز به 1.5 مول ماده داریم <br>
        ۴-تبدیل مول به گرم با استفاده از جرم مولی<br>
        <img src="molarmass.png" alt="Image to magnify" class="main-image" id="mainImage">
        ۵-پس 7.5 گرم از ماده رو در 500 میلی لیتر آب حل میکنیم
        <p style="color:#ff00f7;border-bottom:1px solid #ff00f7;text-align: center;font-weight: bold;">رقیق سازی</p>

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● </span>حالا فرض کنید یک محلول با غلظت 2
        مولار و با حجم 200
        میلی لیتر به شما دادن گفتن اینو رقیق کنید که غلظتش بشه 1 مولار.دقت کنید رقیق سازی یعنی پیدا کردن مقدار آبی که
        باید به محلول اضافه کنیم تا محلول به غلظت مورد نظر برسه<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● مراحل:</span><br>
        ۱-نوشتن فرمول رقیق سازی <br>
        ۲-بدست آوردن غلظت ثانویه<br>
        ۳-کم کردن غلظت فعلی از غلظت ثانویه<br>
        <img src="delution.png" alt="Image to magnify" class="main-image" id="mainImage">


        4-پس باید 200 میلی لیتر آب به محلول اضافه کنیم تا حجم آن به 400 میلی لیتر برسد






        <br>

        </p><br>
      </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="redox">
      <div class="h1" id="h1" style="color:#ff00f7"> واکنش‌های اکسایش کاهش(Redox)

        <a style="width: 100%;position: absolute;height:100% ;" href="#redox"></a>

      </div>
      <div class="content" id="content">


        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● واکنش های اکسایش-کاهش(یا
          اکسیداسیون-احیا):</span> واکنش هایی که عدد اکسایش واکنش دهنده ها در آن تغییر میکند و یک واکنش دهنده(احیاکننده)
        خود اکسید شده و واکنش دهنده دیگر(اکسید کننده) را احیا می کند یعنی این واکنش ها از دو نیم واکنش اکسایش و کاهش
        تشکیل می شوند<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold'>●عدد اکسایش (حالت اکسایش):</span>مقدار بار
        فرضی یک اتم در صورتی
        که فرض کنیم همه پیوندهای آن با اتم های دیگر یونی هستند یعنی وقتی پیوند قطبی است فرض کنیم یونی است و الکترون
        کاملا از یک اتم به اتم دیگر منتقل شده و در پیوند غیر قطبی مثل پیوند دو اتم یکسان مقدار بار فرضی اتم از آن پیوند
        صفر است و هرچقد عدد
        اکسایش منفی تر باشد یعنی آن اتم الکترونگاتیویتی(قدرت جذب الکترون اشتراکی در پیوند) بالاتری دارد و اکسیدکننده تر
        است
        و اتم مقابل را اکسید کرده و خود احیا می شود. پس در واکنش های اکسایش - کاهش ممکن است انتقال الکترون کامل باشد و
        یون و پیوند یونی ایجاد شود (که در این صورت عدد اکسایش هر یون برابر بار یون است) و ممکن است کامل نباشد و فقط
        پیوند کوالانسی ایجاد شود <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●مثال 1:</span>
        عدد اکسایش اکسیژن و هیدروژن در مولکول آب(تصویر زیر)،با اینکه پیوند اکسیژن و هیدروژن ها یونی نیست و قطبی است اما
        در تعیین عدد اکسایش فرض میکنیم که پیوند یونی است
        <img src="H2Ooxidationnumber.png" alt="Image to magnify" class="main-image" id="mainImage"><br><br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● مثال 2:</span>عدد اکسایش یون های سدیم و
        کلر در کریستال سدیم کلرید

        <img src="NaCloxidationnumber.png" style="width: 40vw;" alt="Image to magnify" class="main-image"
          id="mainImage"><br>


        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● اکسیداسیون:</span>افزایش عدد اکسایش(مثبت
        تر شدن) با
        کاهش الکترون ، اتصال به اکسیژن و یا از دست دادن <sup>+</sup>H یا پروتون <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●کاهش(احیا):</span>
        کاهش عدد اکسایش(منفی تر شدن) با
        افزایش الکترون ، از دست دادن اکسیژن و یا اتصال به هیدروژن <br><br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="redox.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="redox.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">


        </div>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>
        در واکنش های اکسایش-کاهش الکترون پر انرژی از گونه اکسید شونده به گونه
        کاهش یابنده(احیا شونده) منتقل می
        شود و سطح
        انرژی آن پایین می آید و سطع انرژی گونه احیا شونده بالا می رود<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● مثال ها:</span><br>
        1-اکسیداسیون آهن توسط اکسیژن هوا <br>
        2-اکسیداسیون اسیدهای چرب و آزاد شدن انرژی آنها
        ها به شکل گونه های پر انرژی مثل NADH و
        FADH<sub>2</sub><br>
        3-اکسیداسیون گلوکز و آزاد شدن NADH و ATP <br>
        4-اکسیداسیون NADH و FADH<sub>2</sub> در زنجیره انتقال الکترون و انتقال
        انرژی آنها به ATP
        <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold'>●آنتی اکسیدان ها:</span>موادی که با مهار
        رادیکال های آزاد مانع
        اکسیداسیون و تخریب مولکول های مهم زیستی مثل DNA توسط رادیکال های آزاد(چون الکترون جفت نشده دارند تمایل دارند از
        اتم های دیگر الکترون
        بگیرند پس اکسید کننده هستند)می شوند و از سلول در برابر تخریب محافظت میکنند<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold'>●نکته بسیار مهم:</span>رادیکال های آزاد هم در
        متابولیسم طبیعی
        سلول تولید می شوند هم توسط آلاینده های محیطی و بدن از آن ها برای تخریب سلول های سرطانی استفاده می کند پس مقدار
        رادیکال های آزاد و آنتی اکسیدان ها باید در تعادل باشد و مقدار هر کدام بیش از حد تعادل باعث بیماری می شوند و به
        این حالت استرس اکسیداتیو گفته می شود.<br>

      </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="equation">
      <div class="h1" id="h1" style="color:#ff00f7">تعادل و اصل لوشاتلیه

        <a style="width: 100%;position: absolute;height:100% ;" href="#equation"></a>

      </div>
      <div class="content" id="content">

        </p><br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●واکنش های برگشت پذیر (یا دو طرفه یا
          تعادلی) :</span>
        واکنش هایی که فراورده ها مجددا به واکنش دهنده ها تبدیل می شوند و معادله این واکنش ها با فلش دو طرفه ⇌ نشان داده
        می شود که نشانگر واکنش رفت و برگشت است. در این واکنش ها سرعت
        واکنش رفت بیشتر از واکنش برگشت است اما بعد از مدتی سرعت واکنش
        های رفت و برگشت برابر می شود که در این حالت واکنش به یک تعادل پویا می رسد یعنی با وجود انجام واکنش های شیمیایی
        رفت و برگشت غلظت واکنش دهنده ها و فراورده ها ثابت می ماند<br>
        <video style="margin: auto;display: flex;width: fit-content" tabindex="0" controls>
          <source src="https://github.com/user-attachments/assets/a3388bd6-2f7f-499f-9a84-17a501e118aa
            " type="video/mp4">

        </video>
        <div class="description"
          style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
          <span style='display:inline-block;color:#ff00f7;font-weight: bold;'>
            شبیه سازی یک واکنش تعادلی: </span>
          بِشر خالی بزرگ در سمت راست نشانگر فراورده ها درابتدای واکنش و بشر پر در سمت چپ نشانگر
          واکنش دهنده هاست و حجم دو لیوان کوچک نشانگر سرعت واکنش رفت و برگشت است که به مرور سرعت واکنش رفت کمتر و سرعت
          واکنش برگشت بیشتر می شود و در نهایت سرعت واکنش رفت و برگشت برابر شده و واکنش به تعادل میرسد
        </div>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● واکنش های برگشت ناپذیر(یا یک طرفه):
        </span>
        واکنش هایی که فراورده ها نمی توانند دوباره به واکنش دهنده ها تبدیل شوند و با فلش یک طرفه → نشان داده می شوند<br>

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●اصل لوشاتلیه: </span>
        در واکنش های تعادلی با هر تغییر در سامانه (مثل افزودن یک واکنش دهنده و یا فراورده به محیط واکنش) تعادل به
        سمتی جابجا می شود که اثر آن تغییر تا حد امکان
        خنثی شود و مجددا تعادل برقرار شود یعنی مثلا اگر مقداری از یک ماده را به محیط اضافه کنیم واکنش برای جبران آن
        مقداری از آن را مصرف میکند و مجددا به تعادل میرسد<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●مثال : </span>

        سیستم بافری اسیدکربنیک خون شامل دو واکنش تعادلی زیر هنگام ورود اسید و یا باز به
        خون با جابجایی تعادل زیر مانع تغییر شدید pH خون می شود و pH خون را در محدوده 7.35-7.45 نگه می دارد:<br>
        <img src="buffer.png" alt="Image to magnify" class="main-image" id="mainImage">

        یعنی مثلا وقتی <sup>+</sup>H به خون وارد می شود(مرحله 1) تعادل سمت راست برای جبران به سمت چپ جابجا
        می شود
        یعنی به
        سمت مصرف <sup>+</sup>H و کاهش اثر آن و مصرف <sup>-</sup>HCO<sub>3</sub> (مرحله 2)و تولید
        H<sub>2</sub>CO<sub>3</sub> بیشتر(مرحله 3) و با این کار تعادل سمت چپ هم برای
        جبران افزایش H<sub>2</sub>CO<sub>3</sub> به سمت چپ یا واکنش دهنده ها یعنی تجزیه آن به H<sub>2</sub>O و
        CO<sub>2</sub> جابجا می شود (مرحله 4) که در نتیجه میزان آب و دی اکسید کربن افزایش می باید(مرحله 5)<br>

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●نکته:</span>دقت کنید در اصل لوشاتلیه گفتیم
        جابجایی تعادل تا حد امکان تغییر را جبران می کند نه کامل. پس وقتی ماده ای در واکنش افزایش پیدا میکند تعادل بخشی
        از مقدار افزوده شده را مصرف میکند و بخشی از آن باقی می ماند به همین دلیل در واکنش های بالا فلش افزایش
        <sup>+</sup>H و H<sub>2</sub>CO<sub>3</sub> از فلش کاهش آنها بزرگتر است<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●نکته:</span>CO<sub>2</sub> تولید شده از
        طریق ریه ها دفع می شود در نتیجه دفع آن از طریق تنفس به حفظ تعادل pH خون کمک میکندو عکس این مسئله نیز صادق است
        یعنی وقتی CO<sub>2</sub>خون مثلا به خاطر هایپوونتیلاسیون(تهویه نامناسب ریه ها) افزایش پیدا کند تعادل ها به سمت
        راست جابجا شده و باعث
        تولید <sup>+</sup>H می شود که در نتیجه خون اسیدی تر شده و pH خون کاهش می یابد
      </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="acidbase">
      <div class="h1" id="h1" style="color:#ff00f7">اسیدها و بازها

        <a style="width: 100%;position: absolute;height:100% ;" href="#acidbase"></a>

      </div>
      <div class="content" id="content">
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●نکته:</span>اسیدها و بازها به دو دسته ی
        آلی و معدنی تقسیم می شوند<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● اسیدهای آلی و معدنی:</span>موادی که یون
        <sup>+</sup>H یا
        پروتون آزاد می کنند و اگر در محیط آبی حل شوند باعث افزایش غلظت یون <sup>+</sup>H می شوند که باعث کاهش pH محیط می
        شود<br>
        مثال اسید معدنی:HCl<br>
        مثال اسید آلی:اسیدهای چرب دارای گروه عاملی کربوکسیل و گروه کربوکسیل موجود در آمینواسیدها<br>

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●نکته:</span>چون اتم هیدروژن فقط یک پروتون
        و یک الکترون دارد وقتی الکترون خود را از دست می دهد و به یون مثبت تبدیل می شود فقط یک پروتون از آن باقی می ماند.
        پس یون <sup>+</sup>H همان پروتون است که اگر در محیط آبی قرار گیرد به دلیل کوچک بودن اندازه و چگالی
        بالای بار
        مثبت سریعا با مولکول آب واکنش می دهد و یون <sup>+</sup>H<sub>3</sub>O
        (هیدرونیوم) تولید می کند<br>
        <img src="hydronium.png" alt="Image to magnify" class="main-image" id="mainImage">

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●خود یونش آب: </span>مولکول های آب در دمای
        اتاق و حالت عادی به مقدار بسیار کمی یونیزه می شوند <br>
        <img src="waterionization.png" alt="Image to magnify" class="main-image" id="mainImage">


        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● بازهای آلی:</span>
        این بازها یون <sup>+</sup>H را
        جذب می کنند و اگر در محیط آبی حل شوند با جذب یون های <sup>+</sup>H باعث کاهش غلظت آن و افزایش pH محلول می شوند و
        واکنش تعادلی خودیونش آب برای جبران افزایش <sup>+</sup>H به سمت راست جابجا می شود .در نتیجه این بازها به صورت غیر
        مستقیم باعث افزایش غلظت یون <sup>-</sup>OH می شوند.
        <img src="organicbase.png" alt="Image to magnify" class="main-image" id="mainImage">


        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● بازهای معدنی:</span>این بازها معمولا در
        محیط آبی یون
        <sup>-</sup>OH آزاد می کنند و با جابجایی تعادل خود یونش آب به سمت چپ برای جبران افزایش <sup>-</sup>OH باعث کاهش
        یون <sup>+</sup>H (غیر مستقیم)
        در محلول می
        شوند
        <img src="inorganicbase.png" alt="Image to magnify" class="main-image" id="mainImage">
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>
        در نتیجه هر دو نوع باز در نهایت باعث کاهش <sup>+</sup>H و افزایش <sup>-</sup>OH و افزایش pH محلول آبی می
        شوند<br>
        مثال:NaOH , KOH و...
        <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● نکته:</span>اسیدها و بازهای آلی بر خلاف
        اسیدها و بازهای معدنی معمولا ضعیف هستند و ممکن است در شرایط فیولوژیک پروتون آزاد و یا دریافت نکنند مثل بازهای
        آلی DNA که در pH فیزیولوژیک خنثی هستند
      </div>
      <div class="h2parrent" id="pH&pOH">
        <div class="h2" style="z-index: 400;color:#ff00f7;font-weight: bold;"> تعریف pH و pOH
          <a style="width: 100%;position: absolute;height:100% ;" href="#pH&pOH"></a>

        </div>

        <div class="content" id="content">

          <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● pH:</span>معیاری برای اندازه گیری میزان
          اسیدیته محلول های آبی که طبق فرمول زیر به صورت منفی لگاریتم غلظت <sup>+</sup>H یا
          [<sup>+</sup>H] تعریف می شود:<br>
          <img src="pH.png" alt="Image to magnify" class="main-image" id="mainImage">
          <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ● pOH:</span>معیاری برای اندازه گیری
          میزان
          قلیائیت محلول های آبی که طبق فرمول زیر به صورت منفی لگاریتم غلظت <sup>-</sup>OH یا
          [<sup>-</sup>OH] تعریف می شود:<br>
          <img src="pOH.png" alt="Image to magnify" class="main-image" id="mainImage">
          <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●نکته:</span> در دمای 25 درجه سانتی گراد
          رابطه زیر برقرار است:<br>
          <img src="pH+pOH.png" alt="Image to magnify" class="main-image" id="mainImage">
          این رابطه به دلیل خاصیت خود یونش آب است که ثابت تعادل آن در دمای 25 درجه سانتی گراد برابر
          <sup>14</sup><sup>-</sup>10 است
          و فرمول آن به شکل زیر است:<br>
          <img src="Kw.png" alt="Image to magnify" class="main-image" id="mainImage">
          به دلیل ثابت بودن غلظت آب خالص یعنی [H<sub>2</sub>O] مقدار آن در فرمول ثابت تعادل ذکر نمی شود.با جایگذاری
          مقدار
          Kw فرمول به شکل زیر در می آید که برای بدست آوردن رابطه بین pH و pOH از دو طرف این معادله لگاریتم میگیریم:
          <img src="logKw.png" alt="Image to magnify" class="main-image" id="mainImage">
          <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●نکته:</span> طبق قوانین لگاریتم که در
          بخش
          مفاهیم ریاضی مطالعه خواهید کرد لگاریتم دو عدد ضرب شده در یکدیگر برابر جمع لگاریتم جداگانه آنهاست و همچنین توان
          عدد مقابل لگاریتم را می توان در خود لگاریتم ضرب کرد:
          <img src="logKw2.png" alt="Image to magnify" class="main-image" id="mainImage">





        </div>

      </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="suffixes&prefixes">
      <div class="h1" id="h1" style="color:#ff00f7;">پیشوندها و پسوندهای مهم

        <a style="width: 100%;position: absolute;height:100% ;" href="#suffixes&prefixes"></a>

      </div>
      <div class="content" id="content">
        <br>

        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span> فیل :
        دوست دار یا متمایل/ فوب: گریز یا ترس
        </span>
        <br>

        کدگذاری: فیل‌ها خیلی دوست داشتنی هستند/ فوب مثل فوبیا( ترس شدید از یک جسم، شخص، حیوان یا موقعیت)
        <br>

        مثال ها:
        <br>
        نوکلئوفیل= نوکلئوس ( هسته ) + فیل: هسته دوست
        <br>
        الکتروفیل= الکترون + فیل:الکترون دوست
        <br>

        هیدروفیل= هیدرو (آب) + فیل :آبدوست

        <br>

        هیدروفوب= هیدرو (آب)+ فوب : آبگریز
        <br>

        لیپوفیل=لیپو(چربی) + فیل: چربی دوست یا محلول در چربی
        <br>

        آمفیفیل=آمفی (دو طرفه یا هر دو طرف) + فیل : به معنای دوگانه دوست یعنی مولکولی که هم دارای بخش قطبی و هم بخش غیر
        قطبی است مثل
        فسفولیپیدهای غشایی
        <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>

        پات : حس کردن ← مثال: آمفی پات به معنای توانایی حس دوگانه (=آمفیفیل)
        <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>


        گلیک( یا گلیکو): قند
        ←مثال:گلیکوپروتئین به معنای پروتئین دارای بخش قندی
        <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>

        نئو:جدید / ژِنِز : تولید
        ← مثال: گلوکونئوژنز به معنای تولید گلوکز جدید ،گلیکوژنز به معنای تولید گلیکوژن
        <br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>

        لیز (یا لایزیز):تخریب یا تجزیه
        ←مثال: گلیکولیز به معنای شکستن قند گلوکز، گلیکوژنولیز به معنای شکستن و تجزیه گلیکوژن<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>هایپو/هایپر: بالا،بیش از
        حد/پایین،کمتر از حد<be></be>

        مثال:هایپرتنشن یعنی فشار خون بالا ،هایپوگلایسمی یعنی کاهش قند خون، هایپرتیروئیدیسم یعنی پرکاری غده تیروئید<br>
        <span style='display:inline-block;color:#ff00f7;font-weight: bold;'> ●</span>-اِمی: پسوندی به معنای مرتبط با خون
        یا در خون
        مثلا اورمی به معنای افزایش اوره در خون به دلیل نارسایی کلیه ، آنِمی به معنای کم خونی،هایپوکسمی به معنای کاهش
        اکسیژن خون ،هایپرگلایسمی به معنای افزایش غیر طبیعی قند خون،لوسمی نوعی سرطان خون<br>

      </div>

    </div>
    </div>


    <br>
  </section>
  <br> <br> <br>
  <section class=" titr three" id="titrthree" style="box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );" dir="rtl">
    <div class="maintitr" id="maintitr" style="z-index: 1000;color:#00fff6; "> مبانی فیزیکی
      <a style="width: 100%;position: absolute;height:100% ;" href="#titrthree"></a>
    </div>
    <div class="border" style="border-radius: 5px;">
      <div class="h1parrent">

        <div class="content" id="content" style="background: rgba(0, 0, 0, 0.5);">
          <div Style="width:100%;position: relative;">
            <div id="titr3"
              style="position: relative;width: 95%;height:fit-content;margin: auto;top: 10px;text-align: right;padding: 5px;">

              <a class="tableitems three" style="color:#00fff6;background: ;" href="#dynamic">■ موجودات زنده: در حالت
                ثابت
                پویا(نه در تعادل با محیط)</a><br>
              <a class="tableitems three" style="color:#00fff6;" href="#matter&energy">■ موجودات زنده: تغییر شکل ماده و
                انرژی
                دریافتی از محیط</a><br>

              <a class="tableitems three" style="color:#00fff6;" href="#firstrule">■ قانون اول ترمودینامیک(بقای انرژی در
                طی
                تغییرات شیمیایی و فیزیکی)</a><br>

              <a class="tableitems three" style="color:#00fff6;" href="#secoundrule">■ قانون دوم ترمودینامیک (تمایل
                فرایندهای
                طبیعی به افزایش انتروپی)
              </a><br>
              <a class="tableitems three" style="color:#00fff6;" href="#order">■ ایجاد و حفظ نظم (کاهش انتروپی) نیازمند
                کار و
                انرژی </a><br>
              <a class="tableitems three" style="color:#00fff6;" href="#energycoupling">■ ارتباط واکنش ها در بیولوژی با
                جفت
                شدن انرژی واکنش ها</a><br>
              <a class="tableitems three" style="color:#00fff6;" href="#gibsfreeenergy">■ثابت تعادل (Keq) وانرژی آزاد
                استاندارد (°ΔG) :
                دو روش سنجش میزان خودبخودی بودن واکنش</a><br>
           
              <a class="tableitems three" style="color:#00fff6;" href="#enzymes">■ آنزیم ها(کاتالیزورهای زیستی): تسریع
                انجام
                واکنش های بیوشیمیایی</a><br>
              <a class="tableitems three" style="color:#00fff6;" href="#metabolism_regulation">■ تنظیم متابولیسم:رسیدن
                به
                تعادل و صرفه جویی</a><br>

            </div><br>
          </div>
        </div>
      </div>
      <div class="h1parrent" id="dynamic">
        <div class="h1" id="h1" style="color:#00fff6">موجودات زنده: در حالت ثابت پویا (نه در تعادل با محیط)
          <a style="width: 100%;position: absolute;height:100% ;" href="#dynamic"></a>

        </div>

        <div class="content" id="content">
          <span style='display:inline-block;color:#00fff6'> ●</span>
          غلظت مولکول‌ها و یون‌های داخل ارگانیسم‌ها بسیار متفاوت با محیط ← تغییر اندک ترکیبات ارگانیسم
          در طول زمان اما نه در حالت ایستا بلکه به صورت پویا یعنی تولید و تجزیه دائمی ← سنتز و تجزیه دائمی مولکول‌های
          کوچک ، ماکرومول‌کول ها و کمپلکس‌های سوپرا
          مولکولی(حالت پویا) ← جریان دائمی ماده و انرژی
          به سیستم<br>

          <span style='display:inline-block;color:#00fff6'> ●</span>مثال: 1-حمل اکسیژن از ریه‌ها به مغزتوسط مولکول های
          هموگلوبین سنتز شده در
          ماه گذشته ← تجزیه آنها
          درماه بعد و جایگزینی با هموگلوبین های جدید
          (پویایی) اما سطح هموگلوبین تقریبا همیشه ثابت(ثبات) 2-تبدیل گلوکز جذب شده از آخرین وعده غذایی به مواد دیگر تا
          آخر روزو جایگزینی با گلوکز جدید(پویایی)
          اما سطح گلوکز خون همیشه تقریباً ثابت(ثبات) ← نکته: حالت ثابت یعنی حفظ غلظت یا مقدار کلی نوعی ماده اما حالت
          ایستا یعنی حفظ مولکول‌های اولیه بدون تغییر<br>
          <span style='display:inline-block;color:#00fff6'> ● نکته:</span>
          حالت ثابت پویا بسیار دور از حالت تعادل ← نیازمند مصرف دائمی انرژی ← عدم تامین انرژی: مرگ موجود زنده
          وشروع تجزیه و رسیدن به تعادل با محیط
        </div>
      </div>
      <div class="h1parrent" id="matter&energy">
        <div class="h1" id="h1" style="color:#00fff6">موجودات زنده: تغییر شکل انرژی و ماده دریافتی از محیط
          <a style="width: 100%;position: absolute;height:100% ;" href="#matterenergy"></a>

        </div>

        <div class="content" id="content">
          <span style='display:inline-block;color:#00fff6'> ● سیستم یا سامانه: </span>
          شامل تمام اجزای مربوط به یک واکنش شیمیایی که در یک محلول اتفاق می افتد شامل واکنش دهنده‌ها ، فرآورده‌ها، محلول
          شامل آنها و
          فضای نزدیک اطراف آنها ← سامانه + محیط اطراف = جهان<br>
          <div class="image-container" id="imagecontainer">
            <img src="system.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>

          <span style='display:inline-block;color:#00fff6'> ● سامانه باز:</span>
          تبادل ماده و انرژی با محیط ← مثال:موجودات زنده و یا یک فنجان چای داغ<br>
          <span style='display:inline-block;color:#00fff6'> ● سامانه بسته:</span> تبادل انرژی و عدم تبادل ماده با محیط ←
          مثال: ظرف دربسته غیر
          عایق محتوی مایع داغ <br>
          <span style='display:inline-block;color:#00fff6'> ● سامانه ایزوله:</span> عدم تبادل ماده و انرژی با محیط ←
          مثال:فلاسک دربسته<br>
          <div class="image-container" id="imagecontainer">
            <img src="systemtypes.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <span style='display:inline-block;color:#00fff6'>● روش های تبادل انرژی با محیط توسط موجودات زنده:</span><br>
          ۱-جذب انرژی از نور خورشید (فتوسنتز کننده ها ) <br>
          ۲-جذب سوخت‌های شیمیایی (مثل گلوکز) از موجودات تولیدکنندهو استخراج انرژی با
          اکسیداسیون<br>
          ۳-دفع گرمای تولید شده در تنفس سلولی(اکسیداسیون گلوکز) به محیط توسط گیاهان و جانوران<br>

          <span style='display:inline-block;color:#00fff6'>● روش های تبادل ماده با محیط توسط موجودات زنده:</span><br>
          ۱-جذب CO<sub>2</sub> از هوا و جذب H<sub>2</sub>O از آب توسط گیاهان برای فرایند فتوسنتز<br>
          ۲-مصرف مواد غذایی توسط جانوران <br>
          ۳- دفع اکسیژن حاصل از فتوسنتز و دفع مواد زائد توسط گیاهان و دفع مدفوع و جدا شدن بخش هایی از بدن مثل ناخن و ...

        </div>
      </div>
      <div class="h1parrent" id="firstrule">
        <div class="h1" id="h1" style="color:#00fff6">قانون اول ترمودینامیک(بقای انرژی در طی تغییرات شیمیایی و فیزیکی)
          <a style="width: 100%;position: absolute;height:100% ;" href="#firstrule"></a>

        </div>

        <div class="content" id="content">
          <span style='display:inline-block;color:#00fff6'>● قانون اول ترمودینامیک(اصل بقای انرژی):</span>
          در تغییرات فیزیکی یا شیمیایی مقدار انرژی در کهکشان ثابت باقی می‌ماند اگرچه شکل انرژی ممکن است تغییر کند .یعنی
          وقتی یک سیستم انرژی مصرف می‌کند در واقع آن را از شکلی به شکل دیگر تبدیل
          می‌کند (مثال: تبدیل انرژی پتانسیل در پیوندهای شیمیایی به انرژی کینتیک گرما و حرکت).به
          زبان ساده :<br>
          <span style='display:inline-block;color:#00fff6'>
            "انرژی نه به وجود می آید و نه از بین می رود بلکه از شکلی به شکل دیگر تغییر می کند"</span><br>
          <div class="image-container" id="imagecontainer">
            <img src="firstrule.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <span style='display:inline-block;color:#00fff6'>● نکته:</span>این معادله بیان می کند که کل تغییرات
          انرژی درونی سامانه حاصل برایند گرما و کار جابجا شده بین سامانه و محیط است پس وقتی میگوییم سامانه انرژی آزاد
          کرده یعنی بخشی از انرژی درونی به شکل گرما یا کار آزاد شده(پس انرژی به وجود نمی آید) و وقتی
          می گوییم سامانه انرژی مصرف کرده یعنی سامانه انرژی محیط را به شکل گرما یا کار دریافت کرده و آن را به انرژی
          درونی مثل افزایش انرژی جنبشی مولکول ها یا تشکیل پیوندهای جدید تبدیل کرده(پس انرژی از بین نمی رود).<br>
          <span style='display:inline-block;color:#00fff6'>● نکته:</span>در فرمول بالا هر اثری(گرما یا کار) که سامانه
          روی محیط بگذارد علامت
          آن منفی است
          یعنی اگر گرما آزاد شود یا سامانه بر روی محیط کار انجام دهد (مثل هل دادن پیستون به سمت بالا در شکل زیر)علامت آن
          ها منفی است و اگر گرما وارد سامانه شود و
          یا محیط بر روی سامانه کار انجام دهد (فشرده شدن پیستون)علامت آن ها مثبت است<br>

          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="firstrule.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <span style='display:inline-block;color:#00fff6'>● نکته:</span>انرژی درونی سامانه (U که با E هم نشان داده می
          شود ) شامل تمام انرژی
          های ذخیره شده در سامانه مثل انرژی
          جنبشی مولکول ها، انرژی پتانسیل مولکول ها (مثل پیوندهای شیمیایی) و انرژی هسته ای اتم هاست<br>
          <span style='display:inline-block;color:#00fff6'>● نکته:</span>علامت Δ به معنای تغییرات
          کمیت مورد نظر است. مثلا ΔE یا ΔU به معنای تغییرات انرژی درونی سامانه است<br>
          <span style='display:inline-block;color:#00fff6;display: inline-block;text-align: right;'>● نکته:</span>
          سلول‌ها دارای توانایی
          تبدیل انرژی‌های شیمیایی ، الکترومغناطیسی ، مکانیکی و اسمزی با راندمان بسیار بالا<br>
          <span style='display:inline-block;color:#00fff6;display: inline-block;text-align: right;'>● نکته:</span>همه
          سیستم های سوختی بخشی از
          انرژی دریافتی را به شکل گرما آزاد میکنند و بخشی از آن را به کار تبدیل میکنند و به درصد کار انجام شده نسبت به
          انرژی ورودی راندمان یا بازده گفته می شود و هیچ موتور سوختی با راندمان 100% وجود ندارد <br>
          <span style='display:inline-block;color:#00fff6'>● نکته:</span> تقریباً همه موجودات زنده ← دریافت انرژی از
          خورشید به صورت مستقیم یا
          غیر مستقیم<br>
          <span style='display:inline-block;color:#00fff6'>● مستقیم ← فوتواتوتروف ها(فتوسنتز کننده‌ها):</span> تجزیه ی
          آب توسط نور و آزادسازی
          الکترون برای احیای CO<sub>2</sub> و رهاسازی O<sub>2</sub>به اتمسفر<br>
          <span style='display:inline-block;color:#00fff6'>● غیر مستقیم ← کموتروف ها و هتروتروف ها(غیر فتوسنتز
            کننده‌ها):</span> دریافت انرژی
          بااکسیداسیون فرآورده‌های حاصل از فتوسنتز ذخیره شده در گیاهان و انتقال الکترون‌های به دست آمده به
          O<sub>2</sub> اتمسفری برای تشکیل آب ، CO<sub>2</sub> و دیگر فرآورده‌ها<br>
          <span style='display:inline-block;color:#00fff6'>●</span> ایجاد چرخه جهانی CO<sub>2</sub> و O<sub>2</sub> توسط
          ← مجموع انرژی‌های
          جابجا شده از پتانسیل الکتروشیمیایی بالاتر به پتانسیل الکتروشیمیایی پایین‌تر مانند آنچه در باتری‌ها
          اتفاق می‌افتد<br>
          <span style='display:inline-block;color:#00fff6'>●</span> همه واکنش‌های درگیر در جریان الکترون‌ ها از نوع
          اکسیداسیون-احیا هستند یعنی یک واکنش دهنده توسط واکنش دهنده دیگر اکسید می شود(الکترون از دست می دهد) و واکنش
          ( الکترون)دهنده دیگر احیا می شود به دست
          <span style='display:inline-block;color:#00fff6'>●
        </div>
      </div>
      <div class="h1parrent" id="secoundrule">
        <div class="h1" id="h1" style="color:#00fff6">
          قانون دوم ترمودینامیک ( تمایل فرایندهای طبیعی به افزایش انتروپی)

          <a style="width: 100%;position: absolute;height:100% ;" href="#secoundrule"></a>

        </div>

        <div class="content" id="content">
          <span style='display:inline-block;color:#00fff6'> ● واژه انتروپی:</span>
          واژه یونانی به معنای ← تغییر و تحول || مفهوم علمی ← تصادفی بودن رفتار یا بی نظمی اجزای یک سامانه شیمیایی<br>
          <span style='display:inline-block;color:#00fff6'> ● قانون دوم ترمودینامیک:</span>
          در فرایندهای طبیعی(خودبخودی)، انتروپی جهان همیشه در حال افزایش است و گاهی ممکن است ثابت باشد اماهیچ گاه کاهش
          نمی یابد .به زبان ساده:<br>
          <span style='display:inline-block;color:#00fff6'>
            "فرآیندهای طبیعی تمایل دارند به سمت بی‌نظمی بیشتر پیش بروند"</span>
          ← نتیجه: گرما همیشه از جسم گرمتر به جسم سردتر منتقل می شود(و باعث افزایش انتروپی در جسم سردتر میگردد)
          <br>

          <div class="image-container" id="imagecontainer">
            <img src="entropy.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <span style='display:inline-block;color:#00fff6'>● نکته:</span>
          درست است که در یخچال گرما از جسم سردتر به جسم گرم تر منتقل می شود اما این فرایند خودبخودی نیست و با مصرف انرژی
          اتفاق می افتد و به محض اینکه یخچال خاموش شود دوباره دهمان آش است و همان کاسه<br>
          <span style='display:inline-block;color:#00fff6'>● نکته:</span>
          موجودات زنده نیازمند حفظ نظم درونی سلول ها و بافت ها با مصرف انرژی در مقابل تمایل طبیعت به بی نظمی<br>
          <span style='display:inline-block;color:#00fff6'>● مثال ۱:</span>
          کتری محتوی آب جوش (سامانه) در آشپزخانه (محیط) که زیر آن خاموش است ← انتقال گرما و مولکول های داغ آب به صورت
          بخار از کتری به محیط (افزایش آنتروپی) تا رسیدن به تعادل
          دما با محیط<br>
          <span style='display:inline-block;color:#00fff6'>● مثال ۲:</span>
          اکسیداسیون گلوکز (توسط اکسیژن) در موجودات هوازی (هتروتروف) ← بازگشت فرآورده‌های این واکنش (آب و
          CO<sub>2</sub>)
          به محیط ← افزایش آنتروپی محیط و ثابت باقی ماندن آنتروپی ارگانیسم و حفظ نظم داخلی آن ←
          <span style='display:inline-block;color:#00fff6'>انواع افزایش انتروپی در این واکنش:</span>
          انتشار گرما، تبدیل ۱ مولکول گلوکز و ۶ مولکول اکسیژن(۷ مولکول) به ۶ مولکول دی اکسید کربن و ۶ مولکول آب (۱۲
          مولکول) ، تبدیل
          مواد جامد (گلوکز) و گاز (اکسیژن) به مواد مایع (آب) و گاز (دی اکسید کربن)<br>
          <span style='display:inline-block;color:#00fff6'>● مثال ۳:</span>
          اطلاعات و انتروپی متن کوتاه زیر:<br>
          "اگر تصمیمی قاطع بگیری راهی برای آن پیدا میکنی. تعداد شکست های انسان های موفق به مراتب از انسان های ناموفق
          بیشتر است زیرا انسان های ناموفق وقتی شکست میخورند دیگر تلاشی نمیکنند که بخواهند شکست بخورند اما انسان های موفق
          هیچگاه تسلیم نمی شوند"<br>
          ریختن این ۱۹۴ حرف به صورت تصادفی روی صفحه به صورت بی نظم ← بدون معنی اما دارای آنتروپی بسیار بالا ← نتیجه:
          برای ذخیره اطلاعات نیاز به کاهش آنتروپی (ایجاد آنتروپی منفی)
          .با استفاده از انرژی داریم
          بر طبق این دیدگاه :<br>
          <span style='display:inline-block;color:#00fff6'>۱-</span> اطلاعات شکلی از انرژی است زیرا برای پردازش و انتقال
          و ذخیره اطلاعات به
          انرژی نیاز داریم<br>
          <span style='display:inline-block;color:#00fff6'> ۲-</span> می توان اطلاعات را نوعی " آنتروپی منفی" دانست زیرا
          برای ذخیره اطلاعات
          باید آنتروپی را کاهش دهیم ← مثال: ذخیره اطلاعات در DNA با کاهش آنتروپی نوکلئوتیدها در هنگام سنتز DNA<br>
          <span style='display:inline-block;color:#00fff6'> ۳-</span>شاخه ای از ریاضیات با نام "تئوری اطلاعات" وجود دارد
          که مبنای منطق برنامه
          نویسی کامپیوتر است و بسیار با تئوری ترمودینامیک مرتبط است<br>
          <span style='display:inline-block;color:#00fff6'>۴-</span> موجودات زنده دارای نظم بسیار بالا، ساختار غیر رندوم
          ،غنی از اطلاعات ← پس
          دارای آنتروپی بسیار پایین

        </div>

      </div>
      <div class="h1parrent" id="order">
        <div class="h1" id="h1" style="color:#00fff6">ایجاد و حفظ نظم(کاهش انتروپی) نیازمند کار و انرژی
          <a style="width: 100%;position: absolute;height:100% ;" href="#order"></a>

        </div>

        <div class="content" id="content">
          <span style='display:inline-block;color:#00fff6'>●</span>انتروپی در جهان
          همیشه در حال افزایش است ← سنتز ماکرومولکول‌ها از واحدهای مونومری نیازمند مصرف انرژی برای کاهش بی‌نظمی <br>
          <div class="image-container" id="imagecontainer">
            <img src="entropyincells.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <span style='display:inline-block;color:#00fff6'>●</span>
          انتروپی اجزای سامانه شیمیایی با علامت S تعریف می‌شود ← تغییر در مقدار بی نظمی سامانه :
          تغییر آنتروپی یا ΔS (مقدار مثبت هنگام افزایش بی‌نظمی)<br>
          <span style='display:inline-block;color:#00fff6'>●
            انرژی آزاد گیبس(G):</span>
          مقدار انرژی در دسترس هر سامانه ی بسته برای انجام کار<br>
          <span style='display:inline-block;color:#00fff6'>● نکته:</span>
          در واکنش های انرژی زا تنها بخشی از انرژی آزاد شده برای انجام کار استفاده می شود و مقداری از این انرژی
          به شکل گرما آزاد می شود یا برای افزایش آنتروپی استفاده می شود<br>

          <span style='display:inline-block;color:#00fff6'>●فرمول
            محاسبه انرژی آزاد یک سامانه بسته :</span>

          <div class="image-container" id="imagecontainer">
            <img src="gibsequation.png" style="width: 30vw;" alt="Image to magnify" class="main-image" id="mainImage">
          </div> H :انتالپی یا
          محتوای گرمایی سیستم(وابسته به تعداد و نوع
          پیوندهای شیمیایی)،S: انتروپی سیستم وT: دمای مطلق بر حسب کلوین<br>
          <span style='display:inline-block;color:#00fff6'>●</span>پس اگر واکنشی در دمای ثابت( ثابت T) انجام شود تغییرات
          انرژی آزاد طبق معادله زیر وابسته به تغییرات انتالپی و انتروپی است<br>
          <div class="image-container" id="imagecontainer">
            <img src="gibse.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <span style='display:inline-block;color:#00fff6'>●واکنش خودبخودی:</span>واکنشی که طی آن
          تغییرات انرژی آزاد
          منفی است (ΔG < 0) <br>
            <span style='display:inline-block;color:#00fff6'>●نکته مهم:</span>
            ΔGنیروی پیش‌ برنده واکنش است، اما به شرطی که
            منفی باشد. میزان منفی بودن آن نشان‌ دهنده شدت پیش‌ روی واکنش است. اگر ΔG
            صفر باشد، نیروی پیش‌ برنده‌ای وجود ندارد و واکنش به تعادل رسیده است، و اگر مثبت باشد، واکنش نیاز به دریافت
            انرژی دارد تا انجام شود.

        </div>
      </div>

      <div class="h1parrent" id="energycoupling">
        <div class="h1" id="h1" style="color:#00fff6"> ارتباط واکنش‌ها در بیولوژی با جفت شدن انرژی ها
          <a style="width: 100%;position: absolute;height:100% ;" href="#energycoupling"></a>

        </div>

        <div class="content" id="content">
          <span style='display:inline-block;color:#00fff6'>● </span>

          سلول‌ها به مولکول‌های مهمی
          مثل پروتئین ها و نوکلئیک اسیدها(DNA و RNA) نیاز دارند اما برای سنتز این مولکول های بسیار منظم(انتروپی پایین)
          به انرژی زیادی نیاز است
          ← راه حل: استفاده از انرژی آزاد شده واکنش های اگزرگونیک(انرژی زا) برای انجام واکنش های اندرگونیک (انرژی
          خواه) ← نتیجه: فرایند کلی انرژی زا (جمع تغییرات انرژی آزاد: منفی) <br>
          <span style='display:inline-block;color:#00fff6'>● معمول ترین واکنش انرژی زا:</span>
          تجزیه ATP (دارای دو پیوند پر انرژی فسفوانیدرید تامین کننده انرژی آزاد) ATP (آدنوزین تری فسفات): <br>
          <img src="ATP.png" alt="Image to magnify" class="main-image" id="mainImage">
          <span style='display:inline-block;color:#00fff6'>●نکته:</span>
          مسئله اصلی در بیوانرژتیک (مطالعه تبدیلات انرژی در موجودات زنده)
          روش جفت شدن انرژی دریافتی از متابولیسم سوخت ها یا نور با واکنش‌های انرژی خواه است<br>
          <span style='display:inline-block;color:#00fff6'>● مثال فیزیکی:</span>
          بالا آمدن جسم کوچک(واکنش انرژی خواه) در شکل زیر در اثر کار انجام شده با آزاد شدن
          انرژی پتانسیل گرانشی ذخیره شده در جسم بزرگتر با پایین آمدن آن(واکنش انرژی زا) <br>
          <span style='display:inline-block;color:#00fff6'>● مثال شیمیایی (زیستی):</span>
          فسفریلاسیون گلوکز (واکنش انرژی خواه) در اثر انرژی آزاد شده از هیدرولیزATP (واکنش انرژی زا)<br>

          <div class="image-container" id="imagecontainer">
            <img src="energycoupling.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <span style='display:inline-block;color:#00fff6'>●نکته:</span>
          اگر دو واکنش یک حد واسط مشترک داشته باشند معادله آن دو واکنش را می‌توان با هم جمع کرد ←نتیجه
          اگر یک واکنش حاصل جمع دو واکنش دیگر باشد ΔG آن واکنش حاصل جمع ΔG ‌ آن دو واکنش است<br>
          <span style='display:inline-block;color:#00fff6'>نکته:</span>
          واکنش اول:انرژی خواه ، ΔG مثبت: غیر خود به خودی -واکنش دوم: انرژی‌ زا ، ΔG منفی: خود به خودی<br>
          Pi حد واسط مشترک دو واکنش ← تولید در یک واکنش و مصرف در واکنش دیگر ← جمع دو واکنش با حذف حد واسط
          مشترک<br>
          واکنش ۳: گلوکز + ATP ← گلوکز ۶-فسفات + ADP<br>
          نتیجه: انرژی آزاد شده در واکنش ۲ > انرژی مصرفی در واکنش ۱ ← واکنش ۳: انرژی زا (ΔG منفی: خود به خودی)
          <br>
          <span style='display:inline-block;color:#00fff6'>●نکته:</span>

          اگر معادله یک واکنش را معکوس کنیم علامت آنتالپی
          (H)، آنتروپی(S) و تغییرات انرژی آزاد (ΔG) آن عوض می
          شود<br>
          <span style='display:inline-block;color:#00fff6'>●مثال :</span>
          در واکنش تجزیه زیر(تجزیه ATP) <br>
          <img src="ATP.png" alt="Image to magnify" class="main-image" id="mainImage">
          K<sub>eq</sub> = 2.22 × 10<sup>5</sup> M <br>
          °ΔG سنتز ATP از ADP و P<sub>i</sub> را در دمای 25 درجه سلسیوس محاسبه کنید<br>
          پاسخ:<br>
          T=C°+273 =25 + 273 =298K<br>
          ΔG°= -RT ln K<sub>eq</sub><br>
          ΔG°= -RT ln (2.22 × 10<sup>5</sup>) <br>
          ΔG°= -8.315 × 298 × ln (2.22 × 10<sup>5</sup>) = -30.5 kJ/mol<br>

          °ΔG بدست آمده انرژی آزاد تجزیه ی ATP است پس انرژی آزاد سنتز ATP، +30.5 kJ/mol است<br>
          نکته: ΔG سنتز ATP در سلول ها حدود 50kJ/mol است زیرا غلظت ATP ،ADP و Pi در سلول ها استاندارد( 1مولار )
          نیست<br>
          <span style='display:inline-block;color:#00fff6'>●نکته:</span> انرژی مورد نیاز واکنش های انرژی خواه صرفا از
          تجزیه ATP بدست نمی آید بلکه
          انتقال فسفات از ATP به مولکول هایی مثل گلوکز نیز بخشی از انرژی ATP را به این مولکول ها منتقل میکند تا در
          واکنش های بعدی مورد استفاده قرار گیرد

        </div>
      </div>
      <div class="h1parrent" id="gibsfreeenergy">
        <div class="h1" id="h1" style="color:#00fff6"> ثابت تعادل (Keq) وانرژی آزاد استاندارد (°ΔG) :
          دو روش سنجش میزان خودبخودی بودن واکنش
          <a style="width: 100%;position: absolute;height:100% ;" href="#gibsfreeenergy"></a>

        </div>

        <div class="content" id="content">
          <span
            style='display:inline-block;color:#00fff6;border-bottom: 1px solid;width: 100%;display: flex;justify-content: center;'>روش
            اول : ثابت تعادل(<sub>eq</sub>K) </span><br>

          <span style='display:inline-block;color:#00fff6'>● ثابت تعادل(K<sub>eq</sub>):</span>

          .بیان میزان تمایل واکنش به کامل شدن
          برای واکنش زیر:<br><br><br>
          <div class="content" id="content">

            <div class="image-container" id="imagecontainer">
              <img src="keq.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="keq.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">


          </div>

          <span style='display:inline-block;color:#00fff6'>● نکته :</span>
          K<sub>eq</sub> واحد اندازه گیری ندارد و فقط با یک عدد بیان می شود ← هر چقد بزرگتر باشد تمایل واکنش به
          سمت کامل
          شدن یعنی تبدیل همه واکنش دهنده ها به فراورده ها بیشتر است<br>
          <span style='display:inline-block;color:#00fff6'>● خارج قسمت واکنش (Q):</span>
          بیان موقعیت فعلی واکنش برای مقایسه با حالت تعادل و تعیین جهت پیشرفت واکنش و فرمول آن دقیقا مثل ثابت تعادل
          است
          با این تفاوت که در فرمول خارج قسمت غلظت لحظه ای واکنش دهنده ها و فراورده ها را استفاده میکنیم.<br>
          <span style='display:inline-block;color:#00fff6'>● مقایسه خارج قسمت واکنش و ثابت تعادل واکنش :</span><br>
          <span style='display:inline-block;color:#00fff6'>K<sub>eq</sub> > Q ←</span> تمایل واکنش به سمت راست (تولید
          فراورده بیشتر) <br>
          <span style='display:inline-block;color:#00fff6'>K<sub>eq</sub>
            < Q ←</span> تمایل واکنش به سمت چپ (تبدیل فراورده ها به واکنش دهنده ها)<br>
              <span style='display:inline-block;color:#00fff6'>K<sub>eq</sub> = Q ←</span> واکنش به تعادل رسیده
              است<br>
              <span style='display:inline-block;color:#00fff6'>●مثال:</span>
              در واکنش زیر<br>

              <img src="ATP.png" alt="Image to magnify" class="main-image" id="mainImage">


              اگر <br>
              <p style="text-align: left;direction: ltr;">
                K<sub>eq</sub> = 2 × 10 <sup>5 </sup>M
                <br>
                [ATP] = 5mM <br>
                [ADP] = 0.5mM <br>
                [P<sub>i</sub>] = 5mM <br>
              </p>
              باشد آیا این واکنش به تعادل رسیده است؟<br>
              <span style='display:inline-block;color:#00fff6'>● نکته:</span>

              P<sub>i</sub> مخفف یون فسفات یا <sup>-</sup>PO<sub>4</sub><sup>3</sup> است که حرف i در
              آن اول کلمه "inorganic"
              یا معدنی است زیرا یون فسفات در بدن جانداران ساخته نمی شود و ماده آلی نیست
              <br>
              پاسخ:<br>

              <img src="keqvsQ.png" alt="Image to magnify" class="main-image" id="mainImage">

              نتیجه:واکنش به تعادل نرسیده است<br>
              <span style='display:inline-block;color:#00fff6'>● نکته بسیار مهم:</span> ثابت تعادل همیشه مقدار مثبت
              دارد چون تقسیم دو مقدار
              مثبت است و
              هرچقد ثابت تعادل بزرگتر از 1 باشد تمایل واکنش به انجام خودبخودی و کامل شدن بیشتر
              و هرچقدر ثابت تعادل کوچکتر از یک باشد تمایل به انجام خودبخودی واکنش کمتر است و تعادل در سمت
              واکنش دهنده ها قرار دارد
              <span
                style='display:inline-block;color:#00fff6;border-bottom: 1px solid;width: 100%;display: flex;justify-content: center;'>
                روش دوم:تغییرات انرژی آزاد استاندارد (°ΔG) </span><br>


              <span style='display:inline-block;color:#00fff6'>● تغییرات انرژی آزاد استاندارد گیبس(°ΔG):</span>تغییرات
              انرژی آزاد هر واکنش
              در
              شرایط استاندارد(دمای ۲۵ درجه سانتی گراد یا 298 کلوین و فشار یک اتمسفر و غلظت یک مولار واکنش دهنده ها و
              فراورده
              ها) . این مقدار برای هر واکنش یک مقدار خاص است<br>
              <span style='display:inline-block;color:#00fff6'>●</span>
              گیبس نشان داد که تغییرات انرژی آزاد (ΔG)هر واکنش برابر انرژی آزاد استاندارد(°ΔG) آن واکنش
              بعلاوه
              اختلاف انرژی آزاد حالت استاندارد و حالت فعلی(غیر استاندارد) است که با عبارت RTlnQ بیان می شود و اثر غلظت
              های فعلی مواد را بر انرژی آزاد واکنش بیان می کند
              <img src="gibssecound.png" alt="Image to magnify" class="main-image" id="mainImage">

              <br>
              <span style='display:inline-block;color:#00fff6'>● نکته:</span>
              علامت "°" به معنای استاندارد است<br>
              <br>
              R: ثابت جهانی گازها برابر 8.315 J/mol∙K(ژول بر مول بر کلوین)<br>
              T: دمای مطلق بر حسب کلوین<br>
              ln: لگاریتم طبیعی
              (لگاریتم بر مبنای e)<br>
              <span style='display:inline-block;color:#00fff6'>● نکته: </span> وقتی R را در T ضرب میکنیم واحدهای آنها
              هم در هم ضرب می شود و
              واحد نهایی RT ژول بر مول بدست می آید که همان واحد انرژی آزاد است و RT در واقع نشانگر انرژی
              آزاد هر مول ماده است و وقتی آن را در لگاریتم طبیعی Q ضرب میکنیم اثر غلظت فعلی مواد در انرژی آزاد
              واکنش را بدست می آوریم <br>
              <span style='display:inline-block;color:#00fff6'>● نکته:</span>
              ΔG تعیین کننده ی میزان فاصله هر واکنش از حالت تعادل است و وقتی ΔG به صفر می رسد واکنش به تعادل میرسد←
              نتیجه:

              <img src="standard free energy.png" alt="Image to magnify" class="main-image" id="mainImage">

              <br>
              <span style='display:inline-block;color:#00fff6'> نتایج بدست آمده :</span><br>
              <span style='display:inline-block;color:#00fff6'>●وقتی K<sub>eq</sub> >> 1(بسیار بزرگتر از 1) :</span>
              میزان پیشرفت واکنش به سمت فراورده ها زیاد ←°ΔG یک عدد منفی بزرگ (آزاد
              شدن
              انرژی)
              <span style='display:inline-block;color:#00fff6'>●وقتی K<sub>eq</sub>
                << 1(بسیار کوچکتر از 1) :</span>
                  میزان پیشرفت واکنش کم ← °ΔG یک عدد مثبت بزرگ (نیازمند انرژی)<br>
                  <span style='display:inline-block;color:#00fff6'>● نکته:</span>

                  K<sub>eq</sub> و °ΔG ← فقط میزان پیشرفت واکنش را بیان میکنند که تا چه حد می تواند به سمت کامل شدن
                  پیش برود ← اما اطلاعاتی از سرعت واکنش نمی دهند← مطالعه سرعت
                  واکنش
                  در مبحث کینتیک(فصل آنزیم ها)<br>



                  <br>



        </div>
      </div>
      <div class="h1parrent" id="enzymes">
        <div class="h1" id="h1" style="color:#00fff6"> آنزیم ها(کاتالیزورهای زیستی):تسریع انجام واکنش های بیوشیمیایی
          <a style="width: 100%;position: absolute;height:100% ;" href="#enzymes"></a>

        </div>

        <div class="content" id="content">
          <span style='display:inline-block;color:#00fff6'>●</span>
          همه ماکرومولکول‌های زیستی دارای پایداری ترمودینامیکی کمتر نسبت به زیر واحدهای خود اما دارای پایداری کینتیکی
          بالا ←
          یعنی تجزیه غیر کاتالیز شده(بدون آنزیم) آنها بسیار کند است (پایداری در طول سال‌ها:مقیاس زمانی بزرگ نسبت به
          طول عمر
          ارگانیسم ها)<br>
          <span style='display:inline-block;color:#00fff6'>●</span>

          هر واکنش شیمیایی در یک سلول دارای یک سرعت خاص به علت حضور آنزیم‌ها (بیوکاتالیست‌ها: افزایش زیاد سرعت
          واکنش‌های
          شیمیایی خاص بدون مصرف شدن در فرایند)<br>
          <span style='display:inline-block;color:#00fff6'>● حالت گذار:</span>

          حالتی که در آن پیوندهای موجود در حال شکسته شدن و پیوندهای جدید در حال تشکیل شدن هستند ودارای
          انرژی آزاد بالاتر از واکنش دهنده‌ها و فرآورده‌هاست ← بالاترین نقطه در نمودار مختصات واکنش<br>
          <span style='display:inline-block;color:#00fff6'>● سد فعال سازی:</span>
          سد انرژیتیکی در مسیر تبدیل واکنش دهنده‌ها به فرآورده‌ها<br>
          <span style='display:inline-block;color:#00fff6'>● انرژی فعال سازی(‡ΔG):</span> تفاوت انرژی واکنش دهنده ها
          در حالت پایه و حالت
          گذار <br>
          <img src="enzymerule.jpg" alt="Image to magnify" class="main-image" id="mainImage">


          <span style='display:inline-block;color:#00fff6'>● عملکرد آنزیم‌ها:</span>
          کاتالیز واکنش‌ها با چند روش<br>
          ۱-ایجاد مسیرراحت‌ تر برای حالت گذار: سطح مکمل حالت گذار از نظر استریو شیمی ، قطبیت و بار الکتریکی ← اتصال
          آنزیم به حالت گذار: انرژی زا ← استفاده از این انرژیی برای کاهش انرژی فعال سازی و افزایش سرعت واکنش <br>
          ۲- اتصال دو یا چند واکنش دهنده به سطح آنزیم در نزدیکی یکدیگر و با ‌ جهت گیری‌ فضایی مناسب← افزایش چند برابری
          (تا 10<sup>6</sup>) احتمال برخورد مناسب بین واکنش دهنده‌ها<br>
          <span style='display:inline-block;color:#00fff6'>●</span>

          اکثر آنزیم‌ها پروتئینی (برخی مولکول‌های RNA دارای فعالیت آنزیمی) ، هر آنزیم معمولاً کاتالیز یک واکنش خاص و
          کاتالیز هر واکنش در یک سلول با آنزیم متفاوت ←نتیجه: هزاران آنزیم مختلف در یک سلول ، تعداد بالای آنزیم‌ها و
          اختصاصیت و حساسیت آنها به تنظیم ← کاهش سدهای فعال‌سازی به صورت انتخابی ← تعیین سرعت واکنش‌ها در زمان‌های
          مناسب: تعیین چگونگی انتقال انرژی و ماده به فعالیت‌های سلولی<br>
          <span style='display:inline-block;color:#00fff6'>● مسیرهای سلولی:</span>
          سازماندهی هزاران واکنش شیمیایی کاتالیز شده در سلول‌ها در توالی واکنش‌های پی در پی ← فرآورده یک واکنش ، واکنش
          دهنده واکنش بعدی<br>
          <span style='display:inline-block;color:#00fff6'>●کاتابولیسم:</span>
          مسیرهای تجزیه مواد مغذی آلی به فرآورده‌های ساده برای استخراج انرژی شیمیایی و تبدیل آنها به شکل قابل استفاده
          سلول (ATP،NADHو NADPH) ← غلظت سلولی ATP بسیار بالاتر از غلظت تعادلی آن ← ΔG تجزیه ATP یک عدد بزرگ منفی<br>
          <span style='display:inline-block;color:#00fff6'>●NADH و NADPH یا مجموعا NAD(P)H : </span>
          حامل‌های الکترون کاهش یافته حاصل واکنش‌های کاتابولیسمی ← اهدای الکترون به
          فرایندهای تولید (NADH) ATP پیش برد مراحل مسیرهای بیوسنتزی نیازمند الکترون(NADPH)
          <br>
          <span style='display:inline-block;color:#00fff6'>● آنابولیسم:</span>
          مسیرهای تبدیل پیش سازهای کوچک به مولکول‌های پیچیده بزرگ شامل پروتئین‌ها و نوکلئیک اسیدها ← واکنش های انرژی
          خواه<br>
          <img src="exergonicendergonic.jpg" style="width: 250px;" alt="Image to magnify" class="main-image"
            id="mainImage">

          <span style='display:inline-block;color:#00fff6'>● متابولیسم:</span>

          شبکه کلی مسیرهای کاتالیز شده با آنزیم شامل واکنش‌های کاتابولیک و آنابولیک
          ← ATP ( و دیگر معادل‌های انرژتیکی نوکلئوتید تری فسفات مثل NADHو...) ← ارتباط بین اجزای کاتابولیک و آنابولیک
          این شبکه<br>
          <span style='display:inline-block;color:#00fff6'>● </span>

          تشابه بالای مسیرهای واکنش‌های آنزیمی عمل کننده بر اجزای اصلی سلولی (پروتئین‌ها، چربی‌ها ، قندها و نوکلوگ
          اسیدها) در همه موجودات زنده ←
          وحدت ارکان حیات :یکی از شواهد تکامل

          <br> <br>



        </div>
      </div>


      <div class="h1parrent" id="metabolism_regulation">
        <div class="h1" id="h1" style="color:#00fff6">
          <a style="width: 100%;height: 100%;position: absolute;" href="#metabolism_regulation"></a>
          تنظیم متابولیسم: رسیدن به تعادل و صرفه جویی
        </div>

        <div class="content" id="content">
          <span style='display:inline-block;color:#00fff6'>●</span>
          سنتز هزاران نوع کربوهیدرات ، چربی ، پروتئین و نوکلئیک اسید در نسبت‌های دقیق مورد نیاز سلول
          در شرایط مختلف ← مثال: افزایش سنتز پیش سازهای پروتئین‌ها و نوکلئیک اسیدها در زمان رشد سریع سلول ← تنظیم
          آنزیم‌های اصلی مسیرهای متابولیک برای تولید مولکول های پیش ساز به مقدار مناسب <br>
          <span style='display:inline-block;color:#00fff6'>●</span>
          مثال: مسیر سنتز آمینو اسید ایزولوسین از ترئونین در پنج مرحله آنزیمی در E.coli <br>

          <img src="Isolucinpathway.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          <span style='display:inline-block;color:#00fff6'>●</span>

          تولید بیش از حد نیاز سلول ← تجمع ایزولوسین و مهار فعالیت کاتالیتیک آنزیم اول مسیر(مهار فیدبکی) ← کاهش سریع
          تولید ایزولوسین و حفظ تعادل بین تولید و مصرف حد واسط‌ های متابولیک<br>

          <span style="display:inline-block;color:#00fff6;">● سیستم بیولوژی:</span>
          مطالعه سراسری تنظیم متابولیسم (کل نگر)← مطالعه متابولیسم به شکل یک شبکه با مسیرهای در هم تنیده و
          مرتبط زیرا تغییر غلظت هر متابولیت باعث ایجاد یک اثر موجی می شود یعنی بر جریان مواد در مسیرهای دیگر اثر می
          گذارد<br>
          <span style="display:inline-block;color:#00fff6;">● نکته:</span>

          تنظیم سنتز آنزیم‌ها (در پاسخ به افزایش یا کاهش نیاز به یک فرآورده متابولیک )و تنظیم بیان ژن ← لایه‌های
          مختلف کنترل متابولیک سلولی ← ضرورت در نظر گرفتن همه لایه‌های تنظیمی در مطالعه تنظیم متابولیسم<br>


        </div>
      </div>
  </section>
  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>



  <section class=" titr four" id="titrfour" style="box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );" dir="rtl">
    <div class="maintitr" id="maintitr" style="z-index: 1000;color:#ff0000;"> مبانی ژنتیکی
      <a style="width: 100%;position: absolute;height:100% ;" href="#titrfour"></a>
    </div>
    <div class="border" style="border-radius: 5px;">
      <div class="h1parrent">

        <div class="content" id="content" style="background: rgba(0, 0, 0, 0.5);">
          <div Style="width:100%;position: relative;">
            <div id="titr4"
              style="position: relative;width: 95%;height:fit-content;margin: auto;top: 10px;text-align: right;padding: 5px;font-weight: bold;">

              <a class="tableitems four" style="color: #ff0000;" href="#geneticscontinuity">■ تداوم ژنتیک:وظیفه مولکول
                های
                DNA</a><br>
              <a class="tableitems four" style="color: #ff0000;" href="#dnasequence">■ توالی خطی DNA: کد
                کننده پروتئین ها</a><br>



            </div><br>

          </div>
        </div>
      </div>



      <div class="h1parrent" id="Geneticcontinuity">
        <div class="h1" id="h1" style="color:#ff0000">تداوم ژنتیک: وظیفه مولکول‌های DNA
          <a style="width: 100%;position: absolute;height:100% ;" href="#geneticscontinuity"></a>
        </div>

        <div class="content" id="content">
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">● خاص‌ ترین ویژگی موجودات زنده:</span>

          توانایی تولید مثل برای نسل‌های نامحدود با شباهت بسیار بالا ← تداوم صفات ارثی ←
          نشانگر ثبات ساختار مولکول‌های حاوی اطلاعات ژنتیکی در طول میلیون‌ها سال <br>
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">●مثال:</span>
          بسیاری از باکتری‌ها دارای اندازه
          ، شکل و ساختار داخلی مشابه باکتری‌های حدود ۴ میلیارد سال پیش ← نتیجه: تداوم ساختار و ترکیب نتیجه تداوم
          ساختار
          مواد ژنتیکی <br>
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">● مهمترین کشف بیولوژیکی قرن ۲۰:</span>

          کشف ماهیت شیمیایی و ساختار سه بعدی ماده ژنتیکی (دئوکسی ریبونوکلئیک اسید یا DNA ) ←
          توالی زیر واحدهای مونومری (نوکلئوتیدها) DNA← اطلاعات تشکیل همه اجزای دیگر سلول و ارائه الگو برای تولید DNA
          مشابه
          برای توزیع بین سلول‌های جدید در تقسیم سلولی<br>
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="dna.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">● DNA(دئوکسی ریبونوکلئیک اسید):</span>
          پلیمر نازک بلند ارگانیک ← در سطح اتمی دارای عرض و در مقیاس انسانی دارای طول(تا چندین سانتی متر)<br>
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">●</span>
          ویژگی‌های یک گونه شیمیایی برابر است با رفتار میانگین تعداد زیادی از مولکول‌های مشابه
          ← DNA یک استثنا است زیرا
          مولکول بسیار بزرگی است ← مثال: باکتری E.coli دارای یک مولکول DNA با ۴.۶۴ میلیون جفت نوکلئوتید ← انتقال یک کپی
          کامل به سلول‌های جدید در هر بار تقسیم سلولی ← پس رفتار میانگین در DNA معنا ندارد<br>
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">●دقت بالای همانند سازی:</span>
          اگر اولین سلول E.coli سه و نیم میلیارد سال پیش به وجود آمده باشد و فرضا هر ۱۲ ساعت یک
          بار تقسیم شده باشد (باکتری های جدید تقسیم کمتری دارند اما باکتری ها باستانی احتمالا تقسیم بیشتری داشتند) DNA
          آن چند
          بار کپی شده است ؟

        </div>
      </div>


      <div class="h1parrent" id="dnasequence">
        <div class="h1" id="h1" style="color:#ff0000">توالی خطی DNA: کننده کننده پروتئین‌ها
          <a style="width: 100%;position: absolute;height:100% ;" href="#dnasequence"></a>

        </div>

        <div class="content" id="content">
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">●</span>
          توالی خطی DNA ←نسخه برداری به شکل RNA ← تولید پروتئین با توالی خطی آمینو اسیدی ← پیچ و تاب خوردن (folding) به
          شکل سه بعدی خاص (وابسته به توالی آمینو اسیدی و تثبیت از طریق برهم کنش‌های غیر کووالانسی)<br>
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">●</span>
          توالی آمینو اسیدی ← تعیین ساختار سه بعدی پروتئین ← فولدینگ بسیاری از پروتئین‌ها به کمک چاپرون‌های
          مولکولی ← ساختار دقیق سه بعدی (کونفورماسیون بومی): تعیین کننده ی عملکرد پروتئین<br>
          <span style="display:inline-block;color:#ff0000;font-weight: bold;">●</span>
          برهمکنش غیر کووالانسی برخی
          پروتئین‌ها با دیگر ماکرو مولکول‌ها (دیگر پروتئین‌ها ، نوکلئیک اسیدها یا لیپیدها) ← ایجاد کمپلکس‌های
          سوپرامولکولی مثل کروموزوم‌ها ، ریبوزوم‌ها و غشاها ← اجزای مولکولی این کمپلکس‌ها: جایگاه‌های اتصال با اختصاصیت
          آفینیته بالا برای یکدیگر ← مونتاژ خود به خودی در سلول
          <br> <br> <br> <br> <br>
        </div>
      </div>
    </div>
    <br><br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
  </section>

  <section class=" titr five" id="titrfive" style="box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );" dir="rtl">
    <div class="maintitr" id="maintitr" style="z-index: 1000;color:#ff6831;"> مبانی سلولی
      <a style="width: 100%;position: absolute;height:100% ;" href="#titrfive"></a>
    </div>
    <div class="border" style="border-radius: 5px;">
      <div class="h1parrent">

        <div class="content" id="content" style="background: rgba(0, 0, 0, 0.5);">
          <div Style="width:100%;position: relative;">
            <div id="titr2"
              style="position: relative;width: 95%;height:fit-content;margin: auto;top: 10px;text-align: right;padding: 5px;">

              <a class="tableitems five" style="color:#ff6831;" href="#cell">■ سلول: واحد ساختاری و عملکردی همه موجودات
                زنده</a><br>
              <a class="tableitems five" style="color:#ff6831;" href="#celltypes">■ انواع سلول ها از نظر ساختار:باکتری
                ها،آرکی ها و یوکاریوت ها</a><br>

              <a class="tableitems five" style="color:#ff6831;" href="#energyresource">■ انواع سلول ها از نظر منبع انرژی
                و
                کربن</a><br>

              <a class="tableitems five" style="color:#ff6831;" href="#bactervsarchi">■ شباهت ها و تفاوت های باکتری ها و
                آرکی
                ها</a><br>
              <a class="tableitems five" style="color:#ff6831;" href="#eucaryotes">■ سلول های یوکاریوتی:دارای اندامک های
                غشایی(امکان جداسازی برای مطالعه)</a><br>
              <a class="tableitems five" style="color:#ff6831;" href="#cytoplasm">■ سیتوپلاسم:سازماندهی توسط سیتواسکلتون
                و
                بسیار پویا</a><br>
              <a class="tableitems five" style="color:#ff6831;" href="#invitro">■مطالعات In vitro(آزمایشگاهی): احتمال
                چشم
                پوشی از برهمکنش های مهم بین مولکولی</a><br>

            </div><br>
          </div>
        </div>
      </div>
      <div class="h1parrent" id="cell">
        <div class="h1" id="h1" style="color:#ff6831">سلول: واحد عملکردی و ساختاری همه موجودات زنده
          <a style="width: 100%;position: absolute;height:100% ;" href="#cell"></a>
        </div>
        <div class="content" id="content">
          <span style="display:inline-block;color:#ff6831;">●</span>
          همه سلول ها در ساده ترین و پیچیده‌ترین
          ارگانیسم ها بر خلاف تفاوت‌های ظاهری دارای ویژگی‌های پایه ای مشترک قابل مشاهده در سطح بیوشیمیایی <br><br>
          <div class="content" id="content">

            <div class="image-container" id="imagecontainer">
              <img src="cellfeatures.jpg" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="cellfeatures.jpg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">


          </div>

          <span style="display:inline-block;color:#ff6831;text-align: right;">● غشای سلولی:</span>
          دارای دو لایه فسفولیپید،
          مشخص کننده محدوده سلول، متشکل از چربی و پروتئین ← تشکیل یک سد هیدروفوب نازک ، محکم و قابل انعطاف دور سلول
          در مقابل عبور یون های معدنی و بیشتر مولکول‌های باردار و قطبی دیگر ←
          <span style="display:inline-block;color:#ff6831;text-align: right;"> پروتئین های انتقال دهنده غشایی:</span>
          انتقال یون‌ها و
          مولکول‌های خاص ، <span style="display:inline-block;color:#ff6831;text-align: right;"> پروتئین های گیرنده
            غشایی:</span> انتقال
          سیگنال به
          داخل سلول ، <span style="display:inline-block;color:#ff6831;text-align: right;"> آنزیم های غشایی:</span> شرکت
          در برخی مسیرهای
          واکنشی<br>
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="membrane.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <div class="description"
            style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
            غشای سلولی: در این مدل پروتئین های غشایی مثل گیرنده ها و کانال های پروتئینی برای درک بهتر ساختار با مدل
            روبانی نشان داده شده </div><br>
          <span style="display:inline-block;color:#ff6831;text-align: right;">● انعطاف پذیری بالای غشا: </span>

          عدم اتصال کووالانسی لیپیدها و پروتئین‌های غشایی ←انعطاف بالای غشا و قابلیت تغییر شکل و اندازه سلول
          ورود پروتئین‌ها و لیپیدهای جدید به غشا همزمان با رشد سلول ← تقسیم سلول: تولید دو سلول هر کدام دارای غشای جدا ←
          رشد و تقسیم سلول با حفظ یکپارچگی غشا<br>
          <span style="display:inline-block;color:#ff6831 ">● سیتوپلاسم:</span>

          فضای محصور توسط غشای سلولی شامل یک محلول آبی به نام سیتوسول و اجسام معلق مختلف با عملکردهای اختصاصی<br>
          <span style="display:inline-block;color:#ff6831;">● اجسام معلق در سیتوپلاسم :</span>

          اندامک های غشایی مثل میتوکندری و کلروپلاست ، ساختارهای سوپرامولکولی مانند ریبوزوم‌ها (محل سنتز
          پروتئین) و پروتئازوم‌ها (محل تجزیه پروتئین) ← رسوب با سانتریفیوژ سیتوپلاسم در ۱۵۰ هزار g (نیروی گرانش زمین)
          <br>
          <span style="display:inline-block;color:#ff6831;">● مایع سوپرناتانت:</span>
          مایع سطحی لوله آزمایش بعد از سانتریفیوژ، در سانتریفیوژ سیتوپلاسم سوپرناتانت یک محلول بسیار غلیظ به نام سیتوسول
          است شامل آنزیم‌ها
          مولکول های RNA (ریبونوکلئیک اسید) کد کننده آنها ، اجزای سازنده این ماکرومولکول‌ها (آمینو اسیدها و نوکلئوتیدها)
          ، هزاران مولکول آلی کوچک (متابولیت‌ها) ، حد واسط‌های مسیرهای بیوسنتزی و تجزیه‌ای ،کوآنزیم‌ها (ترکیبات ضروری
          برای بسیاری از واکنش‌های آنزیمی) یون‌های معدنی ( مثل:
          K<sup>+</sup> Na<sup>+</sup> Mg<sup>2</sup><sup>+</sup> Ca<sup>2</sup><sup>+</sup> <sup
            style="opacity: 0;">3</sup> )
          <br>
          <span style="display:inline-block;color:#ff6831;">●</span>
          همه سلول‌ ها حداقل در بخشی از زندگی دارای یک نوکلئوید (ناحیه بدون غشا، حاوی کروموزوم‌ها در باکتری‌ها و
          آرکی‌ها) یا یک نوکلئوس (هسته: دارای دو غشای دولایه) ← حاوی ژنوم (مجموعه کامل ژن‌ها) همانندسازی شده و ذخیره شده
          با
          پروتئین‌های همراه<br>
          <span style="display:inline-block;color:#ff6831;">● نکته مهم:</span>وقتی می گوییم غشای دولایه یعنی یک غشای
          دارای دولایه ی
          فسفولیپید(مثل غشای سلولی )
          اما وقتی می گوییم دو غشای دولایه یعنی هر کدام دولایه فسفولیپیدی دارند و جمعا چهار لایه فسفولیپید مثل غشای هسته
          سلول های
          یوکاریوتی<br>
          <p style="display: flex;width: 100%;border-bottom: 1px solid;color:#ff6831;justify-content: center;"> محدودیت
            ابعاد سلول ها وابسته به
            مقدار انتشار مورد نیاز سلول </p>
          <span style="display:inline-block;color:#ff6831">● انتشار(diffusion):</span>پدیده ای که در آن مواد
          بسیار ریز مانند
          آمینو اسیدها و قند و آب و همچنین مواد دفعی سلول از عرض غشا عبور میکنند و سرعت آن به مقدار سطح سلول
          بستگی دارد.در این فرایند، مولکول‌ها به‌طور تصادفی از ناحیه‌ای با غلظت بالا به ناحیه‌ای با غلظت پایین حرکت
          می‌کنند تا زمانی که به تعادل برسند.
          همچنین، در سلول‌ها، نوعی از انتشار به نام انتشار تسهیل‌ شده (Facilitated Diffusion) وجود دارد که از طریق
          پروتئین‌ های غشایی انجام می‌شود و به جابجایی سریع‌ تر برخی مولکول‌ های خاص کمک می‌کند<br>
          <span style="display:inline-block;color:#ff6831 ">● ابعاد سلول ها:</span>
          بیشتر سلول ها میکروسکوپی (غیر قابل مشاهده با چشم غیر مسلح)، قطر سلول‌های جانوری و گیاهی : بین ۵ تا ۱۰۰
          میکرومتر ، بسیاری از میکروارگانیسم‌های تک سلولی: فقط ۱ تا ۲ میکرومتر<br>
          <span style="display:inline-block;color:#ff6831 ">● عوامل محدود کننده ابعاد سلول:</span><br>
          ۱- حداقل ابعاد سلول باید توانایی گنجایش انواع بیومولکول‌های مورد نیاز سلول را داشته باشد ← کوچک‌ترین سلول:
          باکتری مایکوپلاسما با
          ۳۰۰ نانومتر قطر و حجم حدود <sup>14</sup><sup>-</sup>10 میلی لیتر ،ریبوزوم باکتریایی حدود ۲۰نانومتر ← اشغال بخش
          زیادی از یک
          سلول مایکوپلاسما توسط چند ریبوزوم<br>
          ۲-محدود کننده حداکثر ابعاد سلول: سرعت انتقال مواد غذایی به داخل سلول و دفع مواد زائد به بیرون سلول ← کاهش نسبت
          سطح به حجم با افزایش سایز سلول و مصرف سریع‌ تر مواد غذایی نسبت به تأمین آن در سلول های بزرگتر <br>
          <div class="wrap" id="wrap" style="position: relative;">
            <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="surface.html"></iframe>
            <div class="reload" onclick=reload()>
              <image style="width:80%;height: 80%"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
            </div>
            <div class="full">
              <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
              <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
                src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

            </div>
          </div>
          <div class="description"
            style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
            مقایسه نسبت سطح به حجم یک سلول فرضی مکعبی با هشت سلول کوچک مکعبی که مجموع حجم آنها برابر با مکعب بزرگ
            است:وقتی مکعب
            به هشت قسمت تقسیم شده سطح تماس با محیط بیشتر شده و نسبت سطح به حجم از 1.5 به 3 افزایش پیدا کرده یعنی دوبرابر
            شده</div><br>


          <span style="display:inline-block;color:#ff6831 ">● مثال:</span>
          یک سلول کوچک باکتریایی مثل
          E.coli دارای نسبت سطح به حجم بسیار بزرگ که باعث دسترسی آسان هر قسمت از سیتوپلاسم آن به مواد مغذی عبور کننده
          از غشا به داخل سلول می شود<br>
          <span style="display:inline-block;color:#ff6831 ">● راهکار افزایش سایز بدون کاهش نسبت سطح به
            حجم:</span>
          سطح بسیار پیچیده یا چین‌ دار جهت افزایش نسبت سطح به
          حجم برای افزایش سرعت جذب مواد از محیط مثلا در بسیاری از انواع سلول‌های جانوری. چون وقتی سطح سلول چین میخوره یا
          چیزی شبیه پرز داره سطح تماسش با محیط افزایش پیدا میکنه در حالیکه حجمش تابت مونده <br>
          <span style="display:inline-block;color:#ff6831 ">●نکته:</span>دلیل کاهش نسبت سطح به حجم با افزایش
          ابعاد سلول این است که
          مساحت سطح سلول با سرعت کمتری نسبت به حجم آن افزایش پیدا میکند برای مثال
          مساحت سطح یک سلول کروی تابع توان دوم شعاع سلول
          (4πr<sup>2</sup>) اما حجم آن تابع توان سوم شعاع (4/3πr<sup>3</sup>) است
          <br><br>
          <div class="content" id="content">

            <div class="image-container" id="imagecontainer">
              <img src="animalcellsurface.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="animalcellsurface.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">

            <div class="description"
              style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
              سطح سلول های لنفوسیت انسانی مانند بیشتر سلول های جانوری سطح پیچیده دارند.در این تصویر سلول ها ۱۰ تا ۱۲
              میکرومتر قطردارند اما به خاطر سطح پیچیده نسبت سطح به حجم بالاتری نسبت به یک کره ساده با قطر یکسان دارند
            </div>
          </div>

          <span style="display:inline-block;color:#ff6831 ">● ساختارهای سوپرامولکولی:</span> ریبوزوم ها(محل
          سنتز پروتئین ها) و
          پروتئازوم(محل تجزیه پروتئین ها)
          <br>
          <span style="display:inline-block;color:#ff6831 ">●
            تفاوت زیاد اندازه ماکرومولکول‌ها و زیر واحدهای مونومری آنها:</span>
          برای مثال مولکول آلانین با طول کمتر از نیم
          نانومتر ← مولکول هموگلوبین (مولکول‌های حمل کننده اکسیژن در اریتروسیت‌ها یا گلبول‌های قرمز) شامل حدود ۶۰۰ آمینو
          اسید در ۴ زنجیره بلند و فولد شدن در اشکال کروی و تجمع در یک ساختار با قطر پنج و نیم نانومتر ← پروتئین‌ها بسیار
          کوچک‌تر از ریبوزوم (با قطر حدود ۲۰ نانومتر ) ← ریبوزوم بسیار کوچکتر از اندامک‌هایی مثل میتوکندری (با قطر حدود
          یک میکرومتر) ←نتیجه: تفاوت زیاد ابعاد سلولی و بیومولکول ها <br>
          <span style="display:inline-block;color:#ff6831 ">●</span>
          اتصال زیر واحدهای مونومری پروتئین‌ها ، نوکلئیک اسیدها و پلی ساکاریدها با پیوند کوالانسی ←اما در کمپلکس‌های
          سوپرامولکولی: کنار هم نگه داشتن ماکرو مولکول‌ها با تعداد زیادی برهمکنش‌ ضعیف غیر کوالانسی(مثل پیوندهیدروژنی،
          پیوند یونی و برهمکنش های واندروالسی) که هر کدام بسیار ضعیف تر از پیوند کوالانسی هستند اما چون تعداد آن ها زیاد
          است نیروی قابل توجهی ایجاد میکنند<br><br>
          <div class="content" id="content">

            <div class="content" id="content">

              <div class="image-container" id="imagecontainer">
                <img src="monomers-to-cell.jpg" style="60vw" alt="Image to magnify" class="main-image" id="mainImage">
              </div>
              <div class="magnifier-view" id="magnifierView">
                <img src="monomers-to-cell.jpg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
              </div>
              <img class="zoomin" id="zoomin"
                style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
                src="zoomin.png">
              <img class="zoomout" id="zoomout"
                style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
                onclick="zoomo()" src="zoomout.png">


            </div>

          </div>
        </div>
      </div>
      <div class="h1parrent" id="celltypes">
        <div class="h1" id="h1" style="color:#ff6831"> انواع سلول‌ ها از نظر ساختار: باکتری ها ، آرکی‌ ها و یوکاریوت‌ ها
          (درخت زندگی و علم فیلوژنتیک )
          <a style="width: 100%;position: absolute;height:100% ;" href="#celltypes"></a>
        </div>
        <div class="content" id="content">
          <span style="display:inline-block;color:#ff6831 ">●</span>
          پیشرفت تکنیک‌های سریع و ارزان تعیین توالی DNA ← شناسایی شباهت‌ های توالی ژن‌های جانداران ← دسته‌بندی جانداران
          در سه گروه بزرگ (دامین‌ها): تعیین سه شاخه درخت تکاملی زندگی ← گروه یوکاریوت ها( سلول های دارای هسته
          غشادار)و دو گروه بزرگ میکروارگانیسم‌های تک سلولی شامل:
          باکتری‌ها (در خاک ، آب‌های سطحی و بافت‌های دیگر جانداران یا موجودات در حال تجزیه)و آرکی‌ها (درمحیط‌های
          افراطی
          مثل دریاچه‌های نمک ،چشمه‌های آب داغ ، باتلاق‌های به شدت اسیدی و عمق اقیانوس‌ ها)<br><br>
          <div class="content" id="content">

            <div class="image-container" id="imagecontainer">
              <img src="tree of life.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="tree of life.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">

            <div class="description"
              style="text-align:center;font-size: x-small;width:100%;padding:5px;position: relative;margin: auto;">
              درخت زندگی یا درخت خانواده:نشانگر ارتباط بین جانداران از نظر تکامل و جد مشترک آنها </div>
          </div>
          <br>
          <span style="display:inline-block;color:#ff6831 ">●فیلوژنتیک:</span>

          مطالعه تاریخ تکاملی و ارتباط بین جانداران و دسته بندی آنها در درخت زندگی
          <span style="display:inline-block;color:#ff6831 ">●</span>

          شواهد موجود نشان دهنده ارتباط نزدیک‌تر بین آرکی‌ها و یوکاریوت ها در درخت تکاملی ← مشتق شدن یوکاریوت ها و
          آرکی‌هااز یک شاخه ← نتیجه:ارتباط نزدیک‌تر دامین یوکاریوت ها و آرکی‌ها نسبت به باکتری‌ها<br>
          <span style="display:inline-block;color:#ff6831 ">●</span>

          تقسیم دامین‌های آرکی‌ها و باکتری‌ها به زیر گروه‌های مختلف بر اساس زیستگاه آنها ← زیستگاه‌های هوازی: غنی از
          اکسیژن ، برخی ارگانیسم ها در این زیستگاه‌ها با انتقال الکترون‌های مولکول‌های سوختی به اکسیژن انرژی کسب می
          کنند
          زیستگاه‌های غیر هوازی: خالی از اکسیژن ، سازگاری میکروارگانیسم‌ها با محیط ← دریافت انرژی با انتقال الکترون به
          نیترات (تشکیلN2)، سولفات (تشکیلH2S) یا CO2(تشکیلCH4) ، بسیاری غیر هوازی اجباری: مرگ در حضور اکسیژن ، برخی
          غیرهوازی اختیاری: زنده ماندن در حضور یا عدم حضور اکسیژن

        </div>
      </div>
    </div>
    <div class="h1parrent" id="energyresource">
      <div class="h1" id="h1" style="color:#ff6831"> انواع سلول ها از نظر منبع انرژی و کربن(پیش سازهای
        بیوسنتزی)
        <a style="width: 100%;position: absolute;height:100% ;" href="#energyresource"></a>
      </div><br>
      <div class="content" id="content">

        <div class="image-container" id="imagecontainer">
          <img src="energyresource.png" alt="Image to magnify" class="main-image" id="mainImage">
        </div>
        <div class="magnifier-view" id="magnifierView">
          <img src="energyresource.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
        </div>
        <img class="zoomin" id="zoomin"
          style="backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
          src="zoomin.png">
        <img class="zoomout" id="zoomout"
          style="backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
          onclick="zoomo()" src="zoomout.png">

      </div>

      <div class="content" id="content">
        <span style="display:inline-block;color:#ff6831">● نکته:</span>
        در نامگذاری اول منبع انرژی ذکر می شود سپس منبع کربن پس
        فتواتوتروف ها با استفاده از نور خورشید و کمواتوتروف ها با استفاده از انرژی مواد شیمیایی مواد مورد نیاز خود
        را سنتز میکنند <br>
        <span style="display:inline-block;color:#ff6831">● اتوتروف:</span>
        اتو(خود)+تروف(تغذیه)=سنتز بیومولکول های مورد نیاز
        مستقیما از CO<sub>2</sub> <br>
        <span style="display:inline-block;color:#ff6831">● هتروتروف:</span>
        دریافت برخی مواد آلی از دیگر موجودات<br>
        برخی کموتروف ها ← اکسیداسیون سوخت‌های معدنی مثل: اکسیداسیون HS به S، S به NO<sup>-2</sup>
        ،SO<sub>4</sub><sup>2-</sup>به NO<sup>-3</sup> یا
        Fe<sup>+2</sup> به Fe<sup>+3</sup><br>
        <span style="display:inline-block;color:#ff6831">● نکته:</span>
        بسیاری از ارگانیسم‌ها توانایی دریافت انرژی و کربن از بیش از یک منبع در شرایط محیطی و رشدی مختلف

      </div>
    </div>
    <div class="h1parrent" id="bactervsarchi">
      <div class="h1" id="h1" style="color:#ff6831"> شباهت‌ها و تفاوت‌های باکتری‌ها و آرکی‌ها
        <a style="width: 100%;position: absolute;height:100% ;" href="#bactervsarchi"></a>
      </div>
      <div class="content" id="content">
        <span style="display:inline-block;color:#ff6831;">● اجزای اصلی یک باکتری</span>
        <div class="wrap" id="wrap" style="position: relative;">
          <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="bacteria.html"></iframe>
          <div class="reload" onclick=reload()>
            <image style="width:80%;height: 80%"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
          </div>
          <div class="full">
            <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
            <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

          </div>
        </div>
        <span style="display:inline-block;color:#ff6831;">● باکتری اشریشیا کُلی( E.coli ):</span>
        مطالعه شده ترین باکتری ، همزیست بدون ضرر روده انسان ، سلول بیضی شکل با طول حدود ۲ میکرومتر و قطر
        کمتر از یک میکرومتر ( دیگر باکتری‌ها دارای اشکال کروی یا میله‌ای و برخی بسیار بزرگتر) ، دارای غشای خارجی محافظ
        و
        غشای پلاسمایی داخلی دربرگیرنده سیتوپلاسم و ناحیه نوکلئوید، بین دو غشا: یک لایه نازک قوی از یک پلیمر با وزن
        مولکولی بالا به نام پپتیدوگلیکان ← تعیین کننده شکل و استحکام سلول ← پوشش سلولی: غشای پلاسمایی + لایه‌های
        خارجی <br>
        <span style="display:inline-block;color:#ff6831;">● تفاوت غشای پلاسمایی باکتری‌ها و آرکی ها:</span>
        هر دو دارای دو لایه نازک لیپیدی همراه با پروتئین های مختلف اما غشای پلاسمایی آرکی‌ها با لیپیدهای بسیار متفاوت
        از
        باکتری‌ها
        و هر دو دارای گروه‌هایی با پوشش‌های اختصاصی<br>
        <span style="display:inline-block;color:#ff6831;">● انواع باکتری ها از نظر پوشش:</span><br>
        <span style="display:inline-block;color:#ff6831;"> ۱-باکتری‌های گِرَم مثبت:</span>
        ( با رنگ کریستال ویولت بنفش)قابلیت رنگ آمیزی با روش گرم،
        دارای پپتیدو گلیکان خارجی ضخیم اما فاقد غشای خارجی<br>
        <span style="display:inline-block;color:#ff6831;"> ۲-باکتری‌های گرم منفی:</span>
        عدم پذیرش رنگ در روش گرم (از رنگ صورتی سافارین به عنوان رنگ آمیزی ثانویه برای گرم منفی ها استفاده می شود تا
        بهتر
        بتوان باکتری های گرم مثبت و منفی را زیر میکروسکوپ تشخیص داد)،
        غشای خارجی متشکل از دو لایه لیپیدی با لیپوپلی ساکاریدهای پیچیده و پروتئین‌هایی به نام پورین (کانال های غشایی
        برای انتشار ترکیبات با وزن مولکولی پایین و آهن از غشای خارجی) <br><br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="gram-bacteria.jpeg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="gram-bacteria.jpeg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>
        <div class="wrap" id="wrap" style="position: relative;">
          <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="gram+.html"></iframe>
          <div class="reload" onclick=reload()>
            <image style="width:80%;height: 80%"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
          </div>
          <div class="full">
            <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
            <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

          </div>
        </div>

        <div class="wrap" id="wrap" style="position: relative;">
          <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="gram-.html"></iframe>
          <div class="reload" onclick=reload()>
            <image style="width:80%;height: 80%"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
          </div>
          <div class="full">
            <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
            <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

          </div>
        </div>

        <div class="wrap" id="wrap" style="position: relative;">
          <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="archea.html"></iframe>
          <div class="reload" onclick=reload()>
            <image style="width:80%;height: 80%"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
          </div>
          <div class="full">
            <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
            <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

          </div>
        </div>
        <span style="display:inline-block;color:#ff6831;">● غشای پلاسمایی آرکی ها:</span>
        ساختار خارج از غشای پلاسمایی بسیار
        متنوع اما همه دارای یک لایه شبه پپتیدوگلیکان یا پروتئین (استحکام پوشش سلولی)<br>
        <span style="display:inline-block;color:#ff6831;">● سیتوپلاسم E.coli: </span>
        شامل حدود ۱۵ هزار ریبوزوم ، تعداد متفاوتی (از ده تا هزاران) کپی از آنزیم های مختلف ، حدود
        ۱۰۰۰ ترکیب آلی با وزن مولکولی کمتر از هزار ( متابولیت‌ها و کوفاکتورها) و انواع یون‌های معدنی ، ناحیه
        نوکلئوید شامل یک مولکول DNAحلقوی و سیتوپلاسم شامل یک یا چند DNA کوچکتر حلقوی به نام پلاسمید (در طبیعت:برخی
        ایجاد
        مقاومت به توکسین‌ها و آنتی بیوتیک‌ها در محیط ، در آزمایشگاه: قابلیت دستکاری به عنوان ابزار قدرتمند مهندسی
        ژنتیک)
        ←
        <span style="display:inline-block;color:#ff6831;">دیگر گونه‌های باکتریایی و آرکی‌ها:</span>
        دارای مجموعه مشابه بیومولکول‌ها اما هر گونه دارای ویژگی‌های اختصاصی
        متابولیک و فیزیکی مرتبط با محل زندگی و منابع غذایی <br>
        <span style="display:inline-block;color:#ff6831;">●سیانوباکتری :</span>
        غشای داخلی اختصاص یافته برای به دام
        انداختن انرژی نوری<br>
        <span style="display:inline-block;color:#ff6831;">● بسیاری از آرکی ها:</span>
        زندگی در محیط‌های افراطی و سازگاری بیوشیمیایی برای بقا در دماهای به شدت بالا ، فشار بالا
        یا غلظت بالای نمک <br>
        <span style="display:inline-block;color:#ff6831;">●</span>
        تفاوت در ساختار ریبوزوم اولین نشانه یافت شده در تفاوت باکتری‌ها و آرکی‌ها<br>
        <span style="display:inline-block;color:#ff6831;">●</span>
        بیشتر باکتری‌ها
        (شامل E.coli) به صورت سلول‌های مجزا اما اغلب تجمع در بیوفیلم ها (چسبیدن تعداد زیادی سلول به یکدیگر و به بستر
        جامد در زیر یا روی سطح آبی ) ← برخی گونه‌های باکتری‌هایی (مثال: میکسوباکتری) ← رفتار اجتماعی ساده، تشکیل
        توده های چند سلولی در پاسخ به سیگنال بین سلول‌های مجاور

      </div>
    </div>
    <div class="h1parrent" id="eucaryotes">
      <div class="h1" id="h1" style="color:#ff6831"> سلول‌های یوکاریوتی: دارای اندامک های غشایی ← امکان جداسازی برای
        مطالعه
        <a style="width: 100%;position: absolute;height:100% ;" href="#eucaryotes"></a>
      </div>
      <div class="content" id="content">
        <div class="wrap" id="wrap" style="position: relative;">
          <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="animal cell.html"></iframe>
          <div class="reload" onclick=reload()>
            <image style="width:80%;height: 80%"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
          </div>
          <div class="full">
            <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
            <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

          </div>
        </div>
        <span style="display:inline-block;color:#ff6831;text-align: center;width: 100%;display: block;">سلول
          جانوری</span>
        <br><br><br>
        <div class="wrap" id="wrap" style="position: relative;">
          <iframe class="iframe" id="iframe" loading="lazy" tabindex="0" data-src="plant cell.html"></iframe>
          <div class="reload" onclick=reload()>
            <image style="width:80%;height: 80%"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/refresh.png"></image>
          </div>
          <div class="full">
            <image class="fullpng" id="full1" style="width:80%;height: 80%;position:absolute;visibility: visible;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen.png"></image>
            <image class="fullpng" id="full2" style="width:80%;height: 80%;position:absolute;visibility: hidden;"
              src="https://raw.githubusercontent.com/Science2023/3dbiochemistry/main/fullscreen1.png"></image>

          </div>
        </div>
        <span style="display:inline-block;color:#ff6831;text-align: center;width: 100%;display: block;">سلول
          گیاهی</span>
        <span style="display:inline-block;color:#ff6831;">●</span>
        سلول‌های یوکاریوتی معمولاً بسیار بزرگتر از باکتری‌ها ← ۵ تا ۱۰۰ میکرومتر قطر با حجم ۱۰۰۰ تا یک میلیون برابر
        بزرگتر از باکتری ← شاخصه اصلی تفاوت یوکاریوت‌ها با باکتری ها: هسته و اندامک های غشادار متنوع با عملکردهای
        اختصاصی ← میتوکندری (محل بیشتر واکنش‌های استخراج انرژی سلول) ، شبکه آندوپلاسمی و کمپلکس گلژی ( نقشه محوری در
        سنتز و پردازش لیپیدها و پروتئین‌های غشایی) ، پروکسی زوم‌ها (اکسیداسیون اسیدهای چرب بلند زنجیر سم زدایی
        گونه‌های فعال اکسیژن) ، لیزوزوم‌ها (دارای آنزیم‌های هضم کننده برای تجزیه مواد زائد سلولی) واکوئل (سلول های
        گیاهی ، ذخیره مقدار زیادی اسیدهای آلی)، کلروپلاست‌ها(سنتز ATP با استفاده از نور خورشید در فرایند فتوسنتز)و
        در سیتوپلاسم بسیاری از سلول‌ها گرانول‌ها یا قطرات شامل مواد مغذی ذخیره شده مثل نشاسته و چربی<br>
        <span style="display:inline-block;color:#ff6831;">● اولین مرحله خالص سازی یک آنزیم:</span>
        جداسازی اندامک‌ها از سیتوسول و از یکدیگر (برای مطالعه ساختار و عملکرد آنها) به روش فراکسیناسیون سلول: تخریب
        آرام
        سلول‌های داخل محلول با برش فیزیکی ← پاره شدن غشای پلاسمایی و سالم ماندن
        بیشتر اندامک‌ها ← سانتریفیوژ محلول همگن (هوموژنه) ← رسوب اندامک‌هایی مثل هسته ، میتوکندری و لیزوزوم‌ها
        در سرعت‌های مختلف به علت تفاوت در اندازه ← ویژگی‌های اندامک‌ هابا همین روش اثبات شده اند: لیزوزوم‌ها ← دارای
        کننده، میتوکندری ← دارای آنزیم‌های اکسیداتیو و کلروپلاست‌ها ← دارای رنگیزه‌های فتوسنتزی<br>
        <span style="display:inline-block;color:#ff6831;">●اولین مرحله خالص سازی یک آنزیم:</span>
        جداسازی اندامک غنی از آنزیم مورد نظر<br><br><br>
        <div class="content" id="content">
          <div class="image-container" id="imagecontainer">
            <img src="cell fractionation.jpg" style="width:300px" alt="Image to magnify" class="main-image"
              id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="cell fractionation.jpg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>
        <span style="display:inline-block;color:#ff6831;">● نکته:</span>
        واحد سانتریفیوژ معمولاً به عنوان "g" (شتاب گرانشی زمین) بیان می‌شود. در واقع، در فرآیند سانتریفیوژ، نیروی گریز
        از مرکز به گونه‌ای اعمال می‌شود که می‌تواند چند برابر نیروی گرانش زمین (g) باشد. این نیروی گریز از مرکز باعث
        جداسازی ذرات معلق در مایعات می‌شود و این جداسازی بر اساس چگالی و اندازه ذرات انجام می‌گیرد. به طور خاص، اگر در
        یک سانتریفیوژ نیروی گریز از مرکز معادل "n" برابر با گرانش زمین باشد، این نشان‌دهنده‌ی شتابی است که به محلول
        اعمال می‌شود و به جداسازی مؤثر ذرات کمک می‌کند<br>
        <span style="display:inline-block;color:#ff6831;">● سوپرناتانت(supernatant):</span>مایع بالای لوله آزمایش بعد
        از سانتریفیوژ و رسوب
        ذرات سنگین تر در ته لوله <br>
        <span style="display:inline-block;color:#ff6831;">● پلت(pellet):</span>
        به توده ای گفته می شود که به علت چگال تر بودن در لوله آزمایش ته نشین می شود<br>
        <img src="supernatant.jpg" alt="Image to magnify" class="main-image" id="mainImage">


        <br><br><br>
        <div class="content" id="content">
          <div class="image-container" id="imagecontainer">
            <img src="pellet.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="pellet.jpg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>
        <span style="display:inline-block;color:#ff6831;">● نکته:</span>حواستون باشه با پلیت(plate) اشتباه نگیرید که
        در میکروبیولوژی برای
        کشت
        میکروارگانیسم ها استفاده میشه و معمول ترین شون پِتری دیش هست که دایره ای شکل و شفاف با یک درپوشه.آفرین

        <img src="plate.webp" alt="Image to magnify" class="main-image" id="mainImage">
        <span style="display:inline-block;color:#ff6831;width: 100%;justify-content: center;display: flex;"> پلیت(
          پتری دیش) </span>

        <span style="display:inline-block;color:#ff6831;">● هموژنیزاسیون:</span>هم زدن محلول حاوی سلول ها توسط
        هموژنایزر که باعث یک دست شدن
        یا هموژنیزه
        شدن محلول می شود.در بیوشیمی هموژنیزاسیون علاوه بر یک دست شدن محلول باعث پارگی دیواره سلولی و غشای سلولی و آزاد
        شدن اندامک ها و
        پروتین های محلول در سیتوپلاسم می شود<br><br>
        <div class="content" id="content">
          <div class="image-container" id="imagecontainer">
            <img src="homogenizer.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="homogenizer.jpg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>


      </div>
    </div>
    <div class="h1parrent" id="cytoplasm">
      <div class="h1" id="h1" style="color:#ff6831"> سیتوپلاسم توسط سیتواسکتون سازماندهی شده و بسیار پویاست
        <a style="width: 100%;position: absolute;height:100% ;" href="#cytoplasm"></a>
      </div>

      <div class="content" id="content">


        <span style="display:inline-block;color:#ff6831;">●</span>
        مطالعات با میکروسکوپ فلورسانس ← کشف چندین رشته‌ی (فیلامنت) متقاطع در سلول‌های یوکاریوتی
        تشکیل دهنده ساختار سه بعدی شبکه ای در هم تنیده به نام سیتواسکلتون <br>
        <span style="display:inline-block;color:#ff6831;">●سه نوع فیلامنت سیتوپلاسمی یوکاریوتی :</span>
        اکتین‌ ها یا میکروفیلامنت ها ، میکروتوبول‌ها و فیلامنت‌های حد واسط (تفاوت در عرض (از حدود ۶ نانومتر تا ۲۲
        نانومتر)، ترکیب و
        عملکرد اختصاصی) <br>
        <span style="display:inline-block;color:#ff6831;">●نکته:</span>
        توبول یعنی ساختار لوله ای شکل تو خالی و میکروتوبول یعنی ساختارهای ریز لوله ای<br>
        <span style="display:inline-block;color:#ff6831;">●عملکرد فیلامنت ها: </span>
        شرکت در ساختار و سازماندهی سیتوپلاسم و شکل سلول ،علاوه بر این اکتین‌ها و میکروتوبول‌ها کمک به حرکت اندامک‌ها
        یا
        کل سلول، جوانه زنی وزیکول از یک اندامک و پیوستن به یک اندامک دیگر،حرکت اندامک‌ها در سیتوپلاسم در طول
        فیلامنت‌های
        پروتئینی به کمک پروتئین‌های موتوری وابسته به انرژی<br>
        <span style="display:inline-block;color:#ff6831;">●ساختار فیلامنت ها:</span>
        دارای زیر واحدهای پروتئینی ساده با تجمعات غیر کوالانسی
        برای تشکیل فیلامنت‌های با ضخامت یکسان ، ساختار پویا ( تجزیه و تشکیل دائمی ) ، بدون مکان ثابت (تغییر مکان در
        میتوز ، سیتوکینز ، حرکت آمیبی یا دیگر تغییرات شکل سلول) ، تنظیم تجزیه و تشکیل و تعیین مکان همه فیلامنت‌ها توسط
        دیگر پروتئین‌ها (عامل اتصال یا تجمع فیلامنت‌ها یا جابجایی اندامک های سیتوپلاسمی در طول فیلامنت‌ها)<br>
        <br><br>
        <div class="content" id="content">
          <div class="image-container" id="imagecontainer">
            <img src="cytoskeleton1.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="cytoskeleton1.jpg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png"><br><br>

        </div>
        <div class="content" id="content">
          <div class="image-container" id="imagecontainer">
            <img src="cytoskeleton2.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="cytoskeleton2.jpg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>
        <span style="display:inline-block;color:#ff6831;">●سنتروزوم: </span>
        ساختاری متشکل از سانتریول ها که وظیفه تشکیل رشته های دوک تقسیم(spindle fibers ) را بر عهده دارد. راستی تا حالا
        فکر کردی چرا میگن دوک تقسیم؟
        حالا بهت میگم. دوک ی وسیله نخ ریسیه که تو تلویزیون دیدی قدیما باهاش پنبه رو به نخ تبدیل میکردن.چون رشته های
        میکروتوبول موقع تقسیم ی سرشون تو سنتروزوم هست و سر دیگه شون به سمت مرکز سلول باز شده و کل رشته ها با هم ی
        ساختار
        شکل شبیه دوک ساختن (دو سر باریک و قسمت وسط پهن)<br>
        <img src="spindle.jpg" style="width: 200px;" alt="Image to magnify" class="main-image" id="mainImage"><br>
        <img src="spindle2.jpg" alt="Image to magnify" class="main-image" id="mainImage">

        <span style="display:inline-block;color:#ff6831;">●کینتوکور(kinetochore): </span>
        ساختار پروتئینی که در وسط کروموزوم های مضاعف شده بر روی سِنترومر (محل اتصال دو کروماتید خواهری به یکدیگر) قرار
        دارد و هنگام تقسیم
        سلول میکروتوبول ها به این ساختار متصل شده و کروموزوم ها را به قطبین حرکت می دهند<br>
        <img src="kinetochore.jpg" alt="Image to magnify" class="main-image" id="mainImage">

        <span style="display:inline-block;color:#ff6831;">●نکته:</span>
        باکتری‌ها دارای پروتئین‌های شبه اکتین با نقش مشابه اکتین‌های یوکاریوتی<br>
        <span style="display:inline-block;color:#ff6831;">● نکته:</span>
        فیلامنت های سیتواسکلتون می توانند به واحدهای سازنده تجزیه شده و مجددا در جای دیگری از سلول تشکیل شوند<br>

        <span style="display:inline-block;color:#ff6831;">●سیستم غشایی داخلی:</span>
        جداسازی فرایندهای متابولیک اختصاصی و مهیا کردن سطوحی برای واکنش‌های آنزیمی خاص<br>
        <span style="display:inline-block;color:#ff6831;">●مکانیزم های انتقال مواد:</span>
        اگزوسیتوز (ترشح مواد تولیدی سلول) و اندوسیتوز (جذب مواد خارج سلولی) ← نیازمند شکاف و
        ادغام غشا <br>
        <span style="display:inline-block;color:#ff6831;">●</span>

        سازماندهی منظم و غیر تصادفی ساختار سیتوپلاسم ← تنظیم دقیق حرکت و جاگیری اندامک ها و عناصر سیتو اسکلتون
        و در مراحل خاصی از زندگی سلول یوکاریوتی مثل وقایع میتوز: سازماندهی مجدد دقیق و هماهنگ سلول<br>
        <span style="display:inline-block;color:#ff6831;">●</span>

        برهم کنش‌های سیتواسکلتون و اندامک‌ها ← غیر کوالانسی ، برگشت پذیر و تنظیم دقیق در پاسخ به سیگنال‌های داخل
        سلولی و خارج سلولی


      </div>
    </div>
    <div class="h1parrent" id="invitro">
      <div class="h1" id="h1" style="color:#ff6831">مطالعات آزمایشگاهی (In vitro): احتمال چشم پوشی از برهمکنش‌های
        مهم
        بین مولکولی
        <a style="width: 100%;position: absolute;height:100% ;" href="#invitro"></a>
      </div>
      <div class="content" id="content">
        <br><br><br><br>
        یکی از روش‌های فهم فرایندهای بیولوژیک:مطالعه آزمایشگاهی مولکول‌های خالص سازی شده بدون تداخل دیگر مولکول‌های
        حاضر در سلول سالم (In vivo) ← ارائه اطلاعات زیاد اما تفاوت زیاد بین لوله آزمایش و داخل سلول ← دلیل: حذف
        اجزای
        مداخله‌ گر حیاتی برای عملکرد بیولوژیک یا تنظیم مولکول خالص سازی شده در فرایند خالص سازی ← مثال: مطالعه
        آزمایشگاهی آنزیم‌ها معمولاً درغلظت های بسیار پایین در محلول‌های آبی کاملاً هم زده شده ← اما یک آنزیم در سلول
        به صورت محلول یا معلق در سیتوسول ژل مانند با هزاران پروتئین دیگر (برخی اتصال به آن آنزیم و اثر بر فعالیت آن)
        ،
        ی آنزیم‌ها اجزای کمپلکس‌های چند آنزیمی (انتقال واکنش دهنده‌ها به صورت کانالی از یک آنزیم به آنزیم دیگر بدون
        ورود به حلال)<br>
        به علت وجود همه ماکرومولکول‌های شناخته شده در سلول← سیتوسول بسیار شلوغ ← کاهش سرعت انتشار ماکرومولکول‌ها در
        سیتوسول به علت برخورد دیگر مولکول‌ها ← نتیجه: رفتار یک مولکول در سلول ممکن است بسیار متفاوت از محیط
        آزمایشگاهی
        باشد ← چالش مهم در بیوشیمی: درک اثرات سازماندهی سلولی و تجمعات ماکرومولکولی بر عملکرد آنزیم‌ها و دیگر
        بیومولکول‌ها برای درک عملکرد آنها در سلول

      </div>
    </div>
  </section>
  <br><br>
  <br>
  <br>


  <section class=" titr six" id="titrsix" style="box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );" dir="rtl">
    <div class="maintitr" id="maintitr" style="z-index: 1000;color:#6bff00; "> مبانی تکاملی و
      منشأ حیات
      <a style="width: 100%;position: absolute;height:100% ;" href="#titrsix"></a>
    </div>
    <div class="border" style="border-radius: 5px;">
      <div class="h1parrent">

        <div class="content" id="content" style="background: rgba(0, 0, 0, 0.5);">
          <div Style="width:100%;position: relative;">
            <div id="titr2"
              style="position: relative;width: 95%;height:fit-content;margin: auto;top: 10px;text-align: right;padding: 5px;">
              <a class="tableitems six" style="color:#6bff00;" href="#twoimportant">■دو نکته مهم </a><br>
              <a class="tableitems six" style="color:#6bff00;" href="#evolutiontheories">■ نظریه های تکاملی</a><br>
              <a class="tableitems six" style="color:#6bff00;" href="#firstbiomolecules">■ تکامل شیمیایی:ظهور بیومولکول
                های
                اولیه</a><br>
              <a class="tableitems six" style="color:#6bff00;" href="#firstgenes">■ ژن ها و آنزیم های اولیه: احتمالا از
                جنس
                RNA </a><br>

              <a class="tableitems six" style="color:#6bff00;" href="#eucaryticcells">■ ظهور سلول های یوکاریوتی</a><br>

              <a class="tableitems six" style="color:#6bff00;" href="#genomics">■ مطالعه ژنوم(ژنومیکس): اختصاص هر ژن به
                یک
                فرایند خاص سلولی</a><br>
              <a class="tableitems six" style="color:#6bff00;" href="#genomicsinmed">■ اهمیت مقایسه ژنومیک در
                پزشکی</a><br>


            </div><br>
          </div>
        </div>
      </div>
      <div class="h1parrent" id="twoimportant">
        <div class="h1" id="h1" style="color:#6bff00">دو نکته مهم
          <a style="width: 100%;position: absolute;height:100% ;" href="#twoimportant"></a>
        </div>
        <div class="content" id="content">
          <span style="display:inline-block;color:#6bff00">●دوران پریبیوتیک(پیش حیاتی):</span>از 6.4 میلیاردسال پیش با
          پیدایش زمین <br>
          <span style="display:inline-block;color:#6bff00">● شواهد فسیلی آغاز حیات: </span>5.3 میلیارد سال پیش ← جو
          اولیه زمین دارای گازهای
          H<sub>2</sub>، NH<sub>3</sub>، CH<sub>4</sub>، CO<sub>2</sub>، H<sub>2</sub>O <br>
        </div>
      </div>
    </div>
    <div class="h1parrent" id="evolutiontheories">
      <div class="h1" id="h1" style="color:#6bff00">نظریه های تکاملی
        <a style="width: 100%;position: absolute;height:100% ;" href="#evolutiontheories"></a>
      </div>
      <div class="content" id="content">
        <p style="color:#6bff00;border-bottom:1px solid #6bff00;text-align: center;">نظریه های پیدایش حیات </p>
        <span style="display:inline-block;color:#6bff00">●نظریه آبیوژنز (Abiogenesis):</span>
        موجودات زنده می توانند از مواد غیر زنده تشکیل شوند<br>
        در این دیدگاه، ترکیبات شیمیایی ساده موجود در محیط اولیه زمین تحت شرایط خاصی به مولکول‌های پیچیده‌تر تبدیل شده
        و نهایتاً به اولین اشکال حیات منجر شده‌اند. تجربیات علمی مانند آزمایش میلر-یوری در دهه ۱۹۵۰ میلادی تلاش کردند
        تا فرآیندهای شیمیایی ممکن در شرایط اولیه زمین را شبیه‌سازی کنند تا نشان دهند که مولکول‌های ارگانیک می‌توانند
        به طور خودبه‌خود از مواد غیرزنده تشکیل شوند.<br>
        <span style="display:inline-block;color:#6bff00">● نظریه بیوژنز(Biogenesis) :</span>
        موجودات زنده فقط از موجودات زنده به وجود می‌آیند <br>
        <span style="display:inline-block;color:#6bff00">●</span>
        این نظریه پس از مطالعات لویی پاستور در قرن ۱۹ میلادی به‌طور گسترده پذیرفته شد.
        او نشان داد که موجودات میکروسکوپی مانند باکتری‌ها از هوای آزاد وارد محیط‌های استریل نمی‌شوند، مگر اینکه با
        موجودات زنده دیگر تماس داشته باشند.<br>
        <p style="color:#6bff00;border-bottom:1px solid #6bff00;text-align: center;">نظریه های تنوع گونه ها </p>
        <span style="display:inline-block;color:#6bff00">●نظریه داروین:</span>
        همه موجودات زنده در اثر انتخاب طبیعی (بقای افراد سازگارتر در هر محیط) از یک جد مشترک مشتق
        شده اند<br>
        <span style="display:inline-block;color:#6bff00">● نظریه تکاملی جدید

          ( بر اساس مشاهده مشابهت مسیرهای متابولیک و توالی‌های ژنی در جانداران):
        </span>
        جهش های رندوم در یک فرد ←
        ایجاد ژن‌های مفید سازگارتر با محیط در آن فرد و بقای بیشتر فرد (انتخاب طبیعی) ← تجمع جهش های سازگار با محیط های
        مختلف در طول نسل‌های متعدد ← افزایش تغییرات ← ایجاد گونه جدید<br>
        <span style="display:inline-block;color:#6bff00">● جهش (mutation): </span>
        تغییر رندوم در توالی DNA به علت خطای ترمیم نشده در همانندسازی (هنگام تقسیم سلولی) یا توسط
        عوامل
        محیطی جهش زا (موتاژن) یا ویروس ← ممکن است بی‌اثر ، ضعیف کننده یا کشنده باشد (تولید پروتئین یا آنزیم ناقص) و
        ممکن
        است با تولید یک پروتئین یا آنزیم جدید باعث ایجاد یک ویژگی جدید در سلول شود<br>
        <span style="display:inline-block;color:#6bff00">●نکته:</span>
        جهش پیش نیاز انتخاب طبیعی است ← یعنی ایجاد ویژگی های جدید سازگارتر با محیط توسط جهش ← بقای بیشتر سلول جهش یافته
        (سازگارتر) و افزایش نسل آن و حذف سلول جهش نیافته (wild-type)<br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="mutation.jpg" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="mutation.jpg" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>
        <span style="display:inline-block;color:#6bff00">●نقش جهش در تکامل(تصویر بالا):</span>
        انتقال یک کپی اضافی از یک ژن کامل به یک کروموزوم در اثر همانند سازی ناقص
        کروموزوم ← جهش در ژن
        اضافی و عدم آسیب به سلول (به علت وجود کپی سالم ژن در همان کروموزوم) ← احتمال تبدیل ژن دوم به یک ژن جدید با
        عملکرد
        جدید ← تکامل سلول ← مثال: کپی شدن ژن آنزیم هگزوکیناز در کروموزوم یک موجود فرضی هنگام همانندسازی ← ‌جهش های
        متعدد
        در کپی دوم در طی نسل‌های متعدد ← ایجاد توانایی متابولیسم گالاکتوز در آنزیم هگزوکیناز ← بقای سلول های دارای ژن
        جدید در محیط غنی از گالاکتور و فاقد گلوکز← عدم بقای بقیه سلول‌ها <br>
        <span style="display:inline-block;color:#6bff00">●نکته:</span>
        فراوانی خطاهای همانندسازی
        DNA ← تعادل بین خطاهای بسیار زیاد (کشنده برای سلول‌های دختری) و خطاهای
        بسیار کم (مانع تنوع ژنتیکی و انتخاب طبیعی) ←
        نتیجه: میلیاردها سال جهش + انتخاب طبیعی ← ظهور گونه های متنوع سازگار یافته با محیط های اکولوژیک خاص
      </div>
    </div>
    </div>
    <div class="h1parrent" id="firstbiomolecules">
      <div class="h1" id="h1" style="color:#6bff00">تکامل شیمیایی:ظهور بیومولکول های اولیه
        <a style="width: 100%;position: absolute;height:100% ;" href="#firstbiomolecules"></a>
      </div>
      <div class="content" id="content">
        <span style="display:inline-block;color:#6bff00">●</span>
        ترکیبات آلی موجود در پوسته زمین ، دریا و اتمسفر (شامل بیومولکول‌های پایه مثل آمینو اسیدها و کربوهیدرات‌ها
        ):مقدار بسیار جزئی<br>
        <span style="display:inline-block;color:#6bff00">●</span>
        تشکیل اولین موجود زنده از بیومولکول‌ها <br>
        <span style="display:inline-block;color:#6bff00">●</span>
        فرضیه پیشنهاد شده توسط اپارین و هالدان(مدل سوپ بنیادین) : ایجاد ترکیبات آلی توسط نیروهای محیطی قوی (تشعشعات
        ماورا بنفش ، رعد و برق ، یا انفجارهای آتشفشانی)از
        گازهای اتمسفر دوره پریبیوتیک( قبل از موجودات زنده) و املاح معدنی منافذ کف اقیانوس‌ها <br>

        <span style='display:inline-block;color:#6bff00'> ● آزمایش فرضیه توسط میلر و اوری:</span>
        مخلوط گازی مثل مخلوط فرضی موجود در زمین در دوره پریبیوتیک شامل آمونیاک ، متان ، آب ، هیدروژن و هیدروژن
        سولفید(H2S:تقلید دود آتشفشان های کف دریا) ← جرقه الکتریکی توسط یک جفت الکترود (شبیه سازی رعد و برق) به مدت یک
        هفته یا بیشتر ← آنالیز محتویات ظرف آزمایش: فاز گازی مخلوط به دست آمده شامل CO و CO<sub>2</sub> ، فاز آبی شامل
        ترکیبات آلی
        متنوع شامل ۲۳ آمینو اسید ، هیدروکسی اسیدها ، آلدهیدها، هیدروژن سیانید و هفت ترکیب آلی گوگرددار← نتیجه: احتمال
        تولید بیومولکول‌ها در زمان نسبتا کم تحت شرایط نسبتا ملایم ← ذخیره نمونه‌ها توسط میلر ← آزمایش مجدد نمونه‌های
        میلر در سال ۲۰۱۰ با تکنیک های بسیار حساس‌تر (کروماتوگرافی مایع با کارایی بالا(HPLC) و اسپکترومتری جرمی(MS))
        ←نتیجه: تایید مشاهدات میلر و گسترش آن<br>
        <br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="Miller.webp" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="Miller.webp" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>
        <span style='display:inline-block;color:#6bff00'> ●</span>
        آزمایش های دقیق‌تر ← ارائه شواهد خوب برای ایجاد بیومولکول‌ها تحت این شرایط ← پلیمرهای نوکلئیک اسید RNA
        (ریبونوکلئیک اسید): فعالیت آنزیمی در واکنش‌های خاص بیولوژیک ← نقش اساسی احتمالی RNA در پیدایش موجودات زنده هم
        به
        عنوان کاتالیست و هم به عنوان محل ذخیره اطلاعات
      </div>
    </div>

    <div class="h1parrent" id="firstgenes">
      <div class="h1" id="h1" style="color:#6bff00">ژن ها و آنزیم های اولیه :احتمالا از جنس RNA(فرضیه دنیای RNA)
        <a style="width: 100%;position: absolute;height:100% ;" href="#firstgenes"></a>
      </div>
      <div class="content" id="content">
        کشف خاصیت خودسنتزی RNA (آنزیمی) ← فرضیه "RNA یا یک مولکول مشابه شاید اولین ژن و اولین آنزیم بوده باشد" ← یکی
        از مراحل اولیه تکامل بیولوژیک : احتمال تشکیل مولکول RNA با توانایی کاتالیز تشکیل مولکول RNA دیگر با توالی
        یکسان (خود تکثیر شونده) ← افزایش غلظت مولکول RNA با تکثیر مکرر ← خطا در همانندسازی ← تولید RNA های متنوع :برخی
        با قابلیت خود تکثیرشوندگی بهتر و برخی با توانایی کاتالیز اتصال آمینو اسیدها و تشکیل پپتید‌ها ← کمک پپتیدهای
        تشکیل شده به توانایی خود تکثیر شوندگی RNA ← تغییرات بیشتر توالی جفت RNA-پپتید و تشکیل سیستم خود تکثیر شوندگی
        قوی ←مدتی بعد: مولکول های DNA با توالی مکمل مولکول های RNA خود تکثیر شونده: بر عهده گرفتن عملکرد ذخیره اطلاعات
        ژنتیک ( مناسب‌تر بودن: به علت پایداری بالاتر DNA) ← دریافت عملکرد آنزیمی توسط پروتئین‌ها به علت کارایی بهتر ←
        ترکیبات شبه لیپیدی: تشکیل لایه‌های غیرقابل نفوذ اطراف مجموعه‌های مولکول‌های خود تکثیر شونده
        نکته: عدم توانایی فرضیه دنیای RNA در پاسخ به سوال "نوکلئوتیدهای سازنده اولین مولکول‌های RNA از کجا آمدند" ←
        فرضیه جایگزین: تشکیل مسیر های متابولیکی ساده در منافذ داغ کف اقیانوس ← تولید پیش سازهایی مثل نوکلئوتیدها با
        مجموعه از واکنش‌های شیمیایی قبل از تشکیل غشاهای لیپیدی یا RNA<br><br>

        تامین ترکیبات آلی مورد نیاز سلول‌های اولیه ← احتمالاً توسط واکنش‌های غیر بیولوژیک اجزای اتمسفر اولیه مثل کربن
        مونوکسید کربن دی اکسید نیتروژن آمونیاک و متان توسط رعد و برق یا گرمای آتشفشان‌ها یا منافذ گرمایی کف اقیانوس‌ها
        و یا فضای خارج از زمین (کشف ذرات گرد و غبار دنباله‌ دار شامل آمینواسید ساده گلایسین و ۲۰ ترکیب آلی دیگر
        درماموریت های فضایی ناسا و آژانس فضایی اروپا) ←کسب توانایی استخراج انرژی از ترکیبات محیط برای سنتز مولکول های
        پیش ساز توسط موجودات تک سلولی اولیه و کاهش وابستگی به منابع خارج سلولی ← تکامل رنگیزه‌های به دام اندازنده
        انرژی نور خورشید برای احیا یا تثبیت کربن دی اکسید برای تشکیل ترکیبات آلی پیچیده←منابع الکترونی احتمالی برای
        فرایندهای فتوسنتزی:H2S و تشکیل گوگرد عنصری (سولفور) یا سولفات ، هیدروژن خارج شده از منافذ هیدروترمال کف دریا ←
        کسب توانایی استفاده از H2O به عنوان منبع الکترون و تولید O2<br>
        خالی بودن اتمسفر اولیه زمین از اکسیژن ← سلول‌های اولیه غیر هوازی ← کموتروف‌ها (دریافت کننده انرژی از مواد
        شیمیایی): اکسیداسیون ترکیبات آلی به co۲ با انتقال الکترون‌ها به پذیرنده‌هایی مثل so4 و تولیدh2s ← ظهور
        باکتری‌های فتوسنتزی و افزایش o2 در اتمسفر از بین رفتن غیر هوازی‌ها (هولوکاست اکسیژنی) ← پیدایش
        میکروارگانیسم‌های هوازی دریافت کننده انرژی با انتقال الکترون از مولکول‌های سوختی به اکسیژن


      </div>
    </div>


    <div class="h1parrent" id="eucaryticcells">
      <div class="h1" id="h1" style="color:#6bff00">ظهور سلول‌های یوکاریوتی
        <a style="width: 100%;position: absolute;height:100% ;" href="#eucaryticcells"></a>
      </div>
      <div class="content" id="content">
        طبق شواهد فسیلی: ظهور موجودات بزرگتر و پیچیده‌تر (احتمالاً یوکاریوت‌های اولیه) از حدود یک و نیم میلیارد سال
        پیش ← عدم توانایی شواهد فسیلی برای توضیح تبدیل سلول‌های بدون هسته به سلول‌های هسته‌دار ← مقایسه موجودات
        امروزی: پیشنهاد توالی وقایع مناسب با شواهد فسیلی ← سه تغییر عمده: 1-دریافت DNA بیشتر توسط سلول‌ها ← نیازمند
        مکانیسم فشرده کردن به کمپلکس ها (کروموزوم‌ها) با پروتئین‌های خاص و تقسیم آنها بین سلول های دختری هنگام تقسیم
        سلولی(تکامل کروموزوم)2- توسعه غشاهای داخل سلولی شامل غشای دو لایه هسته( تکامل هسته) 3- احاطه باکتری‌های هوازی
        (باکتری های ارغوانی) یا فتوسنتزی(سیانوباکتری ها) توسط سلول‌های یوکاریوتی اولیه فاقد متابولیسم هوازی یا فتوسنتز
        و حفظ آنها به صورت درون همزیستی و تبدیل باکتری هوازی همزیست به میتوکندری و سیانو باکتری به پلاستید‌هایی مانند
        کلروپلاست (تکامل میتوکندری و کلروپلاست )<br>
        پیدایش موجودات چند سلولی: تجمع موجودات تک سلولی و تشکیل خوشه های سلولی با مزایایی مانند تحرک بالاتر ، کارایی
        یا موفقیت بیشتر تولید مثلی از رقبای با زندگی انفرادی ← تکامل بیشتر به موجودات چند سلولی دائمی ← اختصاصیت سلول
        ها در کلونی ← تمایز سلولی ← ظهور موجودات پیچیده با سلول‌های اختصاصی برای عملکردهای حسی ، هضم ، فتوسنتزی ،
        تولید مثلی و... ←استفاده از مکانیسم های ظهور یافته در طی تکامل موجودات اولیه در موجودات پیشرفته مثال:استفاده
        از مکانیسم حرکت تاژک(flagella) کلامیدوموناس و مژک(cilia) پارامسی در اسپرم مهره داران<br>
        آناتومی مولکولی: نشان دهنده ارتباط تکاملی<br>
        فیلوژنی مولکولی حاصل از توالی یابی ژنی ← مطابقت با فیلوژنی کلاسیک بر اساس ساختارهای مایکروسکوپی حتی دقیق‌تر
        نکته: علی رغم واگرایی جانداران در سطح آناتومی ظاهری ثبات مفاهیم پایه‌ای زندگی در سطح مولکولی ← شباهت بالای
        ساختارهای مولکولی و مکانیزم‌ها حتی در سطح توالی DNA و توالی پروتئین‌ها بین ساده‌ترین و پیچیده‌ترین جانداران ←
        هومولوگوس: دو ژن با توالی مشابه و هومولوگ: پروتئین های کد شده توسط آن ژن‌ها


      </div>
    </div>

    <div class="h1parrent" id="genomics">
      <div class="h1" id="h1" style="color:#6bff00">مطالعه ژنوم (ژنومیکس): اختصاص هر ژن به یک فرایند خاص سلولی
        <a style="width: 100%;position: absolute;height:100% ;" href="#genomics"></a>
      </div>
      <div class="content" id="content">
        توالی یابی کل ژنوم یک جاندار ← دسته بندی ژن‌ها بر اساس فرایندهای مرتبط با آنها ← بزرگترین دسته ژن‌ها در
        E.coli، آرابیدوپسیس تالیانا و هوموساپینس : ژن های با عملکردهای ناشناخته (بیش از ۴۰ درصد ژن‌های هرگونه)← ژن‌های
        انتقال دهنده‌های
        غشایی مولکول‌های کوچک و یون‌ها: بخش عمده‌ای از ژن‌های هر سه گونه (در باکتری‌ها و گیاهان بیشتر از پستانداران )
        ، ژن های کد کننده پروتئین‌ها و RNA های لازم برای سنتز پروتئین : حدود ۳ تا ۴ درصد ژنوم E.coli اما درصد بالاتری
        در
        سلول‌های پیچیده‌تر آرابیدوپسیس تالیانا ( به ترتیب حدود ۶% و ۲ %ژنوم) ← نتیجه: هرچه جاندار پیچیده‌تر، نسبت
        ژن‌های تنظیم
        فرایندهای سلولی به کل ژنوم بالاتر و نسبت ژن های فرایندهای پایه (ژن های خانه‌دار یا Housekeeping genes) مثل
        تولید ATP یا
        سنتز پروتئین پایین تر ← نکته: ژن های خانه‌دار در همه شرایط و بدون تنظیم زیاد بیان می شوند

      </div>
    </div>

    <div class="h1parrent" id="genomicsinmed">
      <div class="h1" id="h1" style="color:#6bff00">اهمیت مقایسه ژنومیک در پزشکی
        <a style="width: 100%;position: absolute;height:100% ;" href="#genomicsinmed"></a>
      </div>
      <div class="content" id="content">
        مطالعات در مقیاس بزرگ← تعیین توالی کل ژنومیک برای صدها یا هزاران نفر مبتلا به سرطان ، دیابت نوع ۲ ، اسکیزوفرنی
        یا دیگر بیماری‌ها ← شناسایی جهش‌های ژنی مرتبط با بیماری ها ← هر ژن جهش یافته بخشی از
        سهم مستعد بودن برای یک بیماری و پروتئین های کد شده توسط آنها به عنوان هدف داروها برای درمان آن بیماری
        ← نتیجه:احتمال یافتن درمان‌ برای برخی بیماری‌های ژنتیکی و پیش آگهی و مهار بیماری افراد مستعد (دارای ژنتیک
        مارکرها)
        و جایگزینی "تاریخچه پزشکی" افراد با "پیش بینی پزشکی" برای پیش بینی احتمال بیماری در آینده

      </div>
    </div>
    <br> <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  </section>

  <br> <br>
  <br>
  <br>
  <br>
  <section class=" titr seven" id="titrseven" style="box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );" dir="rtl">
    <div class="maintitr" id="maintitr" style="z-index: 1000;color:#ff1f71;"> مباحث مهم ریاضی
      <a style="width: 100%;position: absolute;height:100% ;" href="#titrseven"></a>
    </div>
    <div class="border" style="border-radius: 5px;">

      <div class="h1parrent">

        <div class="content" id="content" style="background: rgba(0, 0, 0, 0.5);">
          <div Style="width:100%;position: relative;">
            <div id="titr2"
              style="position: relative;width: 95%;height:fit-content;margin: auto;top: 10px;text-align: right;padding: 5px;font-weight: bold;">
              <a class="tableitems seven" style="color:#ff1f71;" href="#equation&graph">■ معادله و نمودار</a><br>

              <a class="tableitems seven" style="color:#ff1f71;" href="#fracture">■ کسر و قوانین آن</a><br>

              <a class="tableitems seven" style="color:#ff1f71;" href="#exponent">■ توان و قوانین آن </a><br>

              <a class="tableitems seven" style="color:#ff1f71;" href="#exponentialnotation">■ نماد علمی</a><br>
              <a class="tableitems seven" style="color:#ff1f71;" href="#logarithm">■ لگاریتم و قوانین آن</a><br>

              <a class="tableitems seven" style="color:#ff1f71;" href="#prefix">■ پیشوندهای مهم ریاضی</a><br>



            </div><br>
          </div>
        </div>
      </div>
      <div class="content" id="content" style="color:white;text-align: justify; line-height: 250%;
      font-size: 13px;background: rgb(0,0,0,0.2);">


      </div>

      <div class="h1parrent" id="equation&graph">
        <div class="h1" id="h1" style="color:red;">معادله و نمودار
          <a style="width: 100%;position: absolute;height:100% ;" href="#equation&graph"></a>
        </div>
        <div class="content" id="content">
          معادله: نشان معادله علامت مساویست(معادل:مساوی)<br>
          برای بدست آوردن مجهول در معادلات درجه 1 (یعنی مجهولی مثل x داران توان 1 است) عبارت دارای مجهول را به یک سمت
          معادله میبریم سپس تمام عبارات طرف دیگر را بر ضریب x تقسیم میکنیم.

          <br><br><br>

          <div class="content" id="content">

            <div class="image-container" id="imagecontainer">
              <img src="equation.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="equation.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">
          </div>

          <div class="soundplayer" data-src="equation.m4a" dir="ltr" style="display: grid;">
            <div
              style="text-align: center; top: -10px; position: relative; align-items: center; height: 15px; font-size: x-small;">
              معادله درجه یک</div>
            <div class="soundcontrol" style="display: flex;">
              <div class="play-pause-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                  <path class="play-pause-icon" d="M18 12L0 24V0" />
                </svg>
              </div>

              <div class="speed-btn">1X</div>

              <div class="controls">
                <span class="current-time time">0:00</span>
                <div class="lessonslider">
                  <div class="progress"></div>
                </div>
                <span class="total-time time">0:00</span>
              </div>
              <audio src="equation.m4a"></audio>
            </div>
          </div>
        </div>

        <div class="h2parrent" id="functionalgroups">
          <div class="h2" style="z-index: 400;color:#ff0000;"> نمودارها
            <a style="width: 100%;position: absolute;height:100% ;" href="#functionalgroups"></a>

          </div>

          <div class="content" id="content">
            دستگاه مختصات

            <br>
            <br>
            <br>
            <div class="content" id="content">

              <div class="image-container" id="imagecontainer">
                <img src="graph.png" alt="Image to magnify" class="main-image" id="mainImage">
              </div>
              <div class="magnifier-view" id="magnifierView">
                <img src="graph.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
              </div>
              <img class="zoomin" id="zoomin"
                style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
                src="zoomin.png">
              <img class="zoomout" id="zoomout"
                style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
                onclick="zoomo()" src="zoomout.png">

            </div>
            <div class="soundplayer" data-src="decart.m4a" dir="ltr" style="display: grid;">
              <div
                style="text-align: center; top: -10px; position: relative; align-items: center; height: 15px; font-size: x-small;">
                دستگاه مختصات دکارتی </div>
              <div class="soundcontrol" style="display: flex;">
                <div class="play-pause-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                    <path class="play-pause-icon" d="M18 12L0 24V0" />
                  </svg>
                </div>

                <div class="speed-btn">1X</div>

                <div class="controls">
                  <span class="current-time time">0:00</span>
                  <div class="lessonslider">
                    <div class="progress"></div>
                  </div>
                  <span class="total-time time">0:00</span>
                </div>
                <audio src="decart.m4a"></audio>
              </div>
            </div>

            <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> برای تحلیل هر نمودار
            ابتدا به محور افقی و عمودی آن توجه می‌کنیم
            که
            چه متغیرهایی را نشان می‌دهند و روی این نکته تمرکز می‌کنیم که متغیر محور عمودی(y) بر اساس متغیر محور
            افقی(x)
            تغییر می‌کند. به همین دلیل به y متغیر وابسته و به x متغیر مستقل گفته می‌شود.<br>
            <span style='display:inline-block;color:#ff0000;font-weight: bold'> ●نکته:</span> در همه نمودارها متغیر
            مستقل و وابسته وجود ندارد.گاهی برخی
            نمودارها به صورت نقاط پراکنده هستند که برای نمایش نحوه توزیع دو متغیر مستقل در یک موضوع استفاده می شوند.مثل
            نمودار راماچاندران در مبحث پروتئین ها که بیانگر نحوه توزیع زوایای فای(ϕ) و سای (ψ) در پروتئین ها می باشد
            <br><br><br>
            <div class="content" id="content">

              <div class="image-container" id="imagecontainer">
                <img src="ramachandran.png" alt="Image to magnify" class="main-image" id="mainImage">
              </div>
              <div class="magnifier-view" id="magnifierView">
                <img src="ramachandran.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
              </div>
              <img class="zoomin" id="zoomin"
                style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
                src="zoomin.png">
              <img class="zoomout" id="zoomout"
                style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
                onclick="zoomo()" src="zoomout.png">
              <p style="margin: auto;width: 100%;"> نمودار راماچاندران </p>

            </div>


            <br>
            <p style="border-bottom: 1px solid #ff0000;
    color: #ff0000;font-weight: bold;"> نمودار خطی</p><br>

            <div class="content" id="content">

              <div class="image-container" id="imagecontainer">
                <img src="linear graph.png" alt="Image to magnify" class="main-image" id="mainImage">
              </div>
              <div class="magnifier-view" id="magnifierView">
                <img src="linear graph.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
              </div>
              <img class="zoomin" id="zoomin"
                style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
                src="zoomin.png">
              <img class="zoomout" id="zoomout"
                style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
                onclick="zoomo()" src="zoomout.png">

            </div>
            <div class="soundplayer" data-src="linear graph.m4a" dir="ltr" style="display: grid;">
              <div
                style="text-align: center; top: -10px; position: relative; align-items: center; height: 15px; font-size: x-small;">
                نمودار خطی و مفهوم رابطه خطی </div>
              <div class="soundcontrol" style="display: flex;">
                <div class="play-pause-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                    <path class="play-pause-icon" d="M18 12L0 24V0" />
                  </svg>
                </div>

                <div class="speed-btn">1X</div>

                <div class="controls">
                  <span class="current-time time">0:00</span>
                  <div class="lessonslider">
                    <div class="progress"></div>
                  </div>
                  <span class="total-time time">0:00</span>
                </div>
                <audio src="linear graph.m4a"></audio>
              </div>
            </div>


            <p style="border-bottom: 1px solid #ff0000;
    color: #ff0000;font-weight: bold;"> نمودار هذلولی(هایپربولیک)</p><br>

            مثل نمودار اشباع میوگلوبین توسط اکسیژن و نمودار میکائیلیس-منتن (کینتیک
            آنزیم‌ها)
            <br>




            نمودار سیگموئیدی( دلیل نامگذاری:شبیه حرف S در ابتدای واژه Sigma(نام حرف یونانی Σ یا σ)<br>

            مثال: نمودار اشباع هموگلوبین توسط اکسیژن، نمودار تنظیم بیان ژن توسط فاکتورهای رونویسی یا القاگرها، نمودار
            تنظیم آلوستریک آنزیم‌ها توسط فعال کننده‌های آلوستریک<br>

            <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> نمودار سیگوموئیدی بیانگر
            وجود یک حد آستانه(مثل غلظت خاص) برای
            متغیر
            مستقل است که اگر از آن عبور کند باعث افزایش شدید متغیر وابسته می‌شود<br>

            مثال: افزایش غلظت اکسیژن از حد آستانه ← افزایش شدید اشباع هموگلوبین<br>

            افزایش غلظت فاکتورهای رونویسی از حد آستانه ← افزایش شدید بیان ژن<br>

            افزایش غلظت فعال کننده آلوستریک از حد آستانه ← افزایش شدید فعالیت آنزیم<br>

            نمودار نمایی(تصاعدی یا توان)

          </div>
        </div>


      </div>
    </div>

    </div>
    </div>


    <div class="h1parrent" id="fracture">
      <div class="h1" id="h1" style="color:#ff1f71">قوانین کسرها
        <a style="width: 100%;position: absolute;height:100% ;" href="#fracture"></a>
      </div>
      <div class="content" id="content">
        <br>

        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> هر وقت صورت کسر بزرگتر شد کسر
        بزرگتر است وهر وقت مخرج کسر
        بزرگتر شد کسر کوچکتر می شود. پس برای مقایسه دو کسر با علامت مثبت اگر مخرج آنها برابر باشد کسری بزرگتر است که
        صورت بزرگتری دارد و اگر صورت آنها برابر باشد کسری بزرگتر است که مخرج کوچکتری دارد (اگر علامت کسر منفی باشد
        مانند اعداد ساده این رابطه معکوس است )
        <br>


        مثال:

        <br><br>

        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="fractions.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="fractions.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>
        <br>
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> کلمه«نسبت» در متون علمی به
        معنای همان کسر یا تقسیم است . مثال:نسبت
        سطح به حجم سلول یعنی تقسیم سطح بر حجم سلول


        <br>
        (تساوی، ضرب و تقسیم )محاسبات کسرها

        <br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="fraction calculations.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="fraction calculations.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>


        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> برای هر عددی می توان مخرج یک
        قرار داد پس هر عددی که مخرج ندارد یعنی
        مخرج آن 1 است
        <br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="fraction denominator.png" alt="Image to magnify" class="main-image" id="mainImage"
              style="width: 30%;margin: auto;">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="fraction denominator.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>


        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> اگر صورت کسری حاصل ضرب چند
        عبارت یا عدد باشد می‌توان آن عبارات یا
        اعداد را به صورت جدا از کسر که در کسر ضرب شده‌اند نیز نوشت.در نتیجه هر عددی در یک کسر ضرب شود در صورت آن ضرب می
        شود (کدگذاری:یعنی چون بالای کسر لیزه عددها میتونن لیز بخورن و بیفتن بغل کسر و میتونن همدیگرو هل بدن از روی کسر
        بندازن پایین😊 )<br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="fraction break.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="fraction break.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>
        <div class="soundplayer" data-src="fraction break.m4a" dir="ltr" style="display: grid;">
          <div
            style="text-align: center; top: -10px; position: relative; align-items: center; height: 15px; font-size: x-small;">
            خاصیت صورت کسر</div>
          <div class="soundcontrol" style="display: flex;">
            <div class="play-pause-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                <path class="play-pause-icon" d="M18 12L0 24V0" />
              </svg>
            </div>

            <div class="speed-btn">1X</div>

            <div class="controls">
              <span class="current-time time">0:00</span>
              <div class="lessonslider">
                <div class="progress"></div>
              </div>
              <span class="total-time time">0:00</span>
            </div>
            <audio src="fraction break.m4a"></audio>
          </div>
        </div>



        <span style='display:inline-block;color:red;font-weight: bold;'> ●جمع و تفریق کسرها :</span>
        با استفاده از مخرج مشترک<br><br>

        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="fraction adding.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="fraction adding.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>

        <span style='display:inline-block;color:red;font-weight: bold;'> ●</span> اگر عددی بین صورت و مخرج جابجا شود
        علامت توان آن عوض می‌شود اگر توان
        نداشته باشد(یعنی توان1) توان 1- می‌گیرد.ضمنا فقط وقتی می توانیم عددی را بین صورت و مخرج جابجا کنیم که در عبارات
        دیگر ضرب شده باشد نه جمع و تفریق و بعد از انتقال هم در طرف دیگر ضرب می شود
      </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="exponent">
      <div class="h1" id="h1" style="color:#ff1f71"> توان و قوانین آن

        <a style="width: 100%;position: absolute;height:100% ;" href="#exponent"></a>
      </div>
      <div class="content" id="content">
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ● تعریف توان :</span>
        عددی که به صورت بالا نویس برای یک متغیر یا عدد نوشته می‌شود و اگر مثبت باشد به
        معنای تعداد دفعاتی است که عدد پایه در خودش ضرب می‌شود و اگر منفی باشد به معنای معکوس کردن عدد پایه با توان مثبت
        است

        <br>
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span>اگر عدد توان دار در کسر باشد
        با جایجایی بین صورت و مخرج(معکوس شدن) علامت توان آن
        عوض می شود. به عبارت ساده تر توان منفی یعنی همان توان مثبت که در مخرج بوده و به صورت آمده


        <img src="exponents in fraction.png" alt="Image to magnify" class="main-image" id="mainImage">
        <br>

        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ● ضرب اعداد تواندار:</span>
        اگر پایه‌ها برابر باشند توان‌ها با هم جمع می‌شوند

        <br>
        <img src="exponentmultiply.png" alt="Image to magnify" class="main-image" id="mainImage">

        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●تقسیم اعداد تواندار: </span>
        اگر پایه‌ها برابر باشند توان‌ها از هم کم می‌شوند

        <br>
        <img src="exponentdivide.png" alt="Image to magnify" class="main-image" id="mainImage">

        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته: </span>اگر دو عدد توان دار با توان
        های مساوی در صورت و مخرج کسر باشند می توان توان را برای کل کسر گذاشت و توان عددهارا حذف کرد
        <img src="mutualexponent.png" alt="Image to magnify" class="main-image" id="mainImage">


        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●جمع و تفریق اعداد تواندار:</span>
        باید ابتدا هر عدد را جداگانه محاسبه کرد سپس آنها را با هم جمع یا تفریق کرد
        <br>
        <img src="exponentsumminus.png" alt="Image to magnify" class="main-image" id="mainImage">

        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> اگر یک عدد تواندار دوباره به
        توان برسد توان‌ها در هم ضرب می‌شود
        بنابراین می‌توان توان اول و دوم را با هم جابجا کرد. ساده‌تر بگم چه فرقی می‌کنه بگیم مثلاً ۲ اول سه بار در خودش
        ضرب میشه بعد جوابش دو بار در خودش ضرب میشه یا بگیم اول دو بار در خودش ضرب میشه بعد جوابش سه بار در خودش ضرب
        میشه<br>
        <img src="dualexponent.png" alt="Image to magnify" class="main-image" id="mainImage">

        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ● نکته :</span>
        اگر عددی در ۱۰ توان دار ضرب شود ممیز آن عدد به تعداد توان عدد ۱۰ به جلو یا عقب حرکت میکند<br>
        مثال:<br>
        ۱۰<sup>۳</sup> × ۵۲ = ۵۲۰۰۰<br>
        ۱۰<sup>-۱</sup> × ۴.۶ = ۰.۰۴۶<br>
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ● نکته :</span>

        اگر عدد ۱۰ توان منفی داشته باشد به دو صورت می توان آن را نشان داد:<br>
        1-با معکوس کردن آن و تبدیل توان منفی به مثبت(مثل همه اعداد دیگر با توان منفی)<br>
        2-نوشتن عدد ۱ و عقب بردن ممیز به تعداد توان منفی<br>
        <img src="negativeexponent.png" alt="Image to magnify" class="main-image" id="mainImage">

        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span>
        از این خاصیت عدد ۱۰ در نماد علمی (بخش بعدی) برای بیان ساده تر اعداد بسیار بزرگ و بسیار کوچک استفاده می
        شود<br>

        <div style="direction: rtl;">
        </div>
      </div>

    </div>
    <div class="h1parrent" id="exponentialnotation">
      <div class="h1" id="h1" style="color:#ff1f71">نماد علمی
        <a style="width: 100%;position: absolute;height:100% ;" href="#exponentialnotation"></a>
      </div>
      <div class="content" id="content">
        برای بیان اعداد بسیار کوچک و اعداد بسیار بزرگ آن عدد را به صورت « ۱۰ به توان تعداد جابجایی ممیز × یک عدد بین ۱
        تا ۱۰» بیان
        می‌کنیم. اگر ممیز را جلو ببریم در نماد علمی توان عدد ۱۰ باید منفی باشد تا حرکت به سمت راست را جبران کند و اگر
        ممیز را به عقب ببریم توان عدد ۱۰ باید مثبت باشد تا حرکت ممیز به سمت چپ را جبران کند . <br>

        نکته: وقتی عددی ممیز ندارد یعنی در واقع ممیز مقابل عدد قرار دارد که نوشته نمی شود
        یعنی:9.0 = 9
        <br>
        <br><br>
        <div class="content" id="content">

          <div class="image-container" id="imagecontainer">
            <img src="exponent.png" alt="Image to magnify" class="main-image" id="mainImage">
          </div>
          <div class="magnifier-view" id="magnifierView">
            <img src="exponent.png" alt="Magnified Image" class="magnified-image" id="magnifiedImage">
          </div>
          <img class="zoomin" id="zoomin"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            src="zoomin.png">
          <img class="zoomout" id="zoomout"
            style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
            onclick="zoomo()" src="zoomout.png">

        </div>

        <div class="soundplayer" data-src="exponential notation.m4a" dir="ltr" style="display: grid;">
          <div
            style="text-align: center; top: -10px; position: relative; align-items: center; height: 15px; font-size: x-small;">
            نماد علمی </div>
          <div class="soundcontrol" style="display: flex;">
            <div class="play-pause-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                <path class="play-pause-icon" d="M18 12L0 24V0" />
              </svg>
            </div>

            <div class="speed-btn">1X</div>

            <div class="controls">
              <span class="current-time time">0:00</span>
              <div class="lessonslider">
                <div class="progress"></div>
              </div>
              <span class="total-time time">0:00</span>
            </div>
            <audio src="exponential notation.m4a"></audio>
          </div>
        </div>


        <div style="display: grid; border: 1px solid;border-radius: 5px;padding: 5px;direction: ltr;">
          <div class="practice">
            <p style="text-align: right;">تمرین<br> اعداد پایین رو به شکل نماد علمی بنویسید</p>


            <div class="soundplayer" data-src="exponent practices.m4a" dir="ltr" style="display: grid;">
              <div
                style="text-align: center; top: -10px; position: relative; align-items: center; height: 15px; font-size: x-small;">
                نوشتن اعداد به صورت نماد علمی </div>
              <div class="soundcontrol" style="display: flex;">
                <div class="play-pause-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                    <path class="play-pause-icon" d="M18 12L0 24V0" />
                  </svg>
                </div>

                <div class="speed-btn">1X</div>

                <div class="controls">
                  <span class="current-time time">0:00</span>
                  <div class="lessonslider">
                    <div class="progress"></div>
                  </div>
                  <span class="total-time time">0:00</span>
                </div>
                <audio src="exponent practices.m4a"></audio>
              </div>
            </div>
            <div>
              <div class="showanswer">نمایش پاسخ ها (تقلب نکن 😊)</div>
              <div class="question" style="display: flex;justify-content: left;">
                <div> ۰.۰۰۸ =</div>
                <a class="answer" style="top:-4px" class="answer"> ۸ × ۱۰<sup>-۳</sup> </a>
              </div>
            </div>
            <div class="question" style="display: flex;justify-content: left;">
              <div> ۶۲.۵ =</div>
              <a class="answer" style="top:-4px" class="answer">۶.۲۵ × ۱۰<sup></sup> </a>
            </div>
            <div class="question" style="display: flex;justify-content: left;">
              <div> ۵۲۰۰ =</div>
              <a class="answer" style="top:-4px" class="answer">۵.۲ × ۱۰<sup>۳</sup> </a>
            </div>
            <div class="question" style="display: flex;justify-content: left;">
              <div> ۰.۱ =</div>
              <a class="answer" style="top:-4px" class="answer"> ۱۰<sup>-۱</sup> </a>
            </div>

            <div class="question" style="display: flex;justify-content: left;">
              <div> ۱۲ =</div>

              <a class="answer" style="top:-4px" class="answer">۱.۲ × ۱۰ <sup></sup></a>
            </div>
            <div class="question" style="display: flex;justify-content: left;">
              <div> ۰.۰۰۰۴ =</div>

              <a class="answer" style="top:-4px" class="answer">۴ × ۱۰<sup>-۴</sup> </a>
            </div>
            <div class="question" style="display: flex;justify-content: left;">
              <div> ۱۰۰۰ =</div>

              <a class="answer" style="top:-4px" class="answer"> ۱۰<sup>۳</sup> </a>
            </div>

            <div class="question" style="display: flex;justify-content: left;">
              <div> ۰.۵۲۵ =</div>

              <a class="answer" style="top:-4px" class="answer">۵.۲۵ × ۱۰<sup>-۱</sup> </a>
            </div>

          </div>
          <div class="practice">
            <p style="text-align: right;">اعداد زیر را به صورت عادی (بدون ۱۰ ×) بنویسید</p>
            <div class="soundplayer" data-src="exponent practices2.m4a" dir="ltr" style="display: grid;">
              <div
                style="text-align: center; top: -10px; position: relative; align-items: center; height: 15px; font-size: x-small;">
                تبدیل نماد علمی به عدد عادی </div>
              <div class="soundcontrol" style="display: flex;">
                <div class="play-pause-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                    <path class="play-pause-icon" d="M18 12L0 24V0" />
                  </svg>
                </div>

                <div class="speed-btn">1X</div>

                <div class="controls">
                  <span class="current-time time">0:00</span>
                  <div class="lessonslider">
                    <div class="progress"></div>
                  </div>
                  <span class="total-time time">0:00</span>
                </div>
                <audio src="exponent practices2.m4a"></audio>
              </div>
            </div>
            <div>
              <div class="showanswer"> (😊تقلب نکن ) نمایش پاسخ ها </div>


              <div class="question" style="display: flex;justify-content: left;">
                <div> ۹ × ۱۰<sup>-۲</sup> = </div>

                <a class="answer" style="top:4px" class="answer">۰.۰۹ </a>
              </div>
              <div class="question" style="display: flex;justify-content: left;">
                <div> ۴ × ۱۰<sup>۳</sup> = </div>

                <a class="answer" style="top:4px" class="answer">۴۰۰۰ </a>
              </div>
              <div class="question" style="display: flex;justify-content: left;">
                <div> ۷.۲ × ۱۰<sup>-۲</sup> = </div>

                <a class="answer" style="top:4px" class="answer">۰.۰۷۲ </a>
              </div>
              <div class="question" style="display: flex;justify-content: left;">
                <div> ۴.۳ × ۱۰<sup>۴</sup> = </div>

                <a class="answer" style="top: 4px;" class="answer">۴۳۰۰۰ </a>
              </div>
            </div>
          </div>




          <div style="direction: rtl;">
            <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> اگر نماد علمی در کسر
            استفاده شده باشد مانند اعداد توان دار دیگر می توان با جابجایی آن بین صورت و مخرج علامت توان آن را عوض کرد

            مثال:<br><br>
          </div>
          <div class="content" id="content">

            <div class="image-container" id="imagecontainer">
              <img src="exponential notation in fraction.png" alt="Image to magnify" class="main-image" id="mainImage">
            </div>
            <div class="magnifier-view" id="magnifierView">
              <img src="exponential notation in fraction.png" alt="Magnified Image" class="magnified-image"
                id="magnifiedImage">
            </div>
            <img class="zoomin" id="zoomin"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: flex;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              src="zoomin.png">
            <img class="zoomout" id="zoomout"
              style="border-raius:10px;backdrop-filter: blur(5px);width: 15px;height: 15px;position: absolute;top:-30px;right:0px;display: none;z-index: 100;cursor: pointer;padding: 5px;background: rgba(0, 0, 0, 0.4);border-radius: 5px;border: 1px solid rgba(255, 255, 255, 0.4);"
              onclick="zoomo()" src="zoomout.png">
            <br><br>
          </div>


        </div>
      </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="logarithm">
      <div class="h1" id="h1" style="color:#ff1f71">لگاریتم و قوانین آن
        <a style="width: 100%;position: absolute;height:100% ;" href="#logarithm"></a>
      </div>
      <div class="content" id="content">
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●مفهوم لگاریتم:</span>به معنای اینکه یک عدد
        پایه چند بار باید به توان برسد تا برابر عددی باشد که میخواهیم لگاریتم آن را بگیریم و ارتباط آن با توان به شکل
        زیر است:
        <img src="logarithm.png" alt="Image to magnify" class="main-image" id="mainImage">
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span>اگر مبنای لگاریتم نوشته نشود
        مبنای آن 10 است :<br>
        <img src="log10.png" alt="Image to magnify" class="main-image" id="mainImage">
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span>لگاریتم هر عدد بر مبنای عدد e
        که مقدار آن حدودا برابر 2.7 است را با ln نشان می دهیم و به آن لگاریتم طبیعی گفته می شود:<br>

        <img src="ln.png" alt="Image to magnify" class="main-image" id="mainImage">
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span> e یک عدد خاص است که
        در فرآیندهایی مانند تجزیه مواد رادیواکتیو، رشد باکتری‌ها و... که رشد و یا تجزیه همیشه کسری از مقدار اولیه است
        دیده می شود.عدد e شبیه عدد π .که مقدارش تقریبا 3.14 هست و ارتباط بین محیط و مساحت دایره رو با شعاعش نشون میده یک
        عدد قراردادی نیست بلکه در واقع کشف شده و یکی از ویژگی های طبیعته
        همینقدر مفهومشو بدونید فعلا کافیه<br>
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●لگاریتم اعداد مهم(لطفا حفظشون
          کن):</span><br>
        <img src="importantlogarithm.png" alt="Image to magnify" class="main-image" id="mainImage"><br>
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●نکته:</span>علامت "=" یعنی دقیقا برابر و
        علامت "≈" یعنی تقریبا برابر

        <p style='color:#ff0000;font-weight: bold;font-weight: bold;border-bottom: 1px solid;'> قوانین لگاریتم</p>


        <img src="logarithmrule1.png" alt="Image to magnify" class="main-image" id="mainImage">
        <img src="logarithmrule2.png" alt="Image to magnify" class="main-image" id="mainImage">
        <img src="logarithmrule3.png" alt="Image to magnify" class="main-image" id="mainImage">
        <img src="logarithmrule4.png" alt="Image to magnify" class="main-image" id="mainImage">
        <img src="logarithmrule5.png" alt="Image to magnify" class="main-image" id="mainImage">
        <img src="logarithmrule6.png" alt="Image to magnify" class="main-image" id="mainImage">
        <img src="logarithmrule7.png" alt="Image to magnify" class="main-image" id="mainImage">






      </div>
    </div>
    </div>
    </div>
    </div>
    <div class="h1parrent" id="prefix">
      <div class="h1" id="h1" style="color:#ff1f71"> پیشوندهای مهم ریاضی
        <a style="width: 100%;position: absolute;height:100% ;" href="#prefix"></a>
      </div>
      <div class="content" id="content">

        <img src="prefix.png" alt="Image to magnify" class="main-image" id="mainImage">

        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ●مثال:</span><br>
        ۱ گرم = ۱۰۰۰ میلی گرم<br>
        ۰.۱ مول = ۱ دسی مول = ۱۰ سانتی مول = ۱۰۰ میلی مول<br>
        یعنی مثلا هرکجا «میلی» دیدی میتونی به جاش ۰.۰۰۱ یا <sup>۳-</sup> ۱۰ بذاری و برعکس. یعنی وقتی میخوایم واحدها رو
        تبدیل کنیم باید عدد رو طوری بنویسیم که معادل عددی واحد خواسته شده ظاهر بشه یعنی مثلا اگر واحد خواسته شده
        «میلی»
        هستش باید<sup>۳-</sup> ۱۰ ظاهر بشه .<br>
        <span style='display:inline-block;color:#ff0000;font-weight: bold;'> ● نکات مهم:</span><br>
        ۱-میکرون: میکرومتر<br>
        ۲- cc (cubic centimeter) یا سی سی یا سانتی متر مکعب = میلی لیتر<br>

        <div style="display: grid; border: 1px solid;border-radius: 5px;padding: 5px;direction:rtl;">
          <div class="practice">
            <p style="text-align: right;">تمرین<br> مقادیر داده شده را به واحدهای خواسته شده تبدیل کنید</p>

            <div class="fillblank">نمایش پاسخ ها</div><br>


            <div class="question" style="display: flex;justify-content:  right;width: 100%;">
              <div> ۲۰ گرم =</div>
              <a class="blankanswer" style="top:-4px" class="answer"> (<sup>۳-</sup> ۱۰ × ۲۰۰۰۰) گرم = ۲۰۰۰۰ <p
                  style="color:white;display: inline;font-weight: lighter;">میلی گرم </p> </a>
              <div class="blank">.......................... </div>
              <div class="wanted-unit">میلی گرم </div>

            </div>

            <div class="question" style="display: flex;justify-content: right;width: 100%;">
              <div> ۰.۶ میلی مول =</div>

              <a class="blankanswer" style="top:-4px" class="answer"> (<sup>۳-</sup> ۱۰ × ۰.۶) <p
                  style="color:white;display: inline;font-weight: lighter;">مول </p> = ۰.۰۰۰۶ <p
                  style="color:white;display: inline;font-weight: lighter;">مول </p> </a>
              <div class="blank">.......................... </div>
              <div class="wanted-unit"> مول </div>

            </div>
            <div class="question" style="display: flex;justify-content: right;width: 100%;">
              <div> ۴ نانومتر =</div>
              <a class="blankanswer" style="top:-4px" class="answer"> (<sup>۹-</sup> ۱۰ × ۴) متر =<br>
                (<sup>۲-</sup> ۱۰ × <sup>۷-</sup> ۱۰ × ۴) متر =<br>
                (<sup>۷-</sup> ۱۰ × ۴) <p style="color:white;display: inline;font-weight: lighter;"> سانتی متر </p>
              </a>
              <div class="blank">.......................... </div>
              <div class="wanted-unit"> سانتی متر </div>
            </div>
            <div class="question" style="display: flex;justify-content:  right;width: 100%;">
              <div> ۴.۵ گرم =</div>
              <a class="blankanswer" style="top:-4px" class="answer"> (<sup>۳</sup> ۱۰ × ۰.۰۰۴۵) گرم= ۰.۰۰۴۵ <p
                  style="color:white;display: inline;font-weight: lighter;">کیلو گرم </p></a>
              <div class="blank">.......................... </div>
              <div class="wanted-unit"> کیلوگرم </div>
            </div>

            <div class="question" style="display: flex;justify-content:  right;width: 100%;">
              <div> ۶.۴ لیتر=</div>
              <a class="blankanswer" style="top:-4px" class="answer"> (<sup>۶-</sup> ۱۰ × ۶۴۰۰۰۰۰) لیتر = ۶۴۰۰۰۰۰ <p
                  style="color:white;display: inline;font-weight: lighter;"> میکرولیتر </p></a>
              <div class="blank">.......................... </div>
              <div class="wanted-unit"> میکرولیتر </div>
            </div>
            <div class="question" style="display: flex;justify-content:  right;width: 100%;">
              <div> ۷.۸ نانومتر =</div>
              <a class="blankanswer" style="top:-4px;"> (<sup>۹-</sup> ۱۰ × ۷.۸) متر = <br>
                (<sup>۶-</sup> ۱۰ × <sup>۳-</sup> ۱۰ × ۷.۸) متر = <br>
                (<sup>۳-</sup> ۱۰ × ۷.۸) <p style="color:white;display: inline;font-weight: lighter;">میکرومتر </p> =
                ۰.۰۰۷۸ <p style="color:white;display: inline;font-weight: lighter;">میکرومتر </p></a>
              <div class="blank">.......................... </div>
              <div class="wanted-unit" id="micrometer"> میکرومتر </div>
            </div>
            <div class="question" style="display: flex;justify-content: right;width: 100%;">
              <div> ۵۰۰ میلی لیتر=</div>
              <a class="blankanswer" style="top:-4px;" class="answer"> (<sup>۳-</sup> ۱۰ × ۵۰۰) <p
                  style="color:white;display: inline;font-weight: lighter;"> لیتر </p> = ۰.۵ <p
                  style="color:white;display: inline;font-weight: lighter;"> لیتر </p></a>
              <div class="blank">.......................... </div>
              <div class="wanted-unit"> لیتر </div>
            </div>


          </div>
        </div>
        <br><br><br>
      </div>
    </div>
    </div>
    </div>
    </div>

    <br> <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  </section>

  <div Class="foot" id="foot" dir="ltr">
    <div class="btnbar" id="btnbar">
      <div id="scrollindicator">
        <span id="scrollright" tabindex="0" onclick="scrollright()" class="scrollindicator" cursor="pointer"></span>
      </div>
      <div id="scrollindicator2" class="scrollindicator2">
        <span id="scrollright" tabindex="0" onclick="scrollleft()" cursor="pointer"></span>
      </div>

      <div class="btnframe one" id="btnone" onclick="clickactivation()"><a class="light" id="one"><a Class="link one"
            href="#titrone">مقدمه ای بر علم بیوشیمی</a></a></div>
      <div class="btnframe two" id="btntwo" onclick="clickactivation2()"><a class="light" id="two"><a Class="link two"
            href="#titrtwo"> مبانی شیمیایی</a></a></div>
      <div class="btnframe three" id="btnthree" onclick="clickactivation3()"><a Class="light" id="three"><a
            Class="link three" href="#titrthree"> مبانی
            فیزیکی</a></a></div>
      <div class="btnframe four" id="btnfour" onclick="clickactivation4()"><a Class="light" id="four"><a
            Class="link four" href="#titrfour">مبانی ژنتیکی</a></a>
      </div>
      <div class="btnframe five" id="btnfive" onclick="clickactivation5()"><a Class="light" id="five"><a
            Class="link five" href="#titrfive"> مبانی سلولی</a></a></div>
      <div class="btnframe six" id="btnsix" onclick="clickactivation6()"><a Class="light" id="six"><a Class="link six"
            href="#titrsix"> مبانی تکاملی و منشأ حیات</a></a>
      </div>
      <div class="btnframe seven" id="btnseven" onclick="clickactivation7()"><a Class="light" id="seven"><a
            Class="link seven" href="#titrseven"> مباحث مهم ریاضی </a></a>
      </div>






    </div>
  </div>
  <div class="frame" id="frame" dir="ltr">
    <span class="percent" id="percent" style="color:white;font-family: sans-serif;">0%</span>
    <div class="progressbar"></div>
    <div style="position:absolute;
    bottom: -2px;
    text-align: center;
   width: 20%;color:white;
   right:-20%;
   font-size: 9px;font-family: 'Yekan';margin-left: 5px;">درصد پیشرفت </div>
  </div>








  <script>
  

  </script>
  <script>
    function examslist(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";

      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    function exam(evt, cityName) {
      var i, exam, subtablinks;
      exam = document.getElementsByClassName("exam");
      for (i = 0; i < exam.length; i++) {
        exam[i].style.display = "none";

      }
      subtablinks = document.getElementsByClassName("subtablinks");
      for (i = 0; i < subtablinks.length; i++) {
        subtablinks[i].className = subtablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    function Master2(evt, cityName) {
      var i, examyear, subsubtablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";

      }
      subsubtablinks = document.getElementsByClassName("sub-subtablinks");
      for (i = 0; i < tablinks.length; i++) {
        subsubtablinks[i].className = subsubtablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    let totalQuestions = document.querySelectorAll('.question').length;
    let correctAnswers = 0;
    let incorrectAnswers = 0;

    function checkAnswer(selectedButton, isCorrect) {
      const buttons = selectedButton.parentElement.querySelectorAll('button');

      buttons.forEach(button => {
        button.disabled = true; // Disable all buttons

        if (button === selectedButton) {
          if (isCorrect) {
            correctAnswers++;
            button.classList.add('correct');
          } else {
            incorrectAnswers++;
            button.classList.add('incorrect');
          }
        } else if (button.getAttribute('onclick').includes('true')) {
          // Highlight the correct answer
          button.classList.add('correct');
        }
      });
    }

    function showScore() {
      // Calculate the number of unanswered questions
      let answeredQuestions = document.querySelectorAll('.question button[disabled]').length / 4;
      let unansweredQuestions = totalQuestions - answeredQuestions;

      // Each wrong answer deducts one-third of a correct answer
      let penalty = incorrectAnswers / 3;
      let finalCorrectAnswers = correctAnswers - penalty;

      // Calculate the percentage, considering unanswered questions as incorrect
      let finalScore = (finalCorrectAnswers / totalQuestions) * 100;
      finalScore = finalScore < 0 ? 0 : finalScore.toFixed(1);

      // Update the score display

      document.getElementById('score-button').classList.add('active');
      document.getElementById('score-button').textContent = ` ${finalScore}% `;
    }

    /***lessonsounds***/

    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll(".soundplayer").forEach(player => {
        const audio = player.querySelector("audio");
        const playPauseBtn = player.querySelector(".play-pause-btn");
        const playPauseIcon = player.querySelector(".play-pause-icon");
        const progress = player.querySelector(".progress");
        const currentTimeElem = player.querySelector(".current-time");
        const totalTimeElem = player.querySelector(".total-time");
        const lessonslider = player.querySelector(".lessonslider");
        let isPlaying = false;


        // Load the audio source from the data-src attribute
        audio.src = player.getAttribute("data-src");

        // Play/Pause button functionality
        playPauseBtn.addEventListener("click", () => {
          if (isPlaying) {
            audio.pause();
            playPauseIcon.setAttribute('d', 'M18 12L0 24V0'); // Set the play icon when paused
          } else {
            audio.play();
            playPauseIcon.setAttribute('d', 'M0 0h6v24H0zm12 0h6v24h-6z'); // Set the pause icon when playing
          }
          isPlaying = !isPlaying;
        });

        // Update the progress bar and current time display as the audio plays
        audio.addEventListener("timeupdate", () => {
          const currentTime = audio.currentTime;
          const duration = audio.duration;
          const progressPercent = (currentTime / duration) * 100;
          progress.style.width = `${progressPercent}%`;
          currentTimeElem.textContent = formatTime(currentTime);
        });

        // Update the total time when metadata (duration) is loaded
        audio.addEventListener("loadedmetadata", () => {
          totalTimeElem.textContent = formatTime(audio.duration);
        });

        // Reset play button icon when the audio ends
        audio.addEventListener("ended", () => {
          playPauseIcon.setAttribute('d', 'M18 12L0 24V0'); // Set the play icon when audio ends
          isPlaying = false;
        });

        // Jump to a different position in the audio when clicking on the progress bar
        lessonslider.addEventListener("click", (event) => {
          const rect = lessonslider.getBoundingClientRect();
          const offsetX = event.clientX - rect.left;
          const width = lessonslider.offsetWidth;
          const duration = audio.duration;
          audio.currentTime = (offsetX / width) * duration;
        });

        // Format the time in mm:ss format
        function formatTime(seconds) {
          const minutes = Math.floor(seconds / 60);
          const secs = Math.floor(seconds % 60);
          return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
        };

      });
    });

    // Speed button functionality
    let currentSpeed = 1;
    const speedBtns = document.querySelectorAll('.speed-btn');
    const audios = document.querySelectorAll("audio");

    // Function to cycle through speeds
    function changeSpeed() {
      if (currentSpeed === 1) {
        currentSpeed = 1.2;
      } else if (currentSpeed === 1.2) {
        currentSpeed = 1.4;
      } else if (currentSpeed === 1.4) {
        currentSpeed = 1.6;
      } else if (currentSpeed === 1.6) {
        currentSpeed = 1.8;
      } else if (currentSpeed === 1.8) {
        currentSpeed = 2;
      } else if (currentSpeed === 2) {
        currentSpeed = 0.9;
      } else {
        currentSpeed = 1;
      };

      // Update all buttons' text and all audios' playback speed
      speedBtns.forEach(btn => {
        btn.textContent = currentSpeed + 'X';
      });

      audios.forEach(audio => {
        audio.playbackRate = currentSpeed;
      });
    }

    // Attach event listeners to each speed button
    speedBtns.forEach(btn => {
      btn.addEventListener("click", changeSpeed);
    });










  </script>


  <script src="https://code.jquery.com/jquery-3.6.3.slim.js"
    integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>

  <script type="text/javascript">



    function scrollright() {
      document.getElementById("btnbar").scrollTop += 0;
      document.getElementById("btnbar").scrollLeft += 400;


    }

    function scrollleft() {
      document.getElementById("btnbar").scrollTop += 0;
      document.getElementById("btnbar").scrollLeft -= 400;


    }

    function musicscrollright() {
      document.getElementById("musicpics").scrollTop += 0;
      document.getElementById("musicpics").scrollLeft += 200;

    }

    function musicscrollleft() {
      document.getElementById("musicpics").scrollTop += 0;
      document.getElementById("musicpics").scrollLeft -= 250;
    }





    var isTouchDevice = 'ontouchstart' in document.documentElement;

    // Define the function to handle touch or click events

    function handleTouchOrClick() {


      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.mozRequestFullScreen) { // Firefox
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
        document.documentElement.webkitRequestFullscreen();
      } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
        document.documentElement.msRequestFullscreen();
      }
    }


    // Add an event listener based on the device type
    if (isTouchDevice) {
      // If it's a touch device, add a touchstart event listener
      document.addEventListener("touchstart", function () {
        setTimeout(handleTouchOrClick, 1000);
      }
      )
    } else {
      // If it's not a touch device, add a click event listener
      document.addEventListener("click", function () {
        setTimeout(handleTouchOrClick, 1000);
      });
    }

    // Define the function to handle scroll events
    function handleScroll() {

      /*load iframes when they come to viewport*/
      const iframes = document.querySelectorAll('iframe');
      const viewportHeight = window.innerHeight || document.documentElement.clientHeight;

      iframes.forEach(iframe => {
        const rect = iframe.getBoundingClientRect();

        if (rect.top <= viewportHeight && rect.top >= 0) {
          if (!iframe.getAttribute('src') && iframe.getAttribute('data-src')) {
            iframe.src = iframe.getAttribute('data-src');
          }

        }
      });


      // Your code to be executed on scroll goes here
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.mozRequestFullScreen) { // Firefox
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
        document.documentElement.webkitRequestFullscreen();
      } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
        document.documentElement.msRequestFullscreen();
      }
    }

    // Add an event listener for the scroll event on the window
    window.addEventListener("scroll", function () {
      if (isTouchDevice) {
        // If it's a touch device, add a touchstart event listener
        if (document.documentElement.requestFullscreen) {
          document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) { // Firefox
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
          document.documentElement.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
          document.documentElement.msRequestFullscreen();
        }
      }

      else {
        // If it's not a touch device, add a click event listener
        if (document.documentElement.requestFullscreen) {
          document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) { // Firefox
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
          document.documentElement.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
          document.documentElement.msRequestFullscreen();
        }
      };

      /*reload iframes when they error*/
      const iframes = document.querySelectorAll('iframe');
      iframes.forEach(iframe =>
        iframe.onerror = function () {
          iframe.src = iframe.src;
        })



      setTimeout(handleScroll, 1000);
    })
    const scrollableElement = document.getElementById("btnbar");

    // Add an event listener for the scroll event on the specific element
    scrollableElement.addEventListener("scroll", function () {
      setTimeout(handleScroll, 1000)
    })
    ////////////******btn menu scroll***//////////////



    document.addEventListener("DOMContentLoaded", function () {
      openFullscreen();
    });

    function openFullscreen() {
      const elem = document.documentElement;
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.mozRequestFullScreen) { /* Firefox */
        elem.mozRequestFullScreen();
      } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
        elem.webkitRequestFullscreen();
      } else if (elem.msRequestFullscreen) { /* IE/Edge */
        elem.msRequestFullscreen();
      }
    }



    const reloads = document.querySelectorAll('.reload');

    reloads.forEach(function (reload) {
      reload.addEventListener('click', function () {
        const iframe = this.previousElementSibling;

        iframe.src = iframe.src;
      })


    })








    const fulls = document.querySelectorAll('.full');

    // Loop through each child element
    fulls.forEach(function (full) {
      // Add click event listener to each child element
      full.addEventListener('click', function () {
        // Select the parent element of the clicked child
        const wrap = this.closest('#wrap');
        const content = wrap.closest('#content');
        const full1 = wrap.querySelector('#full1');
        const full2 = wrap.querySelector('#full2');

        // Do something with the parent element (e.g., add a class)

        if (wrap.style.position === 'relative') {
          full1.style.visibility = "hidden";
          full2.style.visibility = "visible";
          content.style.backdropFilter = 'unset';
          wrap.style.position = "fixed";
          wrap.style.zIndex = "1000";
          wrap.style.width = "100vw";
          wrap.style.height = "100vh";
          wrap.style.top = "0";
          wrap.style.left = "0";
          wrap.style.background = "black";
          wrap.style.border = "0";
          wrap.style.padding = "0";
          document.getElementById('up_down').style.zIndex = "0";
          document.getElementById('head').style.zIndex = "0";
          document.getElementById('foot').style.zIndex = "0";
          document.getElementById('frame').style.zIndex = "0";
          var ele = document.getElementsByClassName('maintitr');
          for (var i = 0; i < ele.length; i++) {
            ele[i].style.zIndex = "0";
          }
          var ele = document.getElementsByClassName('h1');
          for (var i = 0; i < ele.length; i++) {
            ele[i].style.zIndex = "0";
          }
          var ele = document.getElementsByClassName('h2');
          for (var i = 0; i < ele.length; i++) {
            ele[i].style.zIndex = "0";
          }
          // Add any other style changes you want to apply to all elements with the same class
        } else {
          wrap.style.width = "85%";
          wrap.style.height = '';
          var ele = document.getElementsByClassName('content');
          for (var i = 0; i < ele.length; i++) {
            ele[i].style.backdropFilter = "blur(6px)";
          }

          full1.style.visibility = "visible";
          full2.style.visibility = "hidden";
          wrap.style.position = "relative";
          wrap.style.zIndex = "5";
          wrap.style.top = '';
          wrap.style.left = '';
          wrap.style.background = "transparent";
          wrap.style.border = "0";
          wrap.style.padding = "0";
          document.getElementById('up_down').style.zIndex = "5";
          document.getElementById('head').style.zIndex = "3";
          document.getElementById('foot').style.zIndex = "3";
          document.getElementById('frame').style.zIndex = "5";
          var ele = document.getElementsByClassName('maintitr');
          for (var i = 0; i < ele.length; i++) {
            ele[i].style.zIndex = "1000";
          }
          var ele = document.getElementsByClassName('h1');
          for (var i = 0; i < ele.length; i++) {
            ele[i].style.zIndex = "500";
          }
          var ele = document.getElementsByClassName('h2');
          for (var i = 0; i < ele.length; i++) {
            ele[i].style.zIndex = "300";
          }
        }
      }
      )
    }
    )








    $(document).on("scroll", function () {
      var pixels = $(document).scrollTop();
      var pageHeight = $(document).height() - $(window).innerHeight();
      var progress = 100 * pixels / pageHeight;

      $(".progressbar").css("width", progress + "%");
      $(".frame span").css("left", progress + "%");
      if (progress <= 100) {

        $(".percent").html(Math.ceil(progress) + "%");
        $(".pct").html(Math.ceil(progress) + '%');
        $("#text").html(Math.ceil(progress) + '<sup>%</sup>');
        $("#tube").css("--percent", progress);
      }
    })


    function clickactivation() {
      $(".btnframe").removeClass('active');
      $('.btnframe.one').addClass('active');
      checkActivation();
    }

    function clickactivation2() {
      $(".btnframe").removeClass('active');
      $('.btnframe.two').addClass('active');
      checkActivation2();

    }
    function clickactivation3() {
      $(".btnframe").removeClass('active');
      $('.btnframe.three').addClass('active');
      checkActivation3();

    }
    function clickactivation4() {
      $(".btnframe").removeClass('active');
      $('.btnframe.four').addClass('active');
      checkActivation4();

    }
    function clickactivation5() {
      $(".btnframe").removeClass('active');
      $('.btnframe.five').addClass('active');
      checkActivation5();

    }
    function clickactivation6() {
      $(".btnframe").removeClass('active');
      $('.btnframe.six').addClass('active');
      checkActivation6();

    }
    function clickactivation7() {
      $(".btnframe").removeClass('active');
      $('.btnframe.seven').addClass('active');
      checkActivation7();

    }

    window.onload = function () {

      light_up();
      light_up2();
      light_up3();
      light_up4();
      light_up5();
      light_up6();
      light_up7();


    }

    $(document).on("scroll", function () {
      light_up();
      light_up2();
      light_up3();
      light_up4();
      light_up5();
      light_up6();
      light_up7();

    });

    function light_up() {
      var topw = $(document).scrollTop();
      var toptitrone = $("#titrone").offset().top;
      var pageHeight = $("#titrone").height();
      var btnbar = document.getElementById("btnbar");
      var btnone = document.getElementById("btnone");

      if (toptitrone >= toptitrone - 60 && topw < toptitrone + pageHeight) {
        $(".btnframe").removeClass('active');
        $('.btnframe.one').addClass('active');
        $('#up_down').css('box-sadow', 'inset 0px -4px 12px rgb(0 255 36)');
        onScroll();
        $('#titrone').css('visibility', 'visible')

      }
      else {
        $(".btnframe.one").removeClass('active');
        $('#titrone').css('visibility', 'hidden')
      }
    }

    function light_up2() {
      var topw = $(document).scrollTop();
      var toptitrtwo = $("#titrtwo").offset().top;
      var titrtwoHeight = $("#titrtwo").height();

      var viewportHeight = $(window).height();


      if (topw + viewportHeight >= toptitrtwo + 0.2 * viewportHeight) {
        $(".btnframe").removeClass('active');
        $('.btnframe.two').addClass('active');
        $('#up_down').css('box-sadow', 'inset 0px -4px 12px #f600ff');
        onScroll();
        $('#titrtwo').css('visibility', 'visible')


      }
      else {
        $(".btnframe.two").removeClass('active');
        $('#titrtwo').css('visibility', 'hidden')
      }
    }
    function light_up3() {
      var topw = $(document).scrollTop();
      var toptitrthree = $("#titrthree").offset().top;
      var titrthreeHeight = $("#titrthree").height();

      var viewportHeight = $(window).height();


      if (topw + viewportHeight >= toptitrthree + 0.2 * viewportHeight) {
        $(".btnframe").removeClass('active');
        $('.btnframe.three').addClass('active');
        $('#up_down').css('box-hadow', 'inset 0px -4px 12px #00fff6');
        onScroll();
        $('#titrthree').css('visibility', 'visible')


      }
      else {
        $(".btnframe.three").removeClass('active');
        $('#titrthree').css('visibility', 'hidden')
      }
    }
    function light_up4() {
      var topw = $(document).scrollTop();
      var toptitrfour = $("#titrfour").offset().top;
      var titrfourHeight = $("#titrfour").height();

      var viewportHeight = $(window).height();


      if (topw + viewportHeight >= toptitrfour + 0.2 * viewportHeight) {
        $(".btnframe").removeClass('active');
        $('.btnframe.four').addClass('active');
        $('#up_down').css('box-sadow', 'inset 0px -4px 12px #ff0000');
        onScroll();
        $('#titrfour').css('visibility', 'visible')


      }
      else {
        $(".btnframe.four").removeClass('active');
        $('#titrfour').css('visibility', 'hidden')
      }
    }

    function light_up5() {
      var topw = $(document).scrollTop();
      var toptitrfive = $("#titrfive").offset().top;
      var titrfiveHeight = $("#titrfive").height();

      var viewportHeight = $(window).height();


      if (topw + viewportHeight >= toptitrfive + 0.2 * viewportHeight) {
        $(".btnframe").removeClass('active');
        $('.btnframe.five').addClass('active');
        $('#up_down').css('box-sadow', 'inset 0px -4px 12px #ff6831 ');
        onScroll();
        $('#titrfive').css('visibility', 'visible')


      }
      else {
        $(".btnframe.five").removeClass('active');
        $('#titrfive').css('visibility', 'hidden')
      }
    }
    function light_up6() {
      var topw = $(document).scrollTop();
      var toptitrsix = $("#titrsix").offset().top;
      var titrsixHeight = $("#titrsix").height();

      var viewportHeight = $(window).height();


      if (topw + viewportHeight >= toptitrsix + 0.2 * viewportHeight) {
        $(".btnframe").removeClass('active');
        $('.btnframe.six').addClass('active');
        $('#up_down').css('box-sadow', 'inset 0px -4px 12px #6bff00 ');

        onScroll();
        $('#titrsix').css('visibility', 'visible')


      }
      else {
        $(".btnframe.six").removeClass('active');
        $('#titrsix').css('visibility', 'hidden')
      }
    }

    function light_up7() {
      var topw = $(document).scrollTop();
      var toptitrseven = $("#titrseven").offset().top;
      var titrsevenHeight = $("#titrseven").height();

      var viewportHeight = $(window).height();


      if (topw + viewportHeight >= toptitrseven + 0.2 * viewportHeight) {
        $(".btnframe").removeClass('active');
        $('.btnframe.seven').addClass('active');
        $('#up_down').css('box-sadow', 'inset 0px -4px 12px #6bff00 ');
        onScroll();
        $('#titrseven').css('visibility', 'visible')


      }
      else {
        $(".btnframe.seven").removeClass('active');
        $('#titrseven').css('visibility', 'hidden')
      }
    }
    let scrollEndTimeout;

    window.addEventListener("scroll", onScroll);

    const checkActivations = [];

    function onScroll() {


      // Clear the timeout if it's already set to avoid multiple calls
      clearTimeout(scrollEndTimeout);


      // Set a timeout to call the function after scrolling stops


      scrollEndTimeout = setTimeout(callCheckActivations, 500); // Adjust the timeout as needed
    }
    function callCheckActivations() {
      checkActivations.forEach(func => func());
    }


    var btnbar = document.getElementById("btnbar");

    function checkActivation() {
      if (btnone.classList.contains('active')) {

        if (window.orientation === 0) {
          var scrollOffset1 = btnone.offsetLeft - window.innerWidth / 2 + btnone.clientWidth / 2;

          btnbar.scrollTo({ left: scrollOffset1, behavior: 'smooth' });
        }
        else {
          var scrollOffset11 = btnone.offsetLeft - (87 / 200 * window.innerWidth) + btnone.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset11, behavior: 'smooth' });
        }
      }
    }

    function checkActivation2() {
      if (btntwo.classList.contains('active')) {
        if (window.orientation === 0) {
          var scrollOffset2 = btntwo.offsetLeft - window.innerWidth / 2 + btntwo.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset2, behavior: 'smooth' });
        }
        else {
          var scrollOffset22 = btntwo.offsetLeft - (87 / 200 * window.innerWidth) + btntwo.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset22, behavior: 'smooth' });
        }
      }
    }
    function checkActivation3() {
      if (btnthree.classList.contains('active')) {
        if (window.orientation === 0) {
          var scrollOffset3 = btnthree.offsetLeft - window.innerWidth / 2 + btnthree.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset3, behavior: 'smooth' });
        }
        else {
          var scrollOffset33 = btnthree.offsetLeft - (87 / 200 * window.innerWidth) + btnthree.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset33, behavior: 'smooth' });
        }
      }
    }
    function checkActivation4() {
      if (btnfour.classList.contains('active')) {
        if (window.orientation === 0) {
          var scrollOffset4 = btnfour.offsetLeft - window.innerWidth / 2 + btnfour.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset4, behavior: 'smooth' });
        }
        else {
          var scrollOffset44 = btnfour.offsetLeft - (87 / 200 * window.innerWidth) + btnfour.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset44, behavior: 'smooth' });
        }
      }
    }
    function checkActivation5() {
      if (btnfive.classList.contains('active')) {
        if (window.orientation === 0) {
          var scrollOffset5 = btnfive.offsetLeft - window.innerWidth / 2 + btnfive.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset5, behavior: 'smooth' });
        }
        else {
          var scrollOffset55 = btnfive.offsetLeft - (87 / 200 * window.innerWidth) + btnfive.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset55, behavior: 'smooth' });
        }
      }
    }
    function checkActivation6() {
      if (btnsix.classList.contains('active')) {
        if (window.orientation === 0) {
          var scrollOffset6 = btnsix.offsetLeft - window.innerWidth / 2 + btnsix.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset6, behavior: 'smooth' });
        }
        else {
          var scrollOffset66 = btnsix.offsetLeft - (87 / 200 * window.innerWidth) + btnsix.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset66, behavior: 'smooth' });
        }
      }
    }
    function checkActivation7() {
      if (btnseven.classList.contains('active')) {
        if (window.orientation === 0) {
          var scrollOffset7 = btnseven.offsetLeft - window.innerWidth / 2 + btnseven.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset7, behavior: 'smooth' });
        }
        else {
          var scrollOffset77 = btnseven.offsetLeft - (87 / 200 * window.innerWidth) + btnseven.clientWidth / 2;
          btnbar.scrollTo({ left: scrollOffset77, behavior: 'smooth' });
        }
      }
    }
    checkActivations.push(checkActivation);
    checkActivations.push(checkActivation2);
    checkActivations.push(checkActivation3);
    checkActivations.push(checkActivation4);
    checkActivations.push(checkActivation5);
    checkActivations.push(checkActivation6);
    checkActivations.push(checkActivation7);





    function handleOrientationChange() {
      light_up();
      light_up2();
      light_up3();
      light_up4();
      light_up5();
      light_up6();
      light_up7();




      if (window.orientation === 0 || window.orientation === 180) {
        // Portrait orientation
        clearTimeout(scrollEndTimeout);

        scrollEndTimeout = setTimeout(callCheckActivations, 1000);
      } else if (window.orientation === 90 || window.orientation === -90) {
        // Landscape orientation

        clearTimeout(scrollEndTimeout);

        scrollEndTimeout = setTimeout(callCheckActivations, 1000);
        callCheckActivations()
      }
    }
    // Add an event listener for the orientationchange event
    window.addEventListener("orientationchange", handleOrientationChange);

    // Call the function initially to get the initial orientation
    handleOrientationChange();


    /*timer*/


    function pad(val) {
      valString = val + "";
      if (valString.length < 2) {
        return "0" + valString;
      } else {
        return valString;
      }
    }
    let totalSeconds = 0;
let timerInterval = null;
let isRunning = false;
let restTimeout = null;   // متغیر برای نگه‌داری timeout
const before = document.getElementById("restscreen");
const timerButton = document.getElementById("timerbutton1");
const resetButton = document.getElementById("timerbutton2");

function pad(value) {
    return value.toString().padStart(2, '0');
}

function updateTimerDisplay() {
    const minutesLabel = document.getElementById("minutes");
    const secondsLabel = document.getElementById("seconds");
    secondsLabel.innerHTML = pad(totalSeconds % 60);
    minutesLabel.innerHTML = pad(Math.floor(totalSeconds / 60));
}


function toggleTimer() {
    if (isRunning) {
     
        // متوقف کردن تایمر
        clearInterval(timerInterval);
        timerInterval = null;
        timerButton.innerHTML = "شروع";
        $("#timerbutton1").removeClass("active");
        isRunning = false; // تنظیم وضعیت به غیرفعال
    
    } else {
        // شروع تایمر
        timerInterval = setInterval(() => {
            totalSeconds++;
            updateTimerDisplay();
        }, 1000);
        timerButton.innerHTML = "توقف";
        $("#timerbutton1").addClass("active");
        isRunning = true; // تنظیم وضعیت به فعال
   
        // نمایش پیام استراحت بعد از یک ساعت (اینجا 5 ثانیه برای تست)
        restTimeout = setTimeout(() => {
            before.style.visibility = "visible";
            clearInterval(timerInterval);
        timerInterval = null; // توقف تایمر
        isRunning = false;
        }, 5000)
    }
}

function resetTimer() {
    // توقف تایمر
    clearInterval(timerInterval);
    timerInterval = null;
    // بازنشانی شمارش‌گر و نمایش
    totalSeconds = 0;
    updateTimerDisplay();
    clearTimeout(restTimeout);

    restTimeout= null;
    // بازگرداندن دکمه "شروع" به حالت اولیه
    timerButton.innerHTML = "شروع";
    $("#timerbutton1").removeClass("active");

    // بازنشانی وضعیت
    isRunning = false;

    // بازگرداندن امکان کلیک روی دکمه شروع
    timerButton.disabled = false;
}





    
    
    function exitrest() {
      before.style.visibility = "hidden";
      toggleTimer()
    }


   
    $(document).on('click', '.timerbutton', function () {

    })



    /*username $ password*/



    //check for Navigation Timing API support
    function permission() {
      $(".loginform").css("display", "none")
    };
    var elem = document.documentElement;
    username = document.getElementById("username");
    password = document.getElementById("password");

    correctusername = "ali";
    correctpassword = "12345";
    document.getElementById("login").addEventListener("click", function () {
      if (username.value == correctusername && password.value == correctpassword) {
        permission();

        if (document.documentElement.requestFullscreen) {
          document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) { // Firefox
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
          document.documentElement.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
          document.documentElement.msRequestFullscreen();
        }
      }
      else {
        document.getElementById('Username').value = '';
        document.getElementById('password').value = ''
      }
    })


    // Get the text field that we're going to track

    var loginform = document.getElementById("loginform");

    // See if we have an autosave value
    // (this will only happen if the page is accidentally refreshed)
    if (sessionStorage.getItem("display")) {
      // Restore the contents of the text field
      loginform.style.display = sessionStorage.getItem("display");
    }

    // Listen for changes in the text field
    loginform.addEventListener("change", () => {
      // And save the results into the session storage object
      sessionStorage.setItem("display", "none");

    });


    function scrollup() {

      window.scrollBy({
        top: -300,
        behavior: 'smooth'
      });
    }

    function scrolldown() {

      window.scrollBy({
        top: 300,
        behavior: 'smooth'
      });
    }

    function scrollToTop() {
      window.scrollBy({
        top: -window.scrollY,

      });
    }

    function scrollToEnd() {
      const pageHeight = document.documentElement.scrollHeight;
      document.getElementById('percent').innerText = "100%";
      window.scrollBy({
        top: pageHeight - window.scrollY,

      });

    }




    function shownote() {

      var notemenu = document.getElementById("notemenu");

      var currentstyle = window.getComputedStyle(notemenu, null).opacity;

      if (currentstyle === "0") {
        $("#notemenu").addClass('show');
        $(document).on('click', '#note', function () {
          $(this).addClass('active');
          $('#musicmenu').removeClass('show');
          $("#music").removeClass('active');
          document.body.style.overflow = "hidden";
          $("#musicmenu").css('z-index', '-2');
          $("#notemenu").css('z-index', '2');
          $("section").addClass("hidden");
          $(".foot").addClass("hidden");
          $(".frame").addClass("hidden");

        })
      } else {
        $("#notemenu").removeClass('show');
        $(document).on('click', '#note', function () {
          $(this).removeClass('active');
          document.body.style.overflow = "scroll";
          $("section").removeClass("hidden");
          $(".foot").removeClass("hidden");
          $(".frame").removeClass("hidden");


        })
      }
    }

    function showflashcard() {
      var flashcardmenu = document.getElementById("flashcardmenu");
      var flashcardstyle = window.getComputedStyle(flashcardmenu, null).visibility;

      if (flashcardstyle === "hidden") {
        $("#flashcardmenu").addClass('show');
        $(document).on('click', '#flashcard', function () {
          $(this).addClass('active');
          $('#notemenu').removeClass('show');
          $("#note").removeClass('active');
          document.body.style.overflow = "hidden";
          $("#notemenu").css('z-index', '-2');
          $("#flashcardmenu").css('z-index', '2');
          $("section").addClass("hidden");
          $(".foot").addClass("hidden");
          $(".frame").addClass("hidden");


        })
      } else {
        $("#flashcardmenu").removeClass('show');
        $(document).on('click', '#flashcard', function () {
          $(this).removeClass('active');
          document.body.style.overflow = "scroll";
          $("section").removeClass("hidden");
          $(".foot").removeClass("hidden");
          $(".frame").removeClass("hidden");
        })
      }
    }

    function showlist() {
      var list = document.getElementById("list");
      var liststyle = window.getComputedStyle(list, null).visibility;

      if (liststyle === "hidden") {
        $("#showlist").addClass('active');
        $("#list").addClass('show');
        $('#list').css("opacity", "1");

      } else {
        $("#list").removeClass('show');
        $('#list').css("opacity", "0");
        $("#showlist").removeClass('active');

      }
    }
    function showmusic() {

      var musicmenu = document.getElementById("musicmenu");
      var musicstyle = window.getComputedStyle(musicmenu, null).visibility;

      if (musicstyle === "hidden") {
        $("#showmusic").addClass('active');

        $("#musicmenu").addClass('show');
        $('body').css("overflow", "hidden");
        $('#notemenu').removeClass('show');
        $("#note").removeClass('active');
        $("#musicmenu").css('z-index', '1000');


      }
      else {
        $("#showmusic").removeClass('active');
        $('body').css("overflow", "scroll");

        $("#musicmenu").removeClass('show');

      }
    }


    function showmap() {
      var map = document.getElementById("chaptermap");
      var mapstyle = window.getComputedStyle(map, null).visibility;

      if (mapstyle === "hidden") {
        $("#showmap").addClass('active');
        $("#chaptermap").addClass('show');
        $('body').css("overflow", "hidden");
        $('#chaptermap').css("opacity", "1");

      } else {
        $("#chaptermap").removeClass('show');
        $('#chaptermap').css("opacity", "0");

        $("#showmap").removeClass('active');
        $('body').css("overflow", "scroll");

      }
    }


    function showexams() {
      var examtab = document.getElementById("examtab");
      var examtabstyle = window.getComputedStyle(examtab, null).display;
      var tabcontent = document.getElementsByClassName("tabcontent");

      if (examtabstyle === "none") {
        $("#showexams").addClass('active');
        $('.titr').css("display", "none");
        $('.foot').css("display", "none");
        $('#examtab').css("display", "flex");
        $('#tabcontentbackground').css("display", "block");
        $('body').css("overflow", "hidden")


      } else {
        $('body').css("overflow", "scroll")
        $('.foot').css("display", "flex");
        $('.titr').css("display", "block");
        $('#examtab').css("display", "none");
        $('.tabcontent').css("display", "none");
        $('.exam').css("display", "none");
        $("#showexams").removeClass('active');
        $('body').css("overflow", "scroll");
        $('#tabcontentbackground').css("display", "none");


      }
    }

    //////////////////////////////music///////////////////
    let audio = document.getElementById("audiotrack");
    let previousBtn = document.querySelector('#previous-btn');
    let playBtn = document.getElementById('#playbtn');
    let pauseBtn = document.getElementById('#pausebtn');
    let nextBtn = document.querySelector('#next-btn');
    let tracklist = document.getElementById("tracklist");
    let track = tracklist.querySelectorAll("audio");
    let musicpics = document.getElementById('musicpics');
    let musicpic = document.querySelectorAll('musicpic');
    let currentAudio = 0;
    let list = [

      "https://raw.githack.com/Mybook2021/scientist.github.io/main/3D-Sounds-Thunder-and-Rain-Sounds-of-Nature-SoftGozar.com.mp3",
      "https://github.com/Mybook2021/scientist.github.io/raw/main/3d_Mountain_Stream_Radion.ir.mp3",
      "3d AAB-JOB.mp3",
      "bird&spring.mp3",

    ];
    audio.src = track[currentAudio].getAttribute('data-src');




    function playAudio() {
      audio.play();
      $(playbtn).css('display', 'none');
      $(pausebtn).css('display', 'block');
      $(".musicpic").removeClass('active');
      $(".musicpic").eq(currentAudio).addClass('active');

    }


    function pauseAudio() {
      audio.pause();
      $(pausebtn).css('display', 'none');
      $(playbtn).css('display', 'block');
    }


    function previous() {
      pauseAudio();
      currentAudio--;
      if (currentAudio < 0) {
        currentAudio = list.length - 1;

      }
      audio.src = track[currentAudio].getAttribute('data-src');

      playAudio()
    }


    function next() {

      pauseAudio();
      currentAudio++;
      if (currentAudio >= list.length) {
        currentAudio = 0;

      }
      audio.src = track[currentAudio].getAttribute('data-src');

      playAudio()
    };



    function musicpicclick1() {
      audio.src = track[0].getAttribute('data-src');
      audio.play();
      currentAudio = 0;
      $(".musicpic").removeClass('active');
      $(".musicpic").eq(0).addClass('active');
      $(playbtn).css('display', 'none');
      $(pausebtn).css('display', 'block');

    }
    function musicpicclick2() {
      audio.src = track[1].getAttribute('data-src');
      currentAudio = 1;
      playAudio();
      $(playbtn).css('display', 'none');
      $(pausebtn).css('display', 'block');

    }
    function musicpicclick3() {
      audio.src = track[2].getAttribute('data-src');
      currentAudio = 2;
      playAudio();
      $(playbtn).css('display', 'none');
      $(pausebtn).css('display', 'block');

    }
    function musicpicclick4() {
      audio.src = track[3].getAttribute('data-src');
      currentAudio = 3;
      playAudio();
      $(playbtn).css('display', 'none');
      $(pausebtn).css('display', 'block');

    }



    //////////////////////////////////////////////////////////////////////////////////
    var musicprogress = document.querySelector(".musicprogress");
    function audiotime() {
      audio.addEventListener('timeupdate', () => {
        const currentTime = audio.currentTime;
        const duration = audio.duration;
        const audioprogress = (currentTime / duration) * 100;
        const fillBar = document.querySelector('.fill');
        const clickProgress = document.querySelector('.click-progress');
        if (isNaN(duration)) duration = 0;
        $(musicprogress).css("width", audioprogress + "%");
        document.querySelector('#current-time').textContent = formatTime(currentTime);
        document.querySelector('#duration').textContent = formatTime(duration);
      });
      var slider = document.getElementById("myRange");

      slider.addEventListener("input", function () {
        var percentage = slider.value;
        audio.currentTime = audio.duration * percentage / 100;
      });

      audio.addEventListener("timeupdate", function () {
        var percentage = audio.currentTime / audio.duration * 100;
        slider.value = percentage;
      });
    }


    function formatTime(time) {
      const minutes = Math.floor(time / 60);
      const seconds = Math.floor(time % 60);

      return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    }


    ////////////////////////////////////////////////////////////////////////////
    const repeatBtn = document.getElementById('repeatBtn');
    let isRepeat = false;

    function toggleRepeat() {
      isRepeat = !isRepeat;

      if (isRepeat) {
        audio.loop = true;
        repeatBtn.classList.add('active');
      } else {
        audio.loop = false;
        repeatBtn.classList.remove('active');
      }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////
    var volumeslider = document.getElementById("volume-slider");
    var voiceIcon = document.getElementById("voice-icon");

    // Triggered when the user toggles the mute button


    volumeslider.addEventListener("input", function () {
      audio.volume = volumeslider.value / 100;
      if (audio.volume == 0) {
        voiceIcon.classList.add("muted");
      } else {
        voiceIcon.classList.remove("muted");
      }
    });



    function exit() {
      window.close()

    }


    function refresh() {
      window.open("hChapter%201.html", "_self");
    }



    function rotatescreen() {
      if (window.orientation === 0 || window.orientation === 180) {
        document.getElementById('titrtwo').style.visibility = "visible";

        // Change to landscape orientation
        screen.orientation.lock('landscape');
      } else {
        // Change to portrait orientation
        document.getElementById('titrtwo').style.visibility = "visible";

        screen.orientation.lock('portrait');

      }
    }

    /***sound player***/
  </script>
  <script>
    const zoomins = document.querySelectorAll('.zoomin');

    // Loop through each child element
    zoomins.forEach(function (zoomin) {
      // Add click event listener to each child element
      zoomin.addEventListener('click', function (e) {
        const piccontent = this.closest('#content');
        const mainImage = piccontent.querySelector('#mainImage');
        const magnifierView = piccontent.querySelector('#magnifierView');
        const magnifiedImage = piccontent.querySelector('#magnifiedImage');
        const zoomout = piccontent.querySelector('#zoomout');
        imagecontainer = piccontent.querySelector('#imagecontainer');
        let zoomLevel = 1.8;
        showMagnifier(e, mainImage, magnifierView, magnifiedImage, zoomin, zoomout, zoomLevel);
      });
    });

    // Updated showMagnifier function to accept necessary parameters
    function showMagnifier(e, mainImage, magnifierView, magnifiedImage, zoomin, zoomout, zoomLevel) {
      const rect = mainImage.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const imgWidth = mainImage.width;
      const imgHeight = mainImage.height;

      // Calculate the offset for the magnified image
      const offsetX = (x / imgWidth) * (imgWidth * zoomLevel) - (magnifierView.offsetWidth / 2);
      const offsetY = (y / imgHeight) * (imgHeight * zoomLevel) - (magnifierView.offsetHeight / 2);

      magnifiedImage.style.width = `${mainImage.width * zoomLevel}px`;
      magnifiedImage.style.height = `${mainImage.height * zoomLevel}px`;

      // Position the magnifier view in the center of the viewport
      magnifierView.style.display = 'flex';
      zoomin.style.display = 'none';
      zoomout.style.display = 'flex';
      magnifierView.style.margin = 'auto';
      magnifierView.style.top = '50%';
      magnifierView.style.transform = 'translateY(-50%)';
      imagecontainer.style.visibility = 'hidden';

      // Set the initial scroll position of the magnifier view
      magnifierView.scrollLeft = offsetX;
      magnifierView.scrollTop = offsetY;

      // Add click event listener for zoom out
      zoomout.addEventListener('click', function () {
        zoomo(magnifierView, zoomout, zoomin);
        imagecontainer.style.visibility = 'visible'
      });
    }

    // Updated zoomo function to accept necessary parameters
    function zoomo(magnifierView, zoomout, zoomin) {
      magnifierView.style.display = 'none';
      zoomout.style.display = 'none';
      zoomin.style.display = 'flex';

    }
    document.addEventListener('DOMContentLoaded', () => {
      const showanswers = document.querySelectorAll(".showanswer");

      showanswers.forEach(showanswer => {
        showanswer.addEventListener('click', function () {
          const practice = showanswer.closest(".practice");
          const aTags = practice.querySelectorAll('a');
          showanswer.style.border = "1px solid gold";

          aTags.forEach(aTag => {
            aTag.style.visibility = "visible";
          })
        });
      });
    });


    document.addEventListener('DOMContentLoaded', () => {
      const fillblanks = document.querySelectorAll(".fillblank");

      fillblanks.forEach(fillblank => {
        fillblank.addEventListener('click', function () {
          const practice = fillblank.closest(".practice");
          const aTags = practice.querySelectorAll('a');

          aTags.forEach(aTag => {
            aTag.style.visibility = "visible";
            aTag.style.position = "relative";

            fillblank.style.border = "1px solid gold";
            fillblank.style.color = "gold";

            const blanks = practice.querySelectorAll('.blank');
            blanks.forEach(blank => {
              blank.style.display = "none"
            });
            const wantedunits = practice.querySelectorAll('.wanted-unit');
            wantedunits.forEach(wantedunit => {
              wantedunit.style.display = "none"


            })



          });
        });
      });
    });


    const images = document.querySelectorAll('.zoomable');
const zoomContainer = document.getElementById('zoom-container');
const zoomImage = document.getElementById('zoom-image');
const chaptermapframe = document.querySelector('.chaptermapframe');
const tableitemsinmap = document.querySelectorAll('.tableitemsinmap');

// کلیک روی آیتم‌های جدول نقشه
tableitemsinmap.forEach(tableitem => {
  tableitem.addEventListener('click', (e) => {
    const image = tableitem.querySelector('img'); // اطمینان از اینکه تصویر داخل tableitem انتخاب می‌شود
    
    if (image) { 
      const src = image.src; // دریافت آدرس تصویر
      zoomImage.src = src; // قرار دادن آدرس تصویر در تصویر زوم‌شده
    } 

    chaptermapframe.style.setProperty('backdrop-filter', 'none'); // حذف فیلتر پس‌زمینه

    // نمایش تصویر زوم‌شده
    zoomContainer.style.display = 'flex';

    // ابتدا تصویر کوچک می‌شود، سپس به اندازه واقعی زوم می‌شود
    zoomImage.style.transform = 'scale(0.1)';
    setTimeout(() => {
      zoomImage.style.transform = 'scale(1)';
    }, 50);
  }); 
});


    // بستن تصویر بزرگ با کلیک روی تصویر زوم‌شده
    zoomImage.addEventListener('click', closeZoomImage);

    function closeZoomImage() {
     

      zoomImage.style.transform = 'scale(0.1)'; // کوچک کردن تصویر
      setTimeout(() => {
        zoomContainer.style.display = 'none';
        chaptermapframe.style.setProperty('backdrop-filter', 'blur(10px)');
        // مخفی کردن کانتینر زوم
      }, 300); // پس از 300 میلی‌ثانیه (طول انیمیشن)
    }

    // کنترل اسکرول برای زوم بیشتر
    zoomImage.addEventListener('wheel', (e) => {
      e.preventDefault();
      let scale = parseFloat(zoomImage.style.transform.match(/scale\(([^)]+)\)/)?.[1] || 1);
      scale += e.deltaY * -0.001;
      scale = Math.max(1, Math.min(scale, 3)); // محدودیت زوم از 1x تا 3x
      zoomImage.style.transform = `scale(${scale})`;
    });

  </script>

</body>

</html>