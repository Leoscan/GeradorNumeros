<?php
    function geraJson($valores, $inicio, $fim, $arq) {
        $numeros = array();

        for($i = 0; $i < $valores; $i++) {
            array_push($numeros, rand($inicio, $fim));
        }

        $dados_json = json_encode($numeros);
        $fp = fopen("arquivosJson/$arq", "w");
        fwrite($fp, $dados_json);
        fclose($fp);
    }

    function lerJson($arq) {
        $arquivo = file_get_contents("arquivosJson/$arq");
        $json = json_decode($arquivo);

        return $json;
    }
?>