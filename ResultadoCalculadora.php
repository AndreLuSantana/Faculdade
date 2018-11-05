<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Calcula.css"/>
        <link rel="stylesheet" type="text/css" href="geral.css"/>
        <title>ResultadoCalculadora.php</title>
    </head>
    <body>
        <div>
            <?php
            require_once 'Calcula.php';
            $calcula = new Calcula();

            $ano = $_POST["nDt"];
            $uf = $_POST["nUf"];
            $numArv = $_POST["nArvore"];
            $vol = $_POST["nVolume"];

            $calcula->setAno($ano);
            $calcula->setEstado($uf);
            $calcula->setArvores($numArv);
            $calcula->setVolume($vol);

            echo "<p id='tot'>Total a ser pago</p><span id='valorPagar'>R$" . number_format($calcula->valorPagar(), 2, ',', ".") . "</span>";
            echo "<br/> <br/>";
            echo "<h2>Resumo</h2>";
            echo "<table id='tabela'>";
            echo "<th class='th'>Ano</th>";
            echo "<th class='th'>Estado</th>";
            echo "<th class='th'>Nr de árvores cortadas</th>";
            echo "<th class='th'>Volume<sup>3</sup></th>";
            echo "<th class='th'>Árvores a Repor</th>";
            echo "<th class='th'>Valor a ser Pago</th>";
            echo "<tr><td class='tbResumo'>" . $calcula->getAno() . "</td>";
            echo "<td class='tbResumo'>" . $calcula->getEstado() . "</td>";
            echo "<td class='tbResumo'>" . number_format($calcula->getArvores(), 0, '', '.') . "</td>";
            echo "<td class='tbResumo'>" . number_format($calcula->getVolume(), 0, '', '.') . "</td>";
            echo "<td class='tbResumo'>" . number_format($calcula->arvoresRepor(), 0, '', '.') . "</td>";
            echo "<td class='tbResumo'>" . number_format($calcula->valorPagar(), 2, ',', '.') . "</tr>";
            echo"</table>";
            ?>
            <a class="btn" href="index.php"><br/><br/><br/>Realizar Novo Cálculo</a>
            <footer>By André Santana</footer>;
        </div>
    </body>
</html>
