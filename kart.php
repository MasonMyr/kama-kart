<?php
include('php/head.php')
?>
<meta name="description" content="Карты в Кама-Карт">
<title>Карты</title>
</head>

<body>
    <?php
    include('php/header.php')
    ?>
    <main>
        <div class="content">
            <div class="karts__page">
                <div class="page__title">
                    <h1>Карты</h1>
                </div>
                <div class="karts">
                    <div class="kart65">
                        <h2>Карт 6.5 л.с.</h2>
                        <div class="kart1pic">
                            <img src="img/kart1_1.jpg" alt="kart1">
                            <img src="img/kart1_2.jpg" alt="kart1">
                        </div>
                        <div class="price__cart65">
                            <div class="cart65__title">
                                <h3>Стоимость <span style="color: #d24741;">разового одиночного</span> заезда на карте с
                                    мотором 6,5 л.с.: </h3>
                            </div>
                            <div class="price__cont">
                                <div class="cart65__container">
                                    <p>5 минут</p>
                                    <p class="index__PriceRub kartpage__price"><?php
                                                                        $sql = 'SELECT price FROM `cart_price` WHERE `id` = 1';
                                                                        $result = mysqli_query($link, $sql);
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo ($row['price']);
                                                                        }
                                                                        ?> рублей</p>
                                </div>
                                <div class="cart65__container">
                                    <p>10 минут</p>
                                    <p class="index__PriceRub kartpage__price"><?php
                                                                        $sql = 'SELECT price FROM `cart_price` WHERE `id` = 2';
                                                                        $result = mysqli_query($link, $sql);
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo ($row['price']);
                                                                        }
                                                                        ?> рублей</p>
                                </div>
                            </div>
                        </div>

                        <div class="kart9">
                        <h2>Карт 9 л.с.</h2>
                        <div class="kart1pic">
                            <img src="img/kart9_1.png" alt="kart9">
                            <img src="img/kart9_2.png" alt="kart9">
                        </div>
                        <div class="price__cart9">
                            <div class="cart65__title">
                                <h3>Стоимость <span style="color: #d24741;">разового одиночного</span> заезда на карте с
                                    мотором 9 л.с.: </h3>
                            </div>
                            <div class="price__cont">
                                <div class="cart65__container">
                                    <p>5 минут</p>
                                    <p class="index__PriceRub kartpage__price"><?php
                                                                        $sql = 'SELECT price FROM `cart_price` WHERE `id` = 3';
                                                                        $result = mysqli_query($link, $sql);
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo ($row['price']);
                                                                        }
                                                                        ?> рублей</p>
                                </div>
                                <div class="cart65__container">
                                    <p>10 минут</p>
                                    <p class="index__PriceRub kartpage__price"><?php
                                                                        $sql = 'SELECT price FROM `cart_price` WHERE `id` = 4';
                                                                        $result = mysqli_query($link, $sql);
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo ($row['price']);
                                                                        }
                                                                        ?> рублей</p>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="kart2">
                        <h2>Двухместный карт Twinstruktor</h2>
                        <div class="kart1pic">
                            <img src="img/kart2_1.jpg" alt="kart2">
                            <img src="img/kart2_2.jpg" alt="kart2">
                        </div>
                        <div class="price__doublecart ">
                            <div class="doublecart__title">
                                <h3>Стоимость проката на двухместном карте Rimo Twinstructor:</h3>
                            </div>
                            <div class="doublecart__subtitle">
                                <h4>- взрослый + ребенок <span style="color: #d24741;">(до 14 лет)</span>:</h4>
                            </div>
                            <div class="doublecart__text">
                                <div class="cart65__container">
                                    <p>5 минут</p>
                                    <p class="index__PriceRub kartpage__price"><?php
                                                                        $sql = 'SELECT price FROM `cart_price` WHERE `id` = 5';
                                                                        $result = mysqli_query($link, $sql);
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo ($row['price']);
                                                                        }
                                                                        ?> рублей</p>
                                </div>
                                <div class="cart65__container">
                                    <p>10 минут</p>
                                    <p class="index__PriceRub kartpage__price"><?php
                                                                        $sql = 'SELECT price FROM `cart_price` WHERE `id` = 6';
                                                                        $result = mysqli_query($link, $sql);
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo ($row['price']);
                                                                        }
                                                                        ?> рублей</p>
                                </div>
                            </div>
                            <div class="doublecart__subtitle">
                                <h4>- взрослый + взрослый <span style="color: #d24741;">(старше 14 лет)</span>:</h4>
                            </div>
                            <div class="doublecart__text">
                                <div class="cart65__container">
                                    <p>5 минут</p>
                                    <p class="index__PriceRub kartpage__price"><?php
                                                                        $sql = 'SELECT price FROM `cart_price` WHERE `id` = 7';
                                                                        $result = mysqli_query($link, $sql);
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo ($row['price']);
                                                                        }
                                                                        ?> рублей</p>
                                </div>
                                <div class="cart65__container">
                                    <p>10 минут</p>
                                    <p class="index__PriceRub kartpage__price"><?php
                                                                        $sql = 'SELECT price FROM `cart_price` WHERE `id` = 8';
                                                                        $result = mysqli_query($link, $sql);
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo ($row['price']);
                                                                        }
                                                                        ?> рублей</p>
                                </div>
                            </div>
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
    <script>
        window.onload = function() {
            var div = document.querySelector('.header__Linkkart')
            div.classList.add("active");
        }
    </script>
</body>

</html>