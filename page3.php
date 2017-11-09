<?php
session_start();
$_SESSION['pages'][] = $_SERVER['PHP_SELF'];
echo "<h2>page 3</h2>";

echo '<br /><a href="page4.php">page 4</a>';