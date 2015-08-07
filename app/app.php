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

    //enables homepage
    $app->get('/', function() use ($app) {
        return $app['twig'] -> render('home.html.twig');
    });

    //enables Add Contact page
    $app->get('/add_contact', function() use($app) {
        return $app['twig'] -> render('add_contact.html.twig');
    });

    //enables New Contact Confirmation page
    //saves contact in variable $newcontact, and posts to cookies
    $app->post('/add_confirm', function() use($app) {
        $newcontact = new Contact($_POST['name'], $_POST['phone_number'], $_POST['street_address'], $_POST['email']);
        $newcontact -> save();

        return $app['twig'] -> render('add_confirm.html.twig', array('newcontact' => $newcontact));
    });

    //enables View All Contacts page
    //creates an array for the page to access to display all contacts using the static getAll method
    $app->get('/view_all_contacts', function() use($app) {
        return $app['twig'] -> render('view_all_contacts.html.twig', array('all_contacts' => Contact::getAll()));
    });

    //enables Delete All Contacts page
    $app->get('/delete_all', function() use($app) {
        Contact::deleteAll();
        return $app['twig']->render('delete_all.html.twig');
    });

    return $app;
?>
