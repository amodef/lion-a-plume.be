<?php
// locales : fr_BE.UTF-8 ; en_US.UTF-8 ; it_IT.UTF-8 ; nl_BE.UTF-8
$locales = array(
  'en' => 'en_US',
  'fr' => 'fr_BE',
  'it' => 'it_IT',
  'nl' => 'nl_BE'
);

if (isset($_GET["locale"])){
  $locale = $_GET["locale"];
}

putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locales[$locale] . ".UTF-8");
bindtextdomain("default", "./locale");
textdomain("default");