<?php
    session_start();
    echo "Olá ".$_SESSION['nome'];
    echo "<h2>Sessão encerrada</h2>";
    session_unset();
    session_destroy();
?>