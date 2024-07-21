<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; // Utilisation du chemin absolu

function route($uri) {
    switch ($uri) {
        case '':
        case '/':
            include $_SERVER['DOCUMENT_ROOT'] . '/pages/home.php';
            break;
        case '/services/development':
            include $_SERVER['DOCUMENT_ROOT'] . '/pages/development.php';
            break;
        case '/services/seo':
            include $_SERVER['DOCUMENT_ROOT'] . '/pages/seo.php';
            break;
        case '/services/social-media':
            include $_SERVER['DOCUMENT_ROOT'] . '/pages/social-media.php';
            break;
        case '/about':
            include $_SERVER['DOCUMENT_ROOT'] . '/pages/about.php';
            break;
        case '/contact':
            include $_SERVER['DOCUMENT_ROOT'] . '/pages/contact.php';
            break;
        default:
            include $_SERVER['DOCUMENT_ROOT'] . '/pages/404.php'; // Créez une page 404 pour les routes non trouvées
            break;
    }
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
route($uri);
?>
