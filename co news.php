﻿<?php 
include dirname(__FILE__)."/scripts/helper.php";
$helper = new helper();
?>

﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Crystal Client</title>
    <link rel="shortcut icon" href="img/ellogo.png">
    <link href='boxicons%402.1.4/css/boxicons.min-1.css' rel='stylesheet'>
    <link rel="stylesheet" href="css2-1?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0">
    <link rel="stylesheet" href="css/other.css">
</head>
<body>
    <?php $helper->header(); ?>

    <!-- Секция #1 - Конфиги Основное -->
    <section id="main">
        <div class="page-text">
            <h1 class="main-text anim">Новости клиента</h1>
            <p class="desc-text anim">Здесь вы сможете найти информацию о нашем клиенте,<br> о обновлениях также</p>
        </div>
        <div id="faq-u">
            <div class="faq">
                <div class="question">
                    <h2 class="qatitle">Релиз клиента</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
                </div>
                <div class="answer">
                    <p> Примерная дата выхода бесплатной версии клиента - 20.02.2024
                    </p>
                </div>
            </div>
        </div>
        
    </div>
    </section>


    <footer> </footer>

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

        // FAQs

        const faqs = document.querySelectorAll(".faq");

        faqs.forEach((faq) => {
            faq.addEventListener("click", () => {
                faq.classList.toggle("active");
            });
        });
    </script>
</body>
</html>

   <!-- Секция #666 - Пастим сайт -->