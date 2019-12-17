<?php
$title = 'Films';
$movies = [
    ['title' => 'Jumanji: Next Level', 'audio' => 'Doublé en français', 'showtime' => '18:00'],
    ['title' => 'La Reine des neiges 2', 'audio' => 'Doublé en français', 'showtime' => '15:30'],
    ['title' => 'Last Christmas', 'audio' => 'Standard', 'showtime' => '21:00'],
    ['title' => 'La Famille Addams', 'audio' => 'Standard', 'showtime' => '15:30'],
    ['title' => 'Le Meilleur reste à venir', 'audio' => 'Doublé en français', 'showtime' => '15:50'],
    ['title' => 'À couteaux tirés', 'audio' => 'Standard', 'showtime' => '18:10'],
    ['title' => 'Joker', 'audio' => 'Doublé en français', 'showtime' => '20:45']
];
ob_start();
?>

<h1>Films</h1>
<table class="table table-bordered">
    <thead>
    <tr><th>Titre</th><th>Audio</th><th>Prochaine séance</th></tr>
    </thead>
    <tbody>
    <?php
    foreach ($movies as $movie)
    {
        echo "<tr><td>".$movie['title']."</td><td>".$movie['audio']."</td><td>".$movie['showtime']."</td></tr>";
    }
    ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

