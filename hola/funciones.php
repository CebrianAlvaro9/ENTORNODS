<?php



//las variables solo se muestran dentro de la funcion si las queremos ver de forma individua habra que 
// oponerlas fuera de la funcion

//ejemplo para usar variables globales

$var1 = 6;
$var2 = 7;

function suma($a, $b){
    global $var1;
    global $var2;
    $var1 = 100;
    $var2 = 33;

    echo "<br> la variable dentro de la funcion es var1:" . $var1 ." y var2: " . $var2 ;
    
    return $a + $b;
}
echo "<br> la variable fuera de la funcion es var1:" . $var1 ." y var2: " . $var2 ;
echo "<br> la suma es : " .suma (3,5);

function suma1($a, $b){
    global $var1;
    global $var2;
    $var1 = 100;
    $var2 = 33;
    echo "<br> la variable dentro de la funcion es var1:" . $var1 ." y var2: " . $var2 ;

    //defenicion variables estaticas 
    static $varestatica =0;
    echo "<br> El valor de la var estatica es : " . $varestatica;
    $varestatica++;

    
    
    return $a + $b;
}

echo "<br> la variable fuera de la funcion es var1:" . $var1 ." y var2: " . $var2 ;
echo "<br> la suma es : " .suma1 (3,5);
echo "<br> la suma es : " .suma1 (3,5);
echo "<br> la suma es : " .suma1 (3,5);

//paso de parametros por valor o por preferencia(variable)

function restar ($op1, $op2){
    $op1 = $op1- $op2;
    return $op1;
}


echo "<br> Llamada por valor : " . restar(8,3); 


