<?php
$mysql = mysqli_connect("localhost", "h163281_kama-kart", "ay57UBGSVcwDn6n", "h163281_kama");;
$id1 = $_POST['id__karts'];
$id2 = $_POST['id__contacts'];
$id3 = $_POST['id__text'];
$id4 = $_POST['id__links'];
$id5 = $_POST['id__modal'];
$id6 = $_POST['id__shedule'];
$id7 = $_POST['id__pass'];

if ($id1 != "") {
    $price_kart_65_5 = $_POST['price_kart_65_5'];
    $price_kart_65_10 = $_POST['price_kart_65_10'];
    $price_kart_9_5 = $_POST['price_kart_9_5'];
    $price_kart_9_10 = $_POST['price_kart_9_10'];
    $price_kart_double_do14_5 = $_POST['price_kart_double_do14_5'];
    $price_kart_double_do14_10 = $_POST['price_kart_double_do14_10'];
    $price_kart_double_posle14_5 = $_POST['price_kart_double_posle14_5'];
    $price_kart_double_posle14_10 = $_POST['price_kart_double_posle14_10'];

    if ($price_kart_65_5 != "") {
        $mysql->query("UPDATE `cart_price` SET price = '$price_kart_65_5' WHERE id = '1'");
    };

    if ($price_kart_65_10 != "") {
        $mysql->query("UPDATE `cart_price` SET price = '$price_kart_65_10' WHERE id = '2'");
    };

    if ($price_kart_9_5 != "") {
        $mysql->query("UPDATE `cart_price` SET price = '$price_kart_9_5' WHERE id = '3'");
    };

    if ($price_kart_9_10 != "") {
        $mysql->query("UPDATE `cart_price` SET price = '$price_kart_9_10' WHERE id = '4'");
    };

    if ($price_kart_double_do14_5 != "") {
        $mysql->query("UPDATE `cart_price` SET price = '$price_kart_double_do14_5' WHERE id = '5'");
    };

    if ($price_kart_double_do14_10 != "") {
        $mysql->query("UPDATE `cart_price` SET price = '$price_kart_double_do14_10' WHERE id = '6'");
    };

    if ($price_kart_double_posle14_5 != "") {
        $mysql->query("UPDATE `cart_price` SET price = '$price_kart_double_posle14_5' WHERE id = '7'");
    };

    if ($price_kart_double_posle14_10 != "") {
        $mysql->query("UPDATE `cart_price` SET price = '$price_kart_double_posle14_10' WHERE id = '8'");
    };
}

if ($id2 != "") {
    $tel = $_POST['tel'];
    $tel_school = $_POST['tel_school'];
    $addr = $_POST['addr'];

    if ($tel != "") {
        $mysql->query("UPDATE `contacts` SET value = '$tel' WHERE id = '1'");
    }

    if ($tel_school != "") {
        $mysql->query("UPDATE `contacts` SET value = '$tel_school' WHERE id = '3'");
    }

    if ($addr != "") {
        $mysql->query("UPDATE `contacts` SET value = '$addr' WHERE id = '2'");
    }
}

if ($id3 != "") {
    $school_info_text = $_POST['school_info_text'];
    $school_raspisanie_text_theory = $_POST['school_raspisanie_text_theory'];
    $school_raspisanie_text_practice = $_POST['school_raspisanie_text_practice'];
    $school_price = $_POST['school_price'];
    $certificate_text = $_POST['certificate_text'];
    $trace_text = $_POST['trace_text'];
    $working_mode_1 = $_POST['working_mode_1'];
    $working_mode_2 = $_POST['working_mode_2'];

    if ($school_info_text != "") {
        $mysql->query("UPDATE `text` SET Text = '$school_info_text' WHERE id = '3'");
    }

    if ($school_raspisanie_text_theory != "") {
        $mysql->query("UPDATE `raspisanie` SET Text = '$school_raspisanie_text_theory' WHERE id = '1'");
    }

    if ($school_raspisanie_text_practice != "") {
        $mysql->query("UPDATE `raspisanie` SET Text = '$school_raspisanie_text_practice' WHERE id = '2'");
    }

    if ($school_price != "") {
        $mysql->query("UPDATE `services_price` SET price = '$school_price' WHERE id = '2'");
    }

    if ($certificate_text != "") {
        $mysql->query("UPDATE `text` SET Text = '$certificate_text' WHERE id = '5'");
    }

    if ($trace_text != "") {
        $mysql->query("UPDATE `text` SET Text = '$trace_text' WHERE id = '7'");
    }

    if ($working_mode_1 != "") {
        $mysql->query("UPDATE `raspisanie` SET Text = '$working_mode_1' WHERE id = '3'");
    }

    if ($working_mode_2 != "") {
        $mysql->query("UPDATE `raspisanie` SET Text = '$working_mode_2' WHERE id = '4'");
    }
}

if ($id4 != " ") {
    $link_vk = $_POST["link_vk"];
    $link_inst = $_POST["link_inst"];

    if ($link_vk != "") {
        $mysql->query("UPDATE `links` SET Link = '$link_vk' WHERE id = '1'");
    }

    if ($link_inst != "") {
        $mysql->query("UPDATE `links` SET Link = '$link_inst' WHERE id = '2'");
    }
}

if ($id5 != " "){
    $modal_main = $_POST["modal_main"];
    $modal_sert = $_POST["modal_sert"];
    $modal_trace = $_POST["modal_trace"];

    if ($modal_main != ""){
        $mysql->query("UPDATE `modal` SET Subtitle = '$modal_main' where id = '1'");
    }

    if ($modal_sert != ""){
        $mysql->query("UPDATE `modal` SET Subtitle = '$modal_sert' where id = '2'");
    }

    if ($modal_trace != ""){
        $mysql->query("UPDATE `modal` SET Subtitle = '$modal_trace' where id = '3'");
    }
}

if ($id6 != " "){
    $shedule_theory = $_POST["shedule__theory"];
    $shedule_prac = $_POST["shedule__prac"];
    $shedule_one = $_POST["shedule__one"];
    $shedule_two = $_POST["shedule__two"];

    if ($shedule_theory != ""){
        $mysql->query("UPDATE `raspisanie` SET Text = '$shedule_theory' where id = '1'");
    }

    if ($shedule_prac != ""){
        $mysql->query("UPDATE `raspisanie` SET Text = '$shedule_prac' where id = '2'");
    }

    if ($shedule_one != ""){
        $mysql->query("UPDATE `raspisanie` SET Text = '$shedule_one' where id = '3'");
    }

    if ($shedule_two != ""){
        $mysql->query("UPDATE `raspisanie` SET Text = '$shedule_two' where id = '4'");
    }
}

if ($id7 != " "){
    $pass_new = $_POST["pass__new"];
    $pass_conf = $_POST["pass__conf"];

    if ($pass_new != ""){
        if ($pass_conf != ""){
            if ($pass_new == $pass_conf) {
                $pass = md5($pass_new);

                $mysql->query("UPDATE `profile` SET password = '$pass' where id = '1'");
            }
        }
    }
}

$mysql->close();
header("Location: ../admin.php");
exit;
