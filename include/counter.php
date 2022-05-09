<?php
$counter = 1;
$filePath = $_SERVER['DOCUMENT_ROOT'] . '/counter.txt';

session_start();

if(file_exists($filePath)) {
    $counter = file_get_contents($filePath);
}

if (preg_match('/robot|spider|crawler|curl|^$/i', $_SERVER['HTTP_USER_AGENT']) && !isset($_SESSION['views'])) {
    $_SESSION['views'] = 1;
    fwrite(fopen($filePath, 'w+'), $counter + 1);
}