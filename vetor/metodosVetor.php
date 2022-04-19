<?php 
    function maximo($valores) {
        return max($valores);
    }
    function minimo($valores) {
        return min($valores);
    }
    function pares($valores) {
        $pares = array();

        foreach($valores as $item)
            if($item % 2 == 0) array_push($pares, $item);

        return $pares;
    }

    function impares($valores) {
        $impares = array();

        foreach($valores as $item)
            if($item % 2 == 1) array_push($impares, $item);

        return $impares;
    }

    function soma($valores) {
        $soma = 0;
        foreach($valores as $item) {
            $soma += $item;
        }
        return $soma;
    }

    function media($valores) {
        $soma = soma($valores);
        return $soma / count($valores);
    }

    function AcimaMedia($valores) {
        $media = media($valores);
        $acima = array();

        foreach($valores as $item)
            if($item > $media) array_push($acima, $item);

        return $acima;
    }

    function AbaixoMedia($valores) {
        $media = media($valores);
        $abaixo = array();

        foreach($valores as $item)
            if($item < $media) array_push($abaixo, $item);

        return $abaixo;
    }

    function primos($valores) {
        $primos = array();
        foreach($valores as $item){
            if ($item == 1)
            continue;
            for ($i = 2; $i <= $item/2; $i++){
                if ($item % $i == 0)
                    continue;
            }
            array_push($primos, $item);
        }
        return $primos;
    }

    function mediana($arr) {
        $count = count($arr); 
        $middleval = floor(($count-1)/2); 
        if($count % 2) { 
            $median = $arr[$middleval];
        } else { 
            $low = $arr[$middleval];
            $high = $arr[$middleval+1];
            $median = (($low+$high)/2);
        }
        return $median;
    }
?>