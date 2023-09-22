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
        Willkommen bei The Open Rave - dem Kollektiv, das es sich zum Ziel gesetzt hat, die besten Techno-Events in der
        Heilbronn Umgebung zu veranstalten! Wir freuen uns, unsere erste Veranstaltung dieses Jahres ankündigen zu
        dürfen, die mit Sicherheit die Tanzfläche zum Beben bringen wird.
    </p>
    <p class="infoText">
        Wir haben eine erstklassige Aufstellung von DJs für euch zusammengestellt, die euch in eine Nacht voller
        pulsierender Beats und energiegeladener Stimmung versetzen werden. Unsere DJs, Cedric, Kutulu, Brmad b2b
        B-Thoughts und
        Chylla, werden nacheinander auflegen und euch mit ihren einzigartigen Sounds begeistern.
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
        im Gaswerk in Bönnigheim statt, am <?= $eventDate->format('d.m.Y') ?> um <?= $eventDate->format('H') ?>
        Uhr, der Eintritt kostet 10€.<br>
    </p>
    <p class="infoText">
        Seid bereit, in eine Nacht voller guter Musik, tanzender Menschen und positiver Energie einzutauchen. Wir freuen
        uns auf euch!
    </p>
</div>
