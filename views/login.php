<?php
include "../include/init.php";
require "../include/header.php";
?>
<main>
    <?php include '../include/navleft.php'; ?>
    <section id="login-container">
        <form id="login-form">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="password" placeholder="Password" name="password" id="password">
            <button id="login">Log In</button>
        </form>
        <p>Pas de compte ? <a href="signup.php">S'inscrire</a></p>
    </section>
    <?php include '../include/navright.php'; ?>
</main>


<?php
require "../include/footer.php";
