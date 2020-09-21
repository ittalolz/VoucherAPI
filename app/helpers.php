<?php

function getData($hora){    
    return ($hora ? date("d/m/Y H:i") : date("d/m/Y")) ; 
}

function dataBRtoDate($data){
    if (!$data)
        return null;            
    $data = explode("/", $data);
    list($dia, $mes, $ano) = $data;    
    return date("$ano/$mes/$dia");     
}