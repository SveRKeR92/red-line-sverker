<section class="nav navleft">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            
            <?php 
                if (!empty($_SESSION['user'])){
            ?>
            <li><a href="create.php">Créer un sondage</a></li>
            <li><a href="mySonds.php">Mes sondages</a></li>
            <li><a href="participate.php">Mes participations</a></li>
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