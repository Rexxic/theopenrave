<?php
$eventDate = new DateTime('2022-10-22T21:00:00', new DateTimeZone('Europe/Berlin'));
$now = new DateTime('now');
$interval = $now->diff($eventDate, False);
?>
<div class="infoBox">
    <h3 class="kontaktheader">
        Gaswerk Bönnigheim
    </h3>
    <p class="infoText">
        <?php
        if ($eventDate >= $now) {
            echo 'In ';
            if ($interval->days == 1) echo 'einem Tag, ';
            elseif ($interval->days > 0) echo $interval->days . ' Tagen, ';
            if ($interval->h == 1) echo 'einer Stunde und ';
            elseif ($interval->h > 0 || $interval->days > 0) echo $interval->h . ' Stunden und ';
            if ($interval->i == 1) echo 'einer Minute ';
            else echo $interval->i . ' Minuten ';
            echo 'ist es so weit.';
        }
        ?>
        Es ist endlich wieder so weit 🎃
        Der nächste Rave steht an und diesmal in einer düsteren Nacht ⚡️🌑
    </p>
    <p class="infoText">
        Am <?= $eventDate->format('d.m.Y') ?> um <?= $eventDate->format('H') ?>
        Uhr feiern wir im Gaswerk Bönnigheim eine „Spooky night“.<br>
    </p>
    <p class="infoText">
        Unsere Oktoberkinder bekommen diesmal freien Eintritt 🎉✨
        Verkleidungen sind immer gerne gesehen 👻<br>
        Wir freuen uns auf euer zahlreiches erscheinen und auf eine sehr geile bassreiche Nacht ⛓.
    </p>
    <h4 class="infoText" style="margin-top: 1rem">Line-Up:</h4>
    <p class="infoText">
        Cedric Kutulu B&#8288;-&#8288;Thoughts Chylla
    </p>
</div>
