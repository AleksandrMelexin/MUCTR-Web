<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/obj/DB.php');
$DB->insertUser($_REQUEST['name'], $_REQUEST['phone']);
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>MelCars</title>
    <meta name="description" content="Благодарность">
    <meta charset="utf-8">
    <link type="image/svg+xml" rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="../css/main.css">
</head>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php');?>
<body>
    <div class="root">
    <main>
        <div class="container">
            <h3 id="ThankYou">Спасибо, что оставили заявку, мы вам обязательно перезвоним!</h3>
        </div>
    </main>
    </div>
</body>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php');?>
</html>
