<?php

// Define a URL do site de destino
$url_destino = 'http://ssh-server.vinforlabteam.com:8080/train';

// Obtém o JSON recebido via POST
$json_recebido = file_get_contents('php://input');

// Define as opções da requisição POST para o site de destino
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => $json_recebido,
    ),
);

// Cria o contexto da requisição
$context  = stream_context_create($options);

// Envia a requisição POST para o site de destino
$resultado = file_get_contents($url_destino, false, $context);

// Imprime a resposta do site de destino
echo $resultado;

?>
