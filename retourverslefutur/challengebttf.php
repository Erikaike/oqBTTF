<?php
$pstTime = new DateTime;
$destinationTime = new DateTime('2060-12-30 06:50');

// echo $pstTime->format('M-d-Y a h:i') . "<br>" ;
// echo $destinationTime->format('M-d-Y a h:i') . "<br>" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="pstTime">
    <div class="date, dmt"><?= $pstTime->format('M-d-Y')?></div>
    <div class="meridian, dmt"><?= $pstTime->format('a')?></div>
    <div class="time, dmt"><?= $pstTime->format('h:i')?></div>
    </div>
    <p>Present Time</p>
    <div class="destinationTime">
    <div class="date, dmt"><?= $destinationTime->format('M-d-Y')?></div>
    <div class="meridian, dmt"><?= $destinationTime->format('a')?></div>
    <div class="time, dmt"><?= $destinationTime->format('h:i')?></div>
    </div>
    <p>Destination Time</p>
    <?php
    $origin = new DateTimeImmutable($pstTime->format('Y-M-d h:i'));
    $target = new DateTimeImmutable($destinationTime->format('Y-M-d h:i'));
    $interval = $origin->diff($target);
    echo $interval->format('%y années, %m mois, %d jours et %h heures : %i minutes ');
    ?>
</body>
</html>






