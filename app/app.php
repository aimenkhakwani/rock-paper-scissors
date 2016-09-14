<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/outcome", function() use ($app) {
        $new_Game = new Game;
        $winner = $new_Game->play($_GET['input_player1'], $_GET['input_player2']);
        return $app['twig']->render('outcome.html.twig', array('winner' => $winner));
    });

    return $app;
?>
