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
            <div>
                <h2>Mes Sondages</h2>
                <hr>
                <h3>
                    <a href="<?= URL?>views/sondage.php">Koh-Lanta</a>
                </h3>
                <table>
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
                <table>
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
