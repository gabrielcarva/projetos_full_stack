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
    
    /* sintaxe
        setcookie(nome, valor, expira)
    */

    $nome_cookie = "faculdade";
    $valor_cookie = "IFSP - Instituto Federal de São Paulo";
    // Criando o cookie
    setcookie($nome_cookie, $valor_cookie, time() + 60);

    if(isset($_COOKIE[$nome_cookie])){
        echo "Cookie criado com sucesso<br>";
        echo "Valor do cookie: ".$_COOKIE['faculdade'];
    }else{
        echo "Cookie não existe<br>";
    }
    
    ?>
</body>
</html>