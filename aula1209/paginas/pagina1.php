<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    echo "<h2>Sessão 1</h2>";
    $_SESSION['produto1'] = 'computador';
    $_SESSION['nome'] = 'Marilia Silva Teodoro';
    $_SESSION['idade'] = 18;
    $_SESSION['pagto'] = 'cartão de crédito';

    echo "<a href='pagina2.php'>Próxima</a>";
    ?>
</body>
</html>