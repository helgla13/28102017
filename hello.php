<?php
session_start();
$_SESSION['pages'][] = $_SERVER['PHP_SELF'];

echo "<h1>Hello $_POST[name]</h1>";


echo '<br /><a href="page3.php">page 3</a>';