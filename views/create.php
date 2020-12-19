<?php
include '../include/init.php';
include '../include/header.php';
?>
<main>
    <?php include '../include/navleft.php' ?>
    <section id="container-create">
        
        <form action="" id="createSond">
            <input type="text" name="sondage_title" placeholder="Titre" id="title">
            <input type="text" name="sondage_question1" placeholder="Question 1" id="q1">
            <input type="text" name="sondage_question2" placeholder="Question 2" id="q2">
            <input type="text" name="sondage_question3" placeholder="Question 3" id="q3">
            <input type="text" name="sondage_question4" placeholder="Question 4" id="q4">
            
            <button id="create">Créer le sondage</button>
        </form>
        
    </section>
    <?php include '../include/navright.php' ?>
</main>

<script src="../script/createSond.js"></script>

<?php
include '../include/footer.php'
?>