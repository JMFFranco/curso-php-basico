<?php
//Variables normales
$name = "Juan";
$isDev = true;
$age = 22;

$newAge = $age + '1';
$output = "Hola $name. Tienes una edad de: $age. 😀";

$isOld = $age > 40;

//Variables globales
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

//Variables constantes
const NOMBRE = "JUAN";

//Ternarios
$outputAge = $isOld
    ? "Eres viejo, lo siento"
    : "Eres joven, felicidades";

//Funcion MATCH
$outputAge2 = match (true) {
    $age < 2 => "Eres un bebe, $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres mayor de edad, $name",
    $age < 40 => "Eres un adulto joven, $name",
    $age >= 40 => "Eres un adulto viejo, $name",
    default => "No existes, $name",
};
//Metodos para informacion de variables
/* var_dump($name);
var_dump($isDev);
var_dump($age);

echo gettype($newAge);

echo is_string($name);
echo is_bool($isDev);
echo is_int($age); */

//ARRAYS
$bestlanguages = ["PHP", "Javascript", "Python", 1, 2];
$bestlanguages[3] = "Java";
$bestlanguages[] = "TypeScript";

$person = [
    "name" => "Juan",
    "age" => 22,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Python"],
];

$person["name"] = "Franco";
$person["languages"][] = "Java";
?>

<!-- Iterar un Array -->
<ul>
    <?php foreach ($bestlanguages as $key => $language) : ?>
        <li> <?= $key + 1 . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<!-- Estructura de los IF -->
<!-- Bloques grandes de html -->
<?php if ($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, pero eres dev. Estas jodido</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>

<!-- If clasico -->
<?php
$isDev = false;

if ($isOld) {
    echo "<h2>Eres viejo, lo siento</h2>";
} elseif ($isDev) {
    echo " <h2>No eres viejo, pero eres dev. Estas jodido</h2>";
} else {
    echo "<h2>Eres joven, felicidades</h2>";
}
?>

<!-- Funcion MATCH -->
<h2><?= $outputAge2 ?></h2>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    <?=
    'Hola '
        . $name
        . '. <br/>'
        . 'Con una edad de: '
        . $age
        . '. 😀'
    ?>
    <br>
    <?= $output ?>
    <br>
    <?= NOMBRE ?>
</h1>


































<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>