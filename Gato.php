<?php

include_once "Animal.php";

class Gato extends Animal
{
    public function miar()
    {
        echo $this->nome . " está miando <br />";
    }
}