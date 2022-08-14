<?php
include('php/head.php')
?>
<meta name="description" content="Школа Юного пилота Кама-Карт">
<title>Школа Юного пилота</title>
</head>

<body>
    <?php
    include('php/header.php')
    ?>
    <main>
        <div class="content">
            <div class="school">
                <div class="page__title">
                    <h1>Школа юного пилота</h1>
                </div>
                <hr>
                <div class="school__info">
                    <div class="info__title title">
                        <h2>Информация</h2>
                    </div>
                    <div class="info__text">
                        <p>
                            <?php
                                $sql = 'SELECT Text FROM `text` WHERE `id` = 3';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo nl2br($row['Text']);
                                }
                            ?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="school__pluses">
                    <div class="pluses__title title">
                        <h2>Достоинства</h2>
                    </div>

                    <div class="pluses__text">
                        <p><?php
                                $sql = 'SELECT Text FROM `text` WHERE `id` = 4';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo nl2br($row['Text']);
                                }
                            ?></p>
                        <p class="pluses__point">Курс направлен на получение юными пилотами следующих <span style="color: #d24741; text-transform: uppercase;">знаний</span>:</p>
                        <ul>
                            <li>основы вождения и правила поведения на дороге и гоночной трассе;</li>
                            <li>основы строения автомобиля на примере простой конструкции карта;</li>
                            <li>стратегия и тактика гонок.</li>
                        </ul>
                        <p class="pluses__point">Формирование <span style="color: #d24741; text-transform: uppercase;">умений</span> и
                            <span style="color: #d24741; text-transform: uppercase;">навыков</span>:
                        </p>
                        <ul>
                            <li>безопасное управление автомобилем на дороге и гоночной трассе в различных погодных
                                условиях;</li>
                            <li>скоростное управление автомобилем;</li>
                            <li>выявление и устранение неисправностей узлов и механизмов карта;</li>
                        </ul>
                        <p class="pluses__point">Развитие <span style="color: #d24741; text-transform: uppercase;">качеств</span>:</p>
                        <ul>
                            <li>быстрота реакции;</li>
                            <li>смелость и решительность;</li>
                            <li>стремление к успеху;</li>
                            <li>самостоятельность и уверенность в себе.</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="school__dates">
                    <div class="dates__title title">
                        <h2>Расписание</h2>
                    </div>
                    <div class="dates__text">
                        <p>
                            Теория: 
                                <?php
                                    $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 1';
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo ($row['Text']);
                                    }
                                ?>.
                            Практика: 
                                <?php
                                    $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 2';
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo ($row['Text']);
                                    }
                                ?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="school__contacts">
                    <div class="title">
                        <h2>Цена</h2>
                    </div>
                    <p class="school__pricetext">Стоимость обучения в Школе юного пилота <?php
                                $sql = 'SELECT `price` FROM `services_price` WHERE `id` = 2';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo ($row['price']);
                                }
                            ?> рублей в месяц</p>
                </div>
                <hr>
                <div class="school__contacts">
                    <div class="contacts__title title">
                        <h2>Контакты</h2>
                    </div>
                    <p>Телефон для записи:
                        <?php
                        $sql = 'SELECT value FROM `contacts` WHERE `id` = 3';
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo ('<a href="tel:+' . $row['value'] . '">' . '+' . $row['value'] . '</a>');
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('php/footer.php');
    include('php/scripts.php');
    ?>
    <script>
        window.onload = function() {
            var div = document.querySelector('.header__LinkSchool')
            div.classList.add("active");
        }
    </script>
</body>

</html>