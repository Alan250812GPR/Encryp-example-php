<?php

function encriptar($texto){
    $key = "NAyT78HkUFKvLi81njDpX2)EB71JjNV(KwFWU2TB#";
    $hash = md5($key);
    $cifrado = openssl_encrypt($texto,'AES-256-CBC',$hash,OPENSSL_RAW_DATA,"Some");
    $codificado = base64_encode($cifrado);

    return $codificado;
}

?>
