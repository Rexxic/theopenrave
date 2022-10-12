<?php
function cmp($a, $b): int
{
    $a = substr($a, 0, strpos($a, '-'));
    $b = substr($b, 0, strpos($b, '-'));
    if ($a == $b) return 0;
    return ($a > $b) ? -1 : 1;
}

if (!empty($dir)) {
    $scanned_dir = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . $dir), array('..', '.'));
    usort($scanned_dir, 'cmp');
    foreach ($scanned_dir as $file) {
        if (strpos($file, ".png") || strpos($file, ".jpg") || strpos($file, ".jpeg") !== false) {
            echo '<img class="flyer" src="' . $dir . '\\' . $file . '" alt="' . $file . '">';
        } elseif (strpos($file, ".php") !== false) {
            include($_SERVER['DOCUMENT_ROOT'] . $dir . '/' . $file);
        }
    }
}