<!DOCTYPE html>
    <?php
        include 'json/metodosJson.php';

        $valores = isset($_POST['valores']) ? $_POST['valores'] : null;
        $inicio = isset($_POST['inicio']) ? $_POST['inicio'] : null;
        $fim = isset($_POST['fim']) ? $_POST['fim'] : null;
        $arq = isset($_POST['arq']) ? $_POST['arq'] : null;
    ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Números</title>
</head>
<body>
    <h3>Gerador de números</h3>

    <form method="post">
        <fieldset>
            <legend>Gerador:</legend>
            
            <label for="valores">Quantidade de Valores: </label>
            <input name="valores" type="number" required>
        
            <label for="inicio">Inicio: </label>
            <input name="inicio" type="number" required>

            <label for="fim">Fim: </label>
            <input name="fim" type="number" required>

            <label for="arq">Nome do arquivo: </label>
            <input name="arq" type="text" value="valores.json" required>

            <input type="submit">
        </fieldset>
    </form>
    <?php
        if(!is_null($valores)) {
            geraJson($valores, $inicio, $fim, $arq);

            echo "<h3>Valores Gerados<h3>";

            $json = lerJson($arq);
            foreach ($json as $value) {
                echo $value."; ";
            }

            echo "<br><a href=detalhes.php?arq=$arq>Ver detalhes<a>";
        }
    ?>
</body>
</html>