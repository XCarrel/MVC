<?php
$title = 'Films';
ob_start();
?>

<h1>Films</h1>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

