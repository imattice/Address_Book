<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    //initializes cookies
    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    //enables Silex to run on this website and enables additional debug information
    $app = new Silex\Application();
    $app['debug'] = true;

    //enables Twig to run on this website
    $app->register (new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig'] -> render('home.html.twig');
    });

    return $app;
?>
