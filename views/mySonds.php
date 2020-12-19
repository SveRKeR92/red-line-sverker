<?php
include "../include/init.php";
require "../include/header.php";
?>
<main>
    <?php include '../include/navleft.php'; ?>

    <section class="mySonds-container">
        <h2>Mes sondages</h2>
        <br>
        <br>
        <h3>Sondages actifs</h3>
        <br>
        <section id="sonds-actives" class='zisection'>

        </section>
        <br>
        <h3>Sondages inactifs</h3>
        <br>
        <section id="sonds-inactives" class='zisection'>

        </section>
    </section>
    <?php include '../include/navright.php'; ?>

    <script src="../script/mysonds.js"></script>
</main>

<?php
    require '../include/footer.php';