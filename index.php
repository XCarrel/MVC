<?php
$action = $_GET['action'];
switch ($action)
{
    case 'concerts':
        require_once 'view/concerts.php';
        break;
    case 'movies':
        require_once 'view/movies.php';
        break;
    default:
        require_once 'view/home.php';
}
?>
