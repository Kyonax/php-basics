<h1>PHP Basics by Kyonax</h1>
<p>This is a website to review again everything related to <a>PHP</a> and have a fresh knowledge about it.</p>

<?php
require 'functions.php';

dd($SERVER);

$uri = $_SERVER['REQUEST_URI'];
if ($uri === '/php-basics/') echo 'Everything Is in / path';

print($uri);
