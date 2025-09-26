<?php

declare(strict_types=1); //Configuracion a nivel de archivo

/* # Inicializar una nueva sesion de cURL; ch = cURL Handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Ejecutar la peticion Y guardamos el resutlado 
$result = curl_exec($ch); */
//curl_close($ch); 



function render_template(string $template, array $data = []) {
    extract($data);
    require "templates/$template.php";
}
