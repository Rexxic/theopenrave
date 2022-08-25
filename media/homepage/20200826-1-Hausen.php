<?php
$eventDate = new DateTime('2022-08-26T21:00:00');
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
        Uhr dürfen wir euch zum dritten Mal in Folge in Hausen an der Zaber zum Geburtstag der Twins begrüßen.
        Die Location ist Outdoor und das Wetter hoffentlich gut, daher bringt euch genug zum Trinken mit.
        Los gehts um 21 Uhr und die Twins spielen B2B das Closing Morgens von 8.30 Uhr bis mindestens 11 Uhr.
    </p>
    <p class="infoText">
        Da wir diesmal nicht im Club spielen können wir euch eine feinste Auswahl von Hardtech über Hardgroove
        bis in die 160 bpm servieren.
    </p>
    <h4 class="infoText" style="margin-top: 1rem">Line-Up:</h4>
    <p class="infoText">
        Cedric Matze MorbX Nächstenliebe Chylla|B2B|Kutulu Brmad|B2B|B&#8288;-&#8288;Thoughts
    </p>
</div>
