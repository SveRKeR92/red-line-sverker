<?php
    include 'include/init.php';
?>


        <?php
            include 'include/header.php';
        ?>
        <div class="lookout-bckgrd">
            <div class="lookout">
                <label for="search">
                    <i class="fas fa-search"></i>
                </label>
                <input type="search" name="search" id="search" placeholder="Rechercher un sondage...">
            </div>
        </div>

        <main>
            <div class="nav navleft">
                <ul>
                    <li><strong>Catégories</strong></li>
                    <hr>
                    <li><a href="#">Sport</a></li>
                    <li><a href="#">Télé-Réalité</a></li>
                    <li><a href="#">Divertissement</a></li>
                    <li><a href="#">Cuinise</a></li>
                </ul>
            </div>
            <div class="nav navright">
                <ul>
                    <li><strong>Suggestions</strong></li>
                    <hr>
                    <li><a href="#">Top Chef</a></li>
                    <li><a href="#">5 Hommes à la maison</a></li>
                    <li><a href="#">PSG - OM</a></li>
                    <li><a href="#">Les Anges 72</a></li>
                </ul>
            </div>
            <div>
                <h2>Mes Sondages</h2>
                <hr>
                <h3>
                    <a href="<?= URL?>views/sondage.php">Koh-Lanta</a>
                </h3>
                <table class="table-accueil">
                    <tbody>
                        <tr>
                            <td>
                                <p>Quelle équipe sera au conseil ?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="hundred">
                                    <div class="percent p72">
                                        <p>Le Nord</p>
                                    </div>
                                    <p>72 %</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Quelle équipe gagne le confort ?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="hundred">
                                    <div class="percent p72">
                                        <p>L'Ouest</p>
                                    </div>
                                    <p>72 %</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <h2>Tendances</h2>
                <hr>
                <h3>
                    <a href="<?= URL?>views/sondage.php">4 mariages</a>
                </h3>
                <table class="table-accueil">
                    <tbody>
                        <tr>
                            <td>
                                <p>Note la plus basse ?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="hundred">
                                    <div class="percent p72">
                                        <p>6</p>
                                    </div>
                                    <p>72 %</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Budget le plus élevé ?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="hundred">
                                    <div class="percent p72">
                                        <p>L'Ouest</p>
                                    </div>
                                    <p>72 %</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

        <?php
            include 'include/footer.php'
        ?>
