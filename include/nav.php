<?php
function getclass($item): string
{
    if (str_replace("/index.php", "", $_SERVER['PHP_SELF']) == '/' . $item) {
        return 'menuitemAlt';
    } else {
        return 'menuitem';
    }
} ?>

<nav>
    <div class="navgroup">
        <div class="menugroup">
            <a class=<?= getclass('events') ?> href="/events/"><h2>Events</h2></a>
            <a class=<?= getclass('gallerie') ?> href="/gallerie/"><h2>Gallerie</h2></a>
        </div>
        <div class="menugroup">
            <a class=<?= getclass('archiv') ?> href="/archiv/"><h2>Archiv</h2></a>
            <a class=<?= getclass('kontakt') ?> href="/kontakt/"><h2>Über uns</h2></a>
        </div>
    </div>
    <div class="refgroup">
        <a class="instaref" href="https://www.instagram.com/theopenrave/">
            <h3 class="instaheader">
                <img class="icon"
                     src="/media/logos/Instagram_Glyph_Gradient_RGB.png"
                     alt="Instagram: ">theopenrave</h3>
        </a>
    </div>
</nav>