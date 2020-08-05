<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/style.css">
    <script src="../src/js/jquery.min.js"></script>
    <script src="../src/js/bootstrap.min.js"></script>
</head>
<body>

<?php include '../layouts/header.php'; ?>

<div class="sec-main-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="main-header">СТУЛЬЯ НА ЗАКАЗ</h2>
                <button class="zakaz-body-btn main-s-btn">Подробнее </button>
                <div class="d-flex">
                    <div class="arrow-btn prev-btn">
                        <img src="../src/images/prev.png">
                    </div>
                    <div class="arrow-btn next-btn">
                        <img src="../src/images/next.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="main-slider-block">
                    <img src="../src/images/stol1.png" class="slider-stol">
                </div>
            </div>
        </div>
    </div>
    <script>
        var stolSlider = ['../src/images/stol1.png', '../src/images/stol2.png', '../src/images/stol3.png']
        var currentSlide = 0;

        $('.sec-main-slider .prev-btn').on('click', function () {
            if (currentSlide > 0) {
                currentSlide--
                slideChange()
            }
        })
        $('.sec-main-slider .next-btn').on('click', function () {
            if (currentSlide < stolSlider.length - 1) {
                currentSlide++
                slideChange()
            }
        })

        function slideChange() {
            $('.slider-stol').fadeOut(400, function() {
                $(".slider-stol").attr('src', stolSlider[currentSlide]);
            }).fadeIn(400);
        }
    </script>
</div>

<div class="sec-mebel-na-zakaz">
    <div class="container">
        <h3 class="section-header">МЕБЕЛЬ НА ЗАКАЗ В АЛМАТЫ</h3>
        <div class="d-flex justify-content-center flex-column flex-md-row">
            <div class="room-zakaz room-zakaz-big">
                <div class="zakaz-body">
                    <h4>Кухни на заказ</h4>
                    <button class="zakaz-body-btn">Подробнее </button>
                </div>
            </div>
            <div class="d-flex flex-wrap room-zakaz-other flex-column flex-md-row">
                <div class="room-zakaz room-zakaz-1">
                    <div class="zakaz-body">
                        <h4>Кухни на заказ</h4>
                        <button class="zakaz-body-btn">Подробнее </button>
                    </div>
                </div>
                <div class="room-zakaz room-zakaz-2">
                    <div class="zakaz-body">
                        <h4>Гостиные на заказ</h4>
                        <button class="zakaz-body-btn">Подробнее </button>
                    </div>
                </div>
                <div class="room-zakaz room-zakaz-3">
                    <div class="zakaz-body">
                        <h4>Спальни на заказ</h4>
                        <button class="zakaz-body-btn">Подробнее </button>
                    </div>
                </div>
                <div class="room-zakaz room-zakaz-4">
                    <div class="zakaz-body">
                        <h4>Прихожие на заказ</h4>
                        <button class="zakaz-body-btn">Подробнее </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-pochemu-v-nas">
    <div class="container">
        <h3 class="section-header">почему выбирают нас?!</h3>
        <div class="d-flex justify-content-center pb-lg-5 flex-column flex-md-row align-items-center align-items-md-baseline">
            <div class="reason">
                <img src="../src/images/medal.png">
                <p>11 лет на рынке изготовления мебели</p>
            </div>
            <div class="reason">
                <img src="../src/images/sofa.png">
                <p>Более 1000 дизайнов интерьера</p>
            </div>
            <div class="reason">
                <img src="../src/images/customize.png">
                <p>Собственное производство</p>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-lg-3 flex-column flex-md-row align-items-center align-items-md-baseline">
            <div class="reason">
                <img src="../src/images/shield.png">
                <p>Европейское качество</p>
            </div>
            <div class="reason">
                <img src="../src/images/sale.png">
                <p>Доступные цены</p>
            </div>
        </div>
    </div>
    <div class="img-up">
        <img src="../src/images/up.png">
    </div>
    <script>
        $('.img-up').on('click', function () {
            $('html,body').animate({ scrollTop: 0 }, 'slow');
        })
    </script>
</div>

<?php include '../layouts/footer.php'; ?>

</body>
</html>