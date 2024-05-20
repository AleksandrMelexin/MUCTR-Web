<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/obj/DB.php');
$cars = $DB->join('cars', 'id', 'pricelist', 'car_id');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Каталог MelCars</title>
    <meta name="description" content="Каталог автомобилей MelCars.">
    <meta charset="UTF-8">
    <link type="image/svg+xml" rel="icon" href="../img/icon.png">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php');?>
    <main>
        <div id="news_background">
            <div class="container">
                <h2>Выбрать тип автоомбиля:</h2>
                <form id="type_form" method="get" action="catalog.php">
                    <div>
                        <input type="radio" id="any" name="type" value="0">
                        <label for="any">Любой</label><br>
                    </div>
                    <div>
                        <input type="radio" id="easy" name="type" value="1">
                        <label for="easy">Легковой</label><br>
                    </div>
                    <div>
                    <input type="radio" id="heavy" name="type" value="2">
                        <label for="heavy">Грузовой</label><br>
                    </div>
                    <div>
                        <input type="radio" id="special" name="type" value="3">
                        <label for="special">Особый</label><br>
                    </div>
                    <button type="submit">Применить</button><br>
                </form>
                <ul>
                    <?php $search_type = isset($_GET["type"]) ? $_GET["type"] : 0; ?>
                    <?php foreach ($cars as $car) { ?>
                        <?php if((!$search_type || $car['type'] == $search_type)){?>
                            <li>
                                <div>
                                    <h2><?php echo $car['name'] ?></h2>
                                    <p class="date"><?php echo $car['price'] ?> ₽</p>
                                    <h3>Пробег: <?php echo $car['mileage'] ?> км</h3>
                                    <p class="u_text"><?php echo $car['description'] ?? 'Отсутсвует описание'?></p>
                                    <a class="news_link" href="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . '/pages/catalog.php'?>">Купить</a>
                                </div>
                                <img src="<?php echo $car['pic'] ?? '../img/cars/car_defualt2.png'?>" alt="<?php echo $car['name'] ?>" width="500px" height="300px">
                            </li>
                            <hr>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="container">
            <h2>Остались вопросы?</h2>
            <p class="form_text">Оставьте заявку, и мы вам перезвоним</p>
            <form action="../func/insert.php" method="get">
                <input id="user_name" type="text" name="name" placeholder="Имя">
                <input id="user_phone" type="tel" required name="phone" placeholder="Телефон*">
                <button type="submit">Отправить</button>
            </form>
            <p class="form_text">Нажимая на кнопку, вы соглашаетесь с условиями обработки персональных данных и <a href="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . '/pages/politics.php'?>" id="politic">политикой конфиденциальности</a></p>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php');?>
</body>
</html>