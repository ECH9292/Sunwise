<?php

echo direction(5, 6);

// N = filas
// M = columnas
function direction($n, $m)
{
    if($n > 0 && $m > 0){

        // Si son mas filas que columnas el resultado es arriba o abajo
        if($n > $m){
            // Si las columnas son pares el resultado es arriba
            if($m %2 == 0){
                return("U");
            }
            // Si las columnas son impares el resultado es abajo
            else{
                return ("D");
            }
        }
        // Si son mas columnas que filas o son iguales el resultado es izquierda o derecha
        else{
            // Si las filas son pares el resultado es izquierda
            if($n %2 == 0){
                return("L");
            }
            // Si las filas son impares el resultado es derecha
            else{
                return ("R");
            }
        }
   }
}
?>
