<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesion de cURL; ch = cURL Handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la peticion
Y guardamos el resutlado */

$result = curl_exec($ch);

//Una alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL); //Si solo se quiere hacer un GET a una API

$data = json_decode($result, true);

curl_close($ch);
?>

<head>
    <meta charset="UTF-8">
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <section>
        <h2>La proxima pelicula de Marvel</h2>
    </section>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>"
            style="border-radius: 16px" ;>
    </section>

    <hgroup>
        <h2><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias.</h2>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente pelicula es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>

    <div>
        <pre style="font-size: 15px; overflow: scroll; height: 250px">
        <?php var_dump($data); ?>
    </pre>
    </div>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
        margin: 0 auto;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>