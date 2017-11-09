<?php
session_start();
echo "<h1>Page 4</h1>";
if (isset($_SESSION['pages'])){
    print "<h2>Список посещенных страниц</h2>";
}
foreach ($_SESSION['pages'] as $page) {
        echo($page);
    }
unset($_SESSION['name']);
session_destroy();