<?php

abstract class Animal
{

    // Atributos/Propriedades (Caracteristicas do Objetos)
    protected $nome;
    public $raca;
    public $cor;

    // método construtor
    public function __construct($_nome)
    {
        $this->nome = $_nome;
    }

    // Métodos (ações do objetvo)
    public function dormir()
    {
        echo $this->nome . " está dormindo <br />";
    }

    //método com parâmetro
    public function comer($_comida)
    {
        echo $this->nome . " está comendo $_comida <br />";
    }


}