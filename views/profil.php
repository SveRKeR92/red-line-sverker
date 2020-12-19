<?php
include "../include/init.php";
require "../include/header.php";
var_dump($_SESSION["user"]);
?>
<main>
    <?php include '../include/navleft.php'; ?>

    <section class="profil">
        <form id="infos">
            <label for="pseudo">Votre Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" readonly>
            <br>
            <label for="email">Votre Email :</label>
            <input type="text" name="email" id="email" readonly>
            <br>
            <label for="pass">Votre mot de passe :</label>
            <input type="password" name="password" id="pass-1" readonly>
            <br>
        </form>
        <div id="mdp-confirm" style="display: none;">
            <label for="pass">Confirmer votre mot de passe :</label>
            <br>
            <input type="password" name="password" id="pass-2">
        </div>
        <br>
        <button id="change">Changer mes informations</button>
        <button id="confirm" style="display: none;">Confirmer les changements</button>
    </section>
    <?php include '../include/navright.php'; ?>
</main>

<script src="../script/user.js"></script>

<?php
require "../include/footer.php";