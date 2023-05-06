<?php
require_once('config.php');

$tpl_vars=array(
// задана сторона квадрата
'a' => $a = 5,

// обчислюємо периметр квадрата
'P' => $P = 4 * $a,

// задана відстань у сантиметрах
'L' => $L = 1500,

// знаходимо кількість повних метрів
'full_meters' => $full_meters = (int)($L / 100),
);
$tpl_file='lab1-3.tmpl';
require_once('tpl_config.php');
?>