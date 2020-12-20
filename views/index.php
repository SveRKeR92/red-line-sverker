<?php
include '../include/init.php';
include '../include/header.php';



use App\Sondage;

$sondages = new Sondage();
?>

<!-- Ne marche pas encore -->
<!-- <div class="lookout-bckgrd">
    <div class="lookout">
        <label for="search">
            <i class="fas fa-search"></i>
        </label>
        <input type="search" name="search" id="search" placeholder="Rechercher un sondage...">
    </div>
</div> -->

<main>
    <?php include '../include/navleft.php'; ?>
    <section class="main-content">
        <div id="current">
            <h2>Sondages en Cours</h2>
            <hr>
            <?php
            $actSond = $sondages->getActiveSonds();
            foreach ($actSond as $key) {
                echo " <article class='link-container'>
                    <a href='sondPage.php?id=$key->sondage_id'>$key->sondage_title</a>
                    <p>Date de création : $key->creation_date</p>
                    </article>";
            }
            ?>
        </div>
        <div id="stopped">
            <h2>Sondages Terminés</h2>
            <hr>
            <?php
            $unSond = $sondages->getInactiveSonds();
            foreach ($unSond as $key) {
                echo " <article class='link-container'>
                        <a href='sondPage.php?id=$key->sondage_id'>$key->sondage_title</a>
                        <p>Date de création : $key->creation_date</p>
                    </article>";
            }
            ?>
        </div>

    </section>
    <?php include '../include/navright.php'; ?>
</main>

<?php
include '../include/footer.php'
?>

