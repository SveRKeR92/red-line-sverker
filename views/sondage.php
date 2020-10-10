<?php
    include '../include/init.php';
    include '../include/header.php';
?>

<main>
    <div id="container">
        <h3>Sondages Koh-Lanta</h3>
        <hr>
        <table class="table-accueil">
            <tbody>
                <tr>
                    <td>
                        <h4 class="titleQuestion">Quelle équipe sera au conseil ?</h4>
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
                    <td>
                        <button id="nord">Vote</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="hundred">
                            <div class="percent p14">
                                <p>Le Sud</p>
                            </div>
                            <p>14 %</p>
                        </div>
                    </td>
                    <td>
                        <button id="sud">Vote</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="hundred">
                            <div class="percent p10">
                                <p>L'Est</p>
                            </div>
                            <p>10 %</p>
                        </div>
                    </td>
                    <td>
                        <button id="est">Vote</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="hundred">
                            <div class="percent p4">
                                <p>L'Ouest</p>                    
                            </div>
                            <p>4 %</p>
                        </div>
                    </td>
                    <td>
                        <button id="ouest">Vote</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
<script src="../script/quizz.js"></script>

<?php
    include '../include/footer.php'
?>