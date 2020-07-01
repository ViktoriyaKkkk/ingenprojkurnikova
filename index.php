<?php
if (!isset($_GET['site'])) include 'home.php';
else include $_GET['site'].'.php';
?>
