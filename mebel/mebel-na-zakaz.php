<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мебель на заказ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/style.css">
    <script src="../src/js/jquery.min.js"></script>
    <script src="../src/js/bootstrap.min.js"></script>
</head>
<body>

<?php include '../layouts/header.php'; ?>

<div class="sec-main-magazin">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item breadcrumb-first-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Мебель на заказ</li>
            </ol>
        </nav>
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

<?php include '../layouts/footer.php'; ?>

</body>
</html>