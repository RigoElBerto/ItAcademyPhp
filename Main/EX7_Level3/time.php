<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$date = new Carbon('last day of December 1999');

echo $date->toDateString(). "<br>";

$date->settings(['toStringFormat'=>'d/m/Y']);

echo $date . "<br>";

echo "Time: " .  Carbon::now();

echo "<br>Time in Tokyo: " .  Carbon::now(new DateTimeZone('Asia/Tokyo'));
