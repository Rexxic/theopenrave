<?php
$data = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"/>';
$path = 'https://theopenrave.de/';
$xml = new SimpleXMLElement($data);

for ($i = 1; $i <= 8; ++$i) {
    $url = $xml->addChild('url');
    $url->addChild('loc', $path);
    $url->addChild('lastmod', (new DateTime())->format(''));
    $url->addChild('priority', $i);
}

Header('Content-type: text/xml');
print($xml->asXML());