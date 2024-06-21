<?php 
include dirname(__FILE__)."/scripts/helper.php";
$helper = new Helper();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - Crystal Client</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link href='boxicons%402.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0">
    <link rel="stylesheet" href="css/main.css?1703620964">
    <link href="/css/main.css" rel="stylesheet">
</head>

<body>
   <?php $helper->header(); ?>

    <!-- Секция #1 - Главная страница, Кристал Клиент и ниже описание, справа меню -->
    <img class="bg-img" alt="">
    <div class="gradient"></div>
    <div class="transition"></div> <!-- Переход между секциями -->

    <section id="main">
        <div class="page-text">
            <img class="anim" src="img/menu2.png" alt="">
            <h1 class="main-text anim">Побеждай в <span class="minecraft">Minecraft</span> <br> прямо сейчас!</h1>
            <p class="desc-text anim">Встречайте лучший бесплатный клиент с красивой <br> визуальной составляющией на русском и <br> английском языках!</p>
            <a class="main-btn install anim" href="#inst-client"><span><i class='bx bxs-download'></i></span> Установить</a>
            <a class="faq anim" href="faq.php.html">FAQ</a>
        </div>
    </section>

    <!-- Секция #2 - Почему именно мы? (Описать тех. поддержку, визуалы, обходы)-->
    <section id="whyus">
        <div class="whyus-text">
            <h1 class="sec-title">Почему именно мы?</h1>
            <div class="container">
               <?php $helper->preset(); ?>
            </div>
        </div>
    </section>

    <!-- Секция #4 - Установить лоадер/версию чита -->
    <section id="inst-client"> 
        <div class="inst-text">
            <h1 class="title">Установка клиента</h1>
            <p class="desc">Наилучший бесплатный чит для новичков с понятным <br>
                и современным интерфейсом  </p>
                <a class="main-btn install anim" href="Crystal.zip"><span><i class="bx bxs-download"></i></span> Скачать</a> <a class="main-btn install anim" href="stormhvh.cfg"><span><i class=""> </i></span> Конфиг</a>
            <a class="faq anim" href="faq.php.html">Инструкция</a>
            <!-- <div style="padding-top: 17px;" class="inst-sup"><a style="color: #abaeb1;" class="faq" href="https://discord.gg/RJjRnCU88g"> Купить с поддержкой</a> </div> -->
        </div>
    </section>
    
</body>
</html>