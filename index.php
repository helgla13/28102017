<?php

//Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя,
// запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".
//Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.

session_start([
    'cookie_lifetime' => 15,
]);
$_SESSION['pages'][] = $_SERVER['PHP_SELF'];


if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
 echo "вы видели страницу".$_SESSION['count'];


?>
<form action="hello.php" method=post>
    <h2>Введите Ваше имя</h2><br>
    <input name="name" type="text">
    <input type="submit" name="send" value="OK"></form>

