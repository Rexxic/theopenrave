<?php
$eventDate = new DateTime('2022-05-27T23:00:00');
$now = new DateTime();
$interval = $now->diff($eventDate, False);
?>
<div class="infoBox">
    <h3 class="kontaktheader">
        The Open Night
        <a href="https://mobilat.club">Mobilat</a>
    </h3>
    <p class="infoText">
        <?php
        if ($eventDate >= $now) {
            echo 'In ';
            if($interval->days == 1) echo 'einem Tag, ';
            elseif ($interval->days > 0) echo $interval->days . ' Tagen, ';
            if($interval->h == 1) echo 'einer Stunde und ';
            elseif ($interval->h > 0 || $interval->days > 0) echo $interval->h . ' Stunden und ';
            if($interval->i == 1) echo 'einer Minute ';
            else echo $interval->i . ' Minuten ';
            echo  'ist es so weit.';
        }
        ?>
        Am <?= $eventDate->format('d.m.Y') ?> um <?= $eventDate->format('H') ?>
        Uhr dürfen wir euch zu unserem ersten eigenen Event im Mobilat Heilbronn begrüßen.
    </p>
    <p class="infoText">
        Wenn ihr Techno/HardTech feiert, kommt vorbei und wir bringen mit euch diesen Club zum Beben.
    </p>
    <h4 class="infoText" style="margin-top: 1rem">Line-Up:</h4>
    <p class="infoText">
        Cedric Kutulu B&#8288;-&#8288;Thoughts Brmad Hansn
    </p>
</div>
