<?php
if (isset($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    $action = 'home';
}

switch($action)
{
    case 'movies':
        $title='Films';
        $content = 'Liste des films';
        break;
    case 'concerts':
        $title='Concerts';
        $content = 'Liste des concerts';
        break;
    default:
        $title='Home';
        $content = 'Maison';
        break;
}
require_once 'gabarit.php';
?>
