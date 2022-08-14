<?php
include('php/head.php')
?>
<meta name="description" content="Цена на услуги Кама-Карт">
<title>Цены на услуги</title>
</head>

<body>
    <?php
    include('php/header.php')
    ?>
    <main>
        <div class="content">
            <div class="page__title">
                <h1>Цены и акции</h1>
            </div>
            <div class="price__discount" style="border: 5px solid #d24741; padding: 10px; margin-bottom: 10px;">

                <?php
                $sql = 'SELECT text FROM `text` WHERE `id` = 9';
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo nl2br("<p class=price__discountText>" . ($row['text']) . "</p>");
                }
                ?>

            </div>
            <div class="price__cart65">
                <div class="cart65__title">
                    <h3>Стоимость проката карта с мотором 6,5 л.с.: </h3>
                </div>
                <div class="price__cont">
                    <div class="cart65__container">
                        <p>5 минут</p>
                        <p class="index__PriceRub"><?php
                                                    $sql = 'SELECT price FROM `cart_price` WHERE `id` = 1';
                                                    $result = mysqli_query($link, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo ($row['price']);
                                                    }
                                                    ?> рублей</p>
                    </div>
                    <div class="cart65__container">
                        <p>10 минут</p>
                        <p class="index__PriceRub"><?php
                                                    $sql = 'SELECT price FROM `cart_price` WHERE `id` = 2';
                                                    $result = mysqli_query($link, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo ($row['price']);
                                                    }
                                                    ?> рублей</p>
                    </div>
                </div>
            </div>
            <div class="price__cart65">
                <div class="cart65__title">
                    <h3>Стоимость проката карта с мотором 9 л.с.: </h3>
                </div>
                <div class="price__cont">
                    <div class="cart65__container">
                        <p>5 минут</p>
                        <p class="index__PriceRub"><?php
                                                    $sql = 'SELECT price FROM `cart_price` WHERE `id` = 3';
                                                    $result = mysqli_query($link, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo ($row['price']);
                                                    }
                                                    ?> рублей</p>
                    </div>
                    <div class="cart65__container">
                        <p>10 минут</p>
                        <p class="index__PriceRub"><?php
                                                    $sql = 'SELECT price FROM `cart_price` WHERE `id` = 4';
                                                    $result = mysqli_query($link, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo ($row['price']);
                                                    }
                                                    ?> рублей</p>
                    </div>
                </div>
            </div>
            <div class="price__doublecart">
                <div class="doublecart__title">
                    <h3>Стоимость проката двухместного карте Rimo Twinstructor:</h3>
                </div>
                <div class="doublecart__subtitle">
                    <h4>- взрослый + ребенок <span style="color: #d24741;">(до 14 лет)</span>:</h4>
                </div>
                <div class="doublecart__text">
                    
                    <div class="cart65__container">
                        <p>5 минут</p>
                        <p class="index__PriceRub"><?php
                                                    $sql = 'SELECT price FROM `cart_price` WHERE `id` = 5';
                                                    $result = mysqli_query($link, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo ($row['price']);
                                                    }
                                                    ?> рублей</p>
                    </div>
                    <div class="cart65__container">
                        <p>10 минут</p>
                        <p class="index__PriceRub"><?php
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
                        <p class="index__PriceRub"><?php
                                                    $sql = 'SELECT price FROM `cart_price` WHERE `id` = 7';
                                                    $result = mysqli_query($link, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo ($row['price']);
                                                    }
                                                    ?> рублей</p>
                    </div>
                    <div class="cart65__container">
                        <p>10 минут</p>
                        <p class="index__PriceRub"><?php
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
    </main>

    <?php
    include('php/footer.php');
    include('php/scripts.php');
    ?>
    <script>
        window.onload = function() {
            var div = document.querySelector('.header__LinkPrice')
            div.classList.add("active");
        }
    </script>
</body>

</html>