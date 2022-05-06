<?php
$counter = 1;
$filePath = $_SERVER['DOCUMENT_ROOT'] . '/counter.txt';

session_start();

if(file_exists($filePath)) {
    $counter = file_get_contents($filePath);
}

if(!isset($_SESSION['views'])) {
    $_SESSION['views'] = 1;
    fwrite(fopen($filePath,'w+'), $counter + 1);
}