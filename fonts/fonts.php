<?php
header("Content-type: text/css");
$fonts = $_SERVER['DOCUMENT_ROOT'] . '/fonts';
$scanned_dir = array_diff(scandir($fonts), array('..', '.'));
foreach ($scanned_dir as $folder) {
    $path = $fonts . '/' . $folder;
    if (is_dir($path)) {
        $scanned_dir = array_diff(scandir($path), array('..', '.'));
        foreach ($scanned_dir as $file) {
            $file = str_replace('.ttf', '', $file);
            echo "@font-face {\n";
            echo "  font-family: '" . $file . "';\n";
            echo "  src: url('" . $folder . "/" . $file . ".ttf" . "') format('truetype');\n";
            echo "  font-weight: normal;\n";
            echo "  font-style: normal;\n";
            echo "}\n\n";
        }
    }
}