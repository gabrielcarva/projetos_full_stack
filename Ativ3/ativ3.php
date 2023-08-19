<link rel="stylesheet" href="style.css">

<div class="container">
    <?php

        $num = isset($_GET["txtdia"]) ? $_GET["txtdia"] : 0;

        
            switch ($num) {
                case 2:
                case 3:
                case 4: 
                case 5:
                case 6:
                    echo "<h1>Dia de Trabalhar</h1>";
                    break;
                case 1:
                case 7:
                    echo "<h1>Final de Semana</h1>";
                    break;
                default:
                    echo "<h1>Valor invalido!</h1>";
            }
        
    ?>
</div>