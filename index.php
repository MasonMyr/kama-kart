<?php
include('php/head.php')
?>

<meta name="description" content="Главная страница Кама-Карт">
<title>Кама-Карт</title>
</head>

<body>
    <?php
    include('php/header.php')
    ?>
    <main>
        <div class="content">
            <div class="hero">
                <div class="hero__wrap">
                    <div class="index__BlockWithPic">
                        <div class="index__h1">
                            <h1>
                                Кама-карт
                            </h1>
                        </div>
                        <div class="index__p">
                            <p><?php
                                $sql = 'SELECT `Text` FROM `text` WHERE `id` = 1';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo ($row['Text']);
                                }
                                ?>
                            </p>
                        </div>
                        <button class="open-modal index__button" data-target="modal-1">Отправить заявку на аренду карта</button>
                        <div id="modal-1" class="modal-window">
                            <div class="modal-window__cross">
                                <h2><?php
                                    $sql = 'SELECT Title FROM `modal` WHERE `id` = 1';
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo ($row['Title']);
                                    }
                                    ?></h2>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cross modal-hide" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <p class="Modal__p"><?php
                                                $sql = 'SELECT Subtitle FROM `modal` WHERE `id` = 1';
                                                $result = mysqli_query($link, $sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo ($row['Subtitle']);
                                                }
                                                ?></p>
                            <form action="php/mail.php" method="post" class="Modal__form">
                                <input type="text" name="FIO" id="FIO" placeholder="ФИО" class="Modal__inputs">
                                <input type="tel" name="NUMBER" id="NUMBER" placeholder="+7*******" class="Modal__inputs">
                                <input type="hidden" name="subj" value="Заявка на бронирование проката">
                                <input type="submit" value="<?php
                                                            $sql = 'SELECT ButtonText FROM `modal` WHERE `id` = 1';
                                                            $result = mysqli_query($link, $sql);
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                echo ($row['ButtonText']);
                                                            }
                                                            ?>" class="modal-btn modal-hide">
                            </form>
                            <p class="Modal__accept">Я ознакомлен и
                                согласен с правилами обработки моих персональных данных</p>
                        </div>
                        <div class="modal-fader"></div>
                        <div class="index__p">
                            <p><?php
                                $sql = 'SELECT `Text` FROM `text` WHERE `id` = 2';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo ($row['Text']);
                                }
                                ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sections">
                <div class="sections__container">
                    <div class="sections__wrap">
                        <a href="" class="section" style="background: url(./img/pic.jpg);">
                            <p class="section__title">Цены на прокат</p>
                        </a>
                        <a href="" class="section" style="background: url(./img/School.jpg);">
                            <p class="section__title">Школа Юного Пилота</p>
                        </a>
                        <a href="" class="section" style="background: url(./img/Cart.jpg);">
                            <p class="section__title">Карты</p>
                        </a>
                        <a href="" class="section" style="background: url(./img/Certificate.jpg);">
                            <p class="section__title">Сертификаты</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="index__PriceList">
                <div class="index__PriceH">
                    <h2 class="index__PriceHRed">Стоимость</h2>
                    <h2>&nbsp;услуг</h2>
                </div>
                <div class="index__price">
                    <div class="price__container">
                        <p>Прокат</p>
                        <p class="index__PriceRub">от <?php
                                                        $sql = 'SELECT `price` FROM `cart_price` WHERE `id` = 1';
                                                        $result = mysqli_query($link, $sql);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo ($row['price']);
                                                        }
                                                        ?> руб.</p>
                    </div>
                    <div class="price__container">
                        <p>Аренда трассы</p>
                        <p class="index__PriceRub">от <?php
                                                        $sql = 'SELECT `price` FROM `services_price` WHERE `name` = "trace"';
                                                        $result = mysqli_query($link, $sql);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo ($row['price']);
                                                        }
                                                        ?> руб.</p>
                    </div>
                    <div class="price__container">
                        <p>Школа юного пилота</p>
                        <p class="index__PriceRub">от <?php
                                                        $sql = 'SELECT `price` FROM `services_price` WHERE `name` = "school"';
                                                        $result = mysqli_query($link, $sql);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo ($row['price']);
                                                        }
                                                        ?> руб.</p>
                    </div>
                </div>
            </div>
            <div class="track">
                <div class="track__container">
                    <div class="track__wrap">
                        <div class="track__title">
                            <h2 class="index__PriceHRed">Наша</h2>
                            <h2>&nbsp;трасса</h2>
                        </div>
                        <div class="track__description">
                            <div class="track__img">

                                <img src="img/Group.svg" alt="Trace" class="index__tracepic">
                            </div>
                            <a href="trace.php">
                                Подробнее о трассе
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('php/footer.php');
    include('php/scripts.php');
    ?>
</body>

</html>