
<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('templates'); // Dossier contenant les templates
    $twig = new Twig_Environment($loader, array(
    'cache' => false
    ));

    include "connect.php";

    $reponse = $bdd->prepare('SELECT * FROM movie');
    $reponse->execute();
    $results = $reponse->fetchAll();

    echo $twig->render("template1.html", array(
        'movies' => $results,
    ));
    
    
?>


    



    
