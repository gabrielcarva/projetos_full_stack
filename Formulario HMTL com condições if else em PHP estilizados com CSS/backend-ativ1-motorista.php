<link rel="stylesheet" href="style.css">

<div class="container">
    <div class="box">
        <?php
            $cinto = isset($_GET["cinto"]) ? $_GET["cinto"] : 0;
            $alcool = isset($_GET["alcool"]) ? $_GET["alcool"] : 0;
            $farol2 = isset($_GET["farol2"]) ? $_GET["farol2"] : 0;

            if ( $cinto == 1 && $alcool == 2 && $farol2 == 1 ) {
                echo '<h1>Você pode dirigir!</h1>';
            } else {
                echo '<h1>Cuidado, você não pode dirigir!</h1>';
            }
            echo '<a href="../Atividades-Aula-15Ago23/index_ativ1.html"><button>Voltar</button></a>'
        ?>
    </div>
</div>