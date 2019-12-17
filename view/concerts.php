<?php
$title = 'Concerts';
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

ob_start();
?>

<h1>Concerts</h1>
<ul>

<?php
foreach ($concerts as $concert)
{
    echo "<li>".$concert['band'].", le ".$concert['date']."</li>";
}
?>
</ul>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
