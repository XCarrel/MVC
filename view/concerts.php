<?php
$title = 'Concerts';
ob_start();
?>

<h1>Concerts</h1>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

