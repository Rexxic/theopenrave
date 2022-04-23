<?php
if (!empty($dir)) {
    $scanned_dir = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . $dir), array('..', '.'));
    foreach ($scanned_dir as $file) {
        echo '<img class="flyer" src="' . $dir . '\\' . $file . '" alt="' . $file . '">';
    }
}