<?php

if (!empty($_SESSION['user'])){
   ?> 
   <section class="nav navright" id="friendsList">

        <a href="add.php">Ajouter des amis</a>
    </section>

    <script src="../script/friends.js"></script>
    <?php
}

?>