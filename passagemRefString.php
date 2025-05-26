<?php
function add_algum_extra(& $string){
    $string = 'e eu sou a fairie s2.';
}
$str = 'Isto é uma string';
add_algum_extra($str);
echo $str;