<header>
    <div class="header">
        <div class="header__top">
            <img src="img/logo.png" alt="logo" class="header__logo">
            <div class="header__addres">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 header__svg" fill="none" viewBox="0 0 24 24" stroke="#f00">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <?php
                $sql = 'SELECT value FROM `contacts` WHERE `id` = 2';
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo ('<p>' . $row['value'] . '</p>');
                }
                ?>
            </div>
            <div class="header__phone">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 header__svg" fill="none" viewBox="0 0 24 24" stroke="#f00">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <?php
                $sql = 'SELECT value FROM `contacts` WHERE `id` = 1';
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo ('<a href="tel:+' . $row['value'] . '">' . '+' . $row['value'] . '</a>');
                }
                ?>
            </div>
        </div>
        <div class="header__bot">
            <nav class="header__nav">
                <ul>
                    <li class="header__LinkMain"><a href="index.php">Главная</a></li>
                    <li class="header__LinkSchool"><a href="school.php">Школа Юного пилота</a></li>
                    <li class="header__LinkPrice"><a href="price.php">Цены</a></li>
                    <li class="header__LinkCert"><a href="certificate.php">Сертификаты</a></li>
                    <li class="header__LinkTrace"><a href="trace.php">Трасса</a></li>
                    <li class="header__Linkkart"><a href="kart.php">Карты</a></li>
                    <li class="header__LinkContact"><a href="contact.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>