<?php
include('class_candidatos_dal');
$obj_candidato = new class_candidatos_dal;
$resultado = $obj_candidato -> datos_por_rfc('B');

if($resultado == NULL){
    echo "no se encontro rfc"
}
else{
    echo '<pre>';
    echo print_r($resultado);
    echo '</pre>';
}
?>