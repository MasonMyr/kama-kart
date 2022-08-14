<?php
include('php/head.php')
?>
<meta name="description" content="Трасса Кама-Карт и её описание">
<title>Наша трасса</title>

</head>

<body>
    <?php
    include('php/header.php')
    ?>
    <main>
        <div class="content">
            <div class="trace">
                <div class="page__title">
                    <h1>Трасса</h1>
                </div>
                <div class="trace__gallery">
                    <img src="img/Trace1.jpg" alt="Trace1" class="trace__pic">
                    <img src="img/Trace2.jpg" alt="Trace2" class="trace__pic">
                    <img src="img/Trace3.jpg" alt="Trace3" class="trace__pic">
                    <img src="img/trace.png" alt="Trace4" class="trace__pic">
                </div>
                <p class="trace__p"><?php
                                $sql = 'SELECT Text FROM `text` WHERE `id` = 7';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo nl2br($row['Text']);
                                }
                            ?></p>
                <div class="trace__button">
                    <button class="open-modal index__button" data-target="modal-1">Отправить заявку на аренду
                        трассы</button>
                </div>
                <div id="modal-1" class="modal-window">
                    <div class="modal-window__cross">
                        <h2><?php
                            $sql = 'SELECT Title FROM `modal` WHERE `id` = 2';
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
                                        $sql = 'SELECT Subtitle FROM `modal` WHERE `id` = 2';
                                        $result = mysqli_query($link, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo ($row['Subtitle']);
                                        }
                                        ?></p>
                    <form action="php/mail.php" method="post" class="Modal__form">
                        <input type="text" name="FIO" id="FIO" placeholder="ФИО" class="Modal__inputs">
                        <input type="tel" name="NUMBER" id="NUMBER" placeholder="+7*******" class="Modal__inputs">
                        <input type="hidden" name="subj" value="Заявка на бронирование трассы">
                        <input type="submit" value="<?php
                                                    $sql = 'SELECT ButtonText FROM `modal` WHERE `id` = 2';
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

            </div>
        </div>
    </main>

    <?php
    include('php/footer.php');
    include('php/scripts.php');
    ?>
    <script>
        window.onload = function() {
            var div = document.querySelector('.header__LinkTrace')
            div.classList.add("active");
        }
    </script>
</body>

</html>