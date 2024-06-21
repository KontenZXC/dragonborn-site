﻿<?php 
include_once dirname(__FILE__)."/scripts/helper.php";
include_once __DIR__ . "/scripts/cfg.php";
$cfg = new Config();
$helper = new helper();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo("FAQ - ".$cfg->projectname); ?> </title>;
    <link rel="shortcut icon" href="img/ellogo.png">
    <link href='boxicons%402.1.4/css/boxicons.min-1.css' rel='stylesheet'>
    <link rel="stylesheet" href="css2-1?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0">
    <link rel="stylesheet" href="css/other.css">
</head>
<body>
    <?php $helper->header(); ?>
    <!-- Секция #1 - Faq Основное -->
    <section id="main">
        <div class="page-text">
            <h1 class="main-text anim">Часто задаваемые вопросы</h1>
            <p class="desc-text anim">Здесь вы сможете найти ответы на часто задаваемые вопросы <br> для лучшего понятия работы сервиса</p>
        </div>
        <div id="faq-u">
        <?php $helper->presetFAQ(); ?>
    </div>
    </section>

    <script>
        const faqs = document.querySelectorAll(".faq");
        faqs.forEach((faq) => {
            faq.addEventListener("click", () => {
                faq.classList.toggle("active");
            });
        });
    </script>
</body>
</html>