<?php
include '../include/init.php';
include '../include/header.php';
?>

<main>
    <div id="container">
        <div class="setPseudo" id="setPseudo">
            <label for="pseudo">Veuillez indiquer un pseudo pour commencer : </label>
            <input type="text" id="pseudo" placeholder="Pseudo">
            <button type="submit" id="pseudoSubmit">Commencer !</button>
        </div>
    </div>
</main>
<script src="../script/quizz.js"></script>

<?php
include '../include/footer.php'
?>