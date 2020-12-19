<?php
include "../include/init.php";
require "../include/header.php";
?>
<main>
    <?php include '../include/navleft.php'; ?>

    <section>

        <form id="formSearch" action="">

            <h3>Qui voulez vous ajouter en ami ?</h3>
            <br>

            Pseudo: <input type="text" size="10" maxlength="40" name="name" id="recherche" /><br />

            <button id="research">Rechercher</button>

            <br>
            <br>

            <ul id="friendSearch">

            </ul>
        </form>
    </section>


    <?php include '../include/navright.php'; ?>
</main>

<script src="../script/search.js"></script>

<?php
require "../include/footer.php";