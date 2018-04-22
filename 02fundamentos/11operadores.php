<?php

/**Operadores aritmeticos:
 * +    Suma
 * -    Resta
 * *    Multiplicación
 * /    División
 * %    Módulo
 */
$n1=10;
$n2=5;
$suma=$n1+$n2;
$resta=$n1-$n2;
$multiplica=$n1*$n2;
$divide=$n1/$n2;
$modulo=$n1%$n2;

echo 'La suma de los números es: '.$suma.'<br>';
echo 'La resta de los números es: '.$resta.'<br>';
echo 'La multiplicación de los números es: '.$multiplica.'<br>';
echo 'La división de los números es: '.$divide.'<br>';
echo 'El módulo de los números es: '.$modulo.'<br>';

 /**Operadores de asignación
  =
  +=
  -=
  *=
  /=
  */
  #a el valor original que es de le aumenta 10
  $n1 += 10;
  echo $n1.'<br>';
   #al resultado de la variable anterior que da 20 le resta 10
  $n1 -= 10;
  echo $n1.'<br>';
  #a el resultado de la resta le multiplica 10 y quedan 100
  $n1 *= 10;
  echo $n1.'<br>';
  #a la multiplicación que da 100 lo divide entre 10
  $n1 /= 10;
  echo $n1.'<br>';

  /**Operadores de asigtnacion
   * ==
   * ===
   * !=, <>
   * !==
   * >
   * <
   * >=
   * <=
   */
$ns='10';

  if($n1 == 10){
      echo 'Si es igual'.'<br>';
  }

  if($n1 === $ns){
    echo 'Es identico'.'<br>';
}else{
    echo 'Es diferente porque uno es String y el otro Integer'.'<br>';
}

if($n1 != $n2){
    echo 'Es diferente'.'<br>';
}

if($n1 !== $ns){
  echo 'No son identicas'.'<br>';
}else{
  echo 'Son iguales'.'<br>';
}

/**Operadores lógicos
 * AND, &&
 * OR, ||
 * XOR
 * !
 * 
 */
if($n1 < $n2){
    echo 'Verdadero'.'<br>';
}else{
    echo 'Falso'.'<br>';
}

/**Operadores de incremento y deremento
 *  ++$x
 *  $x++
 *  --$x
 *  $x--
 */

 $numero = 10;
 $numero++;

 echo $numero.'<br>';

 /**Operadores de cadena de texto 
  *     .
        .=
 */

 $cad1='Esto es una cadena';
 $cad2='Otra cadena';

 $rescad = $cad1.$cad2;

 echo $rescad.'<br>';

 $c1='Esto es una cadena';
 $c1.='Otra cadena';

 echo $c1.'<br>';

?>