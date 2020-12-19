<?php
include "../include/init.php";
require "../include/header.php";
?>

<main>
    <?php include '../include/navleft.php'; ?>
    <section id="signup-container">
        <form action="#" id="signup-form">
            <input type="pseudo" placeholder="Pseudo" name="pseudo" id="pseudo">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="password" placeholder="Password" name="password" id="password">
            <button id="signup">Sign up</button>
        </form>
        <p>Déjà inscrit ? <a href="login.php">Se connecter</a></p>
    </section>
    <?php include '../include/navright.php'; ?>
</main>

<script src="../script/login.js"></script>

<?php
require "../include/footer.php";
