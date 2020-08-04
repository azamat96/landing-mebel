<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мебель - Внутри</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/style.css">
    <script src="../src/js/jquery.min.js"></script>
    <script src="../src/js/bootstrap.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<?php include '../layouts/header.php'; ?>

<div class="sec-mebel-inside">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item breadcrumb-first-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item"><a href="/">Мебель на заказ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Кухни на заказ</li>
            </ol>
        </nav>
        <div class="big-m-inside">
            <div class="d-flex flex-column flex-md-row">
                <div class="image-m-inside">
                    <img src="../src/images/big-i.png" alt="">
                </div>
                <div class="text-m-inside">
                    <h2 class="title-m-inside">Собственное производство кухонь в Алматы</h2>
                    <p class="desc-m-inside">Мы с глубокой ответственностью относимся к собственному делу и предлагаем Вам то, что проверено опытом сотен наших клиентов.
                        <br><br>
                        Благодаря высокой автоматизации производства и международному стандарту наша продукция сохраняет баланс между высоким качеством и низкой стоимостью.
                        <br><br>
                        Ниже Вы можете ознакомиться с нашими работами и подать заявку, в кратчайшие сроки наш менеджер Вам перезвонит!
                    </p>
                    <p class="price-m-inside">от 65 000 ₸ за погонный метр</p>
                    <div class="tovar-btn-block">
                        <button class="green-btn-outline vernut-nazad-btn">Вернуться назад</button>
                        <button class="green-btn-outline zakazat-btn">Заказать</button>
                        <p class="tovar-footer-text">ИЗОБРАЖЕНИЕ ТОВАРА НА САЙТЕ МОЖЕТ ОТЛИЧАТЬСЯ ОТ ФАКТИЧЕСКОГО</p>
                    </div>
                </div>
            </div>
            <div class="footer-m-inside">
                <div class="d-flex justify-content-center flex-column flex-md-row align-items-center align-items-md-baseline">
                    <div class="reason">
                        <img src="../src/images/m-1.png">
                        <p>Бесплатный выезд</p>
                    </div>
                    <div class="reason">
                        <img src="../src/images/m-2.png">
                        <p>Бесплатный замер</p>
                    </div>
                    <div class="reason">
                        <img src="../src/images/m-3.png">
                        <p>Гарантия качества</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-works-slider">
    <div class="container">
        <h3 class="section-header">наши работы</h3>
        <div class="slider-swipe">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../src/images/s-1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../src/images/s-2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../src/images/s-3.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../src/images/s-4.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../src/images/s-4.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-b-next">
                <img src="../src/images/next-1.png">
            </div>
            <div class="swiper-b-prev">
                <img src="../src/images/prev-1.png" alt="">
            </div>
        </div>
    </div>
</div>

<?php include '../layouts/footer.php'; ?>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-b-next',
            prevEl: '.swiper-b-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });
</script>

</body>
</html>