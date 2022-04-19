<!DOCTYPE html>
<?php
    include 'json/metodosJson.php';
    include 'vetor/metodosVetor.php';
    $arq = isset($_GET['arq']) ? $_GET['arq'] : null;
    
    if (isset($_GET['arq'])){
        $json = lerJson($arq);

        $max = maximo($json);
        $min = minimo($json);
        $pares = pares($json);
        $impares = impares($json);
        $soma = soma($json);
        $media = media($json);
        $acima = AcimaMedia($json);
        $abaixo = AbaixoMedia($json);
        $primos = primos($json);
        $mediana = mediana($json);
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes</title>
</head>
<body>
    <form method="get">
        <label for="arq">Arquivo: </label>
        <input name="arq" type="text" value="<?php echo $arq;?>">

        <input type="submit">
    </form>

    <br>
    <h3>Resultados:</h3>
    <?php
    if (isset($_GET['arq'])){
        echo "Maior Valor: $max <br>";
        echo "Menor Valor: $min <br>";
        echo "Pares:\n";
            foreach ($pares as $p) echo "$p; ";
        echo "<br>Impares:\n";
            foreach ($impares as $i) echo "$i; ";
        echo "<br>Soma: $soma <br>";
        echo "Média: $media <br>";
        echo "Acima da Média:\n";
            foreach ($acima as $ac) echo "$ac; ";
        echo "<br>Abaixo da Média:\n";
            foreach ($abaixo as $ab) echo "$ab; ";
        echo "<br>Números Primos:\n";
            foreach ($primos as $pr) echo "$pr; ";
        echo "<br>Mediana: $mediana <br>";
    }
    ?>
</body>
</html>