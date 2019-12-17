<?php
$action = $_GET['action'];
require_once 'controller/controller.php';

switch ($action)
{
    case 'concerts':
        showConcerts();
        break;
    case 'movies':
        showMovies();
        break;
    default:
        require_once 'view/home.php';
}
?>
