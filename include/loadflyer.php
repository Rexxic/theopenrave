<?php
if (!empty($dir)) {
    $scanned_dir = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . $dir), array('..', '.'));
    foreach ($scanned_dir as $file) {
        if (strpos($file, ".png") || strpos($file, ".jpg") || strpos($file, ".jpeg") !== false) {
            echo '<img class="flyer" src="' . $dir . '\\' . $file . '" alt="' . $file . '">';
        } elseif (strpos($file, ".php") !== false) {
            include($_SERVER['DOCUMENT_ROOT'] . $dir . '/' . $file);
        }
    }
}