<?php

class AA
{
    // protected string $name = 'Sakhawat';

    // public function getName(): string
    // {
    //     var_dump(get_class($this));
    //     return $this->name;
    // }

    protected static string $name = 'Sakhawat';

    public static function getName(): string
    {
        var_dump(get_called_class());
        return static::$name;
    }

    public static function make(): static
    {
        return new static();
    }
}

class BB extends AA
{
    protected static string $name = 'Sadi';
}

// $aa = new AA();
// $bb = new BB();

// echo $aa->getName() . "<br>";
// echo $bb->getName() . "<br>";

echo AA::getName() . "<br>";
echo BB::getName() . "<br>";
echo "<br>";
var_dump(AA::make());
var_dump(BB::make());
