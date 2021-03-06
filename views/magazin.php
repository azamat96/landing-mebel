<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин</title>
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
                <li class="breadcrumb-item active" aria-current="page">Магазин</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-center flex-column flex-md-row">
            <div class="room-zakaz room-zakaz-big room-zakaz-magazin">
                <div class="zakaz-body">
                    <h4>Стулья</h4>
                    <button class="zakaz-body-btn">Подробнее </button>
                </div>
            </div>
            <div class="room-zakaz room-zakaz-big room-zakaz-magazin">
                <div class="zakaz-body">
                    <h4>Мебель для детских садов</h4>
                    <button class="zakaz-body-btn">Подробнее </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../layouts/footer.php'; ?>

</body>
</html>