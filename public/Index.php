<?php

require 'accueil.php';
// Charge les librairies
function __autoload($pClassName)
{
    // Modifie My_Db en My/Db
    // Modifie My_Entity_Promotion en My/Entity/Promotion
    $pClassName = str_replace('_', '/', $pClassName);
    // Modifie My/Db en My/Db.php
    // Modifie My/Entity/Promotion en My/Entity/Promotion.php
    $pClassName = $pClassName . '.php';
    // Charge ../application/models/My/Db.php
    // Charge ../application/models/My/Entity/Promotion.php
    require '../application/models/' . $pClassName;
}


$controller = '../application/controllers/ctrl-' . $_GET['page'] . '.php';
$view       = '../application/views/view-' . $_GET['page'] . '.php';

// Teste si le controller existe
if (is_file($controller) == true) {
    // Charge le controller (les traitements)
    require $controller;
    // Teste si la vue existe
    if (is_file($view) == true) {
        // Charge la vue (le rendu HTML)
        require $view;
    }
} else {
    // Générer une page d'erreur
    echo 'PAGE ERREUR';
}
?>
