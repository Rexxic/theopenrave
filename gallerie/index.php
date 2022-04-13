<!DOCTYPE html>
<html lang="de-De" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/head.php");
?>
<body>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/include/nav.php");
?>
<main>
    <article>
        <?php
        $dir = '/media/gallerie';
        include($_SERVER['DOCUMENT_ROOT'] . "/include/loadflyer.php")
        ?>
    </article>
</main>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.php")
?>
</body>
</html>