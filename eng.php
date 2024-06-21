<?php 
include dirname(__FILE__)."/scripts/helper.php";
$helper = new helper();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main - Crystal Client</title>
    <link rel="shortcut icon" href="img/logo-1.png">
    <link href='boxicons%402.1.4/css/boxicons.min-1.css' rel='stylesheet'>
    <link rel="stylesheet" href="css2-1?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0">
    <link rel="stylesheet" href="css/main.css?1703620964">
</head>
<body>
    <?php $helper->header(); ?>
    <!-- Секция #1 - Main страница, Элюсиум Клиент и ниже описание, справа меню -->
    <img class="bg-img" alt="">
    <div class="gradient"></div>
    <div class="transition"></div> <!-- Переход между секциями -->

    <section id="main">
        <div class="page-text">
            <img class="anim" src="img/menu2-1.png" alt="">
            <h1 class="main-text anim">Win in <span class="minecraft">Minecraft</span> <br> right now!</h1>
            <p class="desc-text anim">Meet the best free client with a beautiful <br> visual component in Russian and <br> English!</p>
            <a class="main-btn install anim" href="#inst-client"><span><i class='bx bxs-download'></i></span> Download</a>
            <a class="faq anim" href="faq.php-1.html">FAQ</a>
        </div>
    </section>

    <!-- Секция #2 - Почему именно мы? (Описать тех. поддержку, визуалы, обходы)-->
    <section id="whyus">
        <div class="whyus-text">
            <h1 class="sec-title">Why us?</h1>
            <div class="container">
                <?php $helper->preset(); ?>
            </div>
        </div>
    </section>
 
    <!-- Секция #4 - Установить лоадер/версию чита -->
    <section id="inst-client"> 
        <div class="inst-text">
            <h1 class="title">Installing the client</h1>
            <p class="desc">The best free cheat for beginners with a clear <br>
             and a modern interface </p>
                <a class="main-btn install anim" href="https://drive.google.com/file/d/1YzVzpjFh1B86-4BEL_Bh_bNTnKFzIWsq/view?usp=sharing"><span><i class="bx bxs-download"></i></span> Download</a> <a class="main-btn install anim" href="https://moneyz.fun/9d8SFU"><span><i class=""> </i></span> Config</a>
            <a class="faq anim" href="faq.php-1.html">Instruction manual</a>
            <!-- <div style="padding-top: 17px;" class="inst-sup"><a style="color: #abaeb1;" class="faq" href="https://discord.gg/Jp48Rv8VJC"> Купить с поддержкой</a> </div> -->
        </div>
    </section>

</body>
</html>