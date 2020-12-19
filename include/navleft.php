<section class="nav navleft">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="create.php">Créer un sondage</a></li>
            <li><a href="leaderboard.php">Classement</a></li>
            <?php 
                if (!empty($_SESSION['user'])){
            ?>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="logout.php">Se déconnecter</a></li>
            <?php 
                }else{
                    ?>
                        <li><a href="login.php">Se connecter</a></li>
                    <?php
                }
            ?>
        </ul>
</section>