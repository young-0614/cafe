<?php
  include $_SERVER['DOCUMENT_ROOT']."/p2/younghae/cafe/include/header.php"
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1 maximum-scale=1.0, minimum-scale=1, user-scalable=yes,initial-scale=1.0">
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <title>Where</title>
        <link rel="stylesheet" href="/p2/younghae/cafe/css/main.css">
    </head>
    <body>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="/p2/younghae/cafe/img/main4.PNG">
              </div>
              <div class="swiper-slide">
              <img src="/p2/younghae/cafe/img/main2.PNG">
              </div>
              <div class="swiper-slide">
               <img src="/p2/younghae/cafe/img/main.jpg">
              </div>
              <div class="swiper-slide">
               <img src="/p2/younghae/cafe/img/in_3.jpg">
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>

      
          <!-- Swiper JS -->
          <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      
          <!-- Initialize Swiper -->
          <script>
            var swiper = new Swiper(".mySwiper", {
              cssMode: true,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              pagination: {
                el: ".swiper-pagination",
              },
              mousewheel: true,
              keyboard: true,
            });
          </script>
    </body>
</html>
