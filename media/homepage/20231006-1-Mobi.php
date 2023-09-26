<?php
$eventDate = new DateTime('2023-10-06T21:00:00', new DateTimeZone('Europe/Berlin'));
$now = new DateTime('now');
$interval = $now->diff($eventDate, False);
?>
<div class="infoBox">
    <p class="infoText">
        The Open Rave präsentiert:
    </p>
    <h3 class="infoHeader">
        3 Jahre Jubiläums-Event im Mobilat Club Heilbronn!
    </h3>
    <p class="infoText">
        Liebe Techno-Gemeinschaft,
    </p>
    <p class="infoText">
        Es fühlt sich an wie gestern, dass wir begonnen haben, den Puls von Heilbronn mit unseren Raves zu beschleunigen,
        und nun sind es bereits 3 Jahre! In Dankbarkeit für eure fortwährende Unterstützung und Leidenschaft laden wir
        euch ein zu unserem Jubiläums-Event im legendären <a href="https://mobilat.club">Mobilat Club Heilbronn.</a>
    </p>
    <p class="infoText">
        Die Veranstaltung findet
        <?php
        if ($eventDate >= $now) {
            echo 'in ';
            if ($interval->days == 1) echo 'einem Tag, ';
            elseif ($interval->days > 0) echo $interval->days . ' Tagen, ';
            if ($interval->h == 1) echo 'einer Stunde und ';
            elseif ($interval->h > 0 || $interval->days > 0) echo $interval->h . ' Stunden und ';
            if ($interval->i == 1) echo 'einer Minute ';
            else echo $interval->i . ' Minuten ';
        }
        ?>
        , am <?= $eventDate->format('d.m.Y') ?> um <?= $eventDate->format('H') ?>
        Uhr statt.
    </p>
    <p class="infoText">
        Freut euch auf ein Line-Up, das die Techno-Herzen höher schlagen lässt:
    </p>
    <p class="infoText">
        <span class="infoText" style="margin: 0">CMDRb b2b 2VIL</span>
        <span class="infoText" style="margin: 0">CobraL</span>
        <span class="infoText" style="margin: 0">B&-Thoughts b2b Brmad</span>
        <span class="infoText" style="margin: 0">Kutulu</span>
    </p>
    <p class="infoText">
        Die letzten drei Jahre waren nur der Anfang. Kommt und feiert mit uns eine Nacht, die in Erinnerung bleibt.
        Vergesst
        nicht, frühzeitig da zu sein, um kein Set zu verpassen!
    </p>
    <p class="infoText">
        Wir sehen uns auf der Tanzfläche.
    </p>
</div>