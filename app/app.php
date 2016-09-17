<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/onePlayer", function() use ($app) {
        return $app['twig']->render('onePlayer.html.twig');
    });

    $app->get("/twoPlayer", function() use ($app) {
        return $app['twig']->render('twoPlayer.html.twig');
    });

    $app->get("/outcomeOne", function() use ($app) {
        $new_Game = new Game;
        $winner = $new_Game->onePlayer($_GET['input_player1']);
        return $app['twig']->render('outcomeOne.html.twig', array('winner' => $winner));
    });

    $app->get("/outcomeTwo", function() use ($app) {
        $new_Game = new Game;
        $winner = $new_Game->play($_GET['input_player1'], $_GET['input_player2']);
        return $app['twig']->render('outcomeTwo.html.twig', array('winner' => $winner));
    });

    return $app;
?>
