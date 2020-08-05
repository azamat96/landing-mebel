<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/style.css">
    <script src="../src/js/jquery.min.js"></script>
    <script src="../src/js/bootstrap.min.js"></script>
</head>
<body>

<?php include '../layouts/header.php'; ?>

<div class="sec-contacts">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item breadcrumb-first-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
            </ol>
        </nav>
        <div class="contacts-block">
            <div class="contact-row d-flex align-items-start">
                <p class="c-label">Пишите</p>
                <p class="c-info"><b>e-mail:</b> info@prestige-mebel.kz</p>
            </div>
            <div class="contact-row d-flex align-items-start">
                <p class="c-label">Звоните</p>
                <p class="c-info">
                    <b>Beeline/WhatsApp:</b> +7 (777) 229 88 89<br><br>

                    <b>Tele2:</b> +7 (747) 981 98 62<br><br>

                    <b>Kcell:</b> +7(778) 3896680<br>
                </p>
            </div>
            <div class="contact-row d-flex align-items-start pb-md-5 border-bottom-0">
                <p class="c-label">Приезжайте</p>
                <p class="c-info"><b>Адрес:</b> Республика Казахстан, г. Алматы ул. Мамбетова, 82.</p>
            </div>
            <div class="c-map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa08bfa99b4a4f9ccf206400164f20e7b4fcddc901fb094415bbeb6584fe20b5d&amp;width=100%25&amp;height=360&amp;lang=en_FR&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</div>

<?php include '../layouts/footer.php'; ?>

</body>
</html>