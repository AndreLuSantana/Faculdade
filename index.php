<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <title>Calculadorareflorestamento.php</title>
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <link rel="stylesheet" type="text/css" href="geral.css"/>

    </head>
    <body>
        <header><h1>Calculadora Reflorestamento</h1></header>
        <div>
            <form method="post" action="ResultadoCalculadora.php">
                <fieldset><legend><h2>Informe os dados necessários para o cálculo</h2></legend>                   
                    <p><label for='iDt'>Ano: </label><input type='text' name='nDt' id='iDt' size='20' placeholder='digite Ano'/></p>
                    <p><label for='iUf'>Estado: </label> <select name='nUf' id='iUf'>
                            <option value='vazio'>--</option>
                            <option value='AC'>Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select></p>

                    <p><label for='iArvore'>Nr de Árvores Cortadas: </label><input type='text' name='nArvore' id='iArvore' size='20' placeholder='nr árvores'></p>
                    <p><label for='iVolume'>Volume (m<sup>3</sup>): </label><input type='text' name='nVolume' id='iVolume' size='20' placeholder='volume'></p>                    
                    <input type="submit" value="Calcular" class="btn"/>
                </fieldset>
            </form>
        </div>
        <footer>By André Santana</footer>
    </body>
</html>
