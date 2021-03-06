<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин - Товар</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/style.css">
    <script src="../src/js/jquery.min.js"></script>
    <script src="../src/js/bootstrap.min.js"></script>
</head>
<body>

<?php include '../layouts/header.php'; ?>

<div class="sec-magazine-inside">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item breadcrumb-first-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item"><a href="/">Магазин</a></li>
                <li class="breadcrumb-item active" aria-current="page">Стулья</li>
            </ol>
        </nav>
        <div class="magazin-block d-flex flex-column flex-md-row">
            <img class="magazin-img" src="../src/images/stol.png">
            <div class="magazin-desc d-flex flex-column justify-content-between">
                <div>
                    <h1 class="magazin-title">Стул</h1>
                    <div class="price-block d-flex flex-column flex-md-row">
                        <div class="mr-md-5 pr-md-3">
                            <p class="price-label">Цена</p>
                            <p class="price">40 000 ₸</p>
                        </div>
                        <div>
                            <p class="price-label mt-4 pt-3 pt-md-0 mt-md-0">Количество</p>
                            <div class="plus-minus d-flex justify-content-between align-items-center">
                                <button class="plus-minus-btn">-</button>
                                <p class="tovar-sani">7</p>
                                <button class="plus-minus-btn">+</button>
                            </div>
                        </div>
                    </div>
                    <h2 class="tovar-title">Материал: Массив кавказского бука, Ткань</h2>
                    <p class="tover-pod-title">Срок изготовления: от 10 дней</p>
                </div>

                <div class="tovar-btn-block">
                    <button class="green-btn-outline vernut-nazad-btn">Вернуться назад</button>
                    <button class="green-btn-outline zakazat-btn">Заказать</button>
                    <p class="tovar-footer-text">ИЗОБРАЖЕНИЕ ТОВАРА НА САЙТЕ МОЖЕТ ОТЛИЧАТЬСЯ ОТ ФАКТИЧЕСКОГО</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../layouts/footer.php'; ?>

</body>
</html>