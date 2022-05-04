<?php
if (!empty($dir)) {
    $scanned_dir = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . $dir), array('..', '.'));
    foreach ($scanned_dir as $file) {
        if (strpos($file, ".png") !== false) {
            echo '<img class="flyer" src="' . $dir . '\\' . $file . '" alt="' . $file . '">';
        } elseif (strpos($file, ".php") !== false) {
            include($_SERVER['DOCUMENT_ROOT'] . $dir . '/' . $file);
        }
    }
}