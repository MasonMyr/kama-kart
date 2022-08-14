<?php
include('php/head.php')
?>
<title>Вход в админ-панель</title>
</head>

<body> 
    <?php
    if (!isset($_COOKIE['id'])) {
    ?>
        <form action="" method="post" class="adminLogin__Form">
            <input type="text" name="login" id="" placeholder="Логин">
            <input type="password" name="password" id="" placeholder="Пароль">
            <input type="submit" value="Войти" name="submit" class="adminLogin__submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $link = mysqli_connect("localhost", "h163281_kama-kart", "ay57UBGSVcwDn6n", "h163281_kama");
            $login = $_POST['login'];
            $pass = $_POST['password'];
            $pass = md5($pass);
            if (!empty($login) && !empty($pass)) {
                $query = "SELECT * FROM `profile` WHERE name = '$login' AND password = '$pass'";
                $data = mysqli_query($link, $query);
                if (mysqli_num_rows($data) == 1) {
                    $row = mysqli_fetch_assoc($data);
                    setcookie('id', $row['id'], time() + (60 * 60));
                    setcookie('name', $row['name'], time() + (60 * 60));
                    header("Location: admin.php");
                }
                echo ('<p class="admin__error">Неверный логин или пароль!<p>');
            } else {
                echo ('<p class="admin__error">Введите логин и (или) пароль!<p>');
            }
        }
    } else {
        header("Location: admin.php");
    }
    ?>
</body>

</html>