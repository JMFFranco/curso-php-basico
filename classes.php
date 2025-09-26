<?php

declare(strict_types=1);

class SuperHero
{
    //Promoted properties (desde php 8)
    public function __construct(
        readonly private string $name,
        readonly private array $powers,
        readonly private string $planet
    ) {}

    public function show_all()
    {
        return get_object_vars($this);
    }

    public function attack()
    {
        return "$this->name ataca con sus poderes";
    }

    public function description()
    {
        $powers = implode(", ", $this->powers);
        return "$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes:
        $powers";
    }

    public static function random()
    {
        $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
        $powers = [
            ["Super fuerza", "Volar", "Rayos laser"],
            ["Super fuerza", "Super agilidad", "Telarañas"],
            ["Regeneracion", "Super fuerza", "Garras de adamantium"],
            ["Super agilidad", "Cambio de tamaño", "Super fuerza"]
        ];
        $planets = ["Asgard", "Hulky", "Krypton", "Tierra"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        //echo "Superheroe: $name. Planeta: $planet. Poderes: " . implode(", ", $power);
        return new self($name, $power, $planet);
    }
}

/* // instanciar
$hero = new SuperHero("Batman", ["Dinero", "intelignecia", "fuerza"], "Gotham");
echo $hero->description() . " "; // Metodo publico
var_dump($hero->show_all()); */

// estatico
$hero = SuperHero::random(); // Metodo estatico
echo $hero->description();
