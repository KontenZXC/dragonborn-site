﻿<?php 
include dirname(__FILE__)."/scripts/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ -  Crystal Client</title>
    <link rel="shortcut icon" href="img/ellogo.png">
    <link href='boxicons%402.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0">
    <link rel="stylesheet" href="css/other.css">
</head>
<body>
    <?php head(); ?>
    <!-- Секция #1 - Faq Основное -->
    <section id="main">
        <div class="page-text">
            <h1 class="main-text anim">Выбери нужную тебе страницу</h1>
            <p class="desc-text anim">Данная страница - навигационная</p>
        </div>
    <div id="faq-u">
        <div class="faq">
            <div class="question">
                <h2 class="qatitle">FAQ</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
            </div>
            <div class="answer">
                <p><a style="color: var(--main-color)" href="faq.php.html">Данная страница поможет вам с клиентом, с разными ошибками клиента</a>
                </p>
            </div>
        </div>
        <div class="faq">
            <div class="question">
                <h2 class="qatitle">Новости</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
            </div>
            <div class="answer">
                <p><a style="color: var(--main-color)" href="co news.html">Данная страница поможет вам узнать все самые актуальные новости о клиенте</a>
                </p>
            </div>
        </div>
            </div>
        </div>
        <div id="faq-u">
        <div class="faq">
            <div class="question">
                <h2 class="qatitle">Конфигурации сообщества</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
            </div>
            <div class="answer">
               <!-- <p><a style="color: var(--main-color)" href="configs.html">Данная страница содержит конфигурации наших пользователей для нашего клиента</a> -->
                </p>
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