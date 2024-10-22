﻿<?php 
include dirname(__FILE__)."/scripts/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головний - Crystal Client</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link href='boxicons%402.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0">
    <link rel="stylesheet" href="css/main.css?1703620964">
</head>
<body>
    <?php head(); ?>
    <!-- Секция #1 - Главная страница, Элюсиум Клиент и ниже описание, справа меню -->
    <img class="bg-img" alt="">
    <div class="gradient"></div>
    <div class="transition"></div> <!-- Переход между секциями -->

    <section id="main">
        <div class="page-text">
            <img class="anim" src="img/menu2.png" alt="">
            <h1 class="main-text anim">Перемагай в <span class="minecraft">Minecraft</span> <br> прямо зараз!</h1>
            <p class="desc-text anim">Зустрічайте кращий безкоштовний клієнт з красивою <br> визуальной составляющией російською і <br> англійською мовами!</p>
            <a class="main-btn install anim" href="#inst-client"><span><i class='bx bxs-download'></i></span> Установивши</a>
            <a class="faq anim" href="faq.php.html">FAQ</a>
        </div>
    </section>

    <!-- Секция #2 - Почему именно мы? (Описать тех. поддержку, визуалы, обходы)-->
    <section id="whyus">
        <div class="whyus-text">
            <h1 class="sec-title">Чому саме ми?</h1>
            <div class="container">
                <div class="wbox">
                    <h1 class="title">Інтерфейс</h1>
                    <p class="desc">Гарний інтерфейс клієнта не дасть вам занудьгувати і не буде їсти дорогоцінний fps.</p>
                </div>
                
                <div class="wbox">
                    <h1 class="title">Доступність</h1>
                    <p class="desc">Наш клієнт безкоштовний, і майже ні чим не відрізняється від платних клієнтів!</p>
                </div>
                <div class="wbox">
                    <h1 class="title">Захист</h1>
                    <p class="desc">Ми маємо чудовий захист, що дозволяє вам не бояться за слив початкових кодів клієнта.</p>
                </div>
                <div style="cursor: pointer;" target="_blank" onclick="window.location='https://discord.gg/Jp48Rv8VJC'" class="wbox">
                    <h1 class="title">Підтримка</h1>
                    <p class="desc">Наша підтримка ретельно вас вислухає і допоможе вам з будь-якими виниклими труднощами</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция #3 - Видеообзор -->
    <section id="showcase"> 
        <div class="video-text">
            <div class="video-showcase">
                <video style="position: absolute; opacity: 0.5; filter: blur(20px);" src="img/videos/Crystal video.mp4" muted="" autoplay="" loop="" plays-inline=""></video>
                <video src="img/videos/Crystal video.mp4" muted="" autoplay="" loop="" plays-inline=""></video>
            </div>
            <h1 class="main-text">Відеоогляд Crystal Client</h1>
            <p class="desc-text">Это обзор на бесплатный клиент Crystal Client в котором <br> демонструється частина функціоналу і частина <br> всього того що насправді є</p>
            <a href="https://youtu.be/TkusMxptiNc?si=PUaL2nOlep3SVZDq" class="install-btn"><span><i class='bx bxl-youtube'></i></span> Подивитися</a>
        </div>
    </section>

    <!-- Секция #4 - Установить лоадер/версию чита -->
    <section id="inst-client"> 
        <div class="inst-text">
            <h1 class="title">Установка клієнта</h1>
            <p class="desc">Найкращий безкоштовний чит для новачків зі зрозумілим <br>
                і сучасним інтерфейсом </p>
                <a class="main-btn install anim" href="https://drive.google.com/file/d/1YzVzpjFh1B86-4BEL_Bh_bNTnKFzIWsq/view?usp=sharing"><span><i class="bx bxs-download"></i></span> Скачавши</a> <a class="main-btn install anim" href="https://moneyz.fun/9d8SFU"><span><i class=""> </i></span> Конфиг</a>
            <a class="faq anim" href="faq.php.html">Інструкція</a>
            <!-- <div style="padding-top: 17px;" class="inst-sup"><a style="color: #abaeb1;" class="faq" href="https://discord.gg/Jp48Rv8VJC"> Купить с поддержкой</a> </div> -->
        </div>
    </section>
    
        
    <!-- Секция #5 - Статистика клиента -->
        <section id="join-us">
            <div class="con-text">
            </div>
        </section>
    <script>

        // Loading page
        window.onload = function () {
          document.body.classList.add('loaded_hiding');
          window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
          }, 500);
        }

        //Sticky header 
        document.addEventListener("DOMContentLoaded", function() {
            const header = document.querySelector("header");
            window.addEventListener("scroll", function() { 
                header.classList.toggle("sticky", window.scrollY > 20);
            });
        });
          

//Counter

let valueDisplays = document.querySelectorAll(".desc-count");
let interval = 2000;
let maxEndValue = 0;
let numSteps = 1000; // Количество шагов, которые вы хотите для анимации

valueDisplays.forEach((valueDisplay) => {
   let endValue = parseInt(valueDisplay.getAttribute("data-val"));
   maxEndValue = Math.max(maxEndValue, endValue);
});

let duration = Math.floor(interval / numSteps);

valueDisplays.forEach((valueDisplay) => {
   let startValue = 0;
   let endValue = parseInt(valueDisplay.getAttribute("data-val"));
   let increment = (endValue - startValue) / numSteps;
   let step = 0;

   let counter = setInterval(function () {
      startValue += increment;
      step++;
      valueDisplay.textContent = Math.round(startValue);
      if (step >= numSteps) {
          clearInterval(counter);
          valueDisplay.textContent = endValue; // Убедимся, что конечное значение точное
      }
   }, duration);
});


    </script>
</body>
</html>