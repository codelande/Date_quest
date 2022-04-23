<?php

$presentTime = new DateTime();
$destinationTime = new DateTime();
$destinationTime->setDate(2069, 04, 20);
$destinationTime->setTime(04, 20);
$interval = $presentTime->diff($destinationTime);


echo 'Present Time is ' . $presentTime->format('M d Y H:i') . '<br>';

echo 'Destination Time is ' . $destinationTime->format('M d Y H:i') . '<br>';


echo 'Difference between actual time and destination time: ' . $interval->format('%y years %m months %d days %h hours %i mins %s secs');