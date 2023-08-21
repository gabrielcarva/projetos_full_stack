<link rel="stylesheet" href="style.css">

<div class="container">

    <div class="box">

        <?php

        $categoria = isset($_GET["option"]) ? $_GET["option"] : 0;

        if ( $categoria == 1 ) {
            echo '<form action="backend-ativ1-pedestre.php" method="get">';
                    echo '<h1>Pedestre</h1>';
                    echo '<label for="faixa">Você está na faixa de pedestres?</label><br>';
                    echo '<select name="faixa" id="faixa" required>';
                        echo '<option value="1">Sim</option>';
                        echo '<option value="2">Não</option>';
                    echo '</select><br><br>';
                    echo '<label for="farol">O semáforo está vermelho para os carros?</label><br>';
                    echo '<select name="farol" id="farol" required>';
                        echo '<option value="1">Sim</option>';
                        echo '<option value="2">Não</option>';
                    echo '</select><br><br>';                   
                    echo '<input type="submit" value="Enviar">';
                echo '</form>';
        } else {
            echo '<form action="backend-ativ1-motorista.php" method="get">';
                echo '<h1>Motorista</h1>';
                echo '<label for="cinto">Você está usando cinto?</label><br>';
                echo '<select name="cinto" id="cinto" required>';
                    echo '<option value="1">Sim</option>';
                    echo '<option value="2">Não</option>';
                echo '</select><br><br>';
                echo '<label for="alcool">Você consumiu alcool?</label><br>';
                echo '<select name="alcool" id="alcool" required>';
                    echo '<option value="1">Sim</option>';
                    echo '<option value="2">Não</option>';
                echo '</select><br><br>';
                echo '<label for="farol2">O farol está verde para carros?</label><br>';
                echo '<select name="farol2" id="farol2" required>';
                    echo '<option value="1">Sim</option>';
                    echo '<option value="2">Não</option>';
                echo '</select><br><br>';             
                echo '<input type="submit" value="Enviar">';
            echo '</form>';
        }
        ?>

    </div>
</div>