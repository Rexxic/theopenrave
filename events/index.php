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
        $dir = '/media/events';
        include($_SERVER['DOCUMENT_ROOT'] . "/include/loadflyer.php")
        ?>
    </article>
</main>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.php")
?>
</body>
</html>