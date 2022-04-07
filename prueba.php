<?php

// Iniciando curl client
$ch = curl_init();

// creando peticion
curl_setopt($ch, CURLOPT_URL, "http://api.icndb.com/jokes/random");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// almacenando peticion que se pidio
$data = curl_exec($ch);

// cerrando conexion a curl el cual permite hacer la peticion HTTP
curl_close($ch);

// tranform
$valores = json_decode($data);

// extrayendo valores del JOKE
$idJoke = $valores->{"value"}->{'id'};
$joke = $valores->{"value"}->{'joke'};

// el pintado en pantalla
echo 'El ID es : ', $idJoke;
echo '<br>';
echo 'El JOKE es : ', $joke;
