<!DOCTYPE html>
<html lang="ru">
<?php
    $link = mysqli_connect("localhost", "h163281_kama-kart", "ay57UBGSVcwDn6n", "h163281_kama");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
  <script>
        $(function() {
            $(".accordion").accordion({
                collapsible: true,
                heightStyle: "content"
            });
        });
        $(function() {
            $("#tabs").tabs();
        });
    </script>