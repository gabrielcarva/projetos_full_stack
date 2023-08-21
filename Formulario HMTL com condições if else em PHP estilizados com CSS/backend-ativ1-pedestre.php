<link rel="stylesheet" href="style.css">

<div class="container">
    <div class="box">
        <?php
            $faixa = isset ($_GET["faixa"]) ? $_GET["faixa"] : 0;
            $farol = isset ($_GET["farol"]) ? $_GET["farol"] : 0;

            if ( $faixa == 1 && $farol == 1 ) {
                echo '<h1> Você pode atravessar! </h1>';
            } else {
                echo '<h1> Cuidado, você não pode atravessar! </h1>';
            }
            echo '<a href="../Atividades-Aula-15Ago23/index_ativ1.html"><button>Voltar</button></a>'
        ?>
    </div>
</div>