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
 * @param $future : tells if we must show only those in the future or all of them
 */

function showConcerts($future)
{
    // Get data
    $concerts = [
        ['band' => 'MARZELLA', 'date' => '2019-12-15'],
        ['band' => 'MICHELLE DAVID & THE GOSPEL SESSIONS', 'date' => '2019-12-16'],
        ['band' => 'PENGUIN CAFE', 'date' => '2020-01-18'],
        ['band' => 'FÉFÉ & LEEROY', 'date' => '2020-01-24'],
        ['band' => 'LIDO REVIVAL', 'date' => '2020-01-25'],
        ['band' => 'KEB’ MO’', 'date' => '2020-02-04'],
        ['band' => 'VOYOU + MÉTÉO MIRAGE', 'date' => '2020-02-06'],
        ['band' => 'TRYO', 'date' => '2020-02-07'],
        ['band' => 'OFENBACH (LIVE)', 'date' => '2020-02-08'],
        ['band' => 'STEREOPHONICS', 'date' => '2020-02-09'],
        ['band' => 'CORNEILLE', 'date' => '2020-02-12'],
        ['band' => 'THE GROWLERS', 'date' => '2020-02-13'],
        ['band' => 'DRAGONFORCE', 'date' => '2020-02-16'],
        ['band' => 'BADNAIY', 'date' => '2020-02-20'],
        ['band' => 'BROKEN BACK', 'date' => '2020-02-29'],
        ['band' => 'PATRICK WATSON', 'date' => '2020-03-04']
    ];

    // Prepare data
    if (isset($future))
    {
        if ($future == 'y') // remove all concerts in the past
        {
            $today = date("Y-m-d");
            foreach ($concerts as $key => $concert)
            {
                if ($concert['date'] < $today)
                {
                    unset($concerts[$key]); // you MUST do it this way !!! unset($concert) will NOT destroy the data in the array
                }
            }
        }
        else
        {
            require_once 'view/error.php';
            return; // stop here so we don't include the 'normal' view
        }
    }

    // Go ahead and show it
    require_once 'view/concerts.php';
}
?>
