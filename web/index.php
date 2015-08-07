//directs the web server to the app and allows it to run and display all pages
<?php
    $website = require_once __DIR__.'/../app/app.php';
    $website->run();
?>
