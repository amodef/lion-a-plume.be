<?php
$locale = "fr_BE.utf-8";
//if (isset($_GET["locale"])) $locale = $_GET["locale"];
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);
bindtextdomain("default", "./locale");
textdomain("default");