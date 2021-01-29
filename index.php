<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'config/database.php';

$map = [
    'home' => 'app/controllers/homeController.php',
    'comment'=> 'app/controllers/blogPostController.php',
    '404' => 'ressources/views/errors/ERREUR404.php',
];
if (filter_has_var(INPUT_GET, 'action')) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
   // var_dump($action);
    if (!isset($map [$action])) {
        $action = '404';
        var_dump($map);
    }
} else {
    $action = 'home';
}
$fichier = $map [$action];
include $fichier;
