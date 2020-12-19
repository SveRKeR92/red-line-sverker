<?php
include '../include/init.php';
include '../include/header.php';

use App\Sondage;

$sondages = new Sondage();
?>
<main>
    <?php include '../include/navleft.php' ?>

    <section class="myParticipations">

        <h2>Mes participations</h2>
        <br>
        <?php
        $myPart = $sondages->getMyParticipate($_SESSION['user']['id']);
        foreach ($myPart as $sond) {
            echo "<a href='sondPage.php?id=$sond->sondage_id'>$sond->sondage_title</a> <br>";
        }
        ?>

    </section>
    <?php include '../include/navright.php' ?>