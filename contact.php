<?php
include('php/head.php')
?>
<meta name="description" content="Контакты Кама-Карт">
<title>Контакты</title>
</head>

<body>
    <?php
    include('php/header.php')
    ?>
    <main>
        <div class="content">
            <div class="contacts">
                <div class="page__title">
                    <h1>Контакты</h1>
                </div>
                <div class="contacts__mapblock">
                    <div class="contacts__mapgrid">
                        <div class="adress1">
                            <p>Адрес</p>
                        </div>
                        <div class="adress2">
                            <?php
                            $sql = 'SELECT value FROM `contacts` WHERE `id` = 2';
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo ('<p>' . $row['value'] . '</p>');
                            }
                            ?>
                        </div>
                        <div class="work">
                            <p>Режим работы</p>
                        </div>
                        <div class="work1">
                            <p>Пн-Пт</p>
                            <p><?php
                                $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 3';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo ($row['Text']);
                                }
                            ?></p>
                        </div>

                        <div class="work2">
                            <p>Сб - Вс</p>
                            <p><?php
                                $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 4';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo ($row['Text']);
                                }
                            ?></p>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2186.159209173284!2d54.1345798155225!3d56.77457212019139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43e7298483ae00ab%3A0xf43d3e3acc88cb68!2sKarting%20Klub%20Kama-Kart!5e0!3m2!1sen!2sru!4v1647105806459!5m2!1sen!2sru" style="width:80vw; height:100vh; border:0; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;" allowfullscreen="" loading="lazy" class="contacts__map"></iframe>
                </div>
                <div class="contacts__number">
                    <p><?php
                                $sql = 'SELECT Text FROM `text` WHERE `id` = 8';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo nl2br($row['Text']);
                                }
                            ?></p>
                    <?php
                    $sql = 'SELECT value FROM `contacts` WHERE `id` = 1';
                    $result = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo ('<a href="tel:+' . $row['value'] . '">' . '+' . $row['value'] . '</a>');
                    }
                    ?>
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
            var div = document.querySelector('.header__LinkContact')
            div.classList.add("active");
        }
    </script>
</body>

</html>