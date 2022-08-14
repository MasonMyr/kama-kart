<?php
unset($_COOKIE['id']);
unset($_COOKIE['name']);
setcookie('id', '', -1, '/');
setcookie('name', '', -1, '/');
header("Location: /admin.php");
?>