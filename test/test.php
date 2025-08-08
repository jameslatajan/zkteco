<?php

// Simulate ZKTeco float timestamp
$t = 13559487.5542;

// // The original (unsafe) decodeTime logic
/* ====================== Eror part ====================== */
// $second = $t % 60;
// $t = $t / 60;

// $minute = $t % 60;
// $t = $t / 60;

// $hour = $t % 24;
// $t = $t / 24;

// $day = $t % 31 + 1;
// $t = $t / 31;

// $month = $t % 12 + 1;
// $t = $t / 12;

// $year = floor($t + 2000);
/* ====================== Eror part ====================== */

$t = (int) round($t); // Clean float-to-int conversion upfront

$second = $t % 60;
$t = intdiv($t, 60);

$minute = $t % 60;
$t = intdiv($t, 60);

$hour = $t % 24;
$t = intdiv($t, 24);

$day = $t % 31 + 1;
$t = intdiv($t, 31);

$month = $t % 12 + 1;
$t = intdiv($t, 12);

$year = $t + 2000;

echo "Decoded date: " . date('Y-m-d H:i:s', strtotime("$year-$month-$day $hour:$minute:$second")) . PHP_EOL;
