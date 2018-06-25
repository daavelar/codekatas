<?php

require_once 'vendor/autoload.php';

$timestamps = file('./minutes.txt');

$minutes = new MinuteAdder();

echo $minutes->sum($timestamps) . PHP_EOL;
