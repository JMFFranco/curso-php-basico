<main>
    <section>
        <h2>La proxima pelicula de Marvel</h2>
    </section>
    <section>
        <img src="<?= $poster_url; ?>" width="300" alt="Poster de <?= $title; ?>"
            style="border-radius: 16px" ;>
    </section>

    <hgroup>
        <h2><?= $title; ?> - <?= $until_message ?></h2>
        <p>Fecha de estreno: <?= $release_date; ?></p>
        <p>La siguiente pelicula es: <?= $following_production; ?></p>
    </hgroup>

    <!-- <div>
        <pre style="font-size: 15px; overflow: scroll; height: 250px">
        <?php var_dump($data); ?>
    </pre>
    </div> -->
</main>