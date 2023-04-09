<?php

echo roman_system("2000AD-2012AD");

function roman_system($year){
    return roman_count(
        roman_number(
            get_number(
                roman_age($year))));
}
  
function roman_age($year){
    //La entrada se divide en 2
    $arr_years = explode("-", $year);

    //Comprobar la era
    $age_1 = strpos($arr_years[0], "BC");
    $age_2 = strpos($arr_years[1], "BC");

    //Convertir a la era romana
    if($age_1){
        $roman_year_1 = str_replace ( "BC", '', $arr_years[0]);
        $roman_year_1 = 754 - $arr_years[0];
    }else{
        $roman_year_1 = str_replace ( "AC", '', $arr_years[0]);
        $roman_year_1 = 753 + $arr_years[0];
    }
    $arr_years[0] = $roman_year_1;

    if($age_2){
        $roman_year_2 = str_replace ( "BC", '', $arr_years[1]);
        $roman_year_2 = 754 - $arr_years[1];
    }else{
        $roman_year_2 = str_replace ( "AC", '', $arr_years[1]);
        $roman_year_2 = 753 + $arr_years[1];
    }
    $arr_years[1] = $roman_year_2;

    return $arr_years;
}

function get_number($array){
    //Guardar en un array el intervalo de años
    foreach (range($array[0], $array[1]) as $numero) {
        array_push($array, $numero);
    }
    
    function contar_digitos($numero, $digito) {
        $cadena_numero = (string) $numero;
        $cantidad_digitos = substr_count($cadena_numero, $digito);
        return $cantidad_digitos;
    }




    //Filtrar los numeros con mayor cantidad de 8
    $max_8 = 0;
    $numeros_max_8 = array();
    foreach ($array as $numero) {
        $cantidad_8 = contar_digitos($numero, '8');
        if ($cantidad_8 > $max_8) {
            $max_8 = $cantidad_8;
            $numeros_max_8 = array($numero);
        } elseif ($cantidad_8 == $max_8) {
            array_push($numeros_max_8, $numero);
        }
    }
    
    //Filtrar los numeros con mayor cantidad de 3
    $max_3 = 0;
    $numeros_max_3 = array();
    foreach ($numeros_max_8 as $numero) {
        $cantidad_3 = contar_digitos($numero, '3');
        if ($cantidad_3 >= $max_3) {
            $max_3 = $cantidad_3;
            $numeros_max_3 = array($numero);
        } elseif ($cantidad_3 == $max_3) {
        array_push($numeros_max_3, $numero);
        }
    }

    //Filtrar los numeros con mayor cantidad de 7
    $max_7 = 0;
    $numeros_max_7 = array();
    foreach ($numeros_max_3 as $numero) {
        $cantidad_7 = contar_digitos($numero, '7');
        if ($cantidad_7 >= $max_7) {
            $max_7 = $cantidad_7;
            $numeros_max_7 = array($numero);
        } elseif ($cantnidad_7 = $max_7) {
        array_push($numeros_max_7, $numero);
        }
    }

    //Filtrar los numeros con mayor cantidad de 2
    $max_2 = 0;
    $numeros_max_2 = array();
    foreach ($numeros_max_7 as $numero) {
        $cantidad_2 = contar_digitos($numero, '2');
        if ($cantidad_2 >= $max_2) {
            $max_2 = $cantidad_2;
            $numeros_max_2 = array($numero);
        } elseif ($cantnidad_2 = $max_2) {
        array_push($numeros_max_2, $numero);
        }
    }

     //Filtrar los numeros con mayor cantidad de 4
     $max_4 = 0;
     $numeros_max_4 = array();
     foreach ($numeros_max_2 as $numero) {
         $cantidad_4 = contar_digitos($numero, '4');
         if ($cantidad_4 >= $max_4) {
             $max_4 = $cantidad_4;
             $numeros_max_4 = array($numero);
         } elseif ($cantnidad_4 = $max_4) {
         array_push($numeros_max_4, $numero);
         }
     }

     //Filtrar los numeros con mayor cantidad de 6
     $max_6 = 0;
     $numeros_max_6 = array();
     foreach ($numeros_max_4 as $numero) {
         $cantidad_6 = contar_digitos($numero, '6');
         if ($cantidad_6 >= $max_6) {
             $max_6 = $cantidad_6;
             $numeros_max_6 = array($numero);
         } elseif ($cantnidad_6 = $max_6) {
         array_push($numeros_max_6, $numero);
         }
     }

     //Filtrar los numeros con mayor cantidad de 9
     $max_9 = 0;
     $numeros_max_9 = array();
     foreach ($numeros_max_6 as $numero) {
         $cantidad_9 = contar_digitos($numero, '9');
         if ($cantidad_9 >= $max_9) {
             $max_9 = $cantidad_9;
             $numeros_max_9 = array($numero);
         } elseif ($cantnidad_9 = $max_9) {
         array_push($numeros_max_9, $numero);
         }
     }

     //Filtrar los numeros con mayor cantidad de 1
     $max_1 = 0;
     $numeros_max_1 = array();
     foreach ($numeros_max_6 as $numero) {
         $cantidad_9 = contar_digitos($numero, '1');
         if ($cantidad_1 >= $max_1) {
             $max_1 = $cantidad_1;
             $numeros_max_1 = array($numero);
         } elseif ($cantnidad_1 = $max_1) {
         array_push($numeros_max_1, $numero);
         }
     }

     //Filtrar los numeros con mayor cantidad de 5
     $max_5 = 0;
     $numeros_max_5 = array();
     foreach ($numeros_max_1 as $numero) {
         $cantidad_5 = contar_digitos($numero, '5');
         if ($cantidad_5 >= $max_5) {
             $max_5 = $cantidad_5;
             $numeros_max_5 = array($numero);
         } elseif ($cantnidad_5 = $max_5) {
         array_push($numeros_max_5, $numero);
         }
     }

    return $numeros_max_5[0];
}

function roman_number($integer, $upcase = true) {
    //Convierte deciamal a romano
    $table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 
                   'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9,   
                   'V'=>5, 'IV'=>4, 'I'=>1);
    $return = '';
    while($integer > 0) 
    {
        foreach($table as $rom=>$arb) 
        {
            if($integer >= $arb)
            {
                $integer -= $arb;
                $return .= $rom;
                break;
            }
        }
    }
    return $return;
}

function roman_count($roman_number){
    return strlen($roman_number);
}

?>