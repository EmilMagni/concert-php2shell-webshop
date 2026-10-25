<?php
// demo webshop for the IBM Concert PHP2Shell demo. not a real shop.
$cache = getenv('CACHE_HOST') ?: 'webshop-cache';
?>
<!doctype html>
<html><head><title>Demo Webshop</title></head>
<body style="font-family:sans-serif;max-width:640px;margin:40px auto">
<h1>Demo Webshop</h1>
<p>running PHP <strong><?= PHP_VERSION ?></strong></p>
<p>cache host: <?= htmlspecialchars($cache) ?></p>
</body></html>
