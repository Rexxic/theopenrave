<?php
if (!empty($dir)) {
    $scanned_dir = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . $dir), array('..', '.'));
    foreach ($scanned_dir as $file) {
        if (str_contains($file, ".png")) {
            echo '<img class="flyer" src="' . $dir . '\\' . $file . '" alt="' . $file . '">';
        } elseif (str_contains($file, ".php")) {
            include($_SERVER['DOCUMENT_ROOT'] . $dir . '\\' . $file);
        }
    }
}