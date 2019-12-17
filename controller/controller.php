<?php

/**
 * Display list of movies
 */
function showMovies()
{
    // Get data
    $movies = [
        ['title' => 'Jumanji: Next Level', 'audio' => 'Doublé en français', 'showtime' => '18:00'],
        ['title' => 'La Reine des neiges 2', 'audio' => 'Doublé en français', 'showtime' => '15:30'],
        ['title' => 'Last Christmas', 'audio' => 'Standard', 'showtime' => '21:00'],
        ['title' => 'La Famille Addams', 'audio' => 'Standard', 'showtime' => '15:30'],
        ['title' => 'Le Meilleur reste à venir', 'audio' => 'Doublé en français', 'showtime' => '15:50'],
        ['title' => 'À couteaux tirés', 'audio' => 'Standard', 'showtime' => '18:10'],
        ['title' => 'Joker', 'audio' => 'Doublé en français', 'showtime' => '20:45']
    ];

    // Prepare data: nothing for now

    // Go ahead and show it
    require_once 'view/movies.php';
}

/**
 * Display list of concerts
 */
function showConcerts()
{
    // Get data
    $concerts = [
        ['band' => 'MARZELLA', 'date' => '19.12.2019'],
        ['band' => 'MICHELLE DAVID & THE GOSPEL SESSIONS', 'date' => '20.12.2019'],
        ['band' => 'PENGUIN CAFE', 'date' => '18.01.2020'],
        ['band' => 'FÉFÉ & LEEROY', 'date' => '24.01.2020'],
        ['band' => 'LIDO REVIVAL', 'date' => '25.01.2020'],
        ['band' => 'KEB’ MO’', 'date' => '04.02.2020'],
        ['band' => 'VOYOU + MÉTÉO MIRAGE', 'date' => '06.02.2020'],
        ['band' => 'TRYO', 'date' => '07.02.2020'],
        ['band' => 'OFENBACH (LIVE)', 'date' => '08.02.2020'],
        ['band' => 'STEREOPHONICS', 'date' => '09.02.2020'],
        ['band' => 'CORNEILLE', 'date' => '12.02.2020'],
        ['band' => 'THE GROWLERS', 'date' => '13.02.2020'],
        ['band' => 'DRAGONFORCE', 'date' => '16.02.2020'],
        ['band' => 'BADNAIY', 'date' => '20.02.2020'],
        ['band' => 'BROKEN BACK', 'date' => '29.02.2020'],
        ['band' => 'PATRICK WATSON', 'date' => '04.03.2020']
    ];

    // Prepare data: nothing for now

    // Go ahead and show it
    require_once 'view/concerts.php';
}
?>
