<?php
class Solution {

    /**
     * @param String $s
     * @param Integer[] $spaces
     * @return String
     */
    function addSpaces($s, $spaces) {
        $array_s = [];
        foreach($spaces as $chave => $valor){
            if($chave === 0){
                $palavra = substr($s, 0, $valor);
            }else {
                $index_anterior = $spaces[$chave-1];
                $palavra = substr($s, $index_anterior, $valor-$index_anterior);
            }
            // echo $palavra;
            array_push($array_s, $palavra);
        }
        array_push($array_s, substr($s, end($spaces)));
        return implode(" ", $array_s);
    }
}