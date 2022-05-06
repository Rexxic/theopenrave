<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/counter.php"); ?>

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
<main class="content">
    <article>
        <?php
        $dir = '/media/homepage';
        include($_SERVER['DOCUMENT_ROOT'] . "/include/loadflyer.php")
        ?>
    </article>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/include/aside.php")
    ?>
</main>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.php")
?>
</body>
</html>