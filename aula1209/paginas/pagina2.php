<?php
    session_start();
    echo "Olá ".$_SESSION['nome'].", o produto escolhido ".$_SESSION['produto1'];
    echo "<br>Outros dados: <br>";

    foreach ($_SESSION as $valor) {
        echo $valor ."<br>";
    }

    echo "<p><a href='pagina1.php'>Sessão 1</a></p>";
    echo "<br><a href='pagina3.php'>Finalizar</a>";


?>