<?php
include('php/head.php')
?>

<title>Админ-панель</title>
</head>

<?php
if (!empty($_COOKIE['name'])) {
} else {
    header("Location: adminlogin.php");
}
?>


<body>
<main>
    <div id="tabs">
        <div class="tabs__title">
            <h1>Админ-панель</h1>
            <a href="php/exit.php">Выход</a>
        </div>
        <ul>
            <li><a href="#tabs-1">Цены</a></li>
            <li><a href="#tabs-2">Контакты</a></li>
            <li><a href="#tabs-3">Текст на страницах</a></li>
            <li><a href="#tabs-4">Ссылки</a></li>
            <li><a href="#tabs-5">Модальные окна</a></li>
            <li><a href="#tabs-6">Расписание</a></li>
            <li><a href="#tabs-7">Пароль панели администрирования</a></li>
        </ul>
        <div id="tabs-1">
            <div class="accordion">
                <h3>Прокат карта 6.5 л.с.</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="karts__kart65">
                            <div class="admin__span">
                                <span class="tooltip">5 минут<span><img src="img/hint/kart6.5-5.png"
                                                                        alt="kart6.5-5"></span></span>
                                <input type="text" name="price_kart_65_5" value="<?php
                                $sql = 'SELECT price FROM `cart_price` WHERE `id` = 1';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['price']);
                                }
                                ?>">
                            </div>

                            <div class="admin__span">
                                <span class="tooltip">10 минут<span><img src="img/hint/kart6.5.png"
                                                                         alt="kart6.5-10"></span></span>
                                <input type="text" name="price_kart_65_10" value="<?php
                                $sql = 'SELECT price FROM `cart_price` WHERE `id` = 2';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['price']);
                                }
                                ?>">
                            </div>
                        </div>
                </div>
                <h3>Прокат карта 9 л.с.</h3>
                <div>
                    <div class="karts__kart9">
                        <div class="admin__span">
                            <span class="tooltip">5 минут<span><img src="img/hint/kart6.5.png" alt=""></span></span>
                            <input type="text" name="price_kart_9_5" value="<?php
                            $sql = 'SELECT price FROM `cart_price` WHERE `id` = 3';
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo($row['price']);
                            }
                            ?>">
                        </div>

                        <div class="admin__span">
                            <span class="tooltip">10 минут<span><img src="img/hint/kart6.5.png" alt=""></span></span>
                            <input type="text" name="price_kart_9_10" value="<?php
                            $sql = 'SELECT price FROM `cart_price` WHERE `id` = 4';
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo($row['price']);
                            }
                            ?>">
                        </div>
                    </div>
                </div>
                <h3>Прокат двухместного карта</h3>
                <div>
                    <div class="karts__double">
                        <div class="double__do14">
                            <div class="do14__title">
                                <h4 class="admin__h4">взрослый + ребенок (до 14 лет):</h4>
                            </div>
                            <div class="admin__span">
                                <span class="tooltip">5 минут<span><img src="img/hint/kart6.5.png" alt=""></span></span>
                                <input type="text" name="price_kart_double_do14_5" value="<?php
                                $sql = 'SELECT price FROM `cart_price` WHERE `id` = 5';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['price']);
                                }
                                ?>">
                            </div>

                            <div class="admin__span">
                                <span class="tooltip">10 минут<span><img src="img/hint/kart6.5.png"
                                                                         alt=""></span></span>
                                <input type="text" name="price_kart_double_do14_10" value="<?php
                                $sql = 'SELECT price FROM `cart_price` WHERE `id` = 6';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['price']);
                                }
                                ?>">
                            </div>
                        </div>
                        <div class="double__posle14">
                            <div class="posle14__title">
                                <h4 class="admin__h4">взрослый + взрослый (старше 14 лет):</h4>
                            </div>

                            <div class="admin__span">
                                <span class="tooltip">5 минут<span><img src="img/hint/kart6.5.png" alt=""></span></span>
                                <input type="text" name="price_kart_double_posle14_5" value="<?php
                                $sql = 'SELECT price FROM `cart_price` WHERE `id` = 7';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['price']);
                                }
                                ?>">
                            </div>

                            <div class="admin__span">
                                <span class="tooltip">10 минут<span><img src="img/hint/kart6.5.png"
                                                                         alt=""></span></span>
                                <input type="text" name="price_kart_double_posle14_10" value="<?php
                                $sql = 'SELECT price FROM `cart_price` WHERE `id` = 8';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['price']);
                                }
                                ?>">
                            </div>

                        </div>
                    </div>
                </div>
                <h3>Цены на дополнительные услуги</h3>
                <div>
                    <div class="admin__span">
                        <span>Стоимость аренды трассы</span>
                        <input type="text" name="addr" id="" value="<?php
                        $sql = 'SELECT value FROM `contacts` WHERE `id` = 2';
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo($row['value']);
                        }
                        ?>">
                    </div>
                    <div class="admin__span">
                        <span>Стоимость обучения в школе юного пилота</span>
                        <input type="text" name="addr" id="" value="<?php
                        $sql = 'SELECT value FROM `contacts` WHERE `id` = 2';
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo($row['value']);
                        }
                        ?>">
                    </div>
                </div>

            </div>
            <input type="hidden" value="1" name="id__karts">
            <div class="admin__submit_button">
                <input type="submit" value="Сохранить" class="admin__submit">
            </div>
            </form>
        </div>

        <div id="tabs-2">
            <div class="accordion">
                <h3>Номера телефонов</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Номер в шапке</span>
                                <input type="tel" name="tel" id="" value="<?php
                                $sql = 'SELECT value FROM `contacts` WHERE `id` = 1';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['value']);
                                }
                                ?>">
                            </div>

                            <div class="admin__span">
                                <span>Номер Школы Юного пилота</span>
                                <input type="tel" name="tel_school" id="" value="<?php
                                $sql = 'SELECT value FROM `contacts` WHERE `id` = 3';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['value']);
                                }
                                ?>">
                            </div>

                        </div>
                </div>
                <h3>Адрес</h3>
                <div>
                    <div class="admin__span">
                        <span>Адрес "Кама-Карт"</span>
                        <input type="text" name="addr" id="" value="<?php
                        $sql = 'SELECT value FROM `contacts` WHERE `id` = 2';
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo($row['value']);
                        }
                        ?>">
                    </div>
                </div>
            </div>
            <input type="hidden" value="1" name="id__contacts">
            <div class="admin__submit_button">
                <input type="submit" value="Сохранить" class="admin__submit">
            </div>
            </form>
        </div>


        <div id="tabs-3">
            <div class="accordion">
                <h3>Главная страница</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Подзаголовок</span>
                                <textarea name="main_block_p" cols="75" rows="10">
                                    <?php
                                    $sql = 'SELECT Text FROM `text` WHERE `id` = 1';
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo($row['Text']);
                                    }
                                    ?>
                                    </textarea>
                            </div>

                            <div class="admin__span">
                                <span>Статус работы</span>
                                <textarea name="main_block_p" cols="75" rows="10">
                                    <?php
                                    $sql = 'SELECT Text FROM `text` WHERE `id` = 2';
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo($row['Text']);
                                    }
                                    ?>
                                    </textarea>
                            </div>

                        </div>
                </div>
                <h3>Школа Юного пилота</h3>
                <div>
                    <div class="admin__span">
                        <span>Информация</span>
                        <textarea name="school_info_text" cols="75" rows="10">
                            <?php
                            $sql = 'SELECT Text FROM `text` WHERE `id` = 3';
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo($row['Text']);
                            }
                            ?>
                            </textarea>
                    </div>
                    <div class="admin__span">
                        <span>Расписание (теория)</span>
                        <textarea name="school_raspisanie_text_theory" cols="10" rows="2">
                                <?php
                                $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 1';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['Text']);
                                }
                                ?>
                        </textarea>
                    </div>
                    <div class="admin__span">
                        <span>Расписание (практика)</span>
                        <textarea name="school_raspisanie_text_practice" cols="10" rows="2">
                                <?php
                                $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 2';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['Text']);
                                }
                                ?>
                        </textarea>
                    </div>
                    <div class="admin__span">
                        <span>Стоимость обучения</span>
                        <textarea name="school_price">
                                <?php
                                $sql = 'SELECT price FROM `services_price` WHERE `id` = 2';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['price']);
                                }
                                ?>
                            </textarea>
                    </div>
                </div>
                                <h3>Сертификаты</h3>
                <div>
                    <div class="admin__span">
                        <span>Информация</span>
                        <textarea name="certificate_text" cols="75" rows="10">
                            <?php
                            $sql = 'SELECT Text FROM `text` WHERE `id` = 5';
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo($row['Text']);
                            }
                            ?>
                            </textarea>
                    </div>
                </div>
                <h3>Трасса</h3>
                <div>
                    <div class="admin__span">
                        <span>Информация</span>
                        <textarea name="trace_text" cols="75" rows="10">
                            <?php
                            $sql = 'SELECT Text FROM `text` WHERE `id` = 7';
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo($row['Text']);
                            }
                            ?>
                            </textarea>
                    </div>
                </div>
                <h3>Контакты</h3>
                <div>
                    <div class="admin__span">
                        <span>Режим работы (Пн - Пт)</span>
                        <input type="text" name="working_mode_1" value="<?php
                        $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 3';
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo($row['Text']);
                        }
                        ?>">
                    </div>
                    <div class="admin__span">
                        <span>Режим работы (Сб - Вс)</span>
                        <input type="text" name="working_mode_2" value="<?php
                        $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 4';
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo($row['Text']);
                        }
                        ?>">
                    </div>
                </div>
            </div>
            <input type="hidden" value="1" name="id__text">
            <div class="admin__submit_button">
                <input type="submit" value="Сохранить" class="admin__submit">
            </div>
            </form>
        </div>

        <div id="tabs-4">
            <div class="accordion">
                <h3>Ссылки на соцсети</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Ссылка на ВКонтакте</span>
                                <input type="text" name="link_vk" id="" value="<?php
                                $sql = 'SELECT Link FROM `links` WHERE `id` = 1';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['Link']);
                                }
                                ?>">
                            </div>

                            <div class="admin__span">
                                <span>Ссылка на Instagram</span>
                                <input type="text" name="link_inst" id="" value="<?php
                                $sql = 'SELECT Link FROM `links` WHERE `id` = 2';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['Link']);
                                }
                                ?>">
                            </div>

                        </div>
                </div>
            </div>
            <input type="hidden" value="1" name="id__links">
            <div class="admin__submit_button">
                <input type="submit" value="Сохранить" class="admin__submit">
            </div>
            </form>
        </div>


        <div id="tabs-5">
            <div class="accordion">
                <h3>Главная страница</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Текст</span>
                                <textarea name="modal_main" cols="75" rows="10">
                                    <?php
                                    $sql = 'SELECT Subtitle FROM `modal` WHERE `id` = 1';
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo($row['Subtitle']);
                                    }
                                    ?>
                                    </textarea>
                            </div>
                        </div>
                </div>

                <h3>Сертификаты</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Текст</span>
                                <textarea name="modal_sert" cols="75" rows="10">
                                    <?php
                                    $sql = 'SELECT Subtitle FROM `modal` WHERE `id` = 2';
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo($row['Subtitle']);
                                    }
                                    ?>
                                    </textarea>
                            </div>
                        </div>
                </div>

                <h3>Трасса</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Текст</span>
                                <textarea name="modal_trace" cols="75" rows="10">
                                    <?php
                                    $sql = 'SELECT Subtitle FROM `modal` WHERE `id` = 3';
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo($row['Subtitle']);
                                    }
                                    ?>
                                    </textarea>
                            </div>
                        </div>
                </div>


            </div>
            <input type="hidden" value="1" name="id__modal">
            <div class="admin__submit_button">
                <input type="submit" value="Сохранить" class="admin__submit">
            </div>
            </form>
        </div>

        <div id="tabs-6">
            <div class="accordion">
                <h3>Школа юного пилота</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Теория</span>
                                <input type="text" name="shedule__theory" id="" value="<?php
                                $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 1';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['Text']);
                                }
                                ?>">

                            </div>

                            <div class="admin__span">
                                <span>Практика</span>
                                <input type="text" name="shedule__prac" id="" value="<?php
                                $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 2';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['Text']);
                                }
                                ?>">
                            </div>

                        </div>
                </div>

                <h3>Режим работы</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Пн-Пт</span>
                                <input type="text" name="shedule__one" id="" value="<?php
                                $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 3';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['Text']);
                                }
                                ?>">

                            </div>

                            <div class="admin__span">
                                <span>Сб - Вс</span>
                                <input type="text" name="shedule_two" id="" value="<?php
                                $sql = 'SELECT Text FROM `raspisanie` WHERE `id` = 4';
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo($row['Text']);
                                }
                                ?>">
                            </div>

                        </div>
                </div>

            </div>
            <input type="hidden" value="1" name="id__shedule">
            <div class="admin__submit_button">
                <input type="submit" value="Сохранить" class="admin__submit">
            </div>
            </form>
        </div>


        <div id="tabs-7">
            <div class="accordion">
                <h3>Смена пароля</h3>
                <div>
                    <form action="php/replace.php" method="POST">
                        <div class="contacts__tel">
                            <div class="admin__span">
                                <span>Новый пароль</span>
                                <input type="password" name="pass__new" id="">
                            </div>

                            <div class="admin__span">
                                <span>Подтверждение пароля</span>
                                <input type="password" name="pass__conf" id="">
                            </div>

                        </div>
                </div>
            </div>
            <input type="hidden" value="1" name="id__pass">
            <div class="admin__submit_button">
                <input type="submit" value="Сохранить" class="admin__submit">
            </div>
            </form>
        </div>
    </div>
</main>


</body>
</html>
